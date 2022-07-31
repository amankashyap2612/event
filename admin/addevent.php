<?php 

	include 'config/conn.php';

//category add krne ka work 
		$catsql = "select * from category";
		$catquery = mysqli_query($conn, $catsql);
//category add krne ka work end
$add=true;
$update =null;
$name =null;
$createdate =null;
$description =null;
$openingdate =null;
$closingdate =null;
$seat =null;
$price =null;
$seat =null;
$feature =null;
$limage =null;
$simage =null;


if(isset($_GET['update'])){
	$update =$_GET['update'];
	print_r($update);
$add =false;	
$sql ="select * from event where eventid = '".$update."'  ";
$query = mysqli_query($conn,$sql);
$result =mysqli_fetch_array($query);

$name =$result['eventname'];
$createdate =$result['createddate'];
$description= trim($result['description']);
$simage =$result['shortimage'];
$limage =$result['largeimage'];
$closingdate=$result['closingdate'];
$openingdate=$result['openingdate'];
$price=$result['price'];
$seat=$result['seat'];
$cat_id=$result['cat_id'];
$feature=trim($result['feature']);
}








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
<div class="row">
	<ul id="bindList">
									
	</ul>
</div>
<div class="form-group row">

				  <div class="col-6">
					 <label for="email">Front Image:</label>	  
						<input type="file" class="form-control" id="sm" placeholder="Image" name="" accept="image/png, image/jpeg, image/webp ">
				  </div>
				  <div class="col-6">
					<label for="email">Back Image:</label>
					<input type="file" class="form-control" id="dm" placeholder="Image" name="" accept="image/png, image/jpeg, image/webp">
				  </div>
				</div>
				<div class="row">
					<div class="col-6">
						<!--category ke option add krne ka work-->
				<div class="col">
					<label for="name" class="mr-sm-2"> select category</label>
					<select id="cat" class="form-control">
						<option value=""><?php if($add){
								?>select Category
							<?php
						}else{
							?><?php echo $cat_id;?>
							<?php
						}?></option>
							<?php
								while($row = mysqli_fetch_array($catquery)){
									?>
										<option value=" <?php echo $row['id']; ?>"><?php echo $row ['name'] ;?>
										</option>
										
									<?php
								}
							print_r($desctiption);
							
							?>
					</select>
				</div>
				
				
<!--category ke option add krne ka work end-->	
					</div>
					<div class="col-6">
					
									 <label for="name" class="mr-sm-2">Select Artists</label>
									<div class="input_wrap">
										<div>
											<input type="text" value=""  class="form-control" id="artist_id" placeholder="Search Artist" oninput="searchArtists(this)">
										</div>
										<div class="artist_list">
											<ul id="list_search">
												
											</ul>
										</div>
									</div>
								</div>
				</div>
				<div class="row">
					<div class="col-6">
						<div class="form-group">
						  <label for="email">Event Name:</label>
						  <input type="Name" class="form-control" id="name" value="<?php echo $name?>" placeholder="Enter Name" name="email">
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
						  <label for="email">Price:</label>
						  <input type="Price" class="form-control" id="price"  value="<?php echo $price?>" placeholder="Enter Price" name="email">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-6">
					  <label for="">Opening Date:</label>
					  <input type="datetime-local" class="form-control" id="open"  value="<?php echo $openingdate?>" placeholder="Enter email" name="email">
					</div>
					<div class="form-group col-6">
					  <label for="">Closing Date:</label>
					  <input type="datetime-local" class="form-control" id="close"  value="<?php echo $closingdate?>" placeholder="Enter email" name="email">
					</div>
					<div class="form-group col-6">
					  <label for="">Created Date:</label>
					  <input type="datetime-local" class="form-control" id="create" value="<?php echo $createdate?>" placeholder="Enter email" name="email">
					</div>
					<div class="form-group col-6">
					  <label for="email">Seat:</label>
					  <input type="text" class="form-control" id="seat"  value="<?php echo $seat?>" placeholder="Enter email" name="email">
					</div>
				</div>
				<div class="form-group">
				  <label >Feature:</label>
				  <input type="text" class="form-control" id="feature"  value="<?php echo $feature?>" placeholder="Enter Feature" >
				</div>
				<div class="form-group">
				  <label >Description:</label>
				  <textarea  id="description"  ></textarea>
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
CKEDITOR.replace('description');
CKEDITOR.instances['description'].setData("<?php echo $description?>")
CKEDITOR.replace('feature');
CKEDITOR.instances['feature'].setData("<?php echo $feature?>")
$(document).ready(function(){
	$("#submit").click(function(){
		
		
		var listEl = $("#bindList li");
				var arr = [...listEl];
				// var artArr = [];
				// arr.forEach((item, index) => {
					// artArr.push(item.getAttribute('data-id'));
					
				// });
				// console.log(artArr);
				var artArr = '';
				arr.forEach((item, index) => {
					if(artArr == ''){
						var com = '';
					} else { com = ','}
					artArr += com + item.getAttribute('data-id');
				});
				console.log(artArr);
		
		
		
		
		
			
	var name =$("#name").val();
	var description = CKEDITOR.instances["description"].getData();
	var feature = CKEDITOR.instances["feature"].getData();
	var create =$("#create").val();
	var close =$("#close").val();
	var open =$("#open").val();
	var cat =$("#cat").val();
	var seat =$("#seat").val();
	var price =$("#price").val();
	var fimage=$("#sm")[0].files[0];
	var dimage=$("#dm")[0].files[0];


	// console.log(name);
	// console.log(feature);
	// console.log(description);
	 console.log(create);
	 console.log(close);
	console.log(open);


	var obj=new FormData();
			obj.append('t_name',name);
			obj.append('t_description',description);
			obj.append('t_feature',feature);
			obj.append('t_create',create);
			obj.append('t_open',open);
			obj.append('t_close',close);
			obj.append('t_cat',cat);
			obj.append('t_price',price);
			obj.append('t_seat',seat);
			obj.append('t_fimage',fimage);
			obj.append('t_dimage',dimage);
			obj.append('t_artArr',artArr);
		

console.log(obj);



$.ajax({
				url:"ajax/eventservice.php",
				type:"POST",
				data:obj,
				processData:false,
				contentType:false,
				success:function(resp){
					console.log(resp);
				}
			})


})



 
 

// input field me artist ko add krwane ka work

	$(document).on('click', '.list_item', function(){
					var id = $(this).data('id');
					var name = $(this).find('h4').html();
					var path = $(this).find('img').attr('src');
					
					//$("#artist_id").val(name);
					var el = "<li data-id='"+id+"'>";
								el += "<div>";
								el += "<img width='50px' src='"+path+"'/>";
								el += "<h4>"+name+"</h4>";
								el += "<span style='cursor:pointer;'>X</span></div></li>";
					$("#bindList").append(el);
				});
				$(document).on('click', '#bindList li span', function(){
					var el  = $(this).parents('li').remove();
					console.log(el);
				});
});

