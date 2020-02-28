<!DOCTYPE html>
<html>
<head><title>Order</title></head>
<body>

<?php
$conn= mysqli_connect("localhost","root","","admin");
if(mysqli_error($conn)) {
	echo "failed";
}
else{
	echo "";
} 

$sql = "SELECT * FROM product";
//$result = $conn->query($sql);
$result = mysqli_query($conn, $sql);  
if ($result->num_rows > 0) {
     
                while($row = mysqli_fetch_array($result))  
                {  
                	echo '<tr>

                	<td>
                	echo "product name-".$row["pname"]."";
                	</td>
                	</tr>';

                	
                	  echo "product name-".$row["price"]."'<img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'"/>';
                      echo "Price:-".$row["price"]."";
                       echo "<br>";
                       echo "Price:-".$row["detail"]."";
                       echo "<br>";
                       echo "<hr>";
                }  
}
 else {
    echo "0 results";
}

$conn->close();
?> 
</body>
</html>