<!DOCTYPE html>
<html>
<head>
	<title>Trasnportation search </title>
	<script type="text/javascript" src="../scripts/jscript.js"></script>
</head>
<body>
	<h1 id='myid'>Trasnportation search By ID</h1>
<center>
	<form>
		<input type="text" name="name" id="name" value="" onkeyup="ajax()" />
		<input type="button" name="" value="click" onclick="">
	</form>
	</center>

	<div id='result'></div>

</body>
</html>

<?php 
	$conn = mysqli_connect('localhost', 'root', '','webtech');		
	$sql = "select * from transports ";
	$result = mysqli_query($conn, $sql);
	

	echo"<table border=1 >
					<tr>
					<td>ID</td> 
					<td>UserName</td>
	                  <td>FROM</td>
	                  <td>TO</td>
	                  <td>PRICE</td>
	                  <td>TRANASPORT</td>
					  <td>TIME</td>
					  <td>STATUS</td>
					</tr>";
		
	while ($row = mysqli_fetch_assoc($result)) 
	{
		
		echo "   
                         <tr>
							<td>{$row['id']}</td> 
							<td>{$row['username']}</td>
                            <td>{$row['frome']}</td> 
                            <td>{$row['too']}</td> 
				            <td>{$row['price']}</td> 
				            <td>{$row['transport']}</td> 
				            <td>{$row['time']}</td>
							<td>{$row['status']}</td>
							<tr></tr>
						</tr>";
			
			
	}
	
	echo"</table>";
	
	
?> 


              
              <a href="../view/dashboard.php">Back</a>
		 


 </body>
</html>
