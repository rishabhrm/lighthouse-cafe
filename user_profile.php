<?php
include("assets/header_user.php");

include("connection.php");
// error_reporting(0);

session_start();

$pass = $_SESSION['pass'];
$email = $_SESSION['email'];

$userprofile = $_SESSION['email'];

if($userprofile == true){

} else {
  		header('location:login.php');
}

$query = "SELECT * FROM users_table WHERE email = '$email' AND pass = '$pass'";
$data = mysqli_query($conn,$query);

$result = mysqli_fetch_assoc($data);

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
    <title>Profile</title>
</head>

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
                    <h3>Welcome, <?php echo $result['name']; ?>!</h3>
                    <h5><?php echo $result['access']; ?></h5>

                    <br><br>

                    <table class="table table-borderless layout_padding2-top">

                        <tr>
                            <th scope="col">Your Name</th>
                            <td><?php echo $result['name']; ?></td>
                        </tr>

                        <tr>
                            <th scope="col">Email Address</th>
                            <td><?php echo $email ?></td>
                        </tr>

                        <tr>
                            <th scope="col">Phone Number</th>
                            <td><?php echo $result['phone']; ?></td>
                        </tr>

                        <tr>
                            <th scope="col">ID Number</th>
                            <td><?php echo $result['id']; ?></td>
                        </tr>

                        <tr>
                            <th scope="col">Location</th>
                            <td><?php echo $result['location']; ?></td>
                        </tr>

                        <tr>
                            <th scope="col">Handle</th>
                            <td><?php echo '@'.$result['handle']; ?></td>
                        </tr>
                    </table>

                    <a href='edit_profile2.php?id=$result[id]'><input type='submit' class='btn btn-outline-success' value = 'Edit Profile'></a>

                </div>
            </div>
        </div>
    </section>