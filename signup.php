<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign Up | Lighthouse Café</title>

	<!-- CSS -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- JS -->
	<script src="js/script.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-3.7.1.min.js"></script>

</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="100">
	<header>
		<nav class="navbar navbar-expand-lg navigation-wrap white-bg">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.html">Lighthouse Café <img src="images/about-ico/s2.png"></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0">

						<li>
							<a href="index.php">
								<button class="main-btn">
									< &#160;Home</button>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>


	<section class="login_section layout_padding">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="img-box">
						<img src="images/5778.jpg" alt="">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-box">
						<form action="#" method="POST" enctype="multipart/form-data">

							<h1>Sign Up Here!</h1>

							<div class="form-outline mb-3">
								<input type="text" name="name" class="name-field form-control form-control-md" placeholder="Your Name">
								<small class="name-field-msg form-text text-danger ml-2"></small>
							</div>

							<div class="form-outline mb-3">
								<input type="email" name="email" id="email" class="email-field form-control form-control-md" placeholder="Email address">
								<small class="email-field-msg form-text text-danger ml-2"></small>
							</div>

							<div class="form-outline mb-3">
								<input type="text" name="phone" class="phone-field form-control form-control-md" placeholder="Phone number">
								<small class="phone-field-msg form-text text-danger ml-2"></small>
							</div>

							<div class="form-outline mb-3">
								<input type="password" name="password" class="password-field form-control form-control-md" placeholder="Password">
								<small class="password-field-msg form-text text-danger ml-2"></small>
							</div>

							<div class="form-outline mb-3">
								<input type="password" name="cpassword" class="c-password-field form-control form-control-md" placeholder="Re-type Password">
								<small class="c-password-field-msg form-text text-danger ml-2"></small>
							</div>

							<div class="form-outline mb-3">
								<input type="text" name="location" class="name-field form-control form-control-md" placeholder="Your Location">
								<small class="name-field-msg form-text text-danger ml-2"></small>
							</div>

							<div class="form-outline mb-3">
								<input type="text" name="handle" class="name-field form-control form-control-md" placeholder="Choose a username">
								<small class="name-field-msg form-text text-danger ml-2"></small>
							</div>

							<div class="form-outline mb-3 input-group custom-file-button">
								<label class="input-group-text" for="inputGroupFile">Profile Picture</label>
								<input type="file" name="uploadfile" class="input form-control" id="inputGroupFile">
							</div>

							<div class="form-outline mb-3">
								<select name="access" class="form-select" aria-label="Default select example">
									<option value="User" selected>Sign up as a user</option>
									<option value="Admin">Sign up as an admin</option>
								</select>
							</div>

							<div class="d-flex justify-content-between align-items-center">

								<div class="text-center text-lg-start mt-3 pt-2">
									<input type="submit" name="signup" class="btn btn-success btn-md" style="padding-left: 2rem; padding-right: 2rem;">
									<p class="small fw-bold mt-4 pt-1 mb-0">Already have an account? <a href="login.php" class="link-success">Log In</a></p>
								</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

</body>

</html>

<?php

include("connection.php");

if (isset($_POST['signup'])) {

	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];	
	$folder = "images/".$filename;

	move_uploaded_file($tempname, $folder);

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$pass = $_POST['password'];
	$cpass = $_POST['cpassword'];
	$location = $_POST['location'];
	$handle = $_POST['handle'];
	$access = $_POST['access'];

	$query = "INSERT INTO users_table (name,email,phone,pass,location,handle,access,image) VALUES ('$name','$email','$phone','$pass','$location','$handle','$access','$folder')";
	
	$data = mysqli_query($conn, $query);

	if ($data) {
?>
		<meta http-equiv="refresh" content="0; url = http://localhost/project0/login.php" />
<?php
		// echo "Data inserted";
	} else {
		// echo "failed";
	}
}

?>