<?php
include 'admin/config/conn.php';

$sql ="select * from User ";
$query =mysqli_query($conn,$sql);
$result=mysqli_fetch_array($query);

print_r($result);

?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="login_style.css">
<script type="text/javascript">
var login_attempts=3;
function check_form()
{
 var name=document.getElementById("name").value;
 var pass=document.getElementById("pass").value;
 if(name=='<?php echo $result['name'];?>' && pass=='<?php echo $result['password'];?>')
 {
  window.location.href = 'bookmyshow.php';
  document.getElementById("name").value="";
  document.getElementById("pass").value="";
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
    document.getElementById("name").disabled=true;
    document.getElementById("pass").disabled=true;
   }
  }
 }
 
 return false;
}	
</script>
<style>
body
{
 text-align:center;
 width:100%;
 margin:0 auto;
 padding:0px;
 font-family:helvetica;
}
#wrapper
{
 text-align:center;
 margin:0 auto;
 padding:0px;
 width:995px;
}
#form1
{
 background-color:white;
 width:380px;
 margin-left:305px;
 box-shadow:0px 0px 10px 0px #D8D8D8;
}
#form1 p
{
 color:#FA8258;
 font-weight:bold;
}
#form1 #login_label
{
 color:#FA8258;
 padding:20px;
 font-size:25px;
 border-bottom:1px solid #E6E6E6;
 font-weight:bold;
}
#form1 input[type="text"],input[type="password"]
{
 width:300px;
 height:40px;
 padding-left:10px;
 margin-top:10px;
 border:1px solid #D8D8D8;
}
#form1 input[type="submit"]
{
 margin-top:10px;
 width:300px;
 height:40px;
 background-color:#FA8258;
 border:none;
 color:white;
 box-shadow:0px 3px 0px 0px #FE642E;
 border-radius:3px;
 font-weight:bold;
}
</style>
</head>
<body>
<div id="wrapper">

<form id="form1" method="post" action="" onsubmit="return check_form();">
 <p id="login_label">USER LOGIN</p>
 <input type="text" id="name" placeholder="Enter Username">
 <br>
 <input type="text" id="pass" placeholder="Enter Password">
 <br>
 <input type="submit" value="SUBMIT FORM">
 <p>Username : talkerscode Password : talkerscode</p>
 <br>
</form>

</div>
</body>
</html>