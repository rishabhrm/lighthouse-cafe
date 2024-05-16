<?php
include("assets/header_admin.php");

include("connection.php");
// error_reporting(0);

session_start();

$pass = $_SESSION['pass'];
$email = $_SESSION['email'];

$userprofile = $_SESSION['email'];

if ($userprofile == true) {
} else {
    header('location:login.php');
}

$query = "SELECT * FROM users_table WHERE email = '$email' AND pass = '$pass'";
$data = mysqli_query($conn, $query);

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
    <title>Profile Edit</title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="100">
    <section class="layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5 user-image">
                    <div class="profile-img">
                        <img src="<?php echo $result['image']; ?>" height="250px" width="250px">
                    </div>
                    <div class="profile-edits">
                        <br><br><br>
                        <form action="#" method="post">
                            <div class="col-md-6">
                                <div class="form-outline mb-6 input-group custom-file-button">
                                    <input type="file" name="uploadfile" class="input form-control" id="inputGroupFile">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-5">
                    <h3>Welcome, <?php echo $result['name']; ?>!</h3>
                    <h5><?php echo $result['access']; ?></h5>

                    <br><br>

                    <form action="#" method="POST" enctype="multipart/form-data>

                    <table class=" table table-borderless layout_padding2-top">

                        <tr>
                            <div class="form-outline mb-3">
                                <input type="text" name="name" class="name-field form-control form-control-md" value="<?php echo $result['name']; ?>" placeholder="Your Name">
                                <small class="name-field-msg form-text text-danger ml-2"></small>
                            </div>
                        </tr>

                        <tr>
                            <div class="form-outline mb-3">
                                <input type="email" name="email" id="email" class="email-field form-control form-control-md" value="<?php echo $result['email']; ?>" placeholder="Email address">
                                <small class="email-field-msg form-text text-danger ml-2"></small>
                            </div>
                        </tr>

                        <tr>
                            <div class="form-outline mb-3">
                                <input type="text" name="phone" class="phone-field form-control form-control-md" placeholder="Phone number" value="<?php echo $result['phone']; ?>">
                                <small class="phone-field-msg form-text text-danger ml-2"></small>
                            </div>
                        </tr>

                        <tr>
                            <div class="form-outline mb-3">
                                <input type="password" name="password" class="password-field form-control form-control-md" value="<?php echo $result['pass']; ?>" placeholder="Password">
                                <small class="password-field-msg form-text text-danger ml-2"></small>
                            </div>
                        </tr>

                        <tr>
                            <div class="form-outline mb-3">
                                <input type="text" name="location" class="name-field form-control form-control-md" placeholder="Your Location" value="<?php echo $result['location']; ?>">
                                <small class="name-field-msg form-text text-danger ml-2"></small>
                            </div>
                        </tr>

                        <tr>
                            <div class="form-outline mb-3">
                                <input type="text" name="handle" class="name-field form-control form-control-md" placeholder="Choose a username" value="<?php echo $result['handle']; ?>">
                                <small class="name-field-msg form-text text-danger ml-2"></small>
                            </div>
                        </tr>

                    </table>

                    <div class="d-flex justify-content-between align-items-center">
                        <input type="submit" name="update" class="btn btn-outline-success btn-md" style="padding-left: 2rem; padding-right: 2rem;">

                    </div>

                    </form>

                </div>
            </div>
        </div>
    </section>
</body>

</html>

<?php

if (isset($_POST['update'])) {

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "images/" . $filename;

    move_uploaded_file($tempname, $folder);

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['password'];
    $location = $_POST['location'];
    $handle = $_POST['handle'];
    $id = $result['id'];

    $query = "UPDATE users_table set name='$name', email='$email',phone='$phone',pass='$pass',location='$location',handle='$handle', image='$folder' WHERE id='$id'";


    $data = mysqli_query($conn, $query);

    if ($data) {
?>
        <meta http-equiv="refresh" content="0; url = http://localhost/project0/user_profile.php" />
<?php
        // echo "Data inserted";
    } else {
        // echo "failed";
    }
}

?>