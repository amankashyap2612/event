<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/show.css">
  <style>

.cursor .cursor--small,
.cursor .cursor--large,
.cursor .cursor--text {
  position: fixed;
  left: 0;
  top: 0;
  transform: translate(-50%, -50%);
  border-radius: 50%;
  width: var(--cursor-size);
  height: var(--cursor-size);
  mix-blend-mode: difference;
  pointer-events: none;
  user-select: none;
}


.cursor .cursor--small {
  --cursor-size: 20px;
  background: #fff;
}
.cursor .cursor--large {
  --cursor-size: 60px;
  border: 2px solid #fff;
}

  </style>
</head>
<body class="secc22"  onload="GenerateCaptcha();">


<div class="cursor" id="cursor">
  <div class="cursor--small"></div>
  <div class="cursor--large"></div>
  <div class="cursor--text">
    
  </div>
</div>

<section class=" secform " id="hide">
	<div class="ggyt">
		<div class="mauto">
			<div class="d-flex">
				<div class="logoevent">
					<img src="img/tom-and.gif"/>
				</div>
				<div class="regs">
					<h1>Welcome Back</h1>
				</div>
			</div>
			<hr style="border-bottom: 3px solid white;">
			<div class="">
				<div class="container">
				  <div action="" >
				  <div id="error" style="color:white;"></div>
					<div class="form-group">
					  <label for="email"> Email</label>
						<input type="" autocomplete="off" class="form-control" id="uemail" placeholder="Enter email" name=""/>
					</div>
					 <div class="form-group">
						 <div id="error2" style="color:white;"></div>
						<label for=""> Password:</label>
					  <input type="text" class="form-control" autocomplete="off" id="upass" placeholder="Enter Password" name=""  maxlength="20"/>
					</div>
					<div style="color:white;" >
						 <div id="error3" style="color:white;"></div>
						<input type="text" id="txtCompare"  style="color:white;" placeholder="Enter Captcha"/>  
						<input type="text" id="txtCaptcha" style="text-align: center; border: none; font-weight: bold; font-size: 20px; font-family: Modern; color:white;" />  
						<input type="button" id="btnrefresh" value="Refresh" onclick="GenerateCaptcha();" style="color:white;" />  
						<input id="btnValid" type="button" value="Check" onclick="alert(ValidCaptcha());"  style="color:white;"/>  
						<br />  
						<br />  
					</div>
					<button type="submit" class="btn btn-primary" id="sign">Submit</button>
					<div id="some_div">
					</div>
					<div>
						<a style="font-size:15px; margin-top:15px; " href="#" id="register">Not Register ? Register Here</a>
						<p style=" font-size:12px; text-align:center; margin:15px 0;">By continuing, you agree to Meesho’s <br><span style ="color:rgb(244, 51, 151);  font-size:12px;">Terms & Conditions</span>and<span style ="color:rgb(244, 51, 151); font-size:12px;">Privacy Policy</span></p>
					</div>
				  </div>
				</div>
			</div>
		</div>
	</div>
</section>








<section class="body secform dn " id="shw">
	<div class="ggyt">
		<div class="">
				<div class="regs">
					<h1>Registration Form</h1>
				</div>
			<hr style="border-bottom: 3px solid white;">
			<div class="sign">
<div class="container ">
  <div action="" class="">
   <div class="form-group">
	 <label for="email">User Image:</label>
	  <input type="file" class="form-control" id="pimage" placeholder="Image" name="" accept="image/png, image/jpeg, image/webp "/>
	  <input type="hidden" class="form-control" id="hideimage" placeholder="Image" name=""/>
  </div>
    <div class="row">
	   <div class="form-group col-6">
		  <label for="name"> Name:</label>
		  <input type="text" class="form-control" autocomplete="off"  id="name" placeholder="Enter Name" name="name"/>
		</div>
		<div class="form-group col-6">
		  <label for="email"> Email</label>
		  <input type="" class="form-control" autocomplete="off"  id="email" placeholder="Enter email" name=""/>
		</div>
   </div>
		<div class="form-group">
		  <label for=""> Mobile</label>
		  <input type="text" class="form-control"  autocomplete="off" id="mobile" placeholder="Enter Mobile" name="" required maxlength="10" pattern="[0-9]{10}"/>
		</div>
		<div class="form-group">
		  <label for=""> Address:</label>
		  <input type="text" class="form-control" autocomplete="off"  id="address" placeholder="Enter Address" name="">
		</div>
		<div class="form-group">
		  <label for=""> Password:</label>
		  <input type="text" class="form-control" autocomplete="off" id="pass" placeholder="Enter Password" name="" required maxlength="20"/>
		</div>
		<button type="submit" class="btn btn-primary" id="submit">Submit</button>
		<p style=" font-size:12px; text-align:center; margin:15px 0;">By continuing, you agree to BookMyShow <br><span style ="color:rgb(244, 51, 151);  font-size:12px;">Terms & Conditions</span>and<span style ="color:rgb(244, 51, 151); font-size:12px;">Privacy Policy</span></p>
  </div>
</div>
			</div>
		</div>
	</div>
