<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\ForgetPasswordNotification;
use App\Notifications\PasswordNotification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    //

    public function add_user(Request $request ){
        $credentials = $request->validate([
            'email' => ['required', 'email', 'unique:users'],
            'nom' => ['required'],
            'prenom' => ['required'],
            'role' => ['required'],
        ], [
            'email.required' => 'Le champ email est requis.',
            'email.email' => 'Veuillez entrer une adresse email valide.',
            'email.unique' => 'Cette adresse email est déjà utilisée.',
            'nom.required' => 'Le champ nom est requis.',
            'prenom.required' => 'Le champ prénom est requis.',
            'role.required' => 'Veuillez indiquer le role de user.',
        ]);
        $password=date('U');

        $user = User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'role' => '1',
            'password' => Hash::make( $password)
        ]);

        // notify user for her password
        $user->notify(new PasswordNotification($password));
        // notification

        return redirect()->back()->with(['success'=>'User ajouté avec succès']);
    }

    public function update_user(Request $request,$user_id ){

        $user=User::findOrFail($user_id);

        $credentials = $request->validate([
            'email' => ['required'],
            'nom' => ['required'],
            'prenom' => ['required'],
            'role' => ['required'],
        ], [
            'email.required' => 'Le champ email est requis.',
            'email.email' => 'Veuillez entrer une adresse email valide.',
            'nom.required' => 'Le champ nom est requis.',
            'prenom.required' => 'Le champ prénom est requis.',
            'role.required' => 'Veuillez indiquer le role de user.',
        ]);



        $user = $user->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'role' => $request->role,
        ]);

        // notify user for her password
        // notification

        return redirect()->back()->with(['success'=>'User modifié avec succès']);
    }

    public function update_profil(Request $request ){

        $user=User::findOrFail(auth()->user()->id);

        $credentials = $request->validate([
            'email' => ['required'],
            'nom' => ['required'],
            'prenom' => ['required'],
        ], [
            'email.required' => 'Le champ email est requis.',
            'email.email' => 'Veuillez entrer une adresse email valide.',
            'nom.required' => 'Le champ nom est requis.',
            'prenom.required' => 'Le champ prénom est requis.',
        ]);



        $user = $user->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
        ]);

        return redirect()->back()->with(['success'=>'User modifié avec succès']);
    }

    public function delete_user(Request $request,$id ){
        $user_actuel=auth()->user();
        if($user_actuel->id==$id){
            return redirect()->back()->withErrors(['VOus ne pouvez pas vous supprimer']);
        }
        $user=User::findOrFail($id);
        $user->forceDelete();
        return redirect()->back()->with('success', 'Utilisateur supprimé avec succès');
    }

    public function update_password(Request $request){

        $email=auth()->user()->email;
        $token = Str::random(60);
        $tokenData = DB::table('password_reset_tokens')->where('email', $email)->first();
        if (!$tokenData) {
            DB::table('password_reset_tokens')->insert(
                ['email' => $email, 'token' => $token, 'created_at' => Carbon::now()]
            );
        } else {
            DB::table('password_reset_tokens')
                ->where('email', $email)
                ->update(['token' => $token, 'created_at' => now()]);

        }

        //envoie mail
        $user = User::where('email', $email)->first();
        $user->notify(new ForgetPasswordNotification($token));
        return view('auth.pages.password_forget_message',['email'=>$email ]);
    }

}
