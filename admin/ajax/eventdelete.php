<?php

include '../config/conn.php';

$delete =$_GET['del'];
$sql ="delete from event where eventid ='".$delete."' ";
$query =mysqli_query($conn,$sql);

	if($query){
		
		
		header("Location: ../event_table.php");
	}else{
		echo "something worng";
	}


?>