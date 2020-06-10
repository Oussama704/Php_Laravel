<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Oussama Register</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/register.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>
<body>
<div class="signup-form">
    <form action="{{url('register')}}" method="post">
        {{csrf_field() }}
		<h2>Register</h2>
		<p class="hint-text">Oussama Wiki</p>
        <div class="form-group">
			<div class="row">
				<div class="col-xs-6"><input type="text" class="form-control" name="nom" placeholder="First Name" required="required"></div>
				<div class="col-xs-6"><input type="text" class="form-control" name="prenom" placeholder="Last Name" required="required"></div>
			</div>        	
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="mot_de_passe" placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
        </div>        
        <div class="form-group">
			<label class="checkbox-inline"><input type="checkbox" required="required"> I'accepte <a href="#">terms of use</a></label>
		</div>
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Register !</button>
        </div>
        <div class="form-group" >
            <button type="submit" class="btn btn-success btn-lg btn-block">Register with facebook</button>
        </div>
    </form>
	<div class="text-center">Do you have an account ?<a href="login">Login</a></div>
</div>
</body>
</html>