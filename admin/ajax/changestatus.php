<?php
 include '../config/conn.php';
 
 
$status =$_GET['status'];

$sql ="update artist set status ='0' where artid ='".$status."' ";

$query =mysqli_query($conn, $sql);
?>