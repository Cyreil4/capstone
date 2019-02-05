<?php

$errors = array(); 

if(isset($_POST['reg_user'])) {

	$pass = $_POST['password'];
	if($pass=="faculty"){
	header('location: ../faculty/login.php');	
	}
	array_push($errors, "Wrong Password");
  }
 	
?>


<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<title>Main</title>
	<link rel="stylesheet" href="au.css">

</head>
<body>
	 <form method="post">
	<div class="header">
  	<h1>Welcome Teacher</h1>
  </div>
 <?php include('errors.php'); ?>

<div class="bg-text">
  <label>Password:</label>
  <input type="password" class="btn" name="password" placeholder="Enter password">
</div>
<div class="bg-group">
  	  <button type="submit" class="btn1"  name="reg_user">Input</button>
  	</div>

</div> 
	</body>
</html>