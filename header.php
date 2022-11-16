<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php if(is_search()):?>
			<meta name="robots" content="noindex, nofollow" />
		<?php endif;?>
		
		<?php wp_head() ?>
		<title><?php echo bloginfo('name'); echo ' - '; bloginfo('description');?></title> 

		<meta charset="<?php bloginfo('charset')?>" />

		<!-- Stylesheets-->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100;200;300;400;700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo THEME_URL ?>public/swiper.css"/>
		<link rel="stylesheet" href="<?php echo THEME_URL ?>public/main.css">
	</head>
	

	<body <?php body_class()?>>
		<header class="header">
			<div class="headerTop">
				<div class="headerTop--inner">
					<div class="headerTop--nav">
						<?php wp_nav_menu(['theme_location' => 'menu_top']); ?>
					</div>
					<div class="headerTop--contact">
						<span>infolinia</span> <a href="tel:">+48 695 438 850</a>
					</div>
				</div>
			</div>
			<div class="headerNav">
				<div class="headerNav--inner">
					<a href="<?php echo esc_url(home_url('/')) ?>" class="headerLogo">
						<img src="<?php echo THEME_URL; ?>_dev/img/logo_mptechnik.png" alt="LOGO-MP_TECHNIK">
					</a>
					<div class="headerNavbar">
						<?php wp_nav_menu(['theme_location' => 'main_nav']); ?>
					</div>
					<div class="headerShop">
						<div class="headerShop--search">
							<div class="headerShop--searchIcon">
								<svg xmlns="http://www.w3.org/2000/svg" width="19.34" height="19.34" viewBox="0 0 19.34 19.34">
									<path id="search_1_" data-name="search (1)" d="M19.072,17.934l-4.8-4.8a8.06,8.06,0,1,0-1.138,1.138l4.8,4.8a.8.8,0,1,0,1.138-1.138ZM8.041,14.479a6.438,6.438,0,1,1,6.438-6.438,6.438,6.438,0,0,1-6.438,6.438Z" transform="translate(0.032 0.032)" fill="#000"/>
								</svg>
							</div>
						</div>
						<div class="headerShop--basket">
							<svg xmlns="http://www.w3.org/2000/svg" width="19.34" height="19.34" viewBox="0 0 19.314 19.314">
								<g id="koszyk_ikona" data-name="koszyk ikona" transform="translate(-1753.757 -77.343)">
									<path id="shopping-bag" d="M16.9,4.829H14.486a4.829,4.829,0,1,0-9.657,0H2.414A2.414,2.414,0,0,0,0,7.243V15.29a4.029,4.029,0,0,0,4.024,4.024H15.29a4.029,4.029,0,0,0,4.024-4.024V7.243A2.414,2.414,0,0,0,16.9,4.829ZM9.657,1.61a3.219,3.219,0,0,1,3.219,3.219H6.438A3.219,3.219,0,0,1,9.657,1.61ZM17.7,15.29A2.414,2.414,0,0,1,15.29,17.7H4.024A2.414,2.414,0,0,1,1.61,15.29V7.243a.8.8,0,0,1,.8-.8H4.829v1.61a.8.8,0,1,0,1.61,0V6.438h6.438v1.61a.8.8,0,0,0,1.61,0V6.438H16.9a.8.8,0,0,1,.8.8Z" transform="translate(1753.757 77.343)"/>
								</g>
							</svg>
							<span>2</span>
						</div>
						<button class="hamburger">
							<span></span>
							<span></span>
							<span></span>
						</button>
					</div>
				</div>
			</div>
			<div class="mobileNav">
				<div class="mobileNav--main">
					<?php wp_nav_menu(['theme_location' => 'main_nav']); ?>
				</div>
				<div class="mobileNav--top">
					<?php wp_nav_menu(['theme_location' => 'menu_top']); ?>
				</div>
				<div class="mobileNav--social">
					<a href="#" target="_blank" class="mobileNav--facebook">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 8.433 16.24">
							<g id="facebook-app-symbol" transform="translate(0)">
								<path id="f_1_" d="M42.764,16.24V8.833h2.485l.373-2.888H42.764V4.1C42.764,3.266,43,2.7,44.2,2.7h1.528V.113A20.716,20.716,0,0,0,43.5,0a3.479,3.479,0,0,0-3.713,3.816V5.945H37.29V8.833h2.493V16.24Z" transform="translate(-37.29)" fill="#fff"/>
							</g>
						</svg>
					</a>
					<a href="#" target="_blank" class="mobileNav--youtube">
						<svg id="XMLID_822_" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 17.919 12.611">
							<path id="XMLID_823_" d="M17.221,47c-.647-.769-1.841-1.083-4.122-1.083H4.82c-2.333,0-3.547.334-4.192,1.152C0,47.868,0,49.044,0,50.671v3.1c0,3.153.745,4.754,4.82,4.754H13.1c1.978,0,3.074-.277,3.783-.955.727-.7,1.037-1.832,1.037-3.8v-3.1C17.919,48.955,17.871,47.772,17.221,47ZM11.5,52.651,7.745,54.616A.578.578,0,0,1,6.9,54.1V50.186a.578.578,0,0,1,.844-.513L11.5,51.625a.578.578,0,0,1,0,1.025Z" transform="translate(0 -45.917)" fill="#fff"/>
						</svg>
					</a>
				</div>
			</div>
		</header>
		