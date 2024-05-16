<?php
include("connection.php");

$oid = $_GET['oid'];

// echo $oid;

$query = "SELECT * FROM cart_table where oid='$oid'";
$data = mysqli_query($conn, $query);

$result = mysqli_fetch_assoc($data);

$name = $result['name'];
$pname = $result['pname'];
$image = $result['image'];
$price = $result['price'];
$quantity = $result['quantity'];
$cost = $result['cost'];
$email = $result['email'];
$handle = $result['handle'];
$oid = $result['oid'];

if($data)
{
    $query = "INSERT INTO complete_table (oid,name,pname,image,price,quantity,cost,email,handle) VALUES ('$oid','$name','$pname','$image','$price','$quantity','$cost','$email','$handle')";
    $data = mysqli_query($conn, $query);

    $query2 = "DELETE FROM cart_table WHERE oid = '$oid'";
    $data2 = mysqli_query($conn,$query2);

    if($data)
    {
        header('location:cart.php');
    }
    else {
        echo "Failed";
    }
}
?>