<?php 
	
	$specials =  [
		[
			'name' => 'Medium',
			'price' => '$7.99',
			'image' => 'pizza-1',
			'topping' => '1',
			 'dip' => '1',
		],
		[
			'name' => 'Large',
			'price' => '$10.99',
			'image' => 'pizza-2',
			'topping' => '1',
			'dip' => '1'

		],
		[
			'name' => 'X-Large',
			'price' => '$28.99',
			'image' => 'pizza-3',
			'topping' => '3',
			'dip' => '1',
			'wings' => '10'
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
					<p><?php

					 if(isset($special['wings']) ) {
						echo'10 Wings';
					}

					?>

					</p>
				</div>
				
			</div>

		<?php } ?>


		</div>

	</inner-column>
</section>