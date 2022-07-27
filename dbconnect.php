<?php

// Connecting to the database
$servername = "localhost:3307";
$username = "root";
$password = "";
$database = "bitbybit";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was  not successful
if(!$conn){
    die("Sorry we failed to connect" . mysqli_connect_error());
}
// echo "CONNECTION SUCCESSFUL";

?>
