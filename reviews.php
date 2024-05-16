<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Our Store | Lighthouse Café</title>

	<!-- CSS -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- JS -->
	<script src="js/script.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-3.7.1.min.js"></script>

</head>

<?php include('assets/header_guest.php'); ?>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="100">
	<section class="layout_padding">
		<div class="container">
			<div class="row">
				<div class="col-md-6 store-location">
					<h1>Where To Find Us</h1>
					<p>
						A-1, Block A, Rajiv Chowk, Connaught Place,
					</p>
					<p> New Delhi, Delhi 110001</p>
					<p>
				</div>
				<div class="col-md-6">
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14008.11478964298!2d77.21528694999999!3d28.628901999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd37b741d057%3A0xcdee88e47393c3f1!2sConnaught%20Place%2C%20New%20Delhi%2C%20Delhi%20110001!5e0!3m2!1sen!2sin!4v1708879382953!5m2!1sen!2sin"
						width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy"
						referrerpolicy="no-referrer-when-downgrade" id="store-map"></iframe>
				</div>
			</div>
		</div>
	</section>

	<!-- Reviews -->
	<section class="review_section layout_padding layout_padding2-top">

		<h1>And What Our Customers Say</h1>

		<div id="carouselExample" class="carousel slide">
			<div class="carousel-inner">
				<div class="carousel-inner pb-5">
					<!-- Single item -->
					<div class="carousel-item active">
						<div class="row d-flex justify-content-center">
							<div class="col-lg-10 col-xl-8">
								<div class="row">
									<div class="col-lg-4 d-flex justify-content-center">
										<img src="images/reviews/ethan-hunt.jpg"
											class="rounded-circle shadow-1 mb-4 mb-lg-0" alt="woman avatar" width="150"
											height="150" />
									</div>
									<div
										class="col-9 col-md-9 col-lg-7 col-xl-8 text-center text-lg-start mx-auto mx-lg-0">
										<h4 class="mb-4">Ethan Hunt</h4>
										<p class="mb-0 pb-3">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. A
											aliquam amet animi blanditiis consequatur debitis dicta
											distinctio, enim error eum iste libero modi nam natus
											perferendis possimus quasi sint sit tempora voluptatem. Est,
											exercitationem id ipsa ipsum laboriosam perferendis.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Single item -->
					<div class="carousel-item">
						<div class="row d-flex justify-content-center">
							<div class="col-lg-10 col-xl-8">
								<div class="row">
									<div class="col-lg-4 d-flex justify-content-center">
										<img src="images/reviews/steve-rogers.jpg"
											class="rounded-circle shadow-1 mb-4 mb-lg-0" alt="woman avatar" width="150"
											height="150" />
									</div>
									<div
										class="col-9 col-md-9 col-lg-7 col-xl-8 text-center text-lg-start mx-auto mx-lg-0">
										<h4 class="mb-4">Steve Rogers</h4>
										<p class="mb-0 pb-3">
											Sed ut perspiciatis unde omnis iste natus error sit voluptatem
											accusantium doloremque laudantium, totam rem aperiam, eaque
											ipsa quae ab illo inventore veritatis et quasi architecto
											beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem
											quia voluptas sit aspernatur.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Single item -->
					<div class="carousel-item">
						<div class="row d-flex justify-content-center">
							<div class="col-lg-10 col-xl-8">
								<div class="row">
									<div class="col-lg-4 d-flex justify-content-center">
										<img src="images/reviews/mr-han.jpg"
											class="rounded-circle shadow-1 mb-4 mb-lg-0" alt="woman avatar" width="150"
											height="150" />
									</div>
									<div
										class="col-9 col-md-9 col-lg-7 col-xl-8 text-center text-lg-start mx-auto mx-lg-0">
										<h4 class="mb-4">Mr Han</h4>
										<p class="mb-0 pb-3">
											At vero eos et accusamus et iusto odio dignissimos qui
											blanditiis praesentium voluptatum deleniti atque corrupti quos
											dolores et quas molestias excepturi sint occaecati cupiditate
											non provident, similique sunt in culpa qui officia mollitia
											animi id laborum et dolorum fuga.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>

	</section>
</body>

<?php include('assets/footer.php'); ?>

</html>