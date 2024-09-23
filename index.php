<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="styles/site.css" />
	<link rel="icon" href="images/logo.png" type="image/x-icon" />

	<!-- SEO Meta Tags -->

	<!-- title -->
	<title>Pizza Nano</title>
	<meta property="og:title" content="Pizza Nano" />
	<meta name="twitter:title" content="Pizza Nano" />

	<!-- url -->
	<meta property="og:url" content="https://www.pizzanano.ca" />
	<link rel="canonical" href="https://www.pizzanano.ca" />


	<!-- description -->
	<meta name="description" content="Discover the best pizza in town with fresh ingredients, family recipes, and all halal options to satisfy your cravings." />
	<meta name="twitter:description" content="Discover the best pizza in town with fresh ingredients, family recipes, and all halal options to satisfy your cravings." />
	<meta property="og:description" content="Discover the best pizza in town with fresh ingredients, family recipes, and all halal options to satisfy your cravings." />

	<!-- image -->
	<meta property="og:image" content="https://www.pizzanano.ca/images/meta.jpg" />
	<meta name="twitter:image" content="https://www.pizzanano.ca/images/meta.jpg" />

	<!-- misc -->
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="robots" content="index, follow" />
	<meta property="og:locale" content="en_CA" />
	<meta name="keywords" content="pizza, halal pizza, best pizza, family pizza, wings, shawarma, burger, halal" />


</head>

<body>
	<header>
		<inner-column>
			<p>Pizza Nano</p>
			<div class="logo-full">
				<picture class="logo">
					<img src="images/logo-new.png" alt="" />
				</picture>


			</div>

			<nav>
				<a class="text" href="menu.html">Menu</a>
				<a class="text" href="#contact-info">Contact</a>
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

	<footer id='footer'>

		<inner-column class='full'>
			<picture>
				<img src="images/logo-new.png" alt="">
			</picture>

			<div class="quick-links">
				<p class='firm-voice'>Quick Links</p>

				<nav>
					<a href="#specials" class='calm-voice'>Pick-up</a>
					<a href="menu.html" class='calm-voice'>Menu</a>
					<a href="#reviews" class='calm-voice'>Reviews</a>
					<a href="#delivery" class='calm-voice'>Delivery</a>
				</nav>

			</div>

			<div class="contact-info" id="contact-info">


				<div class="business-info">
					<p class="firm-voice">
						Business Hours
					</p>

					<p>
						Sunday-Thursday: 11am - 11pm

					</p>

					<p>Friday & Saturday: 11am - 12am</p>

					<p> Contact: <a href="tel:6473431449"> 647-343-1449</a></p>


				</div>

				<div class="maps">

					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5754.846285362797!2d-79.07861282372848!3d43.84705757109365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4df005d196287%3A0xaf335408bbedec47!2sPizza%20Nano!5e0!3m2!1sen!2sca!4v1726875873690!5m2!1sen!2sca" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

				</div>

			</div>
		</inner-column>

		<p class='copyright'> Copyright ©️ Pizza Nano. All Rights Reserved.</p>

	</footer>
</body>

</html>