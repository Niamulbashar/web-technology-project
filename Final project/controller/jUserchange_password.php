<?php
	session_start();

	if(isset($_POST['submit'])){
		$username= $_SESSION['username'];
        $password= $_SESSION['password'];
		$npass = $_POST['npass'];
		$repass = $_POST['repass'];
		
		
		

		if($npass == "" || $repass == ""){
			echo "null value found...";
		}else{
			if($npass == $repass){
				
				$user = ['username'=> $username, 'password'=> $password ,'repass'=> $repass];
				
				$conn = mysqli_connect('localhost', 'root', '','webtech');
				$sql = "update users set password='{$repass}' where users . username='{$username}'";
				
				if(mysqli_query($conn,$sql)){
					
					header('location: ../view/dashboard.php');
					
				}else{
					
					echo "error..try again";
				}

				
			}else{
				echo "password & confirm password mismatch...";
			}
		}
	}


?>
