<?php  
require 'config/config.php';
include 'includes/form_handler/register_handler.php';
include 'includes/form_handler/login_handler.php';


?>


<html>
<head>
	<title>Welcome to Swirlfeed!</title>
	<link rel="stylesheet" href="assets/css/register_style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script src="assets/js/register.js"></script>
</head>
<body>
<?php
if(isset($_POST['register_button'])){
	echo '
	<script>
	$(document).ready(function() {
		$("#first").hide();
		$("#second").show();
	});
	</script>
	';
}
?>

<div class="wrapper"><!-- Form wraper starts -->
<div class="login_header"><!-- Login_header starts -->
	<h1>FaceChat</h1>
	Login or Sign Up Below.
</div><!-- Login_header ends -->
<div class="login_box"><!-- Form wraper starts -->

<div id="first"><!--first form ends -->
	<form action="register.php" method="POST">
		<input type="email" name="log_email" placeholder="Email Address">
		<br>
		<input type="password" name="log_password" placeholder="Password">
		<br>
		<input type="submit" name="login_button" value="Login">
		<br>
		<a href="#" id="signup" class="signup">Need An Account? Register Here</a>

	</form>
</div><!--first form ends -->

<div id="second"><!--second form starts -->
	<form action="register.php" method="POST">
		<input type="text" name="reg_fname" placeholder="First Name" value="<?php 
		if(isset($_SESSION['reg_fname'])) {
			echo $_SESSION['reg_fname'];
		} 
		?>" required>
		<br>
		<?php if(in_array("Your first name must be between 2 and 25 characters<br>", $error_array)) echo "Your first name must be between 2 and 25 characters<br>"; ?>
		
		


		<input type="text" name="reg_lname" placeholder="Last Name" value="<?php 
		if(isset($_SESSION['reg_lname'])) {
			echo $_SESSION['reg_lname'];
		} 
		?>" required>
		<br>
		<?php if(in_array("Your last name must be between 2 and 25 characters<br>", $error_array)) echo "Your last name must be between 2 and 25 characters<br>"; ?>

		<input type="email" name="reg_email" placeholder="Email" value="<?php 
		if(isset($_SESSION['reg_email'])) {
			echo $_SESSION['reg_email'];
		} 
		?>" required>
		<br>

		<input type="email" name="reg_email2" placeholder="Confirm Email" value="<?php 
		if(isset($_SESSION['reg_email2'])) {
			echo $_SESSION['reg_email2'];
		} 
		?>" required>
		<br>
		<?php if(in_array("Email already in use<br>", $error_array)) echo "Email already in use<br>"; 
		else if(in_array("Invalid email format<br>", $error_array)) echo "Invalid email format<br>";
		else if(in_array("Emails don't match<br>", $error_array)) echo "Emails don't match<br>"; ?>


		<input type="password" name="reg_password" placeholder="Password" required>
		<br>
		<input type="password" name="reg_password2" placeholder="Confirm Password" required>
		<br>
		<?php if(in_array("Your passwords do not match<br>", $error_array)) echo "Your passwords do not match<br>"; 
		else if(in_array("Your password can only contain english characters or numbers<br>", $error_array)) echo "Your password can only contain english characters or numbers<br>";
		else if(in_array("Your password must be betwen 5 and 30 characters<br>", $error_array)) echo "Your password must be betwen 5 and 30 characters<br>"; ?>


		<input type="submit" name="register_button" value="Register">
		<br>

		<?php if(in_array("<span style='color: #14C800;'>You're all set! Goahead and login!</span><br>", $error_array)) echo "<span style='color: #14C800;'>You're all set! Go ahead and login!</span><br>"; ?>
		
		<a href="#" id="signin" class="signin">Already Have An Account? Sign In Here</a>
	</form>
	</div><!--second form ends -->
	<div class="wrapper"><!-- Form wraper starts -->
	<div><!-- Form login_box ends -->

</body>
</html>
