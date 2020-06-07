<?php include('functions.php') ?>

<!DOCTYPE html>
<html>
<head>
<style>
h1 {
    width: 80%;
    margin: 10px auto 0px;
    color: white;
    background: #5F9EA0;
    text-align: center;
    border: 1px solid #B0C4DE;
    border-bottom: none;
    border-radius: 10px 10px 0px 0px;
    padding: 20px;
}

h3 {
    width: 40%;
    margin: 10px auto 0px;
    color: white;
    background: #5F9EA0;
    text-align: center;
    border: 1px solid #B0C4DE;
    border-bottom: none;
    border-radius: 10px 10px 0px 0px;
    padding: 20px;
}
</style>
<link rel="stylesheet" type="text/css" href="style.css">
	<h1>COVID-19 NOVEL CORONA VIRUS SELF REPORTING PORTAL</h1>
	<h3>GANGAPUR CITY, RAJASTHAN</h3>
	<title>NOVEL CORONA VIRUS</title>
</head>
<body>
<div class="header">
	<h2>Register</h2>
</div>
<form method="post" action="register.php">
	<?php echo display_error(); ?>
	<div class="input-group">
		<label>Username</label>
	<input type="text" name="username" value="<?php echo $username; ?>">

	</div>
	<div class="input-group">
		<label>Email</label>
	<input type="email" name="email" value="<?php echo $email; ?>">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="password_2">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
	<p>
		Already a member? <a href="login.php">Sign in</a>
	</p>
</form>
</body>
</html>