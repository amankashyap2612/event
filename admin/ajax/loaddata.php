<?php 
include '../config/conn.php';


	$paged = $_POST['paged'];
	$limit = $_POST['limit'];
	
	$step = ($paged - 1) * $limit;
	 
	 // echo $paged;
	 // echo $limit;
	 // echo $step;
	
	
	$sql2 = "SELECT * FROM event ORDER BY eventid ASC LIMIT ".$step.", ".$limit."";
	$query2 = mysqli_query($conn, $sql2);
	//print_r($query2);
	
	$arr = array();
	while($row2 = mysqli_fetch_assoc($query2)){
		array_push($arr, $row2);
	}
	
	//print_r($arr);
	
	
	//echo "<pre>";
	echo json_encode($arr);
	//print_r($arr);
	
	$paged . " ---- ". $limit; 


?>