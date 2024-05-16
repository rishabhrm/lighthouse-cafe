<?php
include("assets/header_user.php");
?>

<?php
session_start();
?>

<html>

<head>

  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- JS -->
  <script src="js/script.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery-3.7.1.min.js"></script>
  <title>Cart</title>
</head>

<?php
include("connection.php");
error_reporting(0);

$oid = $_GET['oid'];

$userprofile = $_SESSION['email'];

if ($userprofile == true) {
} else {
  header('location:login.php');
}

$email = $_SESSION['email'];

$query = "SELECT * FROM cart_table where oid='$oid'";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);

?>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="100">
    <section class="layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5 user-image">
                <div class="profile-img" style="border-radius: 50%; overflow: hidden; width: 250px; height: 250px;">
    <img src="<?php echo $result['image']; ?>" style="width: 100%; height: 100%; object-fit: cover;" alt="Profile Image">
</div>

                </div>
                <div class="col-md-5">
                    <h3><?php echo $result['pname']; ?></h3>

                    <br><br>

                    <table class="table table-borderless layout_padding2-top">

                        <tr>
                            <th scope="col">Product Name</th>
                            <td><?php echo $result['pname']; ?></td>
                        </tr>

                        <tr>
                            <th scope="col">Order ID</th>
                            <td><?php echo $result['oid']; ?></td>
                        </tr>

                        <tr>
                            <th scope="col">Price</th>
                            <td>₹<?php echo $result['price']; ?></td>
                        </tr>

                        <tr>
                            <th scope="col">Quantity</th>
                            <form action="" method="POST" enctype="multipart/form-data">
                            <td><input type="text" value="<?php echo $result['quantity']; ?>" name="quantity"></td>
                        </tr>
                    </table>
                    <input type='submit' name='update' class='btn btn-outline-success' value = 'Update the order!'>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php 

if(isset($_POST['update']))
{
    $quantity = $_POST['quantity'];

    $query = "UPDATE cart_table set quantity='$quantity' WHERE oid='$oid'";
	$data = mysqli_query($conn, $query);


    $query1 = "SELECT * FROM cart_table WHERE oid='$oid'";
    $data1 = mysqli_query($conn,$query1);
    $result1 = mysqli_fetch_assoc($data1);

    $price = $result1['price'];
    $cost = $quantity * $price;

    $query = "UPDATE cart_table SET quantity='$quantity', cost='$cost' WHERE oid='$oid'";
    $data = mysqli_query($conn, $query);

    if ($data) {
        ?>
                <meta http-equiv="refresh" content="0; url = http://localhost/project0/cart.php" />
        <?php
                // echo "Data inserted";
            } else {
                // echo "failed";
            }
        }


    ?>

</html>