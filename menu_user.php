<?php

session_start();
$userprofile = $_SESSION['email'];

if ($userprofile == true) {
} else {
	header('location:login.php');
}

include("connection.php");

$query = "SELECT * FROM product_table where pid='101'";
$data1 = mysqli_query($conn,$query);
$total1 = mysqli_num_rows($data1);
$result1 = mysqli_fetch_assoc($data1);

$query = "SELECT * FROM product_table where pid='102'";
$data2 = mysqli_query($conn,$query);
$total2 = mysqli_num_rows($data2);
$result2 = mysqli_fetch_assoc($data2);

$query = "SELECT * FROM product_table where pid='103'";
$data3 = mysqli_query($conn,$query);
$total3 = mysqli_num_rows($data3);
$result3 = mysqli_fetch_assoc($data3);

$query = "SELECT * FROM product_table where pid='104'";
$data4 = mysqli_query($conn,$query);
$total4 = mysqli_num_rows($data4);
$result4 = mysqli_fetch_assoc($data4);

$query = "SELECT * FROM product_table where pid='105'";
$data5 = mysqli_query($conn,$query);
$total5 = mysqli_num_rows($data5);
$result5 = mysqli_fetch_assoc($data5);

$query = "SELECT * FROM product_table where pid='106'";
$data6 = mysqli_query($conn,$query);
$total6 = mysqli_num_rows($data6);
$result6 = mysqli_fetch_assoc($data6);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Our Menu | Lighthouse Café</title>

	<!-- CSS -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- JS -->
	<script src="js/script.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-3.7.1.min.js"></script>

</head>

<?php include('assets/header_user.php'); ?>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="100">