</section>
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/circletype@2.3.0/dist/circletype.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
    <script type="text/javascript">  
        /* Function to Generat Captcha */  
        function GenerateCaptcha() {  
            var chr1 = Math.ceil(Math.random() * 10) + '';  
            var chr2 = Math.ceil(Math.random() * 10) + '';  
            var chr3 = Math.ceil(Math.random() * 10) + '';  
  
            var str = new Array(4).join().replace(/(.|$)/g, function () { return ((Math.random() * 36) | 0).toString(36)[Math.random() < .5 ? "toString" : "toUpperCase"](); });  
            var captchaCode = str + chr1 + ' ' + chr2 + ' ' + chr3;  
            document.getElementById("txtCaptcha").value = captchaCode  
        }  
  
        /* Validating Captcha Function */  
        function ValidCaptcha() {  
            var str1 = removeSpaces(document.getElementById('txtCaptcha').value);  
            var str2 = removeSpaces(document.getElementById('txtCompare').value);  
  
            if (str1 == str2) return true;  
            return false;  
        }  
  
        /* Remove spaces from Captcha Code */  
        function removeSpaces(string) {  
            return string.split(' ').join('');  
        }  
    </script>  
  
  
  
  <script>console.clear();

 const elem = document.getElementById('cursor');

const cursorOuter = document.querySelector(".cursor--large");
const cursorInner = document.querySelector(".cursor--small");
const cursorTextContainerEl = document.querySelector(".cursor--text");


let mouse = {
  x: -100,
  y: -100
};

document.body.addEventListener("pointermove", updateCursorPosition);

function updateCursorPosition(e) {
  mouse.x = e.pageX;
  mouse.y = e.pageY;
}

function updateCursor() {
  gsap.set([cursorInner, cursorTextContainerEl], {
    x: mouse.x,
    y: mouse.y
  });

  gsap.to(cursorOuter, {
    duration: 0.15,
    x: mouse.x,
    y: mouse.y
  });

  

  requestAnimationFrame(updateCursor);
}

updateCursor();





 </script>
<script>
$(document).ready(function(){
	
		$("#register").click(function(){
			$("#shw").show();
			$("#hide").hide();
		});
	
			$("#submit").click(function(){
			
			var email = $("#email").val();
			var mobile = $("#mobile").val();
			var name = $("#name").val();
			var address = $("#address").val();
			var pass = $("#pass").val();
			var image=$("#pimage")[0].files[0];
			
			 console.log(email);
			 console.log(name);
			 console.log(address);
			 console.log(pass);
			 console.log(mobile);
			 console.log(image);
			
			
			var obj=new FormData();
			obj.append('T_email',email);
			obj.append('T_mobile',mobile);
			obj.append('T_name',name);
			obj.append('T_address',address);
			obj.append('T_pass',pass);
			obj.append('T_photo',image);
			 console.log(obj);


	$.ajax({
				type:'POST',
				url:'admin/ajax/userinsert.php',
				data:obj,
				processData:false,
				contentType:false,
				success:function(resp){
					if(resp == 1){
						//$("#hide").show();
						//$("#shw").hide();
						$("#name").val('');
						$("#email").val('');
						$("#mobile").val('');
						$("#pass").val('');
						$("#pimage").val('');
						$("#address").val('');
					}else if(resp==3){
						swal({
					  title: "Good job!",
					  text: "You clicked the button!",
					  icon: "success",
					  button: "Aww yiss!",
					});
							}
						
				}
			});

		});
});
</script>

<script>
	var login_attempts=3;
	$(document).ready(function(){
		$("#sign").click(function(){
		
		
			$("#uemail").change(function(){
			$("#error").html('');
		});
		$("#upass").change(function(){
			$("#error2").html('');
		});
		$("#txtCompare").change(function(){
			$("#error3").html('');
		});
			
			
			 var email = $("#uemail").val();
			 var pass = $("#upass").val();
			 var captcha = $("#txtCompare").val();
			
			 console.log(email)
			 console.log(pass)
			 
					
							
			 
			 
			 
			 var obj={
				 T_email:email,
				 T_pass:pass,
			}
			 
			 
			 
			 if(email == ""){
				$("#error").html("Please Enter Your email ");
				return false;
			}
			else if(pass == ""){
				$("#error2").html("Please Enter Your password");
				return false;
			}
			else if(captcha == ""){
				$("#error3").html("Please Enter Your Captcha and check Captcha First !");
				return false;
			}
			else{
			}	
			 
			 
			 
			
	$.ajax({	
				url:"admin/ajax/loginsession.php",
				type:'POST',
				data:obj,
				success:function(resp){
					if(resp == 1){
  window.history.go(-1);
 
 }
 else
 {
  if(login_attempts==0)
  {
   alert("No Login Attempts Available");
  }
  else
  {
   login_attempts=login_attempts-1;
   alert("Login Failed Now Only "+login_attempts+" Login Attempts Available");
   if(login_attempts==0)
   {
    document.getElementById("uemail").disabled=true;
    document.getElementById("upass").disabled=true;
	
	  setTimeout(function(){
          $('#uemail , #upass').prop('disabled', false);
        },30000);
	
// javascript 30 sec countdown work start
			var timeLeft = 30;
    var elem = document.getElementById('some_div');
    
    var timerId = setInterval(countdown, 1000);
    
    function countdown() {
      if (timeLeft == -1) {
        clearTimeout(timerId);
      } else {
        elem.innerHTML = '<span style="color:white;"><h6>Plz Try Again After </span>' + timeLeft + ' <span style="color:white;">Later</span></h6>';
        timeLeft--;
		
		 if (timeLeft < 0) {
    document.getElementById("some_div").innerHTML = "<span style='color:green;'><h5>Now U Can Try Again</span></h5>";
  }
      }
    }

// javascript 30 sec countdown work start

   }
  }
 }
 
 return false;
				}
			})
		});
	});
</script>
</body>
</html>
