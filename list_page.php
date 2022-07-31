<?php
include 'admin/config/conn.php';

// category ka data work start
	  $catid = $_GET['cid'];
	  $getpsql2 = "select * from event where cat_id = '".$catid."' ORDER BY eventid ASC LIMIT 0, 8;";
	  $querykk = mysqli_query($conn, $getpsql2);
	

	$catSql ="select * from event where cat_id  = '".$catid."' ";
	$catquery =mysqli_query($conn,$catSql);


// category ka data work end
// $sqlkk = "SELECT * FROM event ORDER BY eventid ASC LIMIT 0, 4;";
	// $querykk = mysqli_query($conn, $sqlkk);
	


?>


<!DOCTYPE html>
<html lang="en">
<?php include 'include/head.php';?>

<!--<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">-->
 <link rel="stylesheet" href="css/anicollection.css">

<style>
#camera {width:350px;
height:350px;
border:1px solid black;}


</style>
<body  style="background:whitesmoke;">
<?php include 'include/nav.php';?>
<?php include 'include/nav2.php';?>
<section>
<div class="jtk anime1">
	<div class="owl-carousel" id="mainslider">
		
		<?php while($catarray = mysqli_fetch_array($catquery)){
			?>
			<div class="item"><img src="admin/img/detailimage/<?php echo $catarray['largeimage'];?>" style="height:450px;"/></div>
			<?php
			}
		?>
	</div>
</div>	
</section>
<section class="hht" style="    margin-top: 9rem;">
<div class="">
<div class="row">
	<div class="col-md-3 anime1">
			<div class="">
				<h5>Filters</h5>
				<div class="">
					<details style="margin-bottom:20px;">
					  <summary class="summary">Date</summary>
						<div class="sum2">
							<a class="btn">Today</a>
							<a class="btn">Tomorrow</a>
							<a class="btn">This Weekend</a>
							<input id="date_picker" type="date"  >
							<input  type="radio" id="start" >
							
						</div>
					</details>
					<details style="margin-bottom:20px;">
					  <summary class="summary">Language</summary>
						<div class="sum2">
							<a class="btn">English</a>
							<a class="btn">Hindi</a>
							<a class="btn">Punjabi</a>
							<a class="btn">Bengali</a>
							<a class="btn">Urdu</a>
							<a class="btn">Telegu</a>
						</div>
					</details>
					<details style="margin-bottom:20px;">
					  <summary class="summary">Categories</summary>
						<div class="sum2">
							<a class="btn">Workshop</a>
							<a class="btn">Comedy Show</a>
							<a class="btn">Online Stream Events</a>
							<a class="btn">Music Show</a>
							<a class="btn">Kids</a>
							<a class="btn">Spirituality</a>
							<a class="btn">Performences</a>
							<a class="btn">Beer Festivalsv</a>
							<a class="btn">Conferences</a>
							<a class="btn">Exhibtions</a>
							<a class="btn">Screening</a>
							<a class="btn">Talks</a>
						</div>
					</details>
					<details style="margin-bottom:20px;">
					  <summary class="summary">More Filters</summary>
						<div class="sum2">
							<a class="btn">Online Streaming</a>
							<a class="btn">Outdoor Event</a>
							<a class="btn">Kids Allowed</a>
							<a class="btn">Amatuer</a>
							<a class="btn">Kids Activities</a>
						</div>
					</details>
					<details style="margin-bottom:20px;">
					  <summary class="summary">Price</summary>
						<div class="sum2">
							<a class="btn"> Free</a>
							<a class="btn"> 0 -500</a>
							<a class="btn">501 - 2000</a>
							<a class="btn">Above 2000</a>
						</div>
					</details>
					<a class="btn btn-block bro"> Browse by Venues </a>
				</div>
			</div>
	</div>
	<div class="col-md-9 ">
		<div class="bg-secondary">
			<h5>Events  In Delhi-NCR</h5>
			<div class="bg-secondary">
			</div>
		</div>
		<div class="row " id="loaddata">
			<?php
							
					while($prow2 = mysqli_fetch_array($querykk)){
						$urls = 'event_detail_page.php?cid='.$prow2['eventid'];
						if($prow2['cat_id'] == 1){
							$urls = 'detail_page1.php?cid='.$prow2['eventid'];
						}
				?>
				<div class="col-md-3 evcl">
					<div data-anijs="if: mouseover, do: swing animated">
						<a style="text-decoration:none; color:black;" href="<?php echo $urls; ?>"><img style="width: 100%;height: 390px; object-fit:cover; border-radius: 10px;"src="admin/img/frontimage/<?php echo $prow2['shortimage'];?>" />
					</div>
					<div class="trendy bttn">
					<p><?php echo $prow2['eventname'];?></p>
						<h3><?php echo $prow2['price'];?></h3>
						<p><?php echo $prow2['openingdate'];?></p>
						<h6><?php echo $prow2['feature'];?></h6></a>
					</div>
				</div>
						<?php
								}
							
						?>
				
		</div>
		<div class="row mb-3" id="loadmore">
			<button   style="margin:auto; margin-bottom:10px;" id="hidebtn">Load More</button>
			<input type="hidden" value="2" id="counter" />
		</div>
		
	</div>
