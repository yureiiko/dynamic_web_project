<!DOCTYPE html>
<html>
<head>
	<title>Payment Form</title>
	<link rel="stylesheet" type="text/css" href="Style/payement.css">
	<script src="js/payement.js"></script>
</head>
<body>
	<form action="process_payment.php" method="POST">
		<h2>Payment Form</h2>

		<!-- Personal Information -->
		<div class="section">
			<h3 class="section-title">Personal Information</h3>
			<label for="full_name">Full Name:</label>
			<input type="text" id="full_name" name="full_name" placeholder="Full Name" required>

			<label for="email">Email Address:</label>
			<input type="email" id="email" name="email" placeholder="Email Address" required>

			<label for="phone">Phone Number:</label>
			<input type="text" id="phone" name="phone" placeholder="Phone Number" required>
		</div>

		<!-- Delivery Address -->
		<div class="section">
			<h3 class="section-title">Delivery Address</h3>
			<label for="address">Address:</label>
			<input type="text" id="address" name="address" placeholder="Address" required>

			<label for="city">City:</label>
			<input type="text" id="city" name="city" placeholder="City" required>

			<label for="country">Country:</label>
			<select id="country" name="country" required>
				<option value="">Select a country</option>
				<option value="United Kingdom">United Kingdom</option>
				<option value="United States">United States</option>
				<option value="Canada">Canada</option>
				<option value="Australia">Australia</option>
				<!-- Add more country options as needed -->
			</select>
		</div>

		<!-- Price Information -->
		<div class="section">
			<label for="total_amount">Total Amount:
				<?php
				if (!isset($_COOKIE["buyer"])) {
					header("Location: login.php");
				}
				if (!isset($_POST["totalPrice"]) || !isset($_POST["ids"])) {
					header("Location: buyer_cart.php");
				}
				echo $_POST["totalPrice"];
				?>
			</label>
		</div>

		<!-- Payment Information -->
		<div class="section">
			<h3 class="section-title">Payment Information</h3>
			<label for="payment_type">Payment Type:</label>
			<select id="payment_type" name="payment_type" onchange="showPaymentForm(this.value)" required>
				<option value="">Select a payment type</option>
				<option value="paypal">PayPal</option>
				<option value="card">Credit/Debit Card</option>
			</select>

			<!-- PayPal Payment -->
			<div class="section" id="paypal-form">
				<h3 class="section-title">PayPal Payment</h3>
				<div class="payment-image">
					<img src="style/img/paypal_logo.png" alt="PayPal Logo">
				</div>
				<label for="paypal_email">PayPal Email:</label>
				<input type="email" id="paypal_email" name="paypal_email" placeholder="PayPal Email">
			</div>

			<!-- Credit/Debit Card Payment -->
			<div class="section" id="card-form">
				<h3 class="section-title">Credit/Debit Card Payment</h3>
				<div class="payment-image">
					<img src="style/img/card_logo.png" alt="Card Logo">
				</div>
				<label for="card_number">Card Number:</label>
				<input type="text" id="card_number" name="card_number" placeholder="Card Number" required>

				<label for="expiry_date">Expiry Date:</label>
				<input type="text" id="expiry_date" name="expiry_date" placeholder="MM/YY" required>

				<label for="cvv">CVV:</label>
				<input type="text" id="cvv" name="cvv" placeholder="CVV" required>
			</div>
		</div>

		<input type="submit" value="Pay">
		</form>
	</body>
</html>