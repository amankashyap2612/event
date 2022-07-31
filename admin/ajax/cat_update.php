<?php
include '../config/conn.php';

$id =$_POST['t_id'];
$name =$_POST['t_name'];
$date =$_POST['t_date'];
$image =$_FILES['t_image'];
$img =$_POST['t_img'];


 $temp =$image['tmp_name'];
 
 move_uploaded_file($temp ,'../img/userphoto/'.$img);
 
 
  
$sql ="update category set name ='".$name."',image ='".$img."', createddate ='".$date."' where id ='".$id."' ";

$query =mysqli_query($conn, $sql);

if($query){
		echo 1;
	} else {
		echo 0;
	}
 
 
 

?>