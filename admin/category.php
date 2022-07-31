<?php
include 'config/conn.php';
$add= true;
$name =null;
$image =null;
$date =null;


if(isset($_GET['update'])){
$id =$_GET['update'];
$add=false;
$sql ="select * from category where id ='".$id."' ";
$result=mysqli_query($conn,$sql);
$res=mysqli_fetch_array($result);

$name =$res['name'];
$image =$res['image'];
$date =$res['createddate'];

}

?>
<!DOCTYPE html>
<html lang="en">
	<?php include 'include/head.php';?>
<style>

</style>
<body class="cat">
<div class="kkti">
	
  <div class="form-group">
    <label for="exampleInputEmail1">Enter Category photo</label>
    <input type="file" class="form-control" id="image" placeholder="Image"  value ="<?php echo $image ?>" name="" accept="image/png, image/jpeg, image/webp ">zz
  </div>

	
  <div class="form-group">
    <label for="exampleInputEmail1">Enter Category Name</label>
    <input type="email" class="form-control" value="<?php echo $name?>" id="cat" aria-describedby="emailHelp" placeholder="Enter Category Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Created Date</label>
    <input type="date" class="form-control" id="date" placeholder="enter Date" value="<?php echo $date?>">
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



  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
<script>
$(document).ready(function(){
	$("#submit").click(function(){
		
		var cat =$("#cat").val();
		var date =$("#date").val();
		var image=$("#image")[0].files[0];

		var obj = new FormData();
			obj.append('cate',cat);
			obj.append('date',date);
			obj.append('T_photo',image);
		
		console.log(obj);
		
		
		
	$.ajax({
				type:'POST',
				url:'ajax/addcategory.php',
				data:obj,
				processData:false,
				contentType:false,
				success:function(resp){
					if(resp = 1){
					}
				}
			});
		
		

		
	});
	
		

});
</script>
</body>
</html>
