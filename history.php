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
	<title>Completed Orders</title>
</head>

<?php
include("connection.php");
// error_reporting(0);

$userprofile = $_SESSION['email'];

if ($userprofile == true) {
} else {
	header('location:login.php');
}

$email = $_SESSION['email'];

$query = "SELECT * FROM complete_table where email='$email'";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);

if ($total != 0) {
?>

	<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="100">

		<section class="menu_section layout_padding2-top">

			<h2>Your Order History</h2>

			<div class="container">
				<table class="table layout_padding2-bottom">
					<thead>
						<tr>
							<th scope="col">Order ID</th>
							<th scope="col">Customer</th>
							<th scope="col">Product</th>
							<th scope="col">Image</th>
							<th scope="col">Price</th>
							<th scope="col">Quantity</th>
							<th scope="col">Cost</th>
							<th scope="col">Contact</th>
						</tr>
					</thead>

				<?php
				while ($result = mysqli_fetch_assoc($data)) {
					echo "<tr>
    <td>" . $result['oid'] . "</td>
    <td>" . $result['name'] . "</td>
    <td>" . $result['pname'] . "</td>
    <td><img src = '" . $result['image'] . "' height='75px' width='75px'></td>
    <td>" . '₹' . $result['price'] . "</td>
    <td>" . $result['quantity'] . "</td>
    <td>" . '₹' . $result['cost'] . "</td>
    <td>" . $result['email'] . "</td>
    </tr>
    ";
				}
			} else {
				echo "No records found";
			}
				?>
				</table>
		</section>


		<script>
			function checkdelete() {
				return confirm('Are you sure you want to delete this record?');
			}
			function checkcomplete() {
				return confirm('Are you sure you want to complete this order?');
			}
		</script>

		<!-- Modal  -->

		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="exampleModalLabel">Delivery details</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="form-outline mb-3">
							<input type="text" name="name" class="name-field form-control form-control-md" placeholder="Receiver's Name">
							<small class="name-field-msg form-text text-danger ml-2"></small>
						</div>
						<div class="form-outline mb-3">
							<input type="text" name="name" class="name-field form-control form-control-md" placeholder="Receiver's Contact Number">
							<small class="name-field-msg form-text text-danger ml-2"></small>
						</div>

						<div class="form-outline mb-3">
							<input type="text" name="email" id="email" class="email-field form-control form-control-md" placeholder="Address Line 1">
							<small class="email-field-msg form-text text-danger ml-2"></small>
						</div>

						<div class="form-outline mb-3">
							<input type="text" name="email" id="email" class="email-field form-control form-control-md" placeholder="Address Line 2">
							<small class="email-field-msg form-text text-danger ml-2"></small>
						</div>

						<div class="form-outline mb-3">
							<input type="text" name="email" id="email" class="email-field form-control form-control-md" placeholder="Address Line 3">
							<small class="email-field-msg form-text text-danger ml-2"></small>
						</div>

						<div class="form-outline mb-3">
							<input type="text" name="email" id="email" class="email-field form-control form-control-md" placeholder="PIN Code">
							<small class="email-field-msg form-text text-danger ml-2"></small>
						</div>

						<div class="form-outline mb-3">
							<input type="text" name="email" id="email" class="email-field form-control form-control-md" placeholder="City">
							<small class="email-field-msg form-text text-danger ml-2"></small>
						</div>

						<div class="form-outline mb-3">
							<input type="text" name="email" id="email" class="email-field form-control form-control-md" placeholder="State">
							<small class="email-field-msg form-text text-danger ml-2"></small>
						</div>

					</div>
					<div class="modal-footer">
						<a href="payment.php">
							<button type="button" class="btn btn-primary" style="background-color:#04AA6D;">Proceed to payment gateway</button>
						</a>
					</div>
				</div>
			</div>
		</div>
	</body>

</html>