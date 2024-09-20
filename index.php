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

	<footer></footer>
</body>

</html>