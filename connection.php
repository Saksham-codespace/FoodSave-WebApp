

<?php
//change mysqli_connect(host_name,username, password); 

$servername = "localhost";
$username = "root";
$password = "";     // default for XAMPP
$dbname = "foodsave_db";  // change to the DB name you created

$connection = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
