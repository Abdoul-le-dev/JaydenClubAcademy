<?php

namespace App\Http\Controllers;

use App\Mail\ConfirmEmail;
use App\Mail\ConfirmMail;
use App\Models\Roles;
use App\Models\StatutCompte;
use App\Models\User;
use App\Notifications\ForgetPasswordNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    // login_view
    public function login_view()
    {
        return view("auth.pages.login_register",['isLogin'=>true]);
        
    }
    public function register_view()
    {
        return view("auth.pages.login_register",['isLogin'=>false]);
    }


    //   register function
    public function register(Request $requete)
    {
        $credentials = $requete->validate([
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required'],
            'password2' => ['required', 'same:password'],
            'nom' => ['required'],
            'prenom' => ['required'],
            'check_term' => ['required'],
        ], [
            'email.required' => 'Le champ email est requis.',
            'telephone.required' => 'Le champ telephone est requis.',
            'email.email' => 'Veuillez entrer une adresse email valide.',
            'email.unique' => 'Cette adresse email est déjà utilisée.',
            'password.required' => 'Le champ mot de passe est requis.',
            'password2.required' => 'Le champ de confirmation du mot de passe est requis.',
            'password2.same' => 'Les champs de mot de passe doivent être identiques.',
            'nom.required' => 'Le champ nom est requis.',
            'prenom.required' => 'Le champ prénom est requis.',
            'check_term.required' => 'Veuillez accepter les termes et conditions.',
        ]);

        $user = User::create([
            'nom' => $requete->nom,
            'prenom' => $requete->prenom,
            'email' => $requete->email,
            'role' => '1',
            'password' => Hash::make($requete->password),
            // 'confirmation_token' => Str::random(16)
        ]);
        // Mail::to($user->email)->send(new ConfirmMail($user));
        return redirect('/login');
        // return view('auth.pages.email_verified_message', ['email' => $user->email]);
    }

    //login function
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ], [
            'email.required' => 'Le champ email est requis.',
            'email.email' => 'Veuillez entrer une adresse email valide.',
            'password.required' => 'Le champ mot de passe est requis.',
        ]);
        if (Auth::attempt($request->only(['email', 'password']))) {
            $request->session()->regenerate();
            return redirect()->intended(view('admin.pages.dashboard.index'));

            // if (auth()->user()->email_verified_at) {
            // } else {
            //     $user = User::find(auth()->user()->id);
            //     auth()->logout();
            //     // Mail::to($user->email)->send(new ConfirmMail($user));
            //     return view('auth.pages.email_verified_message.index', ['email' => $user->email]);
            // }
        }
        return back()->withErrors([
            'incorrect_information' => 'Mot de passe ou email incorrect.',
        ]);
    }


    public function logout()
    {
        auth()->logout();
        return redirect('/login');
    }


    public function confirmEmail($token)
    {
        $user = User::where('confirmation_token', $token)->firstOrFail();
        $user->confirmation_token = null;
        $user->email_verified_at = now();
        $user->save();
        return redirect('/login')->with('success', 'Votre adresse e-mail a été confirmée avec succès.');
    }

    public function password_reset_view(){
        return view('auth.pages.forget_password_request');
    }




    public function password_reset(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email', 'exists:users,email'],
        ], [
            'email.required' => 'Le champ Adresse e-mail est obligatoire.',
            'email.email' => 'L\'adresse e-mail doit être une adresse e-mail valide.',
            'email.exists' => 'L\'adresse e-mail n\'existe pas dans notre système.',
        ]);


        // Vérifier si le jeton existe dans la table "password_resets"
        $token = Str::random(60);

        $tokenData = DB::table('password_reset_tokens')->where('email', $request->email)->first();
        if (!$tokenData) {
            DB::table('password_reset_tokens')->insert(
                ['email' => $request->email, 'token' => $token, 'created_at' => Carbon::now()]
            );

        } else {
            DB::table('password_reset_tokens')
                ->where('email', $request->email)
                ->update(['token' => $token, 'created_at' => now()]);

        }

        //envoie mail
        $user = User::where('email', $request->email)->first();
       // $user->notify(new ForgetPasswordNotification($token));
        return view('auth.pages.password_forget_message',['email'=>$request->email ]);
    }
    public function change_password_view($token)
    {
        // Vérifier si le jeton existe dans la table "password_resets"
        $tokenData = DB::table('password_reset_tokens')->where('token', $token)->first();
        if (!$tokenData) {
            // Le jeton n'existe pas dans la table
            return redirect()->back()->withErrors(['token' => 'Jeton de réinitialisation de mot de passe invalide']);
        }

        // Vérifier si le jeton a expiré
        if (Carbon::parse($tokenData->created_at)->addMinutes(60)->isPast()) {
            // Le jeton a expiré
            return redirect()->back()->withErrors(['token' => 'Jeton de réinitialisation de mot de passe expiré']);
        }
        return view('auth.pages.password_reset',['token' => $token]);
    }

    public function change_password(Request $request)
    {
        $credentials = $request->validate([
            'password' => ['required'],
            'password2' => ['required', 'same:password'],
            'token' => ['required', 'exists:password_reset_tokens,token'],
        ], [
            'password.required' => 'Le champ Mot de passe est obligatoire.',
            'password2.required' => 'Le champ Confirmation du mot de passe est obligatoire.',
            'password2.same' => 'Les mots de passe ne correspondent pas.',
            'token.required' => 'Le jeton de réinitialisation du mot de passe est obligatoire.',
            'token.exists' => 'Le jeton de réinitialisation du mot de passe n\'est pas valide.',
        ]);

        $tokenData = DB::table('password_reset_tokens')->where('token', $request->token)->first();


        $user = User::where('email', $tokenData->email)->firstOrFail();

        $user->password = Hash::make($request->input('password'));
        $user->save();
        DB::table('password_reset_tokens')->where('email', $user->email)->delete();
        return view('auth.pages.change_password_success');

    }

}
