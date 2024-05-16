<?php
include("assets/header_guest.php");

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home | Lighthouse Café</title>

	<!-- CSS -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- JS -->
	<script src="js/script.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-3.7.1.min.js"></script>

</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="100">

	<!-- Slider -->
	<section class="slider_section position-relative">
		<div class="slider_bg_box">
			<img src="images/slider-bg.jpg" alt="">
		</div>
		<div class="container">
			<div class="col-md-6">
				<div class="detail-box">
					<h1>Have a break, have a sip</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda obcaecati fuga nulla ipsa
						dolores
						quisquam at illum ipsam rerum. Officia odio exercitationem illum deserunt! Veritatis harum
						similique autem
						corrupti laboriosam!
					</p>
					<br>
					<a href="menu.php">
						<button class="main-btn">Check Our Menu</button>
					</a>
					<a href="about.php" class="link">Find Out More &#8599;</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Menu -->
	<section class="our-menu layout_padding2-top layout_padding2-bottom">
		<div class="container">
			<h2>Our Offerings</h2>
			<div class="row">
				<div class="col-6 col-sm-2 mb-4 mb-lg-0">
					<div class="card">
						<div class="cat-image">
							<a class="link_category_product" href="menu.php#bestsellers">
								<img src="images/our-offerings/Bestseller.webp">
							</a>
						</div>
						<div class="cat-title">
							<a href="menu.php#bestsellers">Bestsellers</a>
						</div>
					</div>
				</div>

				<div class="col-6 col-sm-2 mb-4 mb-lg-0">
					<div class="card">
						<div class="cat-image">
							<a class="link_category_product" href="menu.php#drinks">
								<img src="images/our-offerings/Drinks.webp">
							</a>
						</div>
						<div class="cat-title">
							<a href="menu.php#drinks">Drinks</a>
						</div>
					</div>
				</div>

				<div class="col-6 col-sm-2 mb-4 mb-lg-0">
					<div class="card">
						<div class="cat-image">
							<a class="link_category_product" href="menu.php#food">
								<img src="images/our-offerings/Food.webp">
							</a>
						</div>
						<div class="cat-title">
							<a href="#">Food</a>
						</div>
					</div>
				</div>

				<div class="col-6 col-sm-2 mb-4 mb-lg-0">
					<div class="card">
						<div class="cat-image">
							<a class="link_category_product" href="menu.php#merchandise">
								<img src="images/our-offerings/Merchandise.webp">
							</a>
						</div>
						<div class="cat-title">
							<a href="menu.php#merchandise">Merchandise</a>
						</div>
					</div>
				</div>

				<div class="col-6 col-sm-2 mb-3 mb-lg-0">
					<div class="card">
						<div class="cat-image">
							<a class="link_category_product" href="menu.php#coffeeathome">
								<img src="images/our-offerings/CoffeeAtHome.webp">
							</a>
						</div>
						<div class="cat-title">
							<a href="menu.php#coffeeathome">Coffee At Home</a>
						</div>
					</div>
				</div>

				<div class="col-6 col-sm-2 mb-4 mb-lg-0">
					<div class="card">
						<div class="cat-image">
							<a class="link_category_product" href="menu.php#readytoeat">
								<img src="images/our-offerings/ReadyToEat.webp">
							</a>
						</div>
						<div class="cat-title">
							<a href="menu.php#readytoeat">Ready-to-Eat</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- offer section -->


	<!-- Extra -->
	<section class="extra_section layout_padding2-top layout_padding2-bottom">
		<div class="container">
			<a href="#">
				<div class="card" style="width: 70rem;">
					<img src="images/coffee_culture_blog_web1_c6e691b286.jpg" class="card-img-top" alt="">
			</a>
			<div class="card-body">
				<span class="card-text">Learn more about the world of coffee!</span>
			</div>
		</div>

		</div>
	</section>


</body>

<?php include('assets/footer.php'); ?>

</html>