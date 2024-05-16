<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Log In | Lighthouse Café</title>
  
	<!-- CSS -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
  
	<!-- JS -->
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-3.7.1.min.js"></script>
  
  </head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="100">
	<header>
		<nav class="navbar navbar-expand-lg navigation-wrap white-bg">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.html">Lighthouse Café <img src="images/about-ico/s2.png"></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
				  aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
						<form action="#" method="POST" class="" id="">

							<h1>Login Here!</h1>

							<div class="form-outline mb-3">
								<input type="email" name="email" id="email" class="email-field form-control form-control-md"
									placeholder="Email address">
									<small class="email-field-msg form-text text-danger ml-2"></small>
							</div>


							<div class="form-outline mb-3">
								<input type="password" name="password" id="password" class="password-field form-control form-control-md"
									placeholder="Password" required>
								<small class="password-field-msg form-text text-danger ml-2"></small>

							</div>

							<div class="d-flex justify-content-between align-items-center">

								<div class="form-check">
									<input class="form-check-input " type="checkbox" value="" id="" />
									<label class="form-check-label" for="">
										Remember me
									</label>
								</div>
								<a href="#" class="link-success" data-bs-toggle="modal" data-bs-target="#exampleModal"><strong>Forgot password?</strong></a>
							</div>

							<div class="text-center text-lg-start mt-3 pt-2">
								<button name="login" class="btn btn-success btn-md"
									style="padding-left: 2rem; padding-right: 2rem;">Login</button>
								<p class="small fw-bold mt-4 pt-1 mb-0">Don't have an account? <a href="signup.php"
										class="link-success">Sign Up</a></p>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Password Recovery</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
	  <form action="#" method="POST" name="recover_psw">
		<p>Enter your Email address again: </p>
	  <div class="form-outline mb-3">
								<input type="email" name="email" id="email" class="email-field form-control form-control-md"
									placeholder="Email address">
									<small class="email-field-msg form-text text-danger ml-2"></small>
							</div>
      </div>
      <div class="modal-footer">
        <input type="submit" name="recover" value= "Recover" class="btn btn-outline-success">
      </div>
</form>
    </div>
  </div>
</div>

</body>

</html>

<?php

include("connection.php");

if(isset($_POST['login']))
{
	// $id = $_POST['id'];
	$email = $_POST['email'];
	$pass = $_POST['password'];

	$query = "SELECT * FROM users_table WHERE email = '$email' AND pass = '$pass'";
	$data = mysqli_query($conn, $query);
	$total = mysqli_num_rows($data);

	$result = mysqli_fetch_assoc($data);

	if($total == 1 AND $result['access'] == "Admin")
	{
		$_SESSION['email'] = $email;
		$_SESSION['pass'] = $pass;

		?>
<!-- <script>
	windows.location.href='admin_profile.php';
</script> -->

<meta http-equiv = "refresh" content = "0; url = http://localhost/project0/admin_profile.php"/>

		<?PHP
		// header('location:admin_profile.php');
	} elseif($total == 1 AND $result['access'] == "User") {
		$_SESSION['email'] = $email;
		$_SESSION['pass'] = $pass;
?>
<meta http-equiv = "refresh" content = "0; url = http://localhost/project0/menu_user.php"/>
<?php
	} else {
		// echo "Error";
	}
}

?>





















<?php 
    if(isset($_POST["recover"])){
        include('connection.php');
        $email = $_POST["email"];

        $sql = mysqli_query($conn, "SELECT * FROM users_table WHERE email='$email'");
        $query = mysqli_num_rows($sql);
  	    $fetch = mysqli_fetch_assoc($sql);

        if(mysqli_num_rows($sql) <= 0){
            ?>
            <script>
                alert("<?php  echo "Sorry, no emails exists "?>");
            </script>
            <?php
        }else {
            $token = bin2hex(random_bytes(50));

            //session_start ();
            $_SESSION['token'] = $token;
            $_SESSION['email'] = $email;

            require "Mail/phpmailer/PHPMailerAutoload.php";
            $mail = new PHPMailer;

            $mail->isSMTP();
            $mail->Host='smtp.gmail.com';
            $mail->Port=587;
            $mail->SMTPAuth=true;
            $mail->SMTPSecure='tls';

            // h-hotel account
            $mail->Username='rkumar994@rku.ac.in';
            $mail->Password='qyzy tfwx fxlt bjlb';

            // send by h-hotel email
            $mail->setFrom('email', 'Password Reset');
            // get email from input
            $mail->addAddress($_POST["email"]);
            //$mail->addReplyTo('lamkaizhe16@gmail.com');

            // HTML body
            $mail->isHTML(true);
            $mail->Subject="Recover your password";
            $mail->Body="<b>Dear User</b>
            <h3>We received a request to reset your password.</h3>
            <p>Kindly click the below link to reset your password</p>
            http://localhost/project0/reset_psw.php
            <br><br>
            <p>With regrads,</p>
            <b>Rishabh</b>";

            if(!$mail->send()){
                ?>
                    <script>
                        alert("<?php echo " Invalid Email "?>");
                    </script>
                <?php
            }else{
                ?>
                    <script>
                        window.location.replace("login.php");
                    </script>
                <?php
            }
        }
    }
?>