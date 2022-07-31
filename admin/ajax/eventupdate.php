<?php 
include '../config/conn.php';
 $id = $_POST['c_id'];
 $name = $_POST['c_name'];
 $description = $_POST['c_description'];
 $feature = $_POST['c_feature'];
 $create = $_POST['c_create'];
 $close = $_POST['c_close'];
 $open = $_POST['c_open'];
 $cat = $_POST['c_cat'];
 $seat = $_POST['c_seat'];
 $price = $_POST['c_price'];
 
 $simage = $_FILES['c_simage'];
 $simg = $_POST['c_simg'];
 
 $temp =$simage['tmp_name'];
 
 move_uploaded_file($temp ,'../img/frontimage/'.$simg);
 

 $limage = $_FILES['c_limage'];
 $limg = $_POST['c_limg'];
 
 $temp2 =$limage['tmp_name'];
 
 move_uploaded_file($temp2 ,'../img/detailimage/'.$limg);
 
 
  

 
 
 
 
 
$sql ="update event set eventname='".$name."',description='".$description."', feature='".$feature."', shortimage='".$simg."', largeimage='".$limg."', openingdate='".$open."',closingdate='".$close."',seat='".$seat."',price='".$price."', status='',createddate='".$create."', cat_id='',art_id='' where eventid='".$id."' ";

$query =mysqli_query($conn, $sql);

if($query){
		echo 1;
	} else {
		echo 0;
	}

?>