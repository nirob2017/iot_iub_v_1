<?php
//server Details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "id4688657_iot";
$count;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$result = $conn->query("SELECT * FROM egg");

if ($result->num_rows > 0) {
        // output data of each row
while($row = $result->fetch_assoc()) {
//echo $row['value'];
$count = $row['value'];
echo $count;
break;
    
if ($row['value']==1) {
//$count++;
     }                                         
    }                        
   }
/* else {
    echo "0 results";
}*/
 //$count=4;                        
?>