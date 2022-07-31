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
  <body style="background:whitesmoke;">
  <?php include 'include/nav.php';?>
  <?php include 'include/nav2.php';?>
  

<section class="continer-fluid anime1 " style="position:relative; background:black;" >
<div class="hht "  style="position:relative;"  >
	<div style=" background-image: url('admin/img/detailimage/<?php echo $array['largeimage']; ?>'); filter: blur(2px) brightness(75%);     background-size: cover;
    background-position: center center; background-repeat: no-repeat; height: 450px;">
	</div>
</div>
</section>

<section class="dwp anime1">
		<div class="">
			<div class="row">
				<div class="col-4">
					<div data-anijs="if: mouseover, do: swing animated" id="simg">
						<img src="admin/img/frontimage/<?php echo $array['shortimage'];?>" style=" width:100%;   object-fit: cover;  height: 390px;"/>
					</div>
				</div>
				<div class="col-8">
					<div style=" color: white; " id="">
						<h3 class="mmb  anime1" style="font-size: 30px;"><?php echo $array['eventname'];?></h3>
						<h6 class="mbb anime1"><span style="font-size: 25px;"><i class="fa-solid fa-thumbs-up text-success"></i>296K </span>are interested</h6>
						<div class="d-flex kvkSbp mmb anime1 ">
							<div>
								<h6>Releasing on <?php echo $array['openingdate'];?></h6>
								<p>Mark interested to know when bookings open</p>
							</div>
							<div>
								<button style="border:0;     font-size: 14px;">i'am Interested</button>
							</div>
						</div>
						<h6 class="mbb anime1"><?php echo $array['closingdate'];?></h6>
						<h6 class="mbb anime1"><?php echo $array['feature'];?></h6>
						
					</div>
				</div>
			</div>
		</div>
</section>


<section class="mwp bg-white ansec"  style="  z-index: 1;  position: sticky; top: 0;">
	<div class="row" style="padding:16px 30px;">
		<div class="col-8 bbt">
			<div class="jobol">
				<h1><?php echo $array['eventname'];?></h1>
				<p><?php echo $array['feature'];?></p>
			</div>
		</div>
		<div class="col-4 text-right bbt">
			<?php
				if($userid ==null){
						?>
						<a class="btn bookbtn" href="userlogin.php"> Register  Now</a>
						<?php
				}else {
					?>
					<a class="btn bookbtn" href="seat.php?book=<?php echo $array['eventid']?>"> Book Now</a>
					<?php
				} ?>
			
		</div>
		<hr>
	</div>
</section>


<section class="mwp bg-white">
	<div style="padding:4px 30px;">
		<div class="row">
			<div class="col-12 " style="padding-top: 15px; display:flex;">
				<p> Fri 01 Jul 2022 - Wed 27 Jul 2022</p>
				<p> Multiples Venues</p>
				<p> 499 ONWARDS</p>
			</div>
		</div>
	</div>
</section>

<section class="mwp">
	<div class="d-flex">
		<div class="onward2 p20"  style="height: fit-content;">
			<div>
				<?php
					if($artadd != ""){
					while($artrow = mysqli_fetch_array($artquery)){
				?>
					<h6>Artist</h6>
			<div class="d-flex p-10">
				<a href="artist_detail.php?artist=<?php echo $artrow['artid'];?>"><img src="admin/img/artistphoto/<?php echo $artrow['image'];?>" class="rounded-circle" width="100"/></a>
				<p><?php echo $artrow['name'];?></p>
			</div>
				<?php 
					}
					}
				?>	
			</div>
		</div>
		
		<div class="onward  p20" style="height: fit-content;">
			<div class="row">
				<div class="col-12 attend">
					<p> Click on Interested to Stay Updated about this event</p>
					<div class="d-flex">
						<div class="f1">
								<i class="fa-solid fa-thumbs-up"></i> 4883
							<p> People have Shown Interested Recently</p>
						</div>
						<div class="f1 text-right">
							<button class="inted">Interested ?</button>
						</div>
					</div>
				</div>
				<div class="col-12 attend" >
					<h6> Why should You Attend ?</h6>
					<li></li>
					<li>The Laugh Store</li>
					<hr>
					<div>
						<h6>About</h6>
						<p>It takes exemplary courage to sit in the first two rows of a Harsh Gujral`s show because he will get you with his highly witty yet charming style.</p>
					</div>
					<div>
						<h6>You may also like</h6>
						<div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="onward2  p20"  style="height: fit-content;">
		<p> 499 ONWARDjgjhfjhfifi.f.ififiyfiS</p>
		<p> 499 ONWARDjgjhfjhfifi.f.ififiyfiS</p>
		<p> 499 ONWARDjgjhfjhfifi.f.ififiyfiS</p>
		<p> 499 ONWARDjgjhfjhfifi.f.ififiyfiS</p>
		<p> 499 ONWARDjgjhfjhfifi.f.ififiyfiS</p>
		<p> 499 ONWARDjgjhfjhfifi.f.ififiyfiS</p>
		<p> 499 ONWARDjgjhfjhfifi.f.ififiyfiS</p>
		<p> 499 ONWARDjgjhfjhfifi.f.ififiyfiS</p>
		<p> 499 ONWARDjgjhfjhfifi.f.ififiyfiS</p>
		</div>
	</div>
</section>

  <?php include 'include/foot.php';?>
   <script src="js/anijs-min.js"></script> 
  <script src="js/anijs-helper-dom-min.js"></script>
	<script src="gsap-latest-beta.min.js"></script>
  
 
  <script>





// var textWrapper = document.querySelector('.ml2');
// textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

// anime.timeline({loop: true})
  // .add({
    // targets: '.ml2 .letter',
    // scale: [3,1],
    // opacity: [0,1],
    // translateZ: 0,
    // easing: "easeOutExpo",
    // duration: 950,
    // delay: (el, i) => 70*i
	
	
  // });
  
  // gsap.from("#simg",{opacity:0, duration:1, y:100, ease:''});
   gsap.from(".anime1",{opacity:0, duration:1, x:-100, ease:'Bounce.easeInOut', stagger:0.6});
   //gsap.from(".ansec",{opacity:0, duration:3, y:-100, ease:'Power2.easeInOut', stagger:0.6});
	 
	
  
  
  </script>
  
  </body>
</html>