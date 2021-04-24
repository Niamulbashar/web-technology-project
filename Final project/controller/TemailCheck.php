<?php

	//sleep(3);
	$email= $_REQUEST['email'];
	$conn = mysqli_connect('localhost', 'root', '', 'webtech');
	$sql = "select * from users where email like '%{$email}%'";
	$result = mysqli_query($conn, $sql);

	$r = " ";
	if ($email!=" ") {
		
	if ($row = mysqli_fetch_assoc($result)) {
		$r = 	"
							{$row['email']}
							 is taken
						";
	}else $r ="valid";
	$r.= "<br>";
	echo $r;
	
		
	}else echo "field is emphty !!";
	?>