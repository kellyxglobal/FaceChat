<?php  
require 'config/config.php';

if(isset($_SESSION['username'])) {
    $userLogedIn = $_SESSION['username'];
}
else {
    header("Locaion: register.php");
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
     
</head>
<body>


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