<?php

//2 dips for party

$menu = [
	'Pizzas' => [
		[
			'name' => 'Cheese Pizza',
			'description' => '1 Dip',
			'image' => 'specials/pizza-2.png',
			'sizes' => [
				'Small' => 7.99,
				'Medium' => 8.99,
				'Large' => 11.99,
				'X-Large' => 14.99,
				'Party (+2 Dips!)' => 19.99
			]
		],
		[
			'name' => 'Single Pizza',
			'description' => '4 Toppings & 1 Dip',
			'image' => 'specials/pizza-1.png',
			'sizes' => [
				'Small' => 11.98,
				'Medium' => 14.99,
				'Large' => 18.99,
				'X-Large' => 22.99,
				'Party (+2 Dips!)' => 27.99,
			]
		],
		[
			'name' => 'Double Pizzas',
			'image' => 'menu/double-pizza.png',
			'description' => '4 Toppings & 1 Dip',
			'sizes' => [
				'Small' => 21.99,
				'Medium' => 27.99,
				'Large' => 36.99,
				'X-Large' => 44.99,
				'Party (+2 Dips!)' => 54.99,
			]
		],
	],

	'Pizza Toppings' => [
		'Tandoori Chicken',
		'Ground Beef',
		'Extra Cheese',
		'Salami Pepperoni',
		'Black Olives',
		'Green Olives',
		'Green Peppers',
		'Red Peppers',
		'Hot Banana Peppers',
		'Jalapeno Peppers',
		'Fresh Mushrooms',
		'Pineapples',
		'Red Onions',
		'Fresh Tomatoes',
		'Fresh Garlic',
		'Sundried Tomatoes',
		'Extra Sauce',
		'Thick or Thin Crust',
		'Red Chilli Flakes'
	],

	'Wings' => [
		['name' => '10 Pcs Wings', 'price' => 13.99],
		['name' => '15 Pcs Wings', 'price' => 17.99],
		['name' => '20 Pcs Wings', 'price' => 22.99],
		['name' => '25 Pcs Wings', 'price' => 26.99],
		['name' => '30 Pcs Wings', 'price' => 32.99],
		['name' => '40 Pcs Wings', 'price' => 42.99],
		['name' => '50 Pcs Wings', 'price' => 52.99],
		['name' => '60 Pcs Wings', 'price' => 63.99],
		['name' => '80 Pcs Wings', 'price' => 84.99],
		['name' => '100 Pcs Wings', 'price' => 105.99]
	],

	'Wing Sauces' => [
		[
			'name' => 'Creamy Garlic',
			'image' => 'images/menu/creamy-garlic.png'
		],
		[
			'name' => 'BBQ Sauce',
			'image' => 'images/menu/bbq.png'
		],
		[
			'name' => 'Hot Sauce',
			'image' => 'images/menu/hot.png'
		],
		[
			'name' => 'Mild Sauce',
			'image' => 'images/menu/medium.png'
		],
		[
			'name' => 'Honey Garlic Sauce',
			'image' => 'images/menu/honey-garlic.png'
		]
	],

	'Pizza & Wing Combos' => [
		[
			'name' => 'Party Pizza & Wings Special',
			'description' => '<p>1 Party Pizza with 4 toppings</p><p>20 Chicken Wings</p><p>2 Dipping Sauce</p><p>2 pcs Garlic Bread</p><p>2 Litre Drink</p>',
			'price' => 59.99
		],
		[
			'name' => 'Combo #1',
			'description' => '<p>Small Pizza (4 Toppings)</p><p>10 Chicken Wings</p><p>1 pcs Garlic Bread</p><p>1 Dip</p>',
			'price' => 23.99
		],
		[
			'name' => 'Combo #2',
			'description' => '<p>Medium Pizza (4 Toppings)</p><p>12 Chicken Wings</p><p>1 pcs Garlic Bread</p><p>1 Dip</p>',
			'price' => 26.99
		],
		[
			'name' => 'Combo #3',
			'description' => '<p>Large Pizza (4 Toppings)</p><p>16 Chicken Wings</p><p>1 pcs Garlic Bread</p><p>1 Dip</p>',
			'price' => 32.99
		],
		[
			'name' => 'Combo #4',
			'description' => '<p>X-Large Pizza (4 Toppings)</p><p>16 Chicken Wings</p><p>1 pcs Garlic Bread</p><p>1 Dip</p>',
			'price' => 38.99
		],
		[
			'name' => 'Combo #5',
			'description' => '<p>2 Small Pizzas (4 Toppings)</p><p>16 Chicken Wings</p><p>2 pcs Garlic Bread</p><p>2 Dips</p>',
			'price' => 35.99
		],
		[
			'name' => 'Combo #6',
			'description' => '<p>2 Medium Pizzas (4 Toppings)</p><p>16 Chicken Wings</p><p>2 pcs Garlic Bread</p><p>2 Dips</p>',
			'price' => 44.99
		],
		[
			'name' => 'Combo #7',
			'description' => '<p>2 Large Pizzas (4 Toppings)</p><p>16 Chicken Wings</p><p>2 pcs Garlic Bread</p><p>2 Dips</p>',
			'price' => 59.99
		],
		[
			'name' => 'Combo #8',
			'description' => '<p>2 X-Large Pizzas (4 Toppings)</p><p>16 Chicken Wings</p><p>2 pcs Garlic Bread</p><p>2 Dips</p>',
			'price' => 69.99
		]
	],


	'House Favorites' => [
		[
			'name' => 'Chicken Shawarma',
			'image' => 'menu/shawarma.png',
			'options' => [
				'Wrap' => 7.99,
				'2 wraps for' => 13.99,
				'Dinner: w/ Rice or Fries' => 12.99
			]
		],
		[
			'name' => 'Burger Combos',
			'image' => 'menu/burger-combo.png',
			'options' => [
				'Beef/Chicken' => 7.99,
				'Fish Fillet' => 8.99,
				'Combo [Fries & Pop]' => 10.99,
			]
		],
		[
			'name' => '2 Pcs Fish',
			'image' => 'menu/fish.png',
			'options' => [
				'Combo [Fries & Pop]' => 13.99
			]
		],
		[
			'name' => 'Chicken Nuggets Combo [Fries & Pop]',
			'image' => 'menu/chicken-nuggets.png',
			'options' => [
				'7 pcs Combo ' => 7.99,
				'11 pcs Combo' => 10.99
			]
		],
	],

	'Sides' => [
		[
			'name' => 'Onion Rings',
			'image' => 'menu/onion-rings.png',
			'options' => [
				'Medium' => 5.99,
				'Large' => 7.99
			]
		],
		[
			'name' => 'Potato Wedges',
			'image' => 'menu/wedges.png',
			'options' => [
				'Medium' => 6.99,
				'Large' => 8.99
			]
		],
		[
			'name' => 'French Fries',
			'image' => 'menu/fries.png',
			'options' => [
				'Medium' => 4.99,
				'Large' => 5.99
			]
		],
		[
			'name' => 'Garlic Bread',
			'image' => 'menu/garlic-bread.png',
			'options' => [
				'Bread' => 3.99,
				'with Cheese' => 4.99
			]
		],
		[
			'name' => 'Poutine',
			'image' => 'menu/poutine.png',
			'options' => [
				'Medium' => 6.99,
				'Large' => 8.99
			]
		],
	],

	'Beverages' => [
		['name' => 'Bottle of water', 'image' => 'menu/water-bottle.png', 'price' => 1.99],
		['name' => '1 Can of pop', 'image' => 'menu/can.png', 'price' => 1.99],
		['name' => '2 litre Drink', 'image' => 'menu/2l-drink.png', 'price' => 4.99],
		['name' => '2 litre Drink', 'image' => 'menu/2l-drink.png', 'price' => 4.99],
	]
];


