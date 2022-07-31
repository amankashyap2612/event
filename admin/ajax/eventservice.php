<?php
include '../config/conn.php';



//profile photo work
	$fimage = $_FILES['t_fimage']; //khali image k lie 
	$temp = $fimage['tmp_name'];
	//khali image k lie 
	$date = date('y-m-d-H-i-s');
	//echo $date;
	$filename = $date."photo.jpg";
	//print_r($filename);
	move_uploaded_file($temp, '../img/frontimage/'.$filename);
	
	//profile photo end
	
	//detail photo work
	$dimage = $_FILES['t_dimage'];//detail photo k lie
		$temp1 = $dimage['tmp_name'];
	$date1 =rand(1,100000);
	//echo $date;
	$filename1 = $date1."dphoto.jpg";
	
	move_uploaded_file($temp1, '../img/detailimage/'.$filename1);
	//print_r($filename1);
	
	//detail photo end
	


$name = $_POST['t_name'];
$description = $_POST['t_description'];
$feature = $_POST['t_feature'];
$close = $_POST['t_close'];
$open = $_POST['t_open'];
$create = $_POST['t_create'];
$price = $_POST['t_price'];
$seat = $_POST['t_seat'];
$cat_id =$_POST['t_cat'];
$art_id =$_POST['t_artArr'];
print_r($cat_id);
print_r($name);


$sql ="insert into event(eventid ,	eventname,description,feature,shortimage,largeimage,openingdate,closingdate,seat,price,status,createddate,cat_id,art_id)value('','".$name."','".$description."','".$feature."','".$filename."','".$filename1."','".$open."','".$close."','".$seat."','".$price."','1','".$create."','".$cat_id."','".$art_id."')";



 $query =mysqli_query($conn,$sql);
print_r($query);

?>