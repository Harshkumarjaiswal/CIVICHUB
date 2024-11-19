<?php

session_start();
include 'connection.php';

$msg = "";

if (isset($_SESSION['msg'])) {
	$msg = $_SESSION['msg'];
	unset($_SESSION['msg']);
}

if ($msg != "") {
	echo "<script>alert('$msg');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
	<link rel="stylesheet" href="style.css">
	<title>CIVICHUB: Municipal Management Services Suite</title>
</head>

<body>
	<header class="flex-nav">
		<div class="text">
			Be The Change
		</div>
		<nav class="flex-nav1">
			<a href="index.html">Home</a>
			<a href="About.html">About</a>
			<a href="form.php" class="active">Raise A Complaint</a>
			<a href="contact.html">Contact</a>
		</nav>
	</header>

	<form action="action.php" method="post" enctype="multipart/form-data">
		<div class="flex-container">
			<div class="flex-item">
				<h2>Raise A Complaint</h2>
				<div class="form-group">
					<label for="first_name">First Name:</label>
					<input type="text" id="first_name" name="first_name" required placeholder="">
				</div>
				<div class="form-group">
					<label for="last_name">Last Name:</label>
					<input type="text" id="last_name" name="last_name" required placeholder="">
				</div>
				<div class="form-group">
					<label for="phone_number">Phone Number:</label>
					<input type="tel" id="phone_number" name="phone_number" required placeholder="Your phone number">
				</div>
				<div class="form-group">
					<label for="email_address">Email Address:</label>
					<input type="email" id="email_address" name="email_address" required placeholder="Your email here">
				</div>
				<div class="form-group">
					<label for="upload_photo">Upload photo:</label>
					<input type="file" id="upload_photo" name="image" onchange="readURL(this);" accept="image/*">
				</div>
				<div class="form-group">
					<label for="municipal_problem">Municipal Problem:</label>
					<select id="municipal_problem" name="municipal_problem" required>
						<option value="">Select a problem</option>
						<option value="Street Light Outage">Street Light Outage</option>
						<option value="Water Leakage">Water Leakage</option>
						<option value="Pothole">Pothole</option>
						<option value="Trash Collection Issue">Trash Collection Issue</option>
						<option value="Other">Other (please specify)</option>
					</select>
				</div>
				<div class="form-group">
					<label for="address">Address:</label>
					<input type="text" id="address" name="address" required placeholder="Enter your address">
				</div>
				<div class="form-group">
					<label for="description">Description:</label>
					<textarea id="description" name="description" required placeholder="Describe your problem"></textarea>
				</div>

				<button type="submit" name="form_savess" class="btn btn-primary" id="submit" value="Submit">Submit</button>
			</div>
		</div>
	</form>


</body>

</html>
