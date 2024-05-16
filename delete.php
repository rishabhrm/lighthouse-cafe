<?php
include("connection.php");

$id = $_GET['id'];

$query = "DELETE FROM users_table WHERE id = '$id'";
$data = mysqli_query($conn,$query);

if($data)
{
    header('location:display.php');
}
else {
    echo "Failed";
}
?>