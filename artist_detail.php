<?php

include 'admin/config/conn.php';


$artist =$_GET['artist'];
$actor ="select * from  artist where artid ='".$artist."'";

$arquery =mysqli_query($conn, $actor);
$artarray=mysqli_fetch_array($arquery);



?>
<!doctype html>
<html lang="en">
<?php include 'include/head.php';?>
 <link rel="stylesheet" href="https://anijs.github.io/lib/anicollection/anicollection.css">
 <style>
	canvas {
  width: 100%;
  height: 100%;
}

 </style>
  <body>
  <?php include 'include/nav.php';?>
  <?php include 'include/nav2.php';?>



<section style="background: black;">  
<section class="hht container-fluid" >
<div style="height:450px;    background: black;">
	<div class="row" id="particles-js">
		<div class="col-8"  >
			<div class="row">
				<div class="col-4">
					<div class="artdiv" id="gsap" data-anijs="if: mouseover, do: flipInY animated" >
						<img src="admin/img/artistphoto/<?php echo $artarray['image'];?>"/>
					</div>
				</div>
				<div class="col-8 artname">
					<h1><?php echo $artarray['name'];?></h1>
					<p><?php echo $artarray['profile'];?></p>
					<p><?php echo $artarray['born'];?></p>
				</div>
			</div>
		</div>
		<div class="col-4">
		</div>
	</div>
</div>	
</section>

</section>
  
<section class="hht bg-white">
	<div style="padding:30px ; border-bottom:1px solid grey;">
		<div class="row">
		<div class="col-9">
		<h2>About </h2>
<p><?php echo $artarray['about'];?></p>
	</div>
	<div class="col-3">
	</div>
	</div>
	</div>
</section>


<section>
	<canvas></canvas>
</section>
  
  
  
  
  
  <?php include 'include/foot.php';?>
    <script src="js/particles.js"></script>
  <script src="js/app.js"></script>
  <script src="https://anijs.github.io/lib/anijs/anijs-min.js"></script> 
  <script src="https://anijs.github.io/lib/anijs/helpers/dom/anijs-helper-dom-min.js"></script>
	<script src="gsap-latest-beta.min.js"></script>
  <script>
	 gsap.from("#gsap",{opacity:0, duration:1, y:100, ease:'Power2.easeInOut'})
	 gsap.from(".artname",{opacity:0, duration:1, x:-100, ease:'Power2.easeInOut'})
	 
  </script>
  </body>
</html>