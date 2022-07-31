<?php 
include 'admin/config/conn.php';


$userid=null;
	session_start();
	if(isset($_SESSION['book'])){
		$userid = $_SESSION['book'];
		$userdata = "select * from user where id = '".$userid."'";
		$getuser = mysqli_query($conn, $userdata);
		$userinfo = mysqli_fetch_array($getuser);
		//print_r($userinfo['id']);
	}




?>


<section class="nav1">
	<div class="">
		<div class="hht">
		<div class="row">
				<div class="col-8">
					<div class="dl">
						<img src="img/22.png" style="width: 114px; height: 64px;"/>
						<input placeholder="Search for Movies, Events, Plays, Sports and Activities" width="150px" class="inp">
					</div>
				</div>
				<div class="col-4">
					<div class="text-white sgbtn" style="margin-top: 10px;">
						  <div class="dropdown" style="display:initial;">
							<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"  >NCR
							<span class="caret"></span></button>
							<ul class="dropdown-menu">
							  <li><a href="#">1</a></li>
							  <li><a href="#">2</a></li>
							  <li><a href="#">3t</a></li>
							</ul>
						  </div>
						<?php 
						
						if(isset($_SESSION['book'])){
							?>
							
							  <div class="btn-group">
								  <button class="btn btn-default btn-sm dropdown-toggle " type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="    color: rgb(255, 255, 255);  background-color: rgb(248, 68, 100); border-radius: 4px;  margin-top: 10px;     position: relative; top: -9px;">
									<img src="admin/img/userphoto/<?php echo $userinfo['photo']?>" style=" width: 35px; height: 35px; " class="rounded-circle"/>
									<?php echo $userinfo['name']?><span class="caret"></span>
								  </button>
								  <ul class="dropdown-menu" style="padding: 10px; border: 2px solid darkslategrey;">
									<a style="display:block;"><i class="fa-solid fa-user" style="    margin-right: 10px; color: orange;"></i>Profile</a>
									<a style="display:block;" href="dashboard.php?dashboard=<?php echo $userinfo['id']?>"><i class="fa-solid fa-table-columns" style="    margin-right: 10px;color: blueviolet;"></i>Dashboard</a>
									<a style="display:block;"><i class="fa-solid fa-file-invoice-dollar"style="    margin-right: 10px; color: green;"></i>Payment</a>
									<a style="display:block;" href="logout.php"><i class="fa-solid fa-right-from-bracket" style="    margin-right: 10px; color: red;"></i>Log Out</a>
								  </ul>
								   <ul class="dropdown-menu">
									2
								  </ul>
								</div>
							<?php
						}else{
							?>
							<button><a href="userlogin.php">Sign in</a></button>
						<?php
						}
						?>
						<div class="sc-hzNEM hGOWBG hhgg"><svg width="22px" height="14px" xmlns="http://www.w3.org/2000/svg"><title>Hamburger Menu</title><g fill-rule="nonzero" stroke="#FFF" stroke-width="1.5" fill="none" stroke-linecap="round"><path d="M1.611 1h20.614M1.611 7h20.614M1.611 13h20.614"></path></g></svg></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>