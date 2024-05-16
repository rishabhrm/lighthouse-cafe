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
// error_reporting(0);

$pid = $_GET['pid'];

$userprofile = $_SESSION['email'];

if ($userprofile == true) {
} else {
  header('location:login.php');
}

$email = $_SESSION['email'];

$query = "SELECT * FROM product_table where pid='$pid'";
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
                            <th scope="col">Product ID</th>
                            <td><?php echo $result['pid']; ?></td>
                        </tr>

                        <tr>
                            <th scope="col">Product Description</th>
                            <td><?php echo $result['descrip']; ?></td>
                        </tr>

                        <tr>
                            <th scope="col">Price</th>
                            <td>₹<?php echo $result['price']; ?></td>
                        </tr>

                        <tr>
                            <th scope="col">Quantity Available</th>
                            <td><?php echo $result['pquantity']; ?></td>
                        </tr>

                        <tr>
                            <th scope="col">Quantity</th>
                            <td><input type="text" value=1 name="quantity"></td>
                        </tr>
                    </table>
                    <a href="addCart.php?pid=<?php echo $result['pid']?>"><input type='submit' class='btn btn-outline-success'  value = 'Place the order!'></a>
                </form>
                </div>
            </div>
        </div>
    </section>

</html>