// input field me artist ko add krwane ka work

function searchArtists(event){
			var searchVal = event.value;
			$("#list_search").html("");
			$.ajax({
					url : "ajax/searchArtists.php",
					type : "POST",
					data : {s_val:searchVal},
					success : function(resp){
						if(resp != 0){
							var searchdata = JSON.parse(resp);
							//console.log(searchdata);
							searchdata.forEach((item, index) => {
								var el = "<li data-id='"+item.artid+"' class='list_item'><div>";
								el += "<img width='50px' src='img/artistphoto/"+item.image+"' /></div><div>";
								el += "<h4>"+item.name+"</h4>";
								el += "<p>"+item.profile+"</p></div></li>";
								$("#list_search").append(el);
							});
						} else {
							$("#list_search").html("");
						}
						
					}
			})
		}
// input field me artist ko add krwane ka work end
</script>



<script>
$(document).ready(function(){
		$("#update").click(function(){
		
		
	var id="<?php echo $update?>";	
	var name =$("#name").val();
	var description = CKEDITOR.instances["description"].getData();
	var feature = CKEDITOR.instances["feature"].getData();
	var create =$("#create").val();
	var close =$("#close").val();
	var open =$("#open").val();
	var cat =$("#cat").val();
	var seat =$("#seat").val();
	var price =$("#price").val();
	var simage=$("#sm")[0].files[0];
	var simg = '<?php echo $simage?>';
	var limage=$("#dm")[0].files[0];
	var limg = '<?php echo $limage?>';

 
 console.log(id,name,description,feature,create,close,open,cat,seat,price,simage,simg,limage,limg);
 
	var fd = new FormData();
					console.log(fd);
					fd.append("c_id", id);
					fd.append("c_name", name);
					fd.append("c_description", description);
					fd.append("c_feature", feature);
					fd.append("c_create",create);
					fd.append("c_close",close);
					fd.append("c_open", open);
					fd.append("c_cat", cat);
					fd.append("c_seat", seat);
					fd.append("c_price", price);
					fd.append("c_simage", simage);
					fd.append("c_limage", limage);
					fd.append("c_simg", simg);
					fd.append("c_limg", limg);
 
 $.ajax({
				url:"ajax/eventupdate.php",
				type:"POST",
				data : fd,
				processData:false,
				contentType:false,
				success:function(resp){
					console.log(resp);
					//window.location.href = 'event_table.php';
				}
			})
 
 	});
 
});


</script>
</body>
</html>
