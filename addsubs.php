<?php 

require "db.php";
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "bedryk";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$name = $_POST['name'];

$sqlsubscr = "INSERT INTO `subscribers` (`gmail`) VALUES ('$name')";
$result = mysqli_query($db, $sqlsubscr);

mysqli_fetch_array($result);


?>