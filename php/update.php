<?php 

if (isset($_POST['name']) &&
	isset($_POST['gender'])&&
    isset($_POST['id'])) {

	include "../db_conn.php";

	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$id = $_POST['id'];

	if (empty($name)) {
		header("Location: ../update.php?ms=Name is required&id=$id");
	    exit;
	}else {
		if (isset($_POST['programmer'])) {
			$programmer = "YES";
		}else {
			$programmer = "NO";
		}

        $sql = "UPDATE users 
                SET name='$name', gender='$gender', programmer='$programmer'
                WHERE id=$id";
        $result = mysqli_query($conn, $sql);

        if ($result) {
        	$ms = "Successfully Updated";
        	header("Location: ../update.php?ms=$ms&id=$id");
	        exit;
        }else {
        	$ms = "Unknown error occurred";
        	header("Location: ../update.php?ms=$ms&id=$id");
	        exit;
        }

	}
}else {
	header("Location: ../read.php");
	exit;
}