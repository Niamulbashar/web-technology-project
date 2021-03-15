<?php

	session_start();

	if(isset($_POST['submit'])){
		$user_validation_checker=FALSE;
		$username = $_POST['username'];
		$password = $_POST['password'];
		
	$user = ['username'=> $username, 'password'=> $password,/* 'email'=>$email*/];
		$formdata = array(
			'username'=> $_POST["username"],
			'password'=> $_POST["password"],
			//'email'=> $_POST["email"]
			
		 );

		$userFile = fopen("../model/data.json", "r");
		$userData = fread($userFile, filesize('../model/data.json'));
		//$data = file_get_contents('../model/data.json');
		$existingdata[]= json_decode($userData, true);
      
		if($username == "" || $password == ""){
			echo "null input...";
		}else{

			foreach ($existingdata as $key => $value) {
				foreach ($value as $k => $v) {	
			 
			if($v['username'] == $_POST['username'] && $v['password'] == $_POST['password']){
				$_SESSION['flag'] = true;
				$user_validation_checker=true;
				//print_r($value['username']);
								
				$_SESSION['username'] =$user['username'];
				echo $formdata['username'];
				header('location: ../view/home.php');
			}else{
				
				
			}
		  }
		 }	

		}
		echo "invalid user";
	}


?>