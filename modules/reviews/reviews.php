<?php 

	$reviews = [

		[
			'name' => 'Ravi K.',
			'review' => 'Best pizza in town! The flavors are incredible, and you can really taste the freshness in every bite. The service was top-notch, and the atmosphere was perfect for a relaxed meal with friends. Cannot wait to try more from the menu!"',
			'rating' => '4'
		],
		[
			'name' => 'John T.',
			'review' => ' I tried the margherita and the pepperoni, and both were absolutely delicious. Friendly staff and great service made the experience even better. I will definitely be coming back.',
			'rating' => '5'
		],
		[
			'name' => 'Sarah P.',
			'review' => ' I am obsessed with their BBQ chicken pizza! The toppings are fresh, and the flavor is perfectly balanced. The cheese pulls were epic, and the crust was cooked to perfection. ',
			'rating' => '5'
		],
		[
			'name' => 'Omar K.',
			'review' => ' Incredible pizza! We ordered the veggie supreme, and it was loaded with fresh veggies and gooey cheese. The crust was thin but held up well to the toppings, and the flavors were spot on.',
			'rating' => '5'
		],
		[
			'name' => 'Emily R.',
			'review' => ' Absolutely love this pizza place! The dough is so fresh, and the toppings are generous. I had the classic cheese pizza, and it was simply divine. They also have a great selection of drinks and sides.',
			'rating' => '4'
		],
		[
			'name' => 'David K.',
			'review' => ' If you are looking for pizza perfection, this is the place. The pizzas have an amazing smoky flavor, and the crust is light yet crispy. I ordered the meat lovers, and it was loaded with quality meats and cheese. ',
			'rating' => '4'
		],
	]


 ?>

 <section class="reviews">
 	<inner-column>
 		
<?php foreach($reviews as $review) { ?>

 		<div class="review-card">
 			<p class="calm-voice">
 				<?= $review['review'] ?>
 			</p>
 			<h2 class="attention-voice">
 				<?= $review['name'] ?>
 			</h2>
 			<div class="ratings">
 	<?php for ($x = 1; $x <= $review['rating']; $x++) { ?>
 				<picture>
	 				<img src="images/reviews/icon.svg" alt="">
	 			</picture>
 	<?php } ?>
 			</div>
 		</div>

<?php } ?>

 	</inner-column>
 </section>