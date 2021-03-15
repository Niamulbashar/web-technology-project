<?php
	session_start();

	if(isset($_POST['signup'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		$email = $_POST['email'];
		$gender=$_POST['gender'];

		if($username == "" || $password == "" || $email == "" || $gender ==""){
			echo "null value found...";
		}else{
			if($password == $repass){

				$user = ['username'=> $username, 'password'=> $password, 'email'=>$email];
				$formdata = array(
					'username'=> $_POST["username"],
					'password'=> $_POST["password"],
					'email'=> $_POST["email"],
					'gender'=>$_POST["gender"]
					
				 );
				
				$existingdata = file_get_contents('../model/data.json');
				$tempJSONdata = json_decode($existingdata);
				$tempJSONdata[] =$formdata;
				//Convert updated array to JSON
				$jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
				
				//write json data into data.json file
				if(file_put_contents("../model/data.json", $jsondata)) {
					 echo "Data successfully saved <br>";
				 }
				else 
					 echo "no data saved";
				
				$data = file_get_contents("../model/data.json");
				$mydata = json_decode($data);
				
				
				
				 	
				
					//	$_SESSION['username'] = $username ;
					//	$_SESSION['password'] = $password ;
				
						echo "User Id is: " . $user['username'];
						echo "<br>";
						echo "Password is: " . $_SESSION['password'];

			
				 $_SESSION['username'] = $user['username'];
				print_r ($_SESSION['current_user']);
				

				header('location: ../view/home.php');
			}else{
				echo "password & confirm password mismatch...";
			}
		}
	}


?>