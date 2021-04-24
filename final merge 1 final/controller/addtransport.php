<?php
	session_start();

	if(isset($_POST['id'])){

		$id = $_POST['id'];
		
		
		echo "hi";
			
				$conn = mysqli_connect('localhost', 'root', '','webtech');

$sql = "update transports SET status='booked' WHERE id='$id'";
				//$sql = "UPDATE transports SET status='booked' WHERE id='11'";
				
				if(mysqli_query($conn,$sql)){
					
					header('location:../view/TroutePrice.php');
					
				}else{
					
					echo "error..try again";
				}

	}