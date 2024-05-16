<?php
include("assets/header_user.php");

session_start();
$userprofile = $_SESSION['email'];

if($userprofile == true){

} else {
  		header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Lighthouse Café</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- JS -->
    <script src="js/script.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>

</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="100">

    <!-- About -->
    <section class="about_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="images/about-img.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>About Us</h2>
                        </div>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam cum consequuntur
                            aliquid, asperiores
                            accusamus, rem explicabo perferendis, dolor repellat numquam adipisci esse. Nobis quisquam,
                            recusandae
                            iusto perferendis porro libero vel.

                        </p>
                        <a href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Special -->
    <section class="spcl_section layout_padding layout_padding2-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="detail_container">
                        <div class="detail-box">
                            <img src="images/about-ico/s1.png" alt="">
                            <h5>Original Coffee</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias dolores qui quisrum vel ad
                                voluptates
                                vero earum quos esse

                            </p>
                        </div>
                        <div class="detail-box">
                            <img src="images/about-ico/s2.png" alt="">
                            <h5>Self Roasted</h5>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. In blanditiis accusanfugit
                                recusandae itaque
                                fugiat ex praesentium,
                            </p>
                        </div>
                        <div class="detail-box">
                            <img src="images/about-ico/s3.png" alt="">
                            <h5>15 Coffee Items</h5>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate eveniet consectetur
                                quasi
                                perspiciatis modi consequuntur quasi perspiciatis modi consequuntur
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 ml-auto">
                    <div class="img-box">
                        <img src="images/spcl-img.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

<?php include('assets/footer.php'); ?>

</html>