<?php 
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "db10";

$conn = new mysqli($servername, $username, $pass, $dbname);
if(!$conn){
    echo "Connection failed";
}
?>