<div class="card-form card-form-login">
    <form class="rd-form" method="POST" action="{{route('login')}}">
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
            <label class="form-label" for="form-login-name-1">Login</label>
            <input class="form-input" id="form-login-name-1" type="email" name="email" data-constraints="@Email @Required">
          </div>
          <div class="form-wrap">
            <label class="form-label" for="form-login-password-1">Password</label>
            <input class="form-input" id="form-login-password-1" type="password" name="password" data-constraints="@Required">
          </div>
        @endverbatim

      <label class="checkbox-inline checkbox-inline-lg checkbox-light">
        <input name="input-checkbox-1" value="checkbox-1" type="checkbox">Remember Me
      </label>
      <button class="button button-lg button-primary button-block" type="submit">Sign in</button>
    </form>
    <div class="group-sm group-sm-justify group-middle"><a class="button button-google button-icon button-icon-left button-round" href="#"><span class="icon fa fa-google-plus"></span><span>Google+</span></a><a class="button button-twitter button-icon button-icon-left button-round" href="#"><span class="icon fa fa-twitter"></span><span>Twitter</span></a><a class="button button-facebook button-icon button-icon-left button-round" href="#"><span class="icon fa fa-facebook"></span><span>Facebook</span></a></div>
  </div>
