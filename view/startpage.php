<?php
/**
 * @file
 * Example view file
 */

/** @var WGR_ExamplePageModel $pageModel */
/** @var WGR_ExamplePageView $this */

?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?= $pageModel->pageTitle ?></title>

		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="l-header">
			<!-- Långt kodblock -->
			<div class="l-constrained">
				<!-- Långt kodblock -->
				<div class="header-logo">
					<img src="images/logo.png" alt="Logo image">
				</div>
				<ul class="nav site-nav">
					<?php

					if ($pageModel->categories) {
						// Loop names of categories
						foreach ($pageModel->categories as $category) {
							?>
							<li>
								<a href="#" title="<?= $category->name ?>"><?= $category->name ?></a>
							</li>
							<?php
						}
					}
					
					?>
					<div>
						<input class="js-search-input" type="search" placeholder="Sök..."><img class="searchicon" src="images/searchicon.png" alt="Search icon">
					</div>
				</ul>
				<!-- This is the hamburger icon that shows on smaller screens. -->
				<button class="is-button-site-nav-small" ><img src="images/hamburgericon.png" alt="Hamburger icon"></button>
				<!-- The navbar for smaller screens which contains all nav items-->
				<div class="is-site-nav-small">
					<?php

					if ($pageModel->categories) {
						// Loop names of categories
						foreach ($pageModel->categories as $category) {
							?>
							<li>
								<a class="is-categories" href="#" title="<?= $category->name ?>"><?= $category->name ?></a>
							</li>
							<?php
						}
					}

					?>
					<div>
						<input class="js-search-input-small" type="search" placeholder="Sök...">
					</div>
				</div>

			</div> <!-- End .l-constrained -->
		</div> <!-- End .l-header -->
		<div class="startpage-hero">
			<!-- Hero image -->
			<img class="startpage-hero__image" src="images/hero.png" alt="Hero image" style="width:100%;">
			<!-- This container contains all the information that should be shown on inside the image and also a button to show modal-window -->
			<div class="startpage-hero-container">
				<h1><?= $pageModel->heroTitle ?><h1>
				<h3><?= $pageModel->heroDesc ?><h3>
				<h3><?= $pageModel->heroSubDesc ?><h3>
				<button class="is-btn--shop">SHOPPA NU!</button>
			</div>
		</div>
		<!-- This is the modal-window. If the user click the button obove the modal-window will show with information about a product -->
		<div class="is-modal-window">
			<div class="modal-content">
				<!-- This is the button that closes the modal-window -->
				<span class="is-close-modal">X</span>

				<!-- I couldn't figure out how to get the specific id = 2 from a product in the php files, so for now I made a copy of the product with id = 2
				so I atleast could be able to show one product -->
				<!-- After help I managed to display product = 2 -->
				<h1><?= $pageModel->popupProduct->name ?></h1>
				<img src="/images/products/<?= $pageModel->popupProduct->imageFileName ?>" alt="Product image">
				<p><?= $pageModel->popupProduct->price ?></p>
				<button class="btn--modal-shop">Köp</button>

			</div>
		</div>
		<!-- This part shows the banner image with its text -->
		<div class="startpage-banner">
			<img class="startpage-banner__image" src="images/highlight.png" alt="Highlight image" style="width:100%;">
			<div class="l-constrained">
				<div class="startpage-banner-container">
					<div class="startpage-banner-container__header"><h1><?= $pageModel->pageTitle ?></h1></div>
					<div class="startpage-banner-container__subheader"><?= $pageModel->pageDesc ?></div>
				</div>
			</div>
		</div>

		<div class="l-constrained">
			<!-- Långt kodblock -->
			<?php

			if ($pageModel->products) {
				?>
				<h2 class="border-title"><span>Nyheter</span></h2>
				<!-- <h2>Nyheter</h2> -->
				<!-- This is the line that goes through above text -->
				<!-- <div class="crossing-border"></div> -->
				<ul class="product-gallery">
					<?php

					// Loop names of products
					foreach ($pageModel->products as $product) {
						?>
						<!-- I added the part $product->color so the user could search for color aswell as the name of the product -->
						<li data-title="<?= $product->name ?> && <?= $product->color ?>" class="product-item js-product is-visible">
							<div class="product-item__img">
								<img src="/images/products/<?= $product->imageFileName ?>" alt="Product image">
							</div>
							<h3 class="product-item__title"><?= $product->name ?></h3>
							<div class="product-item__price"><?= $product->price ?> kr
							<div class="product-item__buttons">
									<a href="#" class="btn">INFO</a>
									<a href="#" class="btn--primary">KÖP</a>
								</div>
							</div>
						</li>
						<?php
					}

					?>
				</ul>
				<?php

			}

			?>
		</div> <!-- End .l-constrained -->

		<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="js/scripts.js"></script>
		<script>
		WGR.example();
		</script>
	</body>
</html>
