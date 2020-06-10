<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Oussama Login </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/register.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>
<body>
<div class="signup-form">
    <form action="{{ route('login') }}" method="post">
        {{csrf_field() }}
        <h2>Login</h2>
        <p class="hint-text">Oussama Wiki</p>
        
        <div class="form-group">
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" required="required">
             @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
        <div class="form-group">
            <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" placeholder="Mot de passe" required="required">
             @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
             
       
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Submit</button>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Login with facebook</button>
        </div>
        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
    </form>
    <div class="text-center">You don't have an account <a href="register">Sign in</a></div>
</div>
</body>
</html>