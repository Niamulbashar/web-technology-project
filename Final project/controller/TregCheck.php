<?php
	session_start();

	if(isset($_POST['signup'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		$dob = $_POST['dob'];
		$conn = mysqli_connect('localhost', 'root', '','webtech');

		if($username == "" || $password == "" || $email == "" || $gender == "" || $dob == ""){
			echo "null value found...";
		}else{

			$sql= "select * from users where username like '%{$username}%'";
			$sqle="select * from users where email like '%{$email}%'";
			
	$result = mysqli_query($conn, $sql);
	$resulte = mysqli_query($conn, $sqle);

			if ($row = mysqli_fetch_assoc($result)) {
						$response = 	"The username 
							{$row['username']}
							 is taken !
						";
						
						
				echo $response;		
			}

			if ($r = mysqli_fetch_assoc($resulte)) {
				 $re = 	"The email
							{$r['email']}
							 is already registered! !
						";
				echo $re;
			}
			else{




			if($password == $repass){
				
				$user = ['username'=> $username, 'password'=> $password, 'email'=>$email];
				
				$conn = mysqli_connect('localhost', 'root', '','webtech');
				$sql = "insert into users values('', '{$username}', '{$password}', '{$email}', '{$gender}', '{$dob}')";
				
				if(mysqli_query($conn,$sql)){
					
					header('location: ../view/Tlogin.html');
					
				}else{
					
					echo "error..try again";
				}

				
			}else{
				echo "password & confirm password mismatch...";
			}
		 }
		}
	}


?>