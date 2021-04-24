<!DOCTYPE html>
<html lang="en">
<head><script type="text/javascript" src="dTashScript.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home --Welcome--</title>
</head>
<body>
    <table border="1" width="100%">
        <tr>
            
            <td align="center" colspan="3"><h1><label for="" style="color: red;">Transportation Informations!</label></h1> <a href="Tdashboard.php">Back</a></td>
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

         
				
  
    <form>
    <td align="center">
               
<?php 
    $conn = mysqli_connect('localhost', 'root', '','webtech');      
    $sql = "select * from transports ";
    $result = mysqli_query($conn, $sql);
    
     
         $table=" <table border='1''>
            <h1>ROUTE LIST AND PRICE </h1>
            <tr>
    
               <tr>
                      <td>ID</td> 
                      <td>FROM</td>
                      <td>TO</td>
                      <td>PRICE</td>
                      <td>TRANASPORT</td>
                      <td>TIME</td>
                      <td>status</td>
                  </tr>";
        
    while ($row = mysqli_fetch_assoc($result)) 
    {
        $table.="
        
            
            <tr>
                <td>{$row['id']}</td>
                <td>{$row['frome']}</td> 
                <td>{$row['too']}</td> 
                <td>{$row['price']}</td> 
                <td>{$row['transport']}</td> 
                <td>{$row['time']}</td>
              <td> {$row['status']} </td>
               
            </tr>";
            
            
    }
    
   $table.="</table>";
    
    
    echo $table;
    
?> 
           

             </form>
               

  <form  method="post" action="../controller/addtransport.php">
    <br> <h3> Enter a ID to book</h1>
    <input type="text" name="id"  value=""  />
    <input type="submit" name="book" value="book" >
  </form>

  <div id='searchresult'></div></td>
            <td colspan="2" rowspan="2"><b>
  
   
        
        </tr>
        
        <tr>
            <td colspan="3" align="center">Copyright &COPY 2021</td>
        </tr>
    </table>
</body>
</html>