<nav class="navbar menu_section">
  <div class="container">
    <form class="d-flex col-12" action="search.php" method="GET">
      <input class="form-control me-2" type="text" placeholder="Looking for something specific?" aria-label="Search" name="search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>

	<!-- Menu #1 -->
	<section class="menu_section layout_padding2-top" id="bestsellers">

		<h1>Here's what we offer</h1>

		<h2>Bestsellers</h2>

		<div class="container">

			<div class="row gx-5 gy-4">

				<div class="col-4">

					<div class="card mb-3">
						<img src="<?php echo $result1['image']; ?>" class="card-img-top" alt="">
						<div class="card-body">
							<h5 class="card-title"><?php echo $result1['pname']; ?></h5>
							<p style="font-size:14px; font-weight:600; text-align: left;">₹<?php echo $result1['price']; ?>
							<p>
							<p class="card-text"><?php echo $result1['descrip']; ?></p>
							<a href='order.php?pid=101' class="btn btn-outline-success">Add to your cart</a>
						</div>
					</div>
				</div>

				<div class="col-4">
					<div class="card">
						<img src="<?php echo $result2['image']; ?>" class="card-img-top" alt="">
						<div class="card-body">
							<h5 class="card-title"><?php echo $result2['pname']; ?></h5>
							<p style="font-size:14px; font-weight:600; text-align: left;">₹<?php echo $result2['price']; ?>
							<p>
							<p class="card-text"><?php echo $result1['descrip']; ?></p>
							<a href='order.php?pid=102' class="btn btn-outline-success">Add to your cart</a>
						</div>
					</div>
				</div>

				<div class="col-4">
					<div class="card">
						<img src="<?php echo $result3['image']; ?>" class="card-img-top" alt="">
						<div class="card-body">
							<h5 class="card-title"><?php echo $result3['pname']; ?></h5>
							<p style="font-size:14px; font-weight:600; text-align: left;">₹<?php echo $result3['price']; ?>
							<p>
							<p class="card-text"><?php echo $result3['descrip']; ?></p>
							<a href='order.php?pid=103' class="btn btn-outline-success">Add to your cart</a>
						</div>
					</div>
				</div>

				<div class="col-4">
					<div class="card">
						<img src="<?php echo $result4['image']; ?>" class="card-img-top" alt="">
						<div class="card-body">
							<h5 class="card-title"><?php echo $result4['pname']; ?></h5>
							<p style="font-size:14px; font-weight:600; text-align: left;">₹<?php echo $result4['price']; ?>
							<p>
							<p class="card-text"><?php echo $result4['descrip']; ?></p>
							<a href='order.php?pid=104' class="btn btn-outline-success">Add to your cart</a>
						</div>
					</div>
				</div>

				<div class="col-4">
					<div class="card">
						<img src="<?php echo $result5['image']; ?>" class="card-img-top" alt="">
						<div class="card-body">
							<h5 class="card-title"><?php echo $result5['pname']; ?></h5>
							<p style="font-size:14px; font-weight:600; text-align: left;">₹<?php echo $result5['price']; ?>
							<p>
							<p class="card-text"><?php echo $result5['descrip']; ?></p>
							<a href='order.php?pid=105' class="btn btn-outline-success">Add to your cart</a>
						</div>
					</div>
				</div>

				<div class="col-4">
					<div class="card">
						<img src="<?php echo $result6['image']; ?>" class="card-img-top" alt="">
						<div class="card-body">
							<h5 class="card-title"><?php echo $result6['pname']; ?></h5>
							<p style="font-size:14px; font-weight:600; text-align: left;">₹<?php echo $result6['price']; ?>
							<p>
							<p class="card-text"><?php echo $result6['descrip']; ?></p>
							<a href='order.php?pid=106' class="btn btn-outline-success">Add to your cart</a>
						</div>
					</div>
				</div>
			</div>
	</section>


	<!-- Menu #2 -->

	<section class="menu_section menu-top" id="drinks">

		<h2>Drinks</h2>

		<div class="container">

			<div class="row gx-5 gy-4">

				<div class="col-4">
					<div class="card mb-3">
						<img src="images/menu/drinks/Caffè Mocha.jpg" class="card-img-top" alt="">
						<div class="card-body">
							<h5 class="card-title">Caffè Mocha</h5>
							<p style="font-size:14px; font-weight:600; text-align: left;">$139
							<p>
							<p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse, sequi!
							</p>
							<a href="#" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal0">Add to your cart</a>
						</div>
					</div>
				</div>

				<div class="col-4">
					<div class="card">
						<img src="images/menu/drinks/Chocolate Cappuccino.jpg" class="card-img-top" alt="">
						<div class="card-body">
							<h5 class="card-title">Chocolate Cappuccino</h5>
							<p style="font-size:14px; font-weight:600; text-align: left;">$139
							<p>
							<p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse, sequi!
							</p>
							<a href="#" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal0">Add to your cart</a>
						</div>
					</div>
				</div>

				<div class="col-4">
					<div class="card">
						<img src="images/menu/drinks/Caffe Latte.jpg" class="card-img-top" alt="">
						<div class="card-body">
							<h5 class="card-title">Caffe Latte</h5>
							<p style="font-size:14px; font-weight:600; text-align: left;">$139
							<p>
							<p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse, sequi!
							</p>
							<a href="#" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal0">Add to your cart</a>
						</div>
					</div>
				</div>

				<div class="col-4">
					<div class="card">
						<img src="images/menu/drinks/Cortado.jpg" class="card-img-top" alt="">
						<div class="card-body">
							<h5 class="card-title">Cortado</h5>
							<p style="font-size:14px; font-weight:600; text-align: left;">$139
							<p>
							<p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse, sequi!
							</p>
							<a href="#" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal0">Add to your cart</a>
						</div>
					</div>
				</div>

				<div class="col-4">
					<div class="card">
						<img src="images/menu/drinks/Iced Cappuccino.jpg" class="card-img-top" alt="">
						<div class="card-body">
							<h5 class="card-title">Iced Cappuccino</h5>
							<p style="font-size:14px; font-weight:600; text-align: left;">$139
							<p>
							<p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse, sequi!
							</p>
							<a href="#" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal0">Add to your cart</a>
						</div>
					</div>
				</div>

				<div class="col-4">
					<div class="card">
						<img src="images/menu/drinks/Iced Caffè Americano.jpg" class="card-img-top" alt="">
						<div class="card-body">
							<h5 class="card-title">Iced Caffè Americano</h5>
							<p style="font-size:14px; font-weight:600; text-align: left;">$139
							<p>
							<p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse, sequi!
							</p>
							<a href="#" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal0">Add to your cart</a>
						</div>
					</div>
				</div>
			</div>
	</section>


	<!-- Menu #3 -->

	<section class="menu_section menu-top" id="food">

		<h2>Food</h2>

		<div class="container">

			<div class="row gx-5 gy-4">

				<div class="col-4">
					<div class="card mb-3">
						<img src="images/menu/food/French Fries.jpg" class="card-img-top" alt="">
						<div class="card-body">
							<h5 class="card-title">French Fries</h5>
							<p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse, sequi!
							</p>
							<a href="#" class="btn btn-primary" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal0">Add to your cart</a>
						</div>
					</div>
				</div>

				<div class="col-4">
					<div class="card">
						<img src="images/menu/food/Chocolate Cookie.jpg" class="card-img-top" alt="">
						<div class="card-body">
							<h5 class="card-title">Chocolate Cookie</h5>
							<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, ex.</p>
							<a href="#" class="btn btn-primary" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal0">Add to your cart</a>
						</div>
					</div>
				</div>

				<div class="col-4">
					<div class="card">
						<img src="images/menu/food/Mozzarella Sandwich.jpg" class="card-img-top" alt="">
						<div class="card-body">
							<h5 class="card-title">Mozzarella Sandwich</h5>
							<p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est,
								sapiente.</p>
							<a href="#" class="btn btn-primary" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal0">Add to your cart</a>
						</div>
					</div>
				</div>

				<div class="col-4">
					<div class="card">
						<img src="images/menu/food/Paneer Sandwich.jpg" class="card-img-top" alt="">
						<div class="card-body">
							<h5 class="card-title">Paneer Sandwich</h5>
							<p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum,
								doloremque!</p>
							<a href="#" class="btn btn-primary">Add to your cart</a>
						</div>
					</div>
				</div>

				<div class="col-4">
					<div class="card">
						<img src="images/menu/food/Focaccia Sandwich.jpg" class="card-img-top" alt="">
						<div class="card-body">
							<h5 class="card-title">Focaccia Sandwich</h5>
							<p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae,
								deleniti.</p>
							<a href="#" class="btn btn-primary">Add to your cart</a>
						</div>
					</div>
				</div>

				<div class="col-4">
					<div class="card">
						<img src="images/menu/food/Panini Sandwich.jpg" class="card-img-top" alt="">
						<div class="card-body">
							<h5 class="card-title">Panini Sandwich</h5>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores,
								reprehenderit?</p>
							<a href="#" class="btn btn-primary">Add to your cart</a>
						</div>
					</div>
				</div>

			</div>
	</section>

	<!-- Menu #4 -->
	<section class="menu_section menu-top" id="merchandise">

		<h2>Merchandise</h2>

		<div class="container">

			<div class="row gx-5 gy-4">

				<div class="col-4">
					<div class="card mb-3">
						<img src="images/menu/merch/Rabbit Holiday Mug.jpg" class="card-img-top" alt="">
						<div class="card-body">
							<h5 class="card-title">Rabbit Holiday Mug</h5>
							<p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse, sequi!
							</p>
							<a href="#" class="btn btn-primary">Add to your cart</a>
						</div>
					</div>
				</div>

				<div class="col-4">
					<div class="card">
						<img src="images/menu/merch/Mickey Ceramic Mug.jpg" class="card-img-top" alt="">
						<div class="card-body">
							<h5 class="card-title">Mickey Ceramic Mug</h5>
							<p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est,
								sapiente.</p>
							<a href="#" class="btn btn-primary">Add to your cart</a>
						</div>
					</div>
				</div>

				<div class="col-4">
					<div class="card">
						<img src="images/menu/merch/Little Holiday Mug.jpg" class="card-img-top" alt="">
						<div class="card-body">
							<h5 class="card-title">Little Holiday Mug</h5>
							<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, ex.</p>
							<a href="#" class="btn btn-primary">Add to your cart</a>
						</div>
					</div>
				</div>
			</div>
	</section>

	<!-- Menu #5 -->
	<section class="menu_section menu-top" id="coffeeathome">

		<h2>Coffee At Home</h2>

		<div class="container">

			<div class="row gx-5 gy-4">

				<div class="col-4">
					<div class="card mb-3">
						<img src="images/menu/coffeeathome/Diwali Blend.webp" class="card-img-top" alt="">
						<div class="card-body">
							<h5 class="card-title">Diwali Blend</h5>
							<p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse, sequi!
							</p>
							<a href="#" class="btn btn-primary">Add to your cart</a>
						</div>
					</div>
				</div>

				<div class="col-4">
					<div class="card">
						<img src="images/menu/coffeeathome/Christmas Blend.jpg" class="card-img-top" alt="">
						<div class="card-body">
							<h5 class="card-title">Christmas Blend</h5>
							<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, ex.</p>
							<a href="#" class="btn btn-primary">Add to your cart</a>
						</div>
					</div>
				</div>
			</div>
	</section>

	<!-- Menu #6 -->
	<section class="menu_section menu-top layout_padding-bottom" id="readytoeat">

		<h2>Ready-to-Eat</h2>

		<div class="container">

			<div class="row gx-5 gy-4">

				<div class="col-7">
					<div class="card">
						<img src="images/menu/readytoeat/Almond Biscotti.jpg" class="card-img-top" alt="">
						<div class="card-body">
							<h5 class="card-title">Almond Biscotti</h5>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores,
								reprehenderit?</p>
							<a href="#" class="btn btn-primary">Add to your cart</a>
						</div>
					</div>
				</div>
			</div>
	</section>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="exampleModalLabel">Proceed adding to your cart</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					Do you want <strong>Java Chip Frappuccino</strong>, worth <strong>₹149</strong> (+ taxes) to be added to your cart?
					<hr>
					<form action="#" method="POST" enctype="multipart/form-data">
					<div class="form-outline mb-3">
						<input type="text" value=1 name="quantity" class="form-control form-control-md" placeholder="Quantity?">
					</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Later</button>
					<a href='addCart.php?pid=101' input type='submit' name='submit'>
						<button type="button" class="btn btn-primary" style="background-color:#04AA6D;">Go ahead!</button>
					</a>

				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="exampleModalLabel">Proceed adding to your cart</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					Do you want <strong>Caffe Americano</strong>, worth <strong>₹199</strong> (+ taxes) to be added to your cart?
					<hr>
					<form action="#" method="POST" enctype="multipart/form-data">
					<div class="form-outline mb-3">
						<input type="text" value=1 name="quantity" class="form-control form-control-md" placeholder="Quantity?">
					</div>
					</form>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Later</button>
					<a href='addCart.php?pid=102' input type='submit' value = 'Update'>
						<button type="button" class="btn btn-primary" style="background-color:#04AA6D;">Go ahead!</button>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="exampleModalLabel">Proceed adding to your cart</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					Do you want <strong>Cold Coffee</strong>, worth <strong>₹99</strong> (+ taxes) to be added to your cart?
					<hr>
					<form action="#" method="POST" enctype="multipart/form-data">
					<div class="form-outline mb-3">
						<input type="text" value=1 name="quantity" class="form-control form-control-md" placeholder="Quantity?">
					</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Later</button>
					<a href='addCart.php?pid=103' input type='submit' value = 'Update'>
						<button type="button" class="btn btn-primary" style="background-color:#04AA6D;">Go ahead!</button>
					</a>
				</div>
			</div>
		</div>
	</div>


	<div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="exampleModalLabel">Proceed adding to your cart</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					Do you want <strong>Solo Espresso</strong>, worth <strong>₹219</strong> (+ taxes) to be added to your cart?
					<hr>
					<form action="#" method="POST" enctype="multipart/form-data">
					<div class="form-outline mb-3">
						<input type="text" value=1 name="quantity" class="form-control form-control-md" placeholder="Quantity?">
					</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Later</button>
					<a href='addCart.php?pid=105' input type='submit' name = 'submit'>
						<button type="button" class="btn btn-primary" style="background-color:#04AA6D;">Go ahead!</button>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="exampleModalLabel">Proceed adding to your cart</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					Do you want <strong>Chocolate Frappuccino</strong>, worth <strong>₹249</strong> (+ taxes) to be added to your cart?
					<hr>
					<form action="#" method="GET" enctype="multipart/form-data">
					<div class="form-outline mb-3">
						<input type="text" value=1 name="quantity" class="form-control form-control-md" placeholder="Quantity?">
					</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Later</button>
					<a href='addCart.php?pid=106' input type='submit' value = 'Update'>
						<button type="button" class="btn btn-primary" style="background-color:#04AA6D;">Go ahead!</button>
					</a>
				</div>
			</div>
		</div>
	</div>

</body>


<?php

include("connection.php");

?>

<?php include('assets/footer.php'); ?>

<!-- Error Modal  -->

<div class="modal fade" id="exampleModal0" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Not Logged In</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
	  Sorry this item is currently unavailable.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

</html>