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






$name =$_POST['T_name'];
$email =$_POST['T_email'];
$mobile =$_POST['T_mobile'];
$pass =$_POST['T_pass'];
$address =$_POST['T_address'];



 $xsql="select * from  user  where email='".$email."'"; //email same na hone se rokne k work
	$result=mysqli_query($conn,$xsql);
	$row=mysqli_fetch_array($result);
	
	
	if($row>0){	
		echo 3;
	}else{
		//echo "sdgdf";
		$sql ="insert into user(id,name,mobile,email,password,photo,address)values('','".$name."','".$mobile."','".$email."','".$pass."','".$filename."','".$address."')";
		

	$query = mysqli_query($conn, $sql);
	 print_r($query);
	 
if($query){
		echo 1;
	}else{
		echo 0;
	}
	}
?>