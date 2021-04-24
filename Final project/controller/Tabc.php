<?php

	
	$name = $_REQUEST['name'];
	$conn = mysqli_connect('localhost', 'root', '', 'webtech');
	$sql = "select * from users where username like '%{$name}%'";
	$result = mysqli_query($conn, $sql);

	$response = " ";
	if ($name!="") {
		
	
	if ($row = mysqli_fetch_assoc($result)) {
		$response = 	"
							{$row['username']}
							 is taken
						";
	}else $response =" valid";

	$response .= "<br>";
	
	echo $response;	
	}else echo "field is emphty !!";
	?>