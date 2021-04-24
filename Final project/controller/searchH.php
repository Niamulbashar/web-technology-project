<?php
	
	//sleep(3);
	$name = $_REQUEST['name'];
	$conn = mysqli_connect('localhost', 'root', '', 'webtech');
	$sql = "select * from hotel where r_id like '%{$name}%'";
	$result = mysqli_query($conn, $sql);

	$response = "<table border=1>
					<tr>
						
	                  <td>ID</td> 
	                  <td>room type</td>
	                  <td>date</td>
	                  <td>PRICE</td>
	                  <td>Status</td>
					 
						
					</tr>";
	while ($row = mysqli_fetch_assoc($result)) {
		$response .= 	"<tr>
							  <td>{$row['r_id']}</td> 
               
                <td>{$row['room _type']}</td> 
				<td>{$row['availablity_date']}</td> 
				<td>{$row['price']}</td> 
				<td>{$row['status']}</td>
							
						</tr>";
	}

	$response .= "</table>";
	
	echo $response;	
?>