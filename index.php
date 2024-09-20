<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="styles/site.css" />

	<!--  -->
	<meta
		name="description"
		content="This contains design tokens that are used to create the visual design of the site. #todo" />
	<meta property="og:image" content="$todo" />
	<title>Pizza Nano</title>
</head>

<body>
	<header>
		<inner-column>
			<div class="logo-full">
				<picture class="logo">
					<img src="images/logo.jpg" alt="" />
				</picture>

				<p>Pizza Nano</p>
			</div>

			<nav>
				<a class="text" href="#menu">Menu</a>
				<a class="text" href="#contact">Contact</a>
			</nav>
		</inner-column>
	</header>

	<main>


		<?php include 'modules/hero-landing/hero-landing.php'; ?>

		<?php include 'modules/specials/specials.php'; ?>

		<?php include 'modules/catchy-section-1/catchy-section-1.php'; ?>

		<?php include 'modules/home-menu/home-menu.php'; ?>

		<?php include 'modules/catchy-section-2/catchy-section-2.php'; ?>

		<?php include 'modules/reviews/reviews.php'; ?>

		<?php include 'modules/delivery-section/delivery.php'; ?>



	</main>

	<footer>
		<inner-column class='full'>
			<picture>
				<img src="images/logo.jpg" alt="">
			</picture>

			<div class="quick-links">
				<p class='firm-voice'>Quick Links</p>

				<nav>
					<a href="">Home</a>
					<a href="">Pick-up</a>
					<a href="">Menu</a>
					<a href="">Reviews</a>
					<a href="">Delivery</a>
				</nav>

			</div>

			<div class="contact-info">
				<div class="maps">

				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5754.846285362797!2d-79.07861282372848!3d43.84705757109365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4df005d196287%3A0xaf335408bbedec47!2sPizza%20Nano!5e0!3m2!1sen!2sca!4v1726875873690!5m2!1sen!2sca" width="500" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

				</div>

				<div class="business-info">
					<p class="firm-voice">
						Business Hours
					</p>

					<p>
						Sunday-Thursday: 11am - 11pm
						
					</p>

					<p>Friday & Saturday: 11am - 12am</p>

					<p> Contact: 123 456 7890</p>

				
				</div>
			</div>

				
			</div>




		</inner-column>

		<p class='copyright'>Copyright ©️ Pizza Nano. All Rights Reserved </p>
	</footer>
</body>

</html>