<?php
include 'admin/config/conn.php';

$book =$_GET['book'];
//print_r($book);
$booksql ="select * from event where eventid ='".$book."' ";
$bookquery =mysqli_query($conn,$booksql);
$bookarray =mysqli_fetch_array($bookquery);
print_r($bookarray['seat']);
print_r($bookarray['price']);
print_r($bookarray['eventname']);


$userid=null;
	session_start();
	if(isset($_SESSION['book'])){
		$userid = $_SESSION['book'];
		$userdata = "select * from user where id = '".$userid."'";
		$getuser = mysqli_query($conn, $userdata);
		$userinfo = mysqli_fetch_array($getuser);
		print_r($userinfo['name']);
		}



$selectseat ="select seatbook from seats where eventid = '".$book."' ";
//print_r($selectseat);
$seatquery =mysqli_query($conn, $selectseat);
$seatarrray =mysqli_fetch_row($seatquery);

$explode =array();
if(!empty ($seatarrray)){
$explode = explode(",", $seatarrray[0]);
}
//print_r($explode);
?>


<!DOCTYPE html>
<html>
<head>
	<?php include "include/head.php"; ?>
	<style>
		
		.dis{
			color:white!important;
			background-color:red!important;
			border:none!important;
			cursor: no-drop;
			
		}
		
		.intro{
			color:white!important;
			background-color:green!important;
		}
	
		.main-div_seats{width:50%; margin:auto;}
		
		.rate-heading_seats{width:100%;
		color:#999;
		font-size:12px;
		margin-bottom:5px;
		text-align:left;
		padding-bottom:10px;
		border-bottom:1px solid #ececec;}
		
		.section-one_seats table{width:100%;}
		
		.abcd_seats{margin-right:6px;
		margin-top:9px;
		font-size:14px;
		text-transform:capitalize;
		color:#bebebe;}
		
		.seatsnum{
			float:left;
			width:25px;
			height:25px;
			margin:4px;
		}
		
		.seatsnum button{
			display:inline-block;
			font-size:10px;
			line-height:25px;
			font-weight:400;
			background:#fff;
			vertical-align:top;
			border:1px solid #1ea83c;
			border-radius:2px;
			text-align:center;
			color:#1ea83c;
			width:25px;
			height:25px;
			text-decoration:none;
		}
		
		
		 .active {
            padding: 5px;
            background-color: #20BF55;
            color: white;
            }
		
		.seatsnum button:hover{background:#1ea83c; color:#fff;}
	</style>
</head>
<body>
<section class="section-one_seats">
<div class="main-div_seats">
	<table cellspacing="0" cellpadding="0">
		
		<?php
		
			$rows = array('A');
			for($i=0; $i<=0; $i++){
				?>
					<tr>
						<td>
							<div class="abcd_seats"><?php echo $rows[$i]; ?></div>
						</td>
						<td>
							<?php
								for($j=1; $j<=$bookarray['seat'] ; $j++){
									if($j==0 ){
										?>
										<div class="seatsnum">&nbsp;</div>
										<?php
									} else {
											
										$value=$rows[$i].$j;
										$checkArrVal = in_array($value, $explode);
										$isDisable = '';
										$isa = '';
											if($checkArrVal){
												$isDisable = 'disabled';
												$isa = 'dis';
											}
											// print_r($isDisable);
											
										?>
										<div class="seatsnum">
											<button  <?php echo $checkArrVal ? 'disabled' : ''; ?>       data-seat="<?php echo $rows[$i].$j; ?>" class="seatsclick <?php echo $isDisable ; ?> <?php echo $isa ; ?>" ><?php echo $j; ?></button>
										</div>
										<?php
									}
								}
							?>
						</td>	
					</tr>
					
				<?php
			}
		?>
	</table>
<button class="btn btn-primary btn-sm" id="sbook">Success</button>
</div>	
</section>
<?php include "include/foot.php" ?>
<script>
$(document).ready(function(){
			var selectedVal = "";
			$(".seatsclick").on( "click", function() {
				var el = $(this).attr("data-seat");
				if(!$(this).hasClass('intro')){
					$(this).toggleClass('intro');
					if(selectedVal === ""){
						selectedVal += el + ',';
					} else {
						selectedVal +=  el + ',';
					}
				} else {
					selectedVal = selectedVal.replace(el+',', '');
					$(this).removeClass('intro');
				}
				
				console.log(selectedVal);
				
					
			});
		//$(this).toggleClass("intro");	

		$("#sbook").on('click', function(){
			
			var sbook = selectedVal;
			var eventid = "<?php echo $book?>";
			var username = "<?php echo $userinfo['name']?>";
			var eventname = "<?php echo $bookarray['eventname']?>";
			var price = "<?php echo $bookarray['price']?>";

			var obj ={
					T_book:sbook,
					T_id:eventid,
					
					}
					
			var obj2 ={
					T_book:sbook,
					T_id:eventid,
					T_user :username,
					T_ename :eventname,
					T_price:price,
					}
					
			$.ajax({
				url:'admin/ajax/seatbooking.php',
				type:'POST',
				data:obj,
				success:function(resp){
					console.log(resp);
					//window.location.href = 'bookmyshow.php';
					}
				});
				


				$.ajax({
				url:'admin/ajax/booking_table.php',
				type:'POST',
				data:obj2,
				success:function(resp){
					console.log(resp);
					//window.location.href = 'bookprint.php?print=<?php echo $userinfo['name']?>';
								swal({
								     text: "Seat Book Confirm !",
									 icon: "success",
									  button: {
										text: "Hey ho!",
									  },
									});
								//  $("#go").show();
								  //$("#sbook").hide();
					}
				});
				
				
				
		});

});

</script>
</body>
</html>