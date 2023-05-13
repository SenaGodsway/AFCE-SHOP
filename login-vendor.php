<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AFCE - Africa's shopping center</title>
	<link rel="stylesheet" type="text/css" href="css/global.css">
	<link rel="stylesheet" type="text/css" href="css/form.css">
	<link rel="stylesheet" type="text/css" href="lib/font-awesome/css/font-awesome.min.css">
</head>
<body>
		<div class="buyer-account">
			<h2>Login as a vendor</h2>
			<form method="POST" action="vendor/dashboard.php">
				<label>Email</label>
				<input type="email" name="email" required>
				<label>password</label>
				<input type="password" name="pass" required>
				<input type="submit" name="buyerSubmit">
			</form>
			<a href="register-vendor.php"> Create an account</a>
		</div>
	</section>
	<script type="text/javascript" src="script/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="script/app.js"></script>
</body>
</html>
