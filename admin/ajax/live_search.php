<?php
include '../config/conn.php';

$search_value =$_POST["search"];



$sql ="select * from user where name LIKE  '%{$search_value}%' OR   email LIKE  '%{$search_value}%'  ";
$result =mysqli_query($conn,$sql);
$output = "";
if(mysqli_num_rows($result)>0){

$output = '<table class="table align-items-center mb-0">
			<tr>
				<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
				<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
				<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mobile&pass</th>
				<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
				<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Address</th>
			</tr>';
			
			while($row =mysqli_fetch_assoc($result)){
				$output .="<tr><td align='center'>{$row["id"]}</td><td>{$row["name"]
				}"
				$output.="</table>";
				
				echo $output;
				
			}else{
				echo"No record found";
			}

}

?>