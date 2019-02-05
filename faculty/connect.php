
<?php

session_start();

$connection = mysqli_connect('localhost', 'root', '', 'registration')or die(mysqli_error($connection));


$id = 0;
$title ="";
$cat_name ="";
$instructions ="";

if(isset($_POST['save'])){
	$title = $_POST['tit'];
	$instructions = $_POST['ins'];
	$cat_name = $_POST['cat'];
	

	$connection->query("INSERT INTO category (title, instructions, cat_name) VALUES ('$title', '$instructions', '$cat_name')") or die($connection->error);

	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "success";
	header("location: ../facultyadd/index.php");
}

if(isset($_GET['delete'])){
	$id = $_GET['delete'];
	$connection->query("DELETE FROM users WHERE id=$id") or die ($connection->error());

	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";

	header("location: student.php");
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