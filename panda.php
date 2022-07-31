<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/panda.css">
<link href="https://fonts.googleapis.com/css?family=Ubuntu:500" rel="stylesheet">
</head>
<body>
<section class="sec1">
<div>

<div class="login">
			
				<i class="fa fa-user" aria-hidden="true">&nbsp;&nbsp;</i><input type="text"></input type="text"><br><br>
				<i class="fa fa-unlock-alt" aria-hidden="true">&nbsp;&nbsp;</i><input type="password" ><br><br>
				<button type="button">Login</button>
	</div>
<div class="backg">
		<div class="panda">
			<div class="earl"></div>
			<div class="earr"></div>
			<div class="face">
				<div class="blshl"></div>
				<div class="blshr"></div>
				<div class="eyel">
					<div class="eyeball1"></div>
				</div>
				<div class="eyer">
					<div class="eyeball2"></div>
				</div>
				<div class="nose">
					<div class="line"></div>
				</div>
				<div class="mouth">
					<div class="m">
						<div class="m1"></div>
					</div>
					<div class="mm">
						<div class="m1"></div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	<div class="pawl">
		<div class="p1">
				<div class="p2"></div>
				<div class="p3"></div>
				<div class="p4"></div>
				</div>
			</div>
	<div class="pawr">
		<div class="p1">
			<div class="p2"></div>
			<div class="p3"></div>
			<div class="p4"></div>
		</div>
	</div>
	<div class="handl"></div>
	<div class="handr"></div>
</div>
</section>
</section>


  <script src="js/jquery.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script type="">
$(document).ready(function(){
			$(":text").focus(function(){
				$(".handl").css({
					transform: 'rotate(0deg)',
					bottom: '140px',
					left:'50px',
					height:'45px',
					width:'35px'
				});
				$(".handr").css({
					transform: 'rotate(0deg)',
					bottom: '185px',
					left:'250px',
					height:'45px',
					width:'35px'
				});
				$(".eyeball1").css({
					top: '20px',
					left: '13px'
				});
				$(".eyeball2").css({
					top: '20px',
					left: '8px'
				});
			});
			$(":password").focus(function(){
				$(".eyeball1").css({
					top: '10px',
					left: '10px'
				});
				$(".eyeball2").css({
					top: '10px',
					left: '10px'
				});
				$(".handl").css({
					transform: 'rotate(-150deg)',
					bottom: '215px',
					left:'105px',
					height:'90px',
					width:'40px'
				});
				$(".handr").css({
					transform: 'rotate(150deg)',
					bottom: '308px',
					left:'192px',
					height:'90px',
					width:'40px'
				});
			});
		});
</script>
</body>
</html>
