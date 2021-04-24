<?php 


    session_start();
	
	
?>


<!DOCTYPE html>
<html lang="en">
<head><script type="text/javascript" src="../scripts/TdashScript.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home --Welcome--</title>
</head>
<body>
    <table border="1"  width="100%" >
        <tr>
            <td><img src="../assets/Tlogo.png" alt="" height="100" width="200" align="center"></td>
          <!--   <td width="500px"><h1><label for="" style="color: orange;">Transportation Service Provider!</label></h1></td> -->
            <td align="center" colspan ='3'><h1><label for="" style="color: red;">Welcome To User Dashboard!<?php echo $_SESSION['username']; ?> </label></h1> <a href="Tlogin.html">Logout</a></td>
        </tr>
        <tr>
            <td >
                <b><h2>User Account</h2></b>
                <hr>
                <ul>
                    <li><a href="Tdashboard.php">Dashboard</a></li>
                    <li><a href="TuserProfile.php">Profile</a></li>
          
                    <li><a href="TroutePrice.php">Route List And Price</a></li>
                    <li><a href="Thotelprice.php">Hotel List And Price</a></li>
					<li><a href="TUserchange_password.html">Change Password</a></li>
					
                    <li><a href="Tlogin.html">Logout</a></li>
                </ul>
            </td>
           <td colspan="1" rowspan="5" align="center" id="route"><a href="searchT.html"> Search Transport</a> </h1></b> </td>
           <td colspan="1" rowspan="5" align="center"><a href="searchH.html">search Hotel </a></td>
        </tr>

        <tr>
            
        </tr>
        <tr>
            <td  height="390px"></td>
        </tr>
        <tr>
            <td colspan="3" align="center">Copyright &COPY 2021</td>
        </tr>
       
    </table>
</body>
</html>


