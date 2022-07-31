<?php 

include '../config/conn.php';

$image =$_FILES['t_image'];
$temp =$image['tmp_name'];
$date =date('y-m-d-h-i-s');
$filename =$date."photo.jpg";
move_uploaded_file($temp, '../img/artistphoto/'.$filename);







$name = $_POST['t_name'];
$profile = $_POST['t_profile'];
$born = $_POST['t_born'];
$address = $_POST['t_address'];
$about = $_POST['t_about'];
$carrear =$_POST['t_carrear'];
$create = $_POST['t_create'];

$sql ="insert into artist(artid,name,image,profile,born,address,about,carrear,status,createdate )values('','".$name."','".$filename."','".$profile."','".$born."','".$address."','".$about."','".$carrear."','1','".$create."')";

$query =mysqli_query($conn, $sql);
print($query);




?>