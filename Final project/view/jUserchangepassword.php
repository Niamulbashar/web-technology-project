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
            <td><img src="file/logo.png" alt="">
            <td width="500px"><h1><label for="" style="color: orange;">Transportation Service Provider!</label></h1></td>
            <td align="center"><h1><label for="" style="color: red;">Welcome To User Dashboard!</label></h1> <a href="jlogin.html">Logout</a></td>
        </tr>
        <tr >
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
         
				
                    <legend><b><h2>CHANGE PASSWORD</h2></b></legend>
                    <form action="../controller/jUserchange_password.php" method="post" onsubmit ="return PassValidation()">
                        <table width=40%>
                            <tr>
                                <td>Current Password</td>
                                <td>: <input type="text" name="pass" id="cPass" value="<?php echo $_SESSION['password']; ?>"">
								<span id="msg1"> </span> </td>
                            </tr>
                            <tr>
                                <td><label for="" style="color: green;">New Password</label></td>
                                <td>: <input type="text" name="npass" id="npass">
								<span id="msg2"> </span> </td>
                            </tr>
                            <tr>
                                <td><label for="" style="color: red;">Retype New Password</label></td>
                                <td>: <input type="text" name="repass" id="repass">
								<span id="msg3"> </span> </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    <input type="submit" name="submit" value="Submit">
                                </td>
                            </tr>
                        </table>  
                    </form>
	<script type="text/javascript">
	   function PassValidation()
        {
		   let cPass =  document.getElementById('npass').value;
           let npass =  document.getElementById('npass').value;
           let repass=  document.getElementById('repass').value;

           if(npass == "" ||  repass == "" )
           {
              document.getElementById('msg2').innerHTML = "----**New Password Requried";
              document.getElementById('msg3').innerHTML = "----**Retype New Password ";
              return false;
           }

           else
           {
              document.getElementById('msg2').innerHTML = "";
                return true;
           }
        }
    </script>

                    <td>
                
			</b></td>
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




