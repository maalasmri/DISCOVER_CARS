<?php
	$Comp_id=$_GET['Comp_id'];
	include('conn.php');
	mysqli_query($conn,"delete from `company` where Comp_id='$Comp_id'");
	header('location:Companys.php');
?>