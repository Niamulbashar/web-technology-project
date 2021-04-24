<?php 


    session_start();
	
	
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home --Welcome--</title>
</head>
<body>
    <table border="1" width="100%">
        <tr>
            <td><img src="file/logo.png" alt=""></td>
            <td width="500px"><h1><label for="" style="color: orange;">Transportation Service Provider!</label></h1></td>
            <td align="center"><h1><label for="" style="color: red;">Welcome To User Dashboard!<?php echo $_SESSION['username']; ?> </label></h1> <a href="jlogin.html">Logout</a></td>
        </tr>
        <tr>
            <td >
                <b><h2>User Account</h2></b>
                <hr>
                <ul>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="../controller/juserProfile.php">Profile</a></li>	
                    <li><a href="jreview.html">Comment Box</a></li>
					<li><a href="../controller/jreview.php">Show Reply</a></li>
                    <li><a href="../controller/jtransportation.php">Book Transport</a></li>
                    <li><a href="jroutePrice.html">Route List And Price</a></li>
					<li><a href="jUserchangepassword.php">Change Password</a></li>
                    <li><a href="jlogin.html">Logout</a></li>
                </ul>
            </td>
            <td colspan="2" rowspan="2"><b>
			
			
			<h1 id= 'profile' >
			Welcome To Home,
			
			<?php echo $_SESSION['username']; ?> 
			
			
			
			</h1></b></td>
			
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


