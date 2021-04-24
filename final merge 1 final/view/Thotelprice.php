<!DOCTYPE html>
<html lang="en">
<head><script type="text/javascript" src="../scripts/TdashScript.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home --Welcome--</title>
</head>
<body>
    <table border="1" width="100%">
        <tr>
            
            <td align="center" colspan="3"><h1><label for="" style="color: red;">Hotel Informations!</label></h1> <a href="Tdashboard.php">Back</a></td>
        </tr>
        <tr >
            <td >
                <b><h2>User Account</h2></b>
                <hr>
                <ul>
                    <li><a href="Tdashboard.php">Dashboard</a></li>
                    <li><a href="TuserProfile.php">Profile</a></li>

                    <li><a href="TroutePrice.php">Route List And Price</a></li>
					<li><a href="TUserchange_password.html">Change Password</a></li>
                    <li><a href="Tlogin.html">Logout</a></li>
                </ul></td>

         
				
    <td align="center" height="390px">
    
       
               
<?php 
    $conn = mysqli_connect('localhost', 'root', '','webtech');      
    $sql = "select * from hotel ";
    $result = mysqli_query($conn, $sql);
    
     
         $table=" <table border='1''>
            <h1>ROUTE LIST AND PRICE </h1>
            <tr>
    
                <tr>
          
                   
                    <td>ID</td> 
                    <td>room type</td>
                    <td>availablity date</td>
                    <td>PRICE</td>
                    <td>status</td>
                </tr>";
        
    while ($row = mysqli_fetch_assoc($result)) 
    {
        $table.="
        
            
            <tr>
               <td>{$row['r_id']}</td> 
                <td>{$row['room _type']}</td> 
                <td>{$row['availablity_date']}</td> 
        <td>{$row['price']}</td> 
        <td>{$row['status']}</td> 
      
            </tr>";
            
            
    }
    
   $table.="</table>";
    
    
    echo $table;
    
?>   
            <!--  -->

           
                
<br> <h3> Enter a ID to book</h1>
  <form method="post" action="../controller/addhotel.php">
    <input type="text" name="idh" id="idh" />
    <input type="submit" name="search" value="book" >
  </form>
</td>  </tr>

  <div id='searchresult'></div>

            <td colspan="2" rowspan="2"><b></td>  
    </form>
   
         <td></b></td>
        </tr>
        <tr>
           
        <tr>
            <td colspan="3" align="center">Copyright &COPY 2021</td>
        </tr>
    </table>
</body>
</html>