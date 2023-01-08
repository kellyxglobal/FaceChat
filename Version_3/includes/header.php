<?php  
require 'config/config.php';

if(isset($_SESSION['username'])) {
    $userLogedIn = $_SESSION['username'];
    $user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username='$userLogedIn'");
    $user = mysqli_fetch_array($user_details_query);
}
else {
    header("Location: register.php");
}

?>

<html>
<head>
	<title>Welcome to FaceChat</title>
    
    <!-- Javascript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>

    <!-- CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
     
</head>
<body>

<div class="top_bar">
    <div class="logo">
        <a href="index.php">FaceChat</a>

    </div>

    <nav>
        <a href="#">
            <?php echo $user["first_name"]; ?>
        </a>
        <a href="index.php">
            <i class="fa fa-home fa-lg"></i>
        </a>
        <a href="#">
        <i class="fa fa-envelope fa-lg"></i>
        </a>
        <a href="#">
        <i class="fa fa-bell-o fa-lg"></i>
        </a>
        <a href="#">
        <i class="fa fa-users fa-lg"></i>
        </a>
        <a href="#">
        <i class="fa fa-cog fa-lg"></i>
        </a>
    </nav>
</div>



<!--
<div class="btn-group">
  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
    Action <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another Action</a></li>
    <li><a href="#">Something else here</a></li>
    <li><a href="divider"></a></li>
    <li><a href="#">Seperated Link</a></li>
</ul>
</div>
-->