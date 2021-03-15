
<?php
	$title = "User List Page";
	include('header.php');

	$data = file_get_contents("../model/data.json");
	
	$mydata = json_decode($data,true);

    $name=$_SESSION['username'];;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Renter</title>
</head>
<body>
	<form method="post" action="../controller/regCheck.php">
		<fieldset>
			<legend><h1>Renter</h1></legend>
			<table align='center' height='400px' width='700px'  >
				
             <tr>
                <td> <h1>Personal Information of  <?php echo $_SESSION['username']; ?>  </h1></td>

             <tr>

     
                 
             </tr>

              
                
             
             <tr>
                    <table width='600px' height='200px'  > 

                        <tr>
                            <?php   $c=1;
                                foreach ($mydata as $key => $value)
                                {
                                    
                                    echo "<tr>";
                                    echo"<td>";
                                   

                                    
                                    echo"</td>";
                                    foreach ($value as $k => $v) {
                                        
                                        
                                        if ($v== $name) {
                                            echo' <tr>';   
                                         echo " <td><h3> Name : </h3> </td> " ;echo "<td> <b> $v</b></td>  ";  echo' </tr>';
                                         echo' <tr>';
                                         echo " <td><h3> Email : </h3> </td> "; echo '<td> <b> ';

                                             print_r($value['email']);
                                             echo' </tr>';

                                            echo' </b></td>  <br> ';
                                            echo' <tr>';
                                            echo " <td><h3> Gender :</h3> </td> " ;  echo '<td> <b>';
                                            print_r($value['gender']);
                                           echo'</b></td> <br> ';
                                           
                                           echo' </tr>';  
                                          
                                        }else{ }
                                    }   
                                        
                                
                                } 
                            ?>
                        </tr>
                      

                     </table>
			

						
				</tr>		
                <tr>

                        <td align='right'>
                        <a href="../view/home.php"> Home</a>
                        <a href="../controller/logout.php"> Logout</a>



                        </td>

                 </tr>
			



			</table>
		</fieldset>
	</form>
</body>
</html>


<?php
	include('footer.php');
?>
