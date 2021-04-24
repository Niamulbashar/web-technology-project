<?php
	session_start();
if(isset($_POST['idh'])){

		$id = $_POST['idh'];
		
		
		
			
				$conn = mysqli_connect('localhost', 'root', '','webtech');

$sql = "update hotel SET status='booked' WHERE r_id='$id'";
				//$sql = "UPDATE transports SET status='booked' WHERE id='11'";
				
				if(mysqli_query($conn,$sql)){
					
					header('location:../view/Thotelprice.php');
					
				}else{
					
					echo "error..try again";
				}

		
		}