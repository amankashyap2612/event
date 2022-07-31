<?php 

include '../config/conn.php';

$delete =$_GET['del'];

	$sql="delete from user Where id='".$delete."'";
	
	$result=mysqli_query($conn,$sql);

		if($result){
		
		// echo "successfully delete";
		
		header("Location: ../table.php");
	}else{
		echo "something worng";
	}






?>