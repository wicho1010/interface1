<!--<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb4";

// Crear connection
$conexion = new mysqli($servername,$username,$password,$dbname);
//if($conexion->connect_errno)
{
  //  echo "Error, el servidor esta experimentando problemas";
    //echo "Error: Failed to make a MySQL connection, here is why: \n";
    //echo "Errno: " . $mysqli->connect_errno . "\n";
    //echo "Error: " . $mysqli->connect_error . "\n";
    //exit;
}

?>-->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb4";

// Crear connection
$conn = @mysqli_connect($servername, $username, $password, $dbname);
return $conn;
// revisar connection

?>

