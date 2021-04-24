<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Hotel Online Reservation</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
		<script type="text/javascript">
function validate() {
 var name = document.forms["myform"]["name"].value;
 if(name==""){
 alert("Please enter the name");
 return false;
 }
 var email = document.forms["myform"]["email"].value;
 if(email==""){
 alert("Please enter the email");
 return false;
 }else{
 var re = /^(?:[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;
 var x=re.test(email);
 if(x){
 }else{
 alert("Email id not in correct format");
 return false;
 } 
 } 
 var mobile = document.forms["myform"]["mobile"].value;
 if(mobile==""){
 alert("Please enter the mobile");
 return false;
 }else{
 if(isNaN(mobile)){
 alert("Mobile number not valid");
 return false;
 }
 } 
 var address = document.forms["myform"]["address"].value;
 if(address==""){
 alert("Please enter the address");
 return false;
 }
}

</script>
	</head>
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" >Hotel Online Reservation</a>
			</div>
		</div>
	</nav>	
	<ul id = "menu">
		<li><a href = "index.php">Home</a></li> |
		<li><a href = "aboutus.php">About us</a></li> |
		<li><a href = "contactus.php">Contact us</a></li> |
		<li><a href = "gallery.php">Gallery</a></li> |
		<li><a href = "dineandlounge.php">Dine and Lounge</a></li> |			
		<li><a href = "reservation.php">Make a reservation</a></li> |
		<li><a href = "rulesandregulation.php">Rules and Regulation</a></li>
	</ul>
	<div style = "margin-left:0;" class = "container">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<strong><h3>CONTACT US</h3></strong>
				<center>
				<p>Contact No: +8800000000000</p>
				<p>Email: rooms@tourbuddy.com</p>
				
				</center>
			</div>
		</div>
	</div>
	<br />
	<br />
	<div style = "text-align:right; margin-right:10px;" class = "navbar navbar-default navbar-fixed-bottom">
		<label>Tour Buddy</label>
	</div>
	<center>

<h3>Send Mail To ADMIN</h3>
<form name="myform" action="welcome.php" onsubmit="return validate()" method="post">
Name : <input type="text" name="name"/><br>
Email : <input type="text" name="email"/><br>
Mobile : <input type="text" name="mobile"/><br>
Message : <textarea name="address"></textarea><br>
<input type="submit" value="Submit">
</form>
</center>
</body>
<script src = "../scripts/jquery.js"></script>
<script src = "../scripts/bootstrap.js"></script>	
</html>