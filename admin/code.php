<?php
	
include 'config/conn.php';

if(isset($_POST['del_multiple_data']))
{
	$all_id=$_POST['del_chk'];
	echo $seperate_all_id = implode(",",$all_id);
	
	$query ="delete from user where id IN($seperate_all_id)";
	$query_run=mysqli_query($conn,$query);
	
	if($query_run){
		header("Location: table.php");
	}else{
		echo"something wrong";
	}
	
}


?>