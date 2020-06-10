<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Reset Password</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/register.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>
<body>
<div class="signup-form">
    <form action="{{ route('password.update') }}" method="post">
        {{csrf_field() }}
         <input type="hidden" name="token" value="{{ $token }}">
        <h2>Reset password</h2>
        <p class="hint-text">Oussama Wiki</p>
        
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" required="required">
            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="New Password" required="required">
            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required="required">
        </div>        
        
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Confirm</button>
        </div>
        
    </form>
    
</div>
</body>
</html>