
		function showPaymentForm(paymentType) {
			var paypalForm = document.getElementById("paypal-form");
			var cardForm = document.getElementById("card-form");

			if (paymentType === "paypal") {
				paypalForm.style.display = "block";
				cardForm.style.display = "none";
			} else {
				paypalForm.style.display = "none";
				cardForm.style.display = "block";
			}
		}
