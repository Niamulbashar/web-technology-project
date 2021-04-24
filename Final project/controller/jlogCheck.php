<?php

	session_start();

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == "" || $password == ""){
			echo "null input...";
		}else{

			$conn = mysqli_connect('localhost', 'root', '','webtech');
			$sql = "select * from users where username='{$username}' and password='{$password}'";
	        $result = mysqli_query($conn, $sql);
	        $row = mysqli_fetch_assoc($result);

			if(count($row) > 0){

				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				header('location: ../view/dashboard.php');
			}else{
				echo "invalid user...";
			}
		}
	}


?>