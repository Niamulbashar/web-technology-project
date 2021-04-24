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
	        
	       

			if( $row = mysqli_fetch_assoc($result)){
				
				//$_SESSION['flag'] = true;
				$_SESSION['username'] = $username;
				header('location:../view/Tdashboard.php');
			}else{
				echo "invalid user...";
			}
		}
	}


?>