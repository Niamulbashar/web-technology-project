<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Hotel Online Reservation</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
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
				<strong><h3>MAKE A RESERVATION</h3></strong>
				<br />
				<?php 
					require_once '../model/connect.php';
					$query = $conn->query("SELECT * FROM `room` WHERE `room_id` = '$_REQUEST[room_id]'") or die(mysql_error());
					$fetch = $query->fetch_array();
				?>
				<div style = "height:300px; width:800px;">
					<div style = "float:left;">
						<img src = "../resources<?php echo $fetch['photo']?>" height = "300px" width = "400px">
					</div>
					<div style = "float:left; margin-left:10px;">
						<h3><?php echo $fetch['room_type']?></h3>
						<h3 style = "color:#00ff00;"><?php echo "Rs. ".$fetch['price'].".00";?></h3>
					</div>
				</div>
				<br style = "clear:both;" />
				<div class = "well col-md-4">
					<form method = "POST" action="#" onsubmit="return validation()" enctype = "multipart/form-data">
						<div class = "form-group">
							<label>Firstname</label>
							<input type = "text" class = "form-control" name = "firstname" id="fname" required = "required" />
							<span id="fname" class="text-danger font-weight-bold"> </span>
						</div>
						<div class = "form-group">
							<label>Middlename</label>
							<input type = "text" class = "form-control" name = "middlename" id="mname" required = "required" />
							<span id="fname" class="text-danger font-weight-bold"> </span>
						</div>
						<div class = "form-group">
							<label>Lastname</label>
							<input type = "text" class = "form-control" name = "lastname" id="lname" required = "required" />
							<span id="lname" class="text-danger font-weight-bold"> </span>
						</div>
						<div class = "form-group">
							<label>Address</label>
							<input type = "text" class = "form-control" name = "address" id="add" required = "required" />
							<span id="add" class="text-danger font-weight-bold"> </span>
						</div>
						<div class = "form-group">
							<label>Contact No</label>
							<input type = "text" class = "form-control" name = "contactno" id="contact" required = "required" />
							<span id="contact" class="text-danger font-weight-bold"> </span>
						</div>
						<div class = "form-group">
							<label>Check in</label>
							<input type = "date" class = "form-control" name = "date"  id="date" required = "required" />
							<span id="date" class="text-danger font-weight-bold"> </span>
						</div>
						<br />
						<div class = "form-group">
							<button class = "btn btn-info form-control" name = "add_guest"><i class = "glyphicon glyphicon-save"></i> Submit</button>
						</div>
					</form>
				</div>
				<div class = "col-md-4"></div>
				
				<?php require_once '../model/add_query_reserve.php'?>
				
			</div>
		</div>
	</div>
	<br />
	<br />
	<div style = "text-align:right; margin-right:10px;" class = "navbar navbar-default navbar-fixed-bottom">
		<label>Tour Buddy</label>
	</div>
	
	<script type="text/javascript">
		function validation(){
			var fname = document.getElementById('fname').value;
			var mname = document.getElementById('mname').value;
			var lname = document.getElementById('lname').value;
			var add = document.getElementById('add').value;
			var contact = document.getElementById('contact').value;
			var date = document.getElementById('date').value;
			
			if(fname == ""){
				document.getElementById('fname').innerHTML = " ** Please fill the First Name field";
				
				return false;
			}
			if(mname == ""){
				document.getElementById('mname').innerHTML = " ** Please fill the First Name field";
				
				return false;
			}
			if(lname == ""){
				document.getElementById('lname').innerHTML = " ** Please fill the First Name field";
				
				return false;
			}
			if(add == ""){
				document.getElementById('add').innerHTML = " ** Please fill the First Name field";
				
				return false;
			}
			if(contact == ""){
				document.getElementById('contact').innerHTML = " ** Please fill the First Name field";
				
				return false;
			}
			if(date == ""){
				document.getElementById('date').innerHTML = " ** Please fill the First Name field";
				
				return false;
			}
		}
	</script>
	
</body>
	
</html>