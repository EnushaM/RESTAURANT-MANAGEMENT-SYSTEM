<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="style$.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<div class="details">
			<div class="time">
				<h2 class="heading">Time Open</h2>
				<h3 class="heading-days">Monday-Friday</h3>
				<p>7AM - 11AM (Breakfast)</p>
				<p>11AM - 10PM (Lunch/Dinner)</p>

				<h3 class="heading-days">Saturday & Sunday</h3>
				<p>9AM - 1PM (Breakfast)</p>
				<p>1AM - 10PM (Lunch/Dinner)</p>

				<hr>

				<h4 class="heading-phone">Call us:(+91) 45-45-456</h4>
			</div>

			<div class="container-form">
				<form action="db.php" method="POST">
					<h2 class="heading heading-yellow">RESERVATION ONLINE</h2>

					<div class="form-field">
						<p>Your Name</p>
						<input type="text" placeholder="Your Name" name="n" required>
					</div>

					<div class="form-field">
						<p>Your E-mail</p>
						<input type="email" placeholder="Your E-mail" name="e">
					</div>

					<div class="form-field">
						<p>Date</p>
						<input type="date" placeholder="dd/mm/yyyy" name="d" required>
					</div>

					<div class="form-field">
						<p>Time</p>
						<input type="time" placeholder="00:00:00" name="t" required>
					</div>

					<div class="form-field">
						<p>How many people?</p>
						<input type="number" placeholder="1" name="no" required>
					</div>

					<button class="btn">Book My Seat</button>
				</form>
			</div>
		</div>
	</body>
</html>