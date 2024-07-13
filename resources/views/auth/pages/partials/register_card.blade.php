<div class="card-form card-form-register">
    <form class="rd-form"  method="post" action="{{route('register')}}">
        @csrf
        @if ($errors->any())
        <div class="alert alert-danger bg-danger" style="background: red;color:white">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
      @verbatim

      <div class="form-wrap">
        <label class="form-label" for="form-login-name">Nom</label>
        <input class="form-input" id="form-login-name" name="nom" type="text"  data-constraints="@Required">
      </div>
      <div class="form-wrap">
        <label class="form-label" for="form-login-last_name">Prenom</label>
        <input class="form-input" id="form-login-last_name" name="prenom" type="text"  data-constraints="@Required">
      </div>
      <div class="form-wrap">
        <label class="form-label" for="form-register-email">E-mail</label>
        <input class="form-input" id="form-register-email" type="email" name="email" data-constraints="@Email @Required">
      </div>
      <div class="form-wrap">
        <label class="form-label" for="form-login-password-2">Password</label>
        <input class="form-input" id="form-login-password-2" type="password" name="password" data-constraints="@Required">
      </div>
      <div class="form-wrap">
        <label class="form-label" for="form-login-password-3">Repeat Password</label>
        <input class="form-input" id="form-login-password-3" type="password" name="password2" data-constraints="@Required">
      </div>
      <label class="checkbox-inline checkbox-inline-lg checkbox-light">
        <input name="check_term"  type="checkbox"  required  >J'accepte les termes et conditions
      </label>
      @endverbatim
      <button class="button button-lg button-primary button-block" type="submit">Create new account</button>
    </form>
    <div class="group-sm group-sm-justify group-middle"><a class="button button-google button-icon button-icon-left button-round" href="#"><span class="icon fa fa-google-plus"></span><span>Google+</span></a><a class="button button-twitter button-icon button-icon-left button-round" href="#"><span class="icon fa fa-twitter"></span><span>Twitter</span></a><a class="button button-facebook button-icon button-icon-left button-round" href="#"><span class="icon fa fa-facebook"></span><span>Facebook</span></a></div>
  </div>
