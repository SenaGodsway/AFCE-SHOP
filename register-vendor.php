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

		<div class="vendor-account">
			<h2>Create a vendor account</h2>
			<form method="POST" action="">
				<div class="group">
					<span>
						<label>Firstname</label>
					<input type="text" name="firstname" required>
					</span>
					<span>
					<label>lastname</label>
					<input type="text" name="lastname" required>
					</span>
				</div>
				<label>Email</label>
				<input type="email" name="email" required>
				<label>Phone number</label>
				<input type="text" name="tel" required>
				<label>password</label>
				<input type="password" name="pass1" required>
				<label>confirm password</label>
				<input type="password" name="pass2" required>
				<label>store name</label>
				<input type="text" name="storeName" required>
				<label>Choose Store Region</label>
				<select name="region" required>
					<option value="Greater Accra">Greater accra</option>
					<option value="Eastern Region">Eastern Region</option>
					<option value="Central Region">central region</option>
					<option value="Western Region">western region</option>
					<option>volta region</option>
					<option>northern region</option>
					<option>Upper East</option>
					<option>Savanna region</option>
					<option>upper west</option>
					<option>oti region</option>
					<option>others</option>
				</select>
				<label>Area name</label>
				<input type="text" name="areaName" required>
				<label>Ghana Post Code</label>
				<input type="text" name="ghpost" required>
				<input type="submit" name="vendorRegister">
			</form>
			<a href="login-vendor.php">Create buyer account</i>
		</div>
	</section>
	<script type="text/javascript" src="script/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="script/app.js"></script>
</body>
</html>
