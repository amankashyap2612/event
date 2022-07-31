<?php include 'config/conn.php';


// <--session start -->
		session_start();
	
	if(!isset($_SESSION['book2']) && $_SESSION['book2'] == null){
		header("Location:admin_login.php");
	}
	




$sql ="select * from category";
$query =mysqli_query($conn, $sql);
// $result =mysqli_fetch_array($query);



?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
  <link rel="icon" type="image/png" href="img/favicon.png">
  <title>
    Soft UI Dashboard by Creative Tim
  </title>


  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- CSS Files -->
  <link id="pagestyle" href="css/soft-ui-dashboard.css?v=1.0.5" rel="stylesheet" />
  <link rel="stylesheet" href="css/show.css">
  <link rel="stylesheet" href="css/all.min.css">
  
       <style>
      /*	
	Side Navigation Menu V2, RWD
	===================
	License:
	https://goo.gl/EaUPrt
	===================
	Author: @PableraShow

 */

@charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

body {
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  line-height: 1.42em;
  color:#A7A1AE;
  background-color:#1F2739;
}

h1 {
  font-size:3em; 
  font-weight: 300;
  line-height:1em;
  text-align: center;
  color: #4DC3FA;
}

h2 {
  font-size:1em; 
  font-weight: 300;
  text-align: center;
  display: block;
  line-height:1em;
  padding-bottom: 2em;
  color: #FB667A;
}

h2 a {
  font-weight: 700;
  text-transform: uppercase;
  color: #FB667A;
  text-decoration: none;
}

.blue { color: #185875; }
.yellow { color: #FFF842; }

.container th h1 {
	  font-weight: bold;
	  font-size: 1em;
  text-align: left;
  color: #185875;
}

.container td {
	  font-weight: normal;
	  font-size: 1em;
  -webkit-box-shadow: 0 2px 2px -2px #0E1119;
	   -moz-box-shadow: 0 2px 2px -2px #0E1119;
	        box-shadow: 0 2px 2px -2px #0E1119;
}

.container {
	  text-align: left;
	  overflow: hidden;
	  width: 100%;
  display: table;
  padding: 0 0 8em 0;
}

.container td, .container th {
	    padding: 10px 20px;  
}

/* Background-color of the odd rows */
.container tr:nth-child(odd) {
	  background-color: #323C50;
}

/* Background-color of the even rows */
.container tr:nth-child(even) {
	  background-color: #2C3446;
}

.container th {
	  background-color: #1F2739;
}

.container td:first-child { color: #FB667A; }

.container tr:hover {
   background-color: #464A52;
-webkit-box-shadow: 0 6px 6px -6px #0E1119;
	   -moz-box-shadow: 0 6px 6px -6px #0E1119;
	        box-shadow: 0 6px 6px -6px #0E1119;
}zz

.container td:hover {
  background-color: #FFF842;
  color: #403E10;
  font-weight: bold;
  
  box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
  transform: translate3d(6px, -6px, 0);
  
  transition-delay: 0s;
	  transition-duration: 0.4s;
	  transition-property: all;
  transition-timing-function: line;
}

@media (max-width: 800px) {
.container td:nth-child(4),
.container th:nth-child(4) { display: none; }
}
    </style>
</head>

<body class="g-sidenav-show  bg-gray-100">
<?php include 'include/sidenav.php';?>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
<?php include 'include/topnav.php';?>
    <!-- End Navbar -->

	  
	  


<div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Authors table</h6>
            </div>
			<div class="card-header pb-0">
              <a type="button"  class="btn btn-primary" href="category.php"> Add Category</a>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase hhed  text-secondary text-xxs font-weight-bolder opacity-7"><h6>Category</h6></th>
                      <th class="text-uppercase text-secondary hhed text-xxs font-weight-bolder opacity-7 ps-2"><h6>Created Date</h6></th>
                      <th class="text-center text-uppercase  hhed text-secondary text-xxs font-weight-bolder opacity-7"><h6>Status</h6></th>
                      <th class="text-center text-uppercase hhed text-secondary text-xxs font-weight-bolder opacity-7"><h6>Action</h6></th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while($result2 = mysqli_fetch_array($query)){
						?>
						<tr>
                      <td>
                        <div class="d-flex px-2 py-1">
							<div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $result2['id'];?></h6>
                          </div>
                          <div>
                            <img src="img/userphoto/<?php echo $result2['image'];?>" class="avatar avatar-smm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <span class="badge badge-sm bg-gradient-success" style="margin-left: 30px; width: 100px;"><?php echo $result2['name'];?></span>
                          </div>
                        </div>
                      </td>
                       <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm " style="background-image: linear-gradient(310deg, #ff4550 0%, #254a57 100%);"><?php echo $result2['createddate'];?></span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Active</span>
                      </td>
                      <td class="align-middle">
                        <!-- Button trigger modal -->
							<a type="button" class="badge badge-sm  open_model" data-delete="ajax/cat_delete.php?del=<?php  echo $result2['id'];?>" data-update="category.php?update=<?php  echo $result2['id'];?> " style="background-image: linear-gradient(310deg, #ff4550 0%, #254a57 100%);">Edit</a>

                      </td>
                    </tr>
						<?php
					}?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
		</div>
    </div> 
  </div>
   
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
		<a type="button" class="btn btn-primary" id="updatebtn" href="">Update</a>
		<a type="button" class="btn btn-primary" id="deletebtn" href="">Delete</a>
        <a type="button" class="btn btn-secondary" data-dismiss="modal">Close</a>
        
      </div>
    </div>
  </div>
</div>
<?php include 'include/foot.php'?>
<script>

// model ke button p id show krwane ka kaam  edit button p data-delete aur data-update  banaya
$(document).ready(function(){
	
	$(".open_model").click(function(){
		$("#exampleModal").modal('show');
		var d_url = $(this).data('delete');
		var u_url = $(this).data('update');
		$("#deletebtn").attr("href", d_url);
		$("#updatebtn").attr("href", u_url);
		
		
	});
	
// model ke button p id show krwane ka kaam end


});
</script>
</body>

</html>