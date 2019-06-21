<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
	<title>Hotel California</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="icon" href="resw/favicon.png" type="image/png">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<section id="section-home">
		<header>
			<div class="container-fluid nv">
				<nav class="navbar navbar-expand-md justify-content-center">

					<button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1"><i class="fas fa-bars fa-1x"></i></span></button>

					<!-- Collapsible content -->
					<div class="collapse navbar-collapse" id="navbarSupportedContent1">
						<a class="navbar-brand"></a>
						<img class="img-responsive" src="res/logo3.png">
						<ul class="nav navbar-nav">
							<li class="nav-item active">
								<a class="nav-link font-weight-bold" href="/">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link font-weight-bold" href="index.php/booking">My bookings</a>
							</li>
							<li class="nav-item">
								<a class="nav-link font-weight-bold" href="index.php/contact">Contact</a>
							</li>
							<li class="nav-item">
								<a class="nav-link font-weight-bold" href="index.php/register">Register</a>
							</li>
							<li class="nav-item">
								<a class="nav-link font-weight-bold" href="index.php/login">Login</a>
							</li>
						</ul>
				</nav>
			</div>
		</header>
		<h1>Hotel <span class="font-weight-bold">California</span></h1>
		<form action="#" class="booking_form">
			<div class="d-flex flex-xl-row flex-column align-items-start justify-content-start">
				<div class="booking_input_container d-flex flex-lg-row flex-column align-items-start justify-content-start">
					<div><input type="text" class="datepicker booking_input booking_input_a booking_in" placeholder="Check in" required="required"></div>
					<div><input type="text" class="datepicker booking_input booking_input_a booking_out" placeholder="Check out" required="required"></div>
					<div><input type="number" class="booking_input booking_input_b" placeholder="Persons" required="required"></div>
				</div>
				<div><button class="booking_button trans_200">Book Now</button></div>
			</div>
		</form>
	</section>
	<script src="js/custom.js"></script>
</body>

</html>
