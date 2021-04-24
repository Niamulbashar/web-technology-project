<?php
	session_start();

	if(isset($_POST['submit'])){
		
        $username = $_SESSION['username'];
		$frome = $_POST['frome'];
		$too = $_POST['too'];
		$price = $_POST['price'];
		$transport = $_POST['transport'];
		$time = $_POST['time'];
		$status = $_POST['status '];
		
		

		if($transport == "" || $time == ""){
			echo "null value found...";
		}else{
			if($price == 7000){
			
				$conn = mysqli_connect('localhost', 'root', '','webtech');
				$sql = "insert into transports values('', '{$username}', '{$frome}', '{$too}', '{$price}', '{$transport}', '{$time}','{$status}')";
				
				if(mysqli_query($conn,$sql)){
					
					header('location: ../view/dashboard.php');
					
				}else{
					
					echo "error..try again";
				}

		
		}else{
   			     echo "error..try again";
				}
		
	}
	
	}


?>