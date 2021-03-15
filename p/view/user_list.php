<?php
	$title = "User List Page";
	include('header.php');

	$data = file_get_contents("../model/data.json");
	
	$mydata = json_decode($data,true);

?>

	<a href="home.php">Back</a> |
	<a href="../controller/logout.php">logout</a>	
	<br>
	
	<h1>User list</h1>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>NAME</td>
			<td>EMAIL</td>
			<td>ACTION</td>
		</tr>
		<tr>
		<?php   $c=1;
			foreach ($mydata as $key => $value) {
				
				echo "<tr>";
				echo"<td>";
				echo $c;

				
				echo"</td>";
				foreach ($value as $k => $v) {
					
					
					if ($k!="password" ) {
						echo "<td>$v</td>"; 
						
					}else{ }
					
					
			
				} 	echo"<td>";
				echo" <a href=edit.php> ";
				echo" EDIT" ; echo"</a> ";
				
				echo" <a href=delete.html> ";
				echo"|";
				echo"DELETE";
				echo"</a>";
				

				
				echo"</td>";
			
				echo" </tr>"; $c=$c+1;
			}



		
		
		 
		  ?>
	
	</table>

<?php
	include('footer.php');
?>