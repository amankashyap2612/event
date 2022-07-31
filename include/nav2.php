<?php include 'admin/config/conn.php';



$sql="select * from category  WHERE id  BETWEEN 1 AND 7";
$query =mysqli_query($conn,$sql);
// print_r($query);


$sql2= "select * from category  WHERE id  BETWEEN 8 AND 11";
$query2 =mysqli_query($conn,$sql2);
?>
<section>
	<div class="nav2">
		<div class="hht text-white kul" id="mydiv">
			<div class="tty">
				<?php 
				while($result =mysqli_fetch_array($query)){
					?>
					<a class="jyis2" href="list_page.php?cid=<?php echo $result['id'];?>"><?php echo $result['name'];?></a>
					<?php
				}
				
				
				?>
			</div>
			<div class="kkk">
				<?php 
				while($result2=mysqli_fetch_array($query2)){
					?>
					<a class="jyis" href="list_page.php?list<?php echo $result2['id'];?>"><?php echo $result2['name'];?></a>
					<?php
				}
				
				?>
			</div>
		</div>
	</div>
</section>

