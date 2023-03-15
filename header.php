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
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&family=Poppins:wght@700;800&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
		<link rel="stylesheet" href="<?php echo THEME_URL ?>public/swiper.css"/>
		<link rel="stylesheet" href="<?php echo THEME_URL ?>public/main.css">
	</head>
	

	<body <?php body_class()?>>
		<div class="headerDivider"></div>
		<header class="header">
			<div class="headerTop">
				<div class="headerTop--inner">
					<div class="headerTop--nav">
						<?php wp_nav_menu(['theme_location' => 'menu_top']); ?>
					</div>
					<div class="headerTop--contact">
						<div class="headerTop--socials">
							<a href="#" class="headerTop--social">
								<svg xmlns="http://www.w3.org/2000/svg" width="9.919" height="19.102" viewBox="0 0 9.919 19.102">
									<g id="facebook-app-symbol" transform="translate(-37.29)">
										<path id="f_1_" d="M43.729,19.1V10.39h2.923l.439-3.4H43.729V4.825c0-.983.272-1.653,1.683-1.653h1.8V.133A24.368,24.368,0,0,0,44.59,0C42,0,40.222,1.583,40.222,4.488v2.5H37.29v3.4h2.932V19.1Z"/>
									</g>
								</svg>
							</a>
							<a href="#" class="headerTop--social">
								<svg xmlns="http://www.w3.org/2000/svg" width="20.742" height="14.694" viewBox="0 0 20.742 14.694">
									<g id="youtube" transform="translate(0 -59.72)">
										<g id="Group_2" data-name="Group 2" transform="translate(0 59.72)">
										<path id="Path_8" data-name="Path 8" d="M20.453,62.124a2.317,2.317,0,0,0-1.86-1.9,66.659,66.659,0,0,0-16.442,0,2.316,2.316,0,0,0-1.861,1.9,42.379,42.379,0,0,0,0,9.884,2.316,2.316,0,0,0,1.861,1.9,66.66,66.66,0,0,0,16.442,0,2.315,2.315,0,0,0,1.86-1.9A42.373,42.373,0,0,0,20.453,62.124Zm-11.811,8.4V63.61l5.186,3.457Z" transform="translate(0 -59.72)"/>
										</g>
									</g>
								</svg>
							</a>
						</div>
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
						<?php get_template_part('/libs/headerBasket'); ?>
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
		<div class="searchBar">
			<div class="searchBar--inner">
				<?php echo do_shortcode('[fibosearch]'); ?>
			</div>
		</div>
		<?php get_template_part('/libs/basketSidebar'); ?>
		