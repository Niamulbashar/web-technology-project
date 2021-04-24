<?php 
	$conn = mysqli_connect('localhost', 'root', '','webtech');		
	$sql = "select * from commentboxs";
	$result = mysqli_query($conn, $sql);
	
	
	echo"<table border= 2 width=80% height=50%>
	
	              <tr>
				  
	                  <td>ID</td> 
	                  <td>UserName</td>
	                  <td>Comment</td>
	              </tr>";
		
	while ($row = mysqli_fetch_assoc($result)) 
	{
		
		echo "
            
            <tr>
                <td>{$row['id']}</td> 
                <td>{$row['username']}</td> 
                <td> {$row['comment']}</td> 
				
               
            </tr>";
			
			
	}
	
	echo"</table>";
	
	
	
	
?> 
          <center>
              
              <a href="../view/dashboard.php">Back</a>
		  </center>
		  
 </body>
</html>