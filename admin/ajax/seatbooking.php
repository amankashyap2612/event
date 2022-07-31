<?php


include '../config/conn.php';

$sbook = $_POST['T_book'];
$eventid = $_POST['T_id'];

//echo $sbook;
//echo $eventid;

$sql ="select * from seats where eventid = '".$eventid."' ";
$query = mysqli_query($conn,$sql);
//Print_r($query);

if($query-> 	num_rows == 0){

	$addseat ="insert into seats (id, eventid,seatbook,status,createddate)values('','".$eventid."', '".				$sbook."',1,'' ) ";
	
	$seatquery =mysqli_query($conn,$addseat);
	
	
	}else{
		$data = mysqli_fetch_assoc($query);
		$getArr = $data['seatbook'];
		$maval = $getArr.$sbook;
		echo $maval;
		$upSql = "update seats set seatbook ='".$maval."' Where eventid= '".$eventid."' ";
		$updQuery = mysqli_query($conn, $upSql);
		print_r($updQuery);
	}


?>