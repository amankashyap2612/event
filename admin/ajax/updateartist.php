<?php
 include '../config/conn.php';
 
 $id = $_POST['c_id'];
 $name = $_POST['c_name'];
 $profile = $_POST['c_profile'];
 $born = $_POST['c_born'];
 $address = $_POST['c_address'];
 $create = $_POST['c_create'];
 $about = $_POST['c_about'];
 $carrear =$_POST['c_carrear'];
 
 $image = $_FILES['c_image'];
 $img = $_POST['c_img'];
 
 
 $temp =$image['tmp_name'];
 
 move_uploaded_file($temp ,'../img/artistphoto/'.$img);
 
 
 
 
$sql ="update artist set name ='".$name."',image ='".$img."', profile ='".$profile."', born='".$born."', address ='".$address."', about='".$about."', carrear='".$carrear."'  where artid ='".$id."' ";

$query =mysqli_query($conn, $sql);

if($query){
		echo 1;
	} else {
		echo 0;
	}
?>