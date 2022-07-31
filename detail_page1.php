<?php 

include 'admin/config/conn.php';

	$catid = $_GET['cid'];
	
	//echo $catid;
	
	$getpsql2 = "select * from event where eventid = '".$catid."'";
	
	$query = mysqli_query($conn, $getpsql2);
	$array=mysqli_fetch_array($query);

	


	$artadd = $array['art_id']; //agar artist nhi h to =null nhi hui to iske ander jayegi nhi to query aise hi run karegi
	if($artadd != ""){
		$artist = "select * from artist where artid in (".$artadd.")";
		$artquery = mysqli_query($conn, $artist);
	}
	
	
	
?>



<!doctype html>
<html lang="en">
<?php include 'include/head.php';?>
 <link rel="stylesheet" href="css/anicollection.css">
<style>
.ml2 {
  font-weight: 900;
  font-size: 3.5em;
}

.ml2 .letter {
  display: inline-block;
  line-height: 1em;
}

</style>
  <body style="background:white;">
  <?php include 'include/nav.php';?>
  <?php include 'include/nav2.php';?>
  

<section class="continer-fluid " style="position:relative; background:black;" >
<div class="hht "  style="position:relative;"  >
	<div style=" background-image: url('admin/img/detailimage/<?php echo $array['largeimage']; ?>'); filter: blur(2px) brightness(75%);     background-size: cover;
    background-position: center center; background-repeat: no-repeat; height: 450px;">
	</div>
</div>
</section>

<section class="dwp">
		<div class="">
			<div class="row">
				<div class="col-4">
					<div data-anijs="if: mouseover, do: swing animated" >
						<img src="admin/img/frontimage/<?php echo $array ['shortimage'];?>" style="    object-fit: cover;  height: 390px;"/>
					</div>
				</div>
				<div class="col-8">
					<div style=" color: white;">
						<h3 class="mmb ml2" style="font-size: 30px;"><?php echo $array['eventname'];?></h3>
						<h6 class="mbb"><span style="font-size: 25px;"><i class="fa-solid fa-thumbs-up text-success"></i>296K </span>are interested</h6>
						<div class="d-flex kvkSbp mmb">
							<div>
								<h6>Releasing on <?php echo $array['openingdate'];?></h6>
								<p>Mark interested to know when bookings open</p>
							</div>
							<div>
								<button style="border:0;     font-size: 14px;">i'am Interested</button>
							</div>
						</div>
						<h6 class="mbb"><?php echo $array['closingdate'];?></h6>
						<h6 class="mbb"><?php echo $array['feature'];?></h6>
						<a class="btn bookbtn "> Book Ticket</a>
					</div>
				</div>
			</div>
		</div>
</section>

<section class="hht">
	<div style="padding:30px 0px; border-bottom:1px solid grey;">
		<div class="row">
		<div class="col-9">
		<h2>About </h2>
<p><?php echo $array['description'];?></p>
	</div>
	<div class="col-3">
	</div>
	</div>
	</div>
</section>


<section>
<div class="hht ">
	<div class="d-flex">
		<?php 
			if($artadd != ""){
			while($array=mysqli_fetch_array($artquery)){
			?>
			<a style="margin-right: 30px; text-decoration:none; color:black;" href="artist_detail.php?artist=<?php echo $array['artid'];?>">
				<img class="rounded-circle" src="admin/img/artistphoto/<?php echo $array['image']?>" height="100px" width="100px"/>
				<h5 class="mb-0"><?php echo $array['name']?></h5>
			</a>
			<?php 
			}
			}?>
	</div>
</div>	
</section>




  <?php include 'include/foot.php';?>
   <script src="js/anijs-min.js"></script> 
  <script src="js/anijs-helper-dom-min.js"></script>
<script src="js/anime.min.js"></script>
<script>
// Disable inspect element
$(document).bind("contextmenu",function(e) {
  e.preventDefault();
});
$(document).keydown(function(e){
  if(e.which === 123){
    return false;
}
});




//disable inspect end


var owl = $('#main');
owl.owlCarousel({
	stagePadding: 70,
    items:1,
    loop:true,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
	
});

  
  
  
  
</script>

  </body>
</html>