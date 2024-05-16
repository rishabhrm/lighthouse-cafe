<?php
include("connection.php");

session_start();

$email = $_SESSION['email'];

// $userprofile = $_SESSION['email'];



$query = "SELECT * FROM users_table WHERE email = '$email'";
$data = mysqli_query($conn, $query);

$result = mysqli_fetch_assoc($data);


$pid = $_GET['pid'];

// echo $pid;

$query = "SELECT * FROM product_table where pid='$pid'";
$data2 = mysqli_query($conn, $query);

$result2 = mysqli_fetch_assoc($data2);

$name = $result['name'];
$pname =  $result2['pname'];
$image =  $result2['image'];
$price =  $result2['price'];
$email = $result['email'];
$handle = $result['handle'];
$pquantity =  $result2['pquantity'];

$quantity = 1;

$cost = $price * $quantity;

$query = "INSERT INTO cart_table (name,pname,image,price,quantity,cost,email,handle) VALUES ('$name','$pname','$image','$price','$quantity','$cost','$email','$handle')";
$data = mysqli_query($conn, $query);

$new_quantity = $pquantity - 1;

$query2 = "UPDATE product_table SET pquantity='$new_quantity' WHERE pid='$pid'";
$data2 = mysqli_query($conn, $query2);

if ($data) {
?>
    <script>
        window.location.replace("menu_user.php");
        alert("<?php echo "Item has been successfully added to your cart." ?>");
    </script>
<?php
} else {
?>
    <script>
        alert("<?php echo "Error, please try again." ?>");
    </script>
<?php
}
?>