<?php
	session_start();

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		$dob = $_POST['dob'];
		

		if($username == "" || $password == "" || $email == "" || $gender == "" || $dob == ""){
			echo "null value found...";
		}else{
			if($password == $repass){
				
				$user = ['username'=> $username, 'password'=> $password, 'email'=>$email];
				
				$conn = mysqli_connect('localhost', 'root', '','webtech');
				$sql = "insert into users values('', '{$username}', '{$password}', '{$email}', '{$gender}', '{$dob}')";
				
				if(mysqli_query($conn,$sql)){
					
					header('location:../view/jlogin.html');
					
				}else{
					
					echo "error..try again";
				}

				
			}else{
				echo "password & confirm password mismatch...";
			}
		}
	}


?>