?>

<section class='menu-links'>
	<inner-column>
		<h1 class="booming-voice">
			Menu
		</h1>
		<nav class="links">
			<a href="#pizza" class='text attention-voice'>Pizza</a>
			<a href="#wings" class='text attention-voice'>Wings</a>
			<a href="#pizza-wings" class='text attention-voice'>Pizza & Wings Combos</a>
			<a href="#house-favorites" class='text attention-voice'>House Favourites</a>
			<a href="#sides" class='text attention-voice'>Sides</a>
			<a href="#beverages" class='text attention-voice'>Beverages</a>
		</nav>


	</inner-column>
</section>



<section class="pizza" id='pizza'>
	<inner-column>
		<h2 class="attention-voice">
			Pizzas
		</h2>

		<ul class="item-list">
			<?php foreach ($menu['Pizzas'] as $pizza) { ?>
				<li class="item-card">
					<picture>
						<img src="images/<?= $pizza['image']; ?>" alt="">
					</picture>
					<h3 class="notice-voice"><?= $pizza['name']; ?></h3>

					<ul class="options">
						<?php foreach ($pizza['sizes'] as $size => $price) { ?>
							<li><?= $size . ' - $' . $price; ?></li>
						<?php } ?>
					</ul>
					<p class="description"><?= $pizza['description']; ?></p>
				</li>
			<?php } ?>
		</ul>


		<ul class="toppings">
			<?php foreach ($menu['Pizza Toppings'] as $topping) { ?>
				<li>
					<!-- <picture>
						<img src="images/specials/pizza-1.png" alt="">
					</picture> -->

					<p>
						<?= $topping; ?>
					</p>
				</li>
			<?php } ?>
		</ul>


	</inner-column>
