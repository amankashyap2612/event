<?php 
include '../config/conn.php';

$del =$_GET['del'];




$sql="delete from user where id='".$del."'";

$query =mysqli_query($conn, $sql);

if($query){
		header("Location: ../table.php");
	}else{
		echo "something worng";
	}
?>