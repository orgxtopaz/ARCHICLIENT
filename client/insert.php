<?php

$servername = "192.168.0.22";
$username = "lloydie";
$password = "lloydie";
$dbname = "architecture";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['submit'])){
    $sql = $_POST["Query"];
   
if ($conn->query($sql) === TRUE) {
    echo "Operation Successful";

   "SELECT firstname,lastname FROM mogamitay";

  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

}





?>