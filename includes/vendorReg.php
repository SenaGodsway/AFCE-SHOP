<?php 
include('connection.php');
if (isset($_POST['vendorRegister'])) {
	$firstname= htmlspecialchars($_POST['firstname']);
	$lastname= htmlspecialchars($_POST['lastname']);
	$email= htmlspecialchars($_POST['email']);
	$telephone= htmlspecialchars($_POST['tel']);
	$pass= htmlspecialchars($_POST['pass']);
	// $confirmPassword= htmlspecialchars($_POST['confirmPassword']);
	$date= time();


	$errors = array('firstname'=>'', 'lastname'=>'','email'=>'','telephone'=>'', 'pass'=>'');
	if (empty($_POST['firstname'])) {
		$errors['firstname']='firstname is required';
	}
	else{
		$firstname= htmlspecialchars($_POST['firstname']);
		// echo $firstname;
	}
	if (empty($_POST['lastname'])) {
		$errors['lastname']='lastname is required';
	}
	else{
		$lastname= htmlspecialchars($_POST['lastname']);
		// echo $lastname;
	}
	if (empty($_POST['email'])) {
		echo 'email is required';
	}
	else{
		$email= htmlspecialchars($_POST['email']);
		// echo $email;
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$errors['email']='invalid email';
		}
	}
	if (empty($_POST['tel'])) {
		echo 'Phone number is required';
	}
	else{
		$telephone= htmlspecialchars($_POST['tel']);
		// echo $telephone;
	}
	if (empty($_POST['pass'])) {
		echo 'Password is required';
	}
	else{
		$pass= htmlspecialchars($_POST['pass']);
		// echo $password;
	}
	$sql="INSERT INTO vendor(firstname,lastname,email,tel,pass) VALUES('$firstname','$lastname','$email','$telephone','$pass')";
$result=mysqli_query($conn,$sql);
header('Location:./Vendor/dashboard.php');
}

?>