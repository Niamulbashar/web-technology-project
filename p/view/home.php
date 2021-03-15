<?php 
	session_start();

	
?> 

<!DOCTYPE html>
<html>
<head>
	<title>Renter</title>
</head>
<body>
	<form method="post" action="../controller/regCheck.php">
	
			
			<table border='6'  height='800px' width='1900px' >
				
             <tr>
                <td colspan="3" rowspan='3' align='center'>  <h1>Welcome home, <a href="../view/profile.php"> <?php print_r(  $_SESSION['username']); ?> </a> </h1></td>
               

				<td rowspan='2'>
                   pic
               </td>
				<tr></tr>
             <tr>
					
                   <td colspan="4"align='center'>
                     <a href="../controller/logout.php"> Logout</a>

         

                      </td>
					  

             </tr>

              
                <tr></tr>
            
               
                     <tr>
					 <td colspan="4" rowspan='' align='left'> <h2>What are  you looking for? </h2> <br>
					
					 <ul>
                            
							<a href="transport.php"><h3>Transportation </h3></a>
					  
					  
						   <a href="hotel.php"><h3> Hotel </h3></a></ul>

					</td>		

				      
                
                     

						
                        </tr>	
                      
                        
                      
                    
			
					
					    
						
				
			



			</table>
		
	</form>
</body>
</html>


<?php
	include('footer.php');
?>
