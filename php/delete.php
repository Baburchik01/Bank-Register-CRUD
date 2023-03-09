<?php 

if (isset($_GET['id'])) {
	include "../db_conn.php";
	$id = $_GET['id'];

	$sql = "DELETE FROM users 
	        WHERE id=$id";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		$ms = "successfully deleted";
		header("Location: ../read.php?ms=$ms");
	    exit;
	}else {
		$ms = "Unknown error occurred";
		header("Location: ../read.php?ms=$ms");
	    exit;
	}
}else {
	header("Location: ../read.php");
	exit;
}