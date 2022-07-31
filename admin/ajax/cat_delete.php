<?php
include '../config/conn.php';

$delete =$_GET['del'];

$sql ="delete from category where id ='".$delete."' ";

$query=mysqli_query($conn,$sql);

if($query){
	header("Location:../cat_table.php");
}else{
	echo 'failed';
}


?>