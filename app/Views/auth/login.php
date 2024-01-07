<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	  <!-- Favicon -->
	  <link href="img/favicon.ico" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<!-- Customized Bootstrap Stylesheet -->
<link href="css/style.css" rel="stylesheet">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="auth/images/icons/favicon.ico"/>
<!--===============================================================================================-->

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="auth/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="auth/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="auth/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="auth/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="auth/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="auth/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="auth/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="auth/css/util.css">
	<link rel="stylesheet" type="text/css" href="auth/css/main.css">
<!--===============================================================================================-->
</head>
<body>

<?= $this->include('layouts/navbar') ?>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('auth/images/bg-01.jpg');">
			<div class="wrap-login100">
			<form class="login100-form validate-form" action="/doLogin" method="post">
					<span class="login100-form-logo">			
					<img src="auth/images/icon.png" style="width:42px;height:42px;">
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div>
					<a class="txt1">
							Dont Have Account?
						</a>
						<a class="txt1 p-t-20" href="/register">
							Register
						</a>
					</div>
					<?php if (session()->has('validation')): ?>
    <div class="alert alert-danger p-t-20" style="margin-top: 25px;">
        <?= session('validation')->listErrors() ?>
    </div>
<?php endif; ?>
					<div class="container-login100-form-btn  p-t-20">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
					</div>
	
					<div class="text-center p-t-90">
						<a class="txt1" href="#">
							Forgot Password?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="authvendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="auth/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="auth/vendor/bootstrap/js/popper.js"></script>
	<script src="auth/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="auth/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="auth/vendor/daterangepicker/moment.min.js"></script>
	<script src="auth/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="auth/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="auth/js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>