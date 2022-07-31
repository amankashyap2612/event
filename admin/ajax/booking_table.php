<?php

include '../config/conn.php';

$seatbook = $_POST['T_book'];
$eventid = $_POST['T_id'];
$username = $_POST['T_user'];
$eventname = $_POST['T_ename'];
$price =$_POST['T_price'];


$sql = "insert into booking_table (book_id, user_name, eventid,eventname, seat_id, seat_name, total_price,status,createdate) values('','".$username."','".$eventid."','".$eventname."','','".$seatbook."','".$price."',1,'')";

$query=mysqli_query($conn,$sql);
print_r($query);

















?>