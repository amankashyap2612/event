<?php
include 'admin/config/conn.php';

$sql3="select * from category  WHERE id  BETWEEN 12 AND 24";
$query3 =mysqli_query($conn,$sql3);
//$var = mysqli_fetch_array($query);
// print_r($query);



$userr ="select * from event";
$uyery=mysqli_query($conn, $userr);

?>


<!DOCTYPE html>
<html lang="en">
<?php include 'include/head.php';?>

<body>
<?php include 'include/nav.php';?>
<?php include 'include/nav2.php';?>

<section>
<div class="jtk cursor rounded ">
	<div class="owl-carousel" id="mainslider">
		<div class="item"><img src="img/owl1.jpg" style="height:350px;"/></div>
		<div class="item"><img src="img/owl2.avif"style="height:350px;"/></div>
		<div class="item"><img src="img/owl3.jpg" style="height:350px;"/></div>
		<div class="item"><img src="img/owl4.jpg" style="height:350px;"/></div>
		<div class="item"><img src="img/owl5.jpg" style="height:350px;"/></div>
		<div class="item"><img src="img/owl6.jpg" style="height:350px;"/></div>
		<div class="item"><img src="img/owl7.jpg" style="height:350px;"/></div>
		<div class="item"><img src="img/owl8.jpg" style="height:350px;"/></div>
	</div>
</div>	
</section>

<section style="background: whitesmoke; padding-top: 32px;" class="anime1">
<div class="mmx">
	<div class="row">
		<div class="col-12 ">
			<div>
				<img src="img/coin.png" style="    width: 100%;     height: 30px;"/>
			</div>
		</div>
	</div>
</div>
</section>

<section class="strange anime1">
	<div class="mmx">
		<div class="webkt">
			<div class="ktbw">
				<div class="aag">
					Recommended Movies
				</div>
			</div>
			<div>
				<a class="alls">See All</a>
			</div>
		</div>
	</div>
</section>

<section class="strange anime1" >
	<div>
		<div class="qqquty">
			<div class="tutty">
				<div class="strange">
					<img src="img/strange.jpg"/>
					<h6>Doctor Strange 2</h6>
					<p>Doctor Strange 2</p>
				</div>
				<div class="strange" >
					<img src="img/strange.jpg"/>
				</div>
				<div class="strange" >
					<img src="img/strange.jpg"/>
				</div>
				<div class="strange" >
					<img src="img/strange.jpg"/>
				</div>
				<div class="strange" >
					<img src="img/strange.jpg"/>
				</div>
			</div>
		</div>
	</div>
</section>

<section style="background: whitesmoke; padding-top: 32px;" class="hSMUVB anime1"  >
<div class="mmx">
	<div class="row">
		<div class="col-12 ">
			<div>
				<img src="img/stream1.png" style="    width: 100%;"/>
			</div>
		</div>
	</div>
</div>
</section>

<section class="strang anime1" >
<div class="mmx">
	<div class="owl-carousel" id="productslide">
		<?php 
		while($test5 = mysqli_fetch_array($query3)){
			?>
		 <div class="item"><img src="admin/img/userphoto/<?php echo $test5['image']?>" /></div>
		<?php } ?>

	</div>
</div>	
</section>
<?php 
while($count=mysqli_fetch_array($uyery)){
	?>
	<h1><?php echo $count['eventname'];?></h1>
	<?php
	
}
?>
<section class="strang" >
<div class="voice_to_text">
	<h1>text Converter</h1>
	<textarea id="covert_text"></textarea>
	<button id="click_to_convert"> convert</button>
</div>	
</section>

	


<?php include 'include/foot.php';?>
<script src="gsap-latest-beta.min.js"></script>
<script src="js/ScrollTrigger.min.js"></script>
	
<script>
gsap.registerPlugin(ScrollTrigger);


// gsap.to(".anime1",{
	// scrollTrigger:{
	// trigger:".anime1",
	// toggleActions:"restart none none none"
	// },
	
	// x:400,
	// rotation:360,
	// duration:3
// });

gsap.utils.toArray(".anime1").forEach((panel, i) => {
  ScrollTrigger.create({
    trigger: panel,
    start: "top top", 
    pin: true, 
    pinSpacing: false 
  });
});


ScrollTrigger.create({
  snap: 1 / 4 // snap whole page to the closest section!
});







$(document).ready(function(){
	$({ Counter: 0 }).animate({
  Counter: $('.Single').text()
}, {
  duration: 5000,
  easing: 'swing',
  step: function() {
    $('.Single').text(Math.ceil(this.Counter));
  }
});


// counting me bich me se ek number remove krne ke liye
for(var i =1; i<=10; i++){
	if(i === 4){
		continue;
	}
	console.log(i);	
}


var i =0;
while(i<=3){
	console.log(i);
	i++;
}


//if/else condition ki tarah hi work

var age = 8;
var drink = age  >= 5 ? "coffee":"milk";
console.log(drink);



var day =5;
switch (day){
	case 0:
	console.log("sunday");
	break;
	case 1:
	console.log("monday");
	break;
	case 2:
	console.log("tuesday");
	break;
	case 3:
	console.log("wednesday");
	break;
	case 4:
	console.log("thursday");
	break;
	case 5:
	console.log("friday");
	break;
	case 6:
	console.log("saturday");
	break;
	default:
	console.log("invalid day");
}
	
});
</script>
<script>
var owl = $('#mainslider');
owl.owlCarousel({
	stagePadding: 70,
    items:1,
    loop:true,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
	
});

$("#productslide").owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});




</script>



</body>
</html>
