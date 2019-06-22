<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<?php
$this->load->view('head');
?>

<body>
	<section id="section-home">
		<?php
	$this->load->view('header');?>
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
