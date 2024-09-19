<?php 
	
	$specials =  [
		[
			'name' => 'Small',
			'price' => '6.99',
			'image' => 'pizza-1',
			'topping' => '1'
		],
		[
			'name' => 'Medium',
			'price' => '$8.99',
			'image' => 'pizza-2',
			'topping' => '2'
		],
		[
			'name' => 'Large',
			'price' => '$9.99',
			'image' => 'pizza-3',
			'topping' => '2'
		],
		[
			'name' => 'X-large',
			'price' => '$11.99',
			'image' => 'pizza-1',
			'topping' => '3'
		],
	]
	
 ?>
<section class="specials">
	<inner-column>
		<div class="header-text">
			<h2 class="booming-voice">Pick-up Specials</h2>
			<h3 class="attention-voice">Delicious Deals You Can't Resist.</h3>
		</div>

		<div class="pick-up">

<?php foreach ($specials as $special) { ?>




			<div class="box">

				<picture>
					<img src="images/specials/<?= $special['image'] ?>.png" alt="">
				</picture>

				<h4 class="attention-voice">
					<?= $special['name'] ?>
				</h4>

				<div class="specs">
					<p><?= $special['price'] ?></p>
					<p><span class='booming-voice'><?= $special['topping'] ?></span> topping</p>
				</div>
				
			</div>

		<?php } ?>


		</div>

	</inner-column>
</section>