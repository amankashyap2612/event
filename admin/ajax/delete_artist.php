<?php

include '../config/conn.php';

$delete =$_GET['del'];
 
$sql ="delete from artist where artid ='".$delete."' ";
$query =mysqli_query($conn,$sql);

if($query){
	header("Location:../artist_table.php");
	
}else{
	echo failed ;
}


?>