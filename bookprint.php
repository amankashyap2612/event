<?php

include 'admin/config/conn.php';

$print =$_GET['print'];
print_r($print);
		
$join ="select * from booking_table B join event AE on B.book_id = AE.eventid where book_id ='".$print."' ";
$query =mysqli_query($conn,$join);
$array =mysqli_fetch_array($query);
//print_r($query); 
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'include/head.php';?>

<body>


<section class="container" style="border:2px solid;">
	<div class="row">
		<div class="col-6">
			<div>
				<img src="admin/img/frontimage/<?php echo $array['shortimage'];?>" style="width:100%; object-fit: contain; height: 500px;"/>
			</div>
		</div>
		<div class="col-6 " style="text-align: inherit; padding: 30px;">
			<div class="row">
				<div class="col-12">
					<h3><?php echo $array['eventname'];?></h3>
				</div>
				<div class="col-12 d-flex bk">
					<p>Booking By:-</p>
					<p><?php  ?></p>
				</div>
				<div class="col-12 d-flex bk">
					<p>Price:-</p>
					<p><?php echo $array['price'];?></p>
				</div>
				<div class="col-12 d-flex bk">
					<p>Total Price :-</p>
					<p><?php echo $array['price'];?></p>
				</div>
				<div class="col-12 bk">
					<p>Booking Date :-</p>
				</div>
				<div class="col-12 d-flex bk">
					<p>Event Date :-</p>
					<p><?php echo $array ['openingdate'];?></p>
				</div>
				<div class="col-12 d-flex bk">
					<p>Seat Name :-</p>
					<p><?php echo $array['seat_name'];?></p>
				</div>
				<div class="col-12 d-flex bk">
					<p>Total Tickets :-</p>
					<p><?php echo $array['price'];?></p>
				</div>
			</div>
			<button onClick="window.print()" class="print">Print</button>
		</div>
	</div>
</section>


<?php include 'include/foot.php';?>
</body>
</html>
