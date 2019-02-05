<?php

session_start();

$connection = mysqli_connect('localhost', 'root', '', 'registration')or die(mysqli_error($connection));


$id = 0;
$questions ="";
$answers ="";

if(isset($_GET['delete'])){
	$id = $_GET['delete'];
	$connection->query("DELETE FROM category WHERE id=$id") or die ($connection->error());

	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";

	header("location: rexam.php");
}

?>