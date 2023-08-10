<?php
	$Car_id=$_GET['Car_id'];
	include('conn.php');
	mysqli_query($conn,"delete from `cars` where Car_id='$Car_id'");
	header('location:Cars.php');
?>