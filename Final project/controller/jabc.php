<!DOCTYPE html>
<html>


<body>

<center>

<?php
	
	
	$name = $_REQUEST['name'];
	$conn = mysqli_connect('localhost', 'root', '', 'webtech');
	$sql = "select * from transports where id like '%{$name}%'";
	$result = mysqli_query($conn, $sql);

	$response = "<table border=1 width=80% height=80%>
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
	while ($row = mysqli_fetch_assoc($result)) {
		$response .= 	"<tr>
							<td>{$row['id']}</td> 
							<td>{$row['username']}</td>
                            <td>{$row['frome']}</td> 
                            <td>{$row['too']}</td> 
				            <td>{$row['price']}</td> 
				            <td>{$row['transport']}</td> 
				            <td>{$row['time']}</td>
							<td>{$row['status']}</td>
						</tr>";
	}

	$response .= "</table>";
	
	echo $response;	
?>

</center>
</body>
</html>