</div>
</div>

</section>
<section class="hht1 ">
		<div class="hht">
		<div class="row">
				<div class="col-9" style="color:white;">
					<div style="display:flex;">
						<div>
							<img src="img/hut.svg"/>
						</div>
						<div>
							<p><span style="    font-weight: 600; margin: 10px;">List your Show </span>
							Got a show, event, activity or a great experience? Partner with us & get listed on BookMyShow</p>
						</div>
					</div>
					
				</div>
				<div class="col-3 text-right">
					<button class="read">
						Contact today !
					</button>
				</div>
			</div>
		</div>
</section>

<section class=" customer" >
	<div class="hht">
	<div class="row text-center">
		<div class="col-4">
			<div>
				<img src="img/customer.jpg"/>
			</div>
		</div>
		<div class="col-4">
			<div>
				<img src="img/capture2.jpg"/>
			</div>
		</div>
		<div class="col-4">
			<div>
				<img src="img/capture3.jpg"/>
			</div>
		</div>
	</div>
	</div>
</section>


<section class="">
	<div class="jkhk text-white" wrap="wrap">
		<div class="kkjk hht" wrap="wrap">
			<div class="gghgj">
				In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.
			</div>
			<div class="gghgj">
				In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.
			</div>
			<div class="gghgj">
				In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.
			</div>
			<div class="gghgj">
				In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.
			</div>
			<div class="gghgj">
				In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.
			</div>
		</div>
	</div>
</section>

<?php include 'include/foot.php';?>

   <script src="js/anijs-min.js"></script> 
  <script src="js/anijs-helper-dom-min.js"></script>
<script src="gsap-latest-beta.min.js"></script>
<script src="js/ScrollTrigger.min.js"></script>


 <script language="javascript">
 
 gsap.utils.toArray(".anime1").forEach((panel, i) => {
  ScrollTrigger.create({
    trigger: panel,
    start: "top top", 
    pin: true, 
    pinSpacing: true
  });
});




ScrollTrigger.create({
  snap: 1 / 4 // snap whole page to the closest section!
});
 
 
 
 
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();

        today = yyyy + '-' + mm + '-' + dd;
        $('#date_picker').attr('min',today);
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





</script>
<script>
			$(window).scroll(function(){
				
				
				console.log($(window).scrollTop());
				console.log($(window).height());
				console.log($(document).height());
				
				
				
				if($(window).scrollTop() + $(window).height() >= $(document).height() - 0.5) {
					var position = $("#loader").scrollTop();
					//var bottom = $(document).height() - $(window).height();
					
					console.log(position);
				
				
				var paged = parseInt($("#counter").val());
				var limit = 8;
				
				var obj = {paged, limit};
				
				$.ajax({
					url : "admin/ajax/loaddata.php",
					type : "POST",
					data : obj,
					success : function(resp){
						// console.log(resp);
						var data = JSON.parse(resp);
						console.log(data);
						data.forEach((item, index) => {
							
							var linkurl = 'event_detail_page.php?cid='+item.eventid;
							if(item.cat_id == "1"){
								linkurl = 'detail_page1.php?cid='+item.eventid;	
							}
							
							var bind = '<div class="col-md-3">';
							bind += '<a  style="text-decoration:none; color:black; " href="'+linkurl+'" class="text-decoration-none"><div class="py-4 "><div>';
							bind += '<img data-anijs="if: mouseover, do: swing  "  class="animated"  style="width: 100%;height: 390px; object-fit:cover; border-radius: 10px;" src="admin/img/frontimage/'+item.shortimage+'"/>';
							bind += '</div><div class="mt-3">';
							bind += '<h5 class="text-dark ">'+item.eventname+'</h5>';
							bind += '<p class="text-decoration-none text-muted m-0">₹ '+item.price+'</p>';
							bind += '<p class="text-decoration-none text-muted m-0">₹ '+item.openingdate+'</p>';
							bind += '<p class="text-decoration-none text-muted m-0">₹ '+item.feature+'</p>';
							bind += '</div></div></a></div>';
							$("#loaddata").append(bind);
							// console.log(item.eventid);
						});
						if(data.length < 8){
								$("#hidebtn").hide();
							}
						// console.log(paged+1);
						$("#counter").val(paged+1);
							
					}
				});
			}
			});
			
			
		</script>
		

</body>
</html>
