<?php 
 session_start();
 include '../config/conn.php';
 
 
 $email =$_POST['T_email'];
 $pass =$_POST['T_pass'];

// print_r($email);
// print_r($pass);

$sql ="select * from user where email ='".$email."' &&  password = '".$pass."'";
$query =mysqli_query($conn,$sql);
	if($query->num_rows > 0){
		$row = mysqli_fetch_array($query);
		$_SESSION['book2'] = $row['id']; 
		echo 1;
	} else {
		echo 0;
	} 




?>