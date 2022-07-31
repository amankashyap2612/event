<?php 

include 'config/conn.php';

// <--update start-->
$add=true;
$id =null;
$prow =null;
$name=null;
$profile=null;
$born=null;
$address=null;
$createdate=null;
$carrear=null;
$trimdes = null;
$about = null;
$image=null;
$trimde = null;
//	$id=$_GET['update'];
	//print_r($id);
	if(isset($_GET['update'])){
		
	$id=$_GET['update'];
	// print_r($id);
	$add=false;
	$sql="select * from artist where artid='".$id."' ";
	$result=mysqli_query($conn,$sql);
	$prow=mysqli_fetch_array($result);
	
	$name=$prow['name'];
	$profile=$prow['profile'];
	$born =$prow['born'];
	$address =$prow['address'];
	$createdate =$prow['createdate'];
	$image =$prow['image'];
	$carrear= $prow['carrear'];
	$about= trim ($prow['about']);
	
 $date = date('Y-m-d');
 echo "$date ";

	}
	
// <--update end -->

?><!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/show.css">
  <style>

  </style>
</head>
<body class="secc2">
<section class="container even">
<div class="form-group row">
				  <div class="col-6">
					 <label for="email">Front Image:</label>	  
						<input type="file" class="form-control hidden" id="image" value="<?php echo $image?>" placeholder="Image" name="" accept="image/png, image/jpeg, image/webp ">
						<input type="hidden" class="form-control" id="hideimage" placeholder="Image" name="">
						  <div class="uploadprev" id="uploadimg">
							<img src="img/default.jpg" id="image1" />
						  </div>
				  </div>
				</div>
				<div class="row">
					<div class="form-group col-6">
					  <label for="email">Name:</label>
					  <input type="Name" class="form-control" id="name" value="<?php echo $name ?>"" placeholder="Enter Name" name="email">
					</div>
					<div class="form-group col-6">
					  <label for="email">Profile:</label>
					  <input type="Name" class="form-control" id="profile"  value="<?php echo $profile ?>" placeholder="Enter Name" name="email">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-6">
					  <label for="">Born:</label>
					  <input type="date" data-date-inline-picker="true" class="form-control" id="born" value="<?php echo $born ?>" placeholder="Enter email" name="email">
					</div>
					<div class="form-group">
					  <label for="email">address:</label>
					  <input type="Name" class="form-control" id="address"  value="<?php echo $address ?>" placeholder="Enter Name" name="email">
					</div>
					<div class="form-group col-6">
					  <label for="">Created Date:</label>
					  <input type="date" class="form-control" id="create"  value="<?php echo $createdate ?>" placeholder="Enter email" name="email">
					</div>
				</div>
				<div class="form-group">
				  <label >about:</label>
				  <input type="text" class="form-control" id="about"  value="<?php echo $about ?>" placeholder="Enter Feature" >
				</div>
				<div class="form-group">
				  <label >Carrear:</label>
				  <textarea type="text" class="form-control"   id="carrear"   placeholder="Enter Carrear" ><?php echo $carrear;?></textarea>
				</div>
				<?php if($add){
					?>
					<button type="submit" id="submit"class="btn btn-primary">Submit</button>
					<?php
				}else{
					?>
					<button type="submit" id="update" class="btn btn-primary">Update</button>
					
					<?php
				}?>
				
					
			  </div>
			</div>
</section>
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script> 
 <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace('about');
CKEDITOR.instances['about'].setData("<?php echo $about;?>");
CKEDITOR.replace('carrear');
CKEDITOR.instances['carrear'].setData();

$(document).ready(function(){
	
	
	$("#uploadimg").click(function(){
			$("#image").click();
		});
	
	
	
	$("#image").change(function(){
			var file = $(this)[0].files[0];
			var filename = $("#hideimage").val();
			var fd = new FormData();  
			fd.append("T_photo",file);
			fd.append("T_photoname",filename);
			
			$.ajax({
				 url:"ajax/uploadprev.php",
				 type:"POST",
				 data:fd,
				 processData:false,
				 contentType:false,
				 success:function(res){
					$("#hideimage").val(res);
					$("#image1").attr("src", "");
					$("#image1").attr("src", "img/artistphoto/"+res);
				 }
		   });
		})
	
	
	
	
	
	
	
	
	$("#submit").click(function(){
		 var name =$("#name").val();	
		 var profile =$("#profile").val();	
		 var born =$("#born").val();	
		 var address =$("#address").val();	
		 var carrear = CKEDITOR.instances["carrear"].getData();
		 var about = CKEDITOR.instances["about"].getData();
		 var image =$("#image")[0].files[0]; 
		 var create =$("#create").val();

			
			
			
		var obj = new FormData();
			obj.append('t_name',name);
			obj.append('t_profile',profile);
			obj.append('t_born',born);
			obj.append('t_address',address);
			obj.append('t_carrear',carrear);
			obj.append('t_about',about);
			obj.append('t_create',create);
			obj.append('t_image',image);
			console.log(obj);
			
		$.ajax({
			url :"ajax/artistajax.php",
			type:"POST",
			processData:false,
			contentType:false,
			data:obj,
			success:function(resp){
				console.log(resp);
			}
		})

})
});

</script>

<script>
$(document).ready(function(){
		// <--update start -->
		$("#update").click(function(){
			var id="<?php echo $id?>";
			var name =$("#name").val();
			var profile =$("#profile").val();
			var address =$("#address").val();
			var born =$("#born").val();
			var create =$("#create").val();
			var about = CKEDITOR.instances["about"].getData();
			var carrear = CKEDITOR.instances["carrear"].getData();
			var image = $("#image")[0].files[0];
			var img = '<?php echo $image?>';
				
			
			var fd = new FormData();
					console.log(fd);
					fd.append("c_id", id);
					fd.append("c_name", name);
					fd.append("c_profile", profile);
					fd.append("c_address", address);
					fd.append("c_born",born);
					fd.append("c_create",create);
					fd.append("c_about", about);
					fd.append("c_carrear", carrear);
					fd.append("c_image", image);
					fd.append("c_img", img);
					
					
			$.ajax({
				url:"ajax/updateartist.php",
				type:"POST",
				data : fd,
				processData:false,
				contentType:false,
				success:function(resp){
					console.log(resp);
					//window.location.href = 'artist_table.php';
				}
			})
		});
	
	})
	
	
	// <--update end -->
</script>
</body>
</html>
