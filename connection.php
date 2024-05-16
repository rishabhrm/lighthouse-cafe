<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_db";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn) {
    // echo "Connection successful";
} else {
    echo "Connection failed".mysqli_connect_error();
}
?>