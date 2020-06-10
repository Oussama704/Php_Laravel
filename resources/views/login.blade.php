<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title> Login </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/register.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>
<body>
<div class="signup-form">
    <form action="/examples/actions/confirmation.php" method="post">
		<h2>Login</h2>
		<p class="hint-text">O_M Wiki</p>
        
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Mot de passe" required="required">
        </div>
		     
       
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Submit</button>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Login with facebook</button>
        </div>
    </form>
	<div class="text-center">You don't have an account <a href="register">Sign in</a></div>
</div>
</body>
</html>