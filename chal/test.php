<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
</head>
<body>

<link rel="stylesheet" type="text/css" href="style.css">

<?php
//echo "<h1 class='middle'>";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM tbl_suppliers";
$result = $conn->query($sql);

echo "<div class='' >";

if ($result->num_rows > 0) {
    // output data of each row
      echo "<table class='table'> ";
  	echo"<thead>";
  	  echo"<tr> ";
    
       echo"<th scope='col'>ID:</th>";
    echo"<th scope='col'>Name:</th> ";
       echo"<th scope='col'>city:</th>";
    echo"</tr>";
    echo"</thead>";

    echo"<tbody>";

  /*
      
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
*/


    while($row = $result->fetch_assoc()) {
echo"<tr>";
  echo " <th scope='row'>  </th> " ;
echo 
"<br> ID: ". $row["supplier_id"]. 
" Name: ". $row["supplier_name"]. 
" city: " . $row["supplier_address"] . 
"<br>";       
    }
} else {
    echo "0 results";
}

echo " </tbody>";

$conn->close();


/*

    $mysqli = new mysqli("localhost", "test");


bool mysql_ping ([ resource $link_identifier = NULL ] )


  //  $myconnection = new mysqli("localhost",  "test");

if($mysqli == true){

	echo "connection is working";
    //try to reconnect
}

    $result = $mysqli->query('SELECT * FROM tbl_suppliers');
    echo "$result";


*/

//echo "</h1>";
?>
</body>
</html>