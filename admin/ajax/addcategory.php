<?php

include '../config/conn.php';


	//profile photo work
	$photo = $_FILES['T_photo']; //khali image k lie 
	$temp = $photo['tmp_name'];
	//khali image k lie 
	$date = date('y-m-d-H-i-s');
	//echo $date;
	$filename = $date."photo.jpg";
	//print_r($filename);
	move_uploaded_file($temp, '../img/userphoto/'.$filename);
	
	//profile photo end




$cat =$_POST['cate'];
$date =$_POST['date'];



$sql ="insert into category(id,name,image,createddate)values('','".$cat."','".$filename."','".$date."')";
$query= mysqli_query($conn,$sql);

print_r($query);

?>