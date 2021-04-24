<?php
	session_start();

	if(isset($_POST['pass'])){

		$name=$_SESSION['username'];
		$password = $_POST['pass'];
		$newpassword= $_POST['nPass'];
		$enewpass=$_POST['repass'];

		
		
		
			
				$conn = mysqli_connect('localhost', 'root', '','webtech');
		if ($password!=$newpassword || $enewpass =$newpassword  ) {
				
				


				$sql = "update users SET password='{$newpassword}' WHERE username='{$name}'";
				
				if(mysqli_query($conn,$sql)){
					
				header('location: ../view/Tdashboard.php');
					
				}else{
					
					echo "error..try again";
				}
			}

		
		else{
   			     echo "error..try again";
				}
		
	
	
}
	?>