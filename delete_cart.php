<?php
include("connection.php");

$oid = $_GET['oid'];

$query = "DELETE FROM cart_table WHERE oid = '$oid'";
$data = mysqli_query($conn,$query);

if($data)
{
    header('location:cart.php');
}
else {
    echo "Failed";
}
?>