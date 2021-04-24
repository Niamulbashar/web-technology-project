<!DOCTYPE html>
<?php require_once "../model/connect.php"?>
<html lang = "en">
	<head>
		<title>Hotel Online Reservation</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
		
		<script type="text/script">
			function validate(){
				var username = document.getElementById("username");
				var password = document.getElementById("password");
				
				if(username.value == "" || password.value=""){
					alert("No blank spaces are allowed!");
				}
				else{
					
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
	<div class = "container">
		<br />
		<br />
		<div class = "col-md-4"></div>
		<div class = "col-md-4">
			<div class = "panel panel-danger">
				<div class = "panel-heading">
					<h4>Administrator</h4>
				</div>
				<div class = "panel-body">
					<form method = "POST" onsubmit="validate()">
						<div class = "form-group">
							<label>Username</label>
							<input type = "text" id = "username" class = "form-control" required = "required" />
						</div>
						<div class = "form-group">
							<label>Password</label>
							<input type = "password" id = "password" class = "form-control" required = "required" />
						</div>
						<br />
						<div class = "form-group">
							<button name = "login" onclick="validate()" class = "form-control btn btn-primary"><i class = "glyphicon glyphicon-log-in"> Login</i></button>
						</div>
					</form>
					<?php require_once '../model/login.php'?>
				</div>
			</div>
		</div>
		<div class = "col-md-4"></div>
	</div>	
	<br />
	<br />
	<div style = "text-align:right; margin-right:10px;" class = "navbar navbar-default navbar-fixed-bottom">
		<label>Tour Buddy</label>
	</div>
</body>
<script src = "../scripts/jquery.js"></script>
<script src = "../scripts/bootstrap.js"></script>	
</html>