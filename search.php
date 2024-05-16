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
	<title>Search Results</title>
</head>

<body>

	<?php
	include("connection.php");
	?>

	<div class="container my-3 menu_section layout_padding2-bottom">
		<h2>Search results for <em>"<?php echo $_GET['search'] ?></em>"</h2>
	</div>

	<div class="container layout_padding2-bottom">
		<div class="row gx-5 gy-4">
			
			<?php
			$noresult = true;
			$query = $_GET["search"];
			$sql = "SELECT * FROM product_table WHERE MATCH (pname,descrip) AGAINST ('$query') LIMIT 9"; // Fetch at least 9 rows
			$result = mysqli_query($conn, $sql);
			$count = 0;
			while ($row = mysqli_fetch_assoc($result)) {
				$name = $row['pname'];
				$desc = $row['descrip'];
				$price = $row['price'];
				$image = $row['image'];
				$pid = $row['pid'];
				$noresult = false;

				if ($count % 3 == 0) {
					echo '</div><div class="row gx-5 gy-4">';
				}

				echo '<div class="col-4">
					<div class="card mb-3">
						<img src="' . $image . '" class="card-img-top" alt="">
						<div class="card-body">
							<h5 class="card-title">' . $name . '</h5>
							<p style="font-size:14px; font-weight:600; text-align: left;">₹' . $price . '</p>
							<p class="card-text">' . $desc . '</p>
							<a href="order.php?pid=' . $pid . '" class="btn btn-outline-success">Add to your cart</a>
						</div>
					</div>
				</div>';

				$count++; // Increment the counter
			}

			if ($noresult) {
				echo '
				<div class="col-12">
					<div class="jumbotron jumbotron-fluid">
						<div class="container">
							<h1 class="display-4">No Result Found!</h1>
							<p class="lead">Whatever you are looking for, we do not have it right now.</p>
						</div>
					</div>
				</div>';
			}
			?>
		</div>
	</div>

</body>

</html>

<?php
include("assets/footer.php");
?>