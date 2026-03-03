<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iwebbtec_db24";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {

  die("Connection failed: " . $conn->connect_error);

}


?>

<?php
   
   //$db_server = "localhost";
   //$db_user = "root";
   //$db_pass = "";
   //$db_name = "iwebbtec_db24";
   //$conn = "";
   
   //$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
   
   //if ($conn) {
   //       echo "Connected successfully";
   //}
   //else{
   //         echo "Connection failed: " . mysqli_connect_error();
   //}

//?>