</section>


<section class="wings" id='wings'>
	<inner-column>
		<h2 class="attention-voice">
			Wings
		</h2>

		<div class="single-item">
			<picture>
				<img src="images/menu/wings.png" alt="">
			</picture>
			<ul class="single-items">
				<?php foreach ($menu['Wings'] as $wing) { ?>
					<li class="wing-card">

						<h3 class="notice-voice"><?= $wing['name']; ?></h3>
						<p class="description">Price: $<?= $wing['price']; ?></p>
					</li>
				<?php } ?>
			</ul>


			<ul class="sauces">
				<?php foreach ($menu['Wing Sauces'] as $sauce) { ?>
					<li>
						<picture>
							<img src="<?= $sauce['image']; ?>" alt="<?= $sauce['name']; ?>">
						</picture>
						<p><?= $sauce['name']; ?></p>
					</li>
				<?php } ?>
			</ul>
		</div>


	</inner-column>
</section>


<section class="pizza-wings" id='pizza-wings'>
	<inner-column>
		<h2 class="attention-voice">
			Pizza and Wing Combos
		</h2>

		<div class="single-item">
			<picture>
				<img src="images/menu/pizza-wings.webp" alt="">
			</picture>
			<ul class="single-items">
				<?php foreach ($menu['Pizza & Wing Combos'] as $combo) { ?>
					<li class="item-card">
						<h3 class="notice-voice"><?= $combo['name']; ?></h3>
						<p class="price">Price: $<?= $combo['price']; ?></p>
						<div class="description"><?= $combo['description']; ?></div>
					</li>
				<?php } ?>
			</ul>
		</div>
	</inner-column>
</section>

<section class="house-favorites" id='house-favorites'>
	<inner-column>
		<h2 class="attention-voice">
			House Favorites
		</h2>

		<ul class="item-list">
			<?php foreach ($menu['House Favorites'] as $favorite) { ?>
				<li class="item-card">
					<picture>
						<img src="images/<?= $favorite['image']; ?>" alt="">
					</picture>
					<h3 class="notice-voice"><?= $favorite['name']; ?></h3>

					<ul class="options">
						<?php foreach ($favorite['options'] as $option => $price) { ?>
							<li><?= $option . ' - $' . $price; ?></li>
						<?php } ?>
					</ul>
					<?php if (isset($favorite['description'])) { ?>
						<p class="description"><?= $favorite['description']; ?></p>
					<?php } ?>
				</li>
			<?php } ?>
		</ul>

	</inner-column>
</section>

<section class="sides" id='sides'>
	<inner-column>
		<h2 class="attention-voice">
			Sides
		</h2>

		<ul class="item-list">
			<?php foreach ($menu['Sides'] as $side) { ?>
				<li class="item-card">
					<picture>
						<img src="images/<?= $side['image']; ?>" alt="">
					</picture>
					<h3 class="notice-voice"><?= $side['name']; ?></h3>
					<ul class="options">
						<?php foreach ($side['options'] as $option => $price) { ?>
							<li><?= $option . ' - $' . $price; ?></li>
						<?php } ?>
					</ul>
				</li>
			<?php } ?>
		</ul>

	</inner-column>
</section>


<section class="bevrages" id='beverages'>
	<inner-column>
		<h2 class="attention-voice">
			Bevrages
		</h2>

		<ul class="item-list">
			<?php foreach ($menu['Beverages'] as $beverage) { ?>
				<li class="item-card">
					<picture>
						<img src="images/<?= $beverage['image']; ?>" alt="">
					</picture>
					<h3 class="notice-voice"><?= $beverage['name']; ?></h3>

					<ul class="options">

						<li>
							<p>Price: $<?= $beverage['price']; ?></p>
						</li>

					</ul>
				</li>
			<?php } ?>
		</ul>

	</inner-column>
</section>