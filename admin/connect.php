
<?php

session_start();

$connection = mysqli_connect('localhost', 'root', '', 'registration')or die(mysqli_error($connection));


$id = 0;
$questions ="";
$answers ="";

if(isset($_POST['save'])){
	$questions = $_POST['pass'];
	$answers = $_POST['ans'];

	$connection->query("INSERT INTO admin (username, email) VALUES ('$username', '$email')") or die($connection->error);

	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "success";
  	header("location: create.php");
}

if(isset($_GET['delete'])){
	$id = $_GET['delete'];
	$connection->query("DELETE FROM admin WHERE id=$id") or die ($connection->error());

	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";

	header("location: faculty.php");
}

if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$result = $connection->query("SELECT * FROM admin WHERE id=$id") or die ($connection->error());{
		$row = $result->fetch_array();
		$questions = $row['questions'];
		$answers = $row['answers'];
	}
}

if(isset($_POST['update'])){
	$id = $_POST['id'];
	$questions = $_POST['ins'];
	$answers = $_POST['sert'];
	
	$connection->query("UPDATE quest SET questions='$questions', answers='$answers' WHERE id=$id")or die ($connection->error());

	$_SESSION['message'] = "Data has been updated!";
	$_SESSION['msg_type'] = "warning";

	header("location: view.php");
}


?>