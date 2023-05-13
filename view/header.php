<?php 
	session_start();
	if(count($_POST)>0){
		include_once('./includes/connection.php');
		$result = mysqli_query($conn, "SELECT * FROM user WHERE email ='". $_POST["email"] ."' and pass = '". $_POST["pass"] ."'");
		$row = mysqli_fetch_array($result);
		if(is_array($row)){
			$_SESSION['id']=$row['userId'];
			$_SESSION['firstname']=$row['firstname'];
			$_SESSION['email']=$row['email'];
		}
	
		if(isset($_SESSION["id"])){
			header("Location:index.php");
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AFCE - Africa's shopping center</title>
	<link rel="stylesheet" type="text/css" href="css/global.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/form.css">
	<link rel="stylesheet" type="text/css" href="lib/font-awesome/css/font-awesome.min.css">
</head>
<body>
<nav id="navigation">
		<a href="index.php" class="brand-logo">AFCE</a>
		<div class="menu">
			<?php if(isset($_SESSION["id"])){
				echo 'Hi, '. $_SESSION['firstname'];
			}else{
				echo '<button class="loginBtn">My Account</button>';
			}
			
			?>
			
			<i class="fa fa-user-circle"></i>
			<a href="cart.php"> <i class="fa fa-shopping-bag"></i></a>
			<a href="wishlist.php"> <i class="fa fa-heart-o"></i></a>
		<i id="dropBtn" class="fa fa-caret-down"></i>

		</div>
		<div class="loginModal">
			<h3> Login</h3>
			<form method="POST">
				<label for="Email">Email</label>
				<input type="text" name="email" value="">
				<label for="Password">Password</label>
				<input type="password" name="pass" value="">
				<input type="submit" name="login" value="login">
					<a href="form.php">Create new account</a>
				</form>
		</div>
		<div class="show-more">
			<a href="#">My account</a>
			<a href="#">Settings</a>
			<?php if(isset($_SESSION["id"])){
				echo'<a href="./includes/logout.php">Logout</a>';
			}else{
				echo '';
			}
			?>
		</div>

	</nav>
