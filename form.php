<?php require_once './view/header.php'; 
	if (isset($_POST['buyerSubmit'])) {
		$firstname= htmlspecialchars($_POST['firstname']);
		$lastname= htmlspecialchars($_POST['lastname']);
		$email= htmlspecialchars($_POST['email']);
		$telephone= htmlspecialchars($_POST['tel']);
		$pass= htmlspecialchars($_POST['pass']);
		$confirmPassword= htmlspecialchars($_POST['confirmPassword']);
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
			$password= htmlspecialchars($_POST['pass']);
			// echo $password;
		}
		$sql="INSERT INTO user(firstname,lastname,email,telephone,pass) VALUES('$firstname','$lastname','$email','$telephone','$pass')";
	$result=mysqli_query($conn,$sql);
	// header('Location:index.php');
	}
	
	

	if (isset($_POST['buyerSubmit'])){
		echo"<alert>Account created</alert>";
	}
?>
		<div class="buyer-account">
			<h2>Create a buyer account</h2>
			<form method="POST">
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
				<input type="text" name="tel">
				<label>password</label>
				<input type="password" name="pass" required>
				<label>confirm password</label>
				<input type="password" name="confirmPass" required>
				<input type="submit" name="buyerSubmit">
			</form>
		</div>
	</section>

	
	<script type="text/javascript" src="script/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="script/app.js"></script>
</body>
</html>
