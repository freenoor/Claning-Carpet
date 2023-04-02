<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cleaning
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
			<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
			<link rel='stylesheet prefetch' href='https://cdn.jsdelivr.net/lightgallery/latest/css/lightgallery.css'>
			<link href="https://fonts.googleapis.com/css2?family=Kalam:wght@700&family=Permanent+Marker&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'cleaning' ); ?></a>

	<header>
						<?php if(is_front_page()):?>
							
							<div class="container-fluid">
								<div class="row">
									<div class="menu-here">
										<nav class="navbar navbar-expand-lg navbar-light navbar-center">

										
											<a class="logo-header animate__pulse animate__animated" href="<?php echo esc_url(home_url('/')); ?>">
												<?php dynamic_sidebar('logo_header');?>
											</a> 
										
											<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
												<div class="hamburger no-scroll" id="hamburger-icon">
													<span class="line line1"></span>
													<span class="line line2"></span>
													<span class="line line3"></span>
												</div>
											</button>
									
											<div class="collapse navbar-collapse overlay-full" id="navbarNav">
												<ul class="navbar-nav">
												<?php wp_nav_menu(
													array(
													'theme_location'    => 'menu-1',
													)
													); 
												?>
												</ul>
											</div>
											
											<div class="socials-header">
												<?php dynamic_sidebar('socials_header');?>
											</div>
											</nav>
											</div>
								</div>
							</div>


										<div class="slidewelc">
										<div class="swiper-container container1">
										<div class="swiper-wrapper ">
											<?php
											$args = array(
											'post_type' => 'homeslider',
											'posts_per_page' => '-1',
											);
											$loop = new WP_Query($args);
											while($loop->have_posts()):
											$loop->the_post();
											?>
											
											<div class="swiper-slide">

												<div class="slideimg" style="background-image: url('<?php echo the_post_thumbnail_url();?>');"></div>
													
											</div>

											<?php
											endwhile;
											wp_reset_postdata();
											?>
										</div>
										</div>
										</div>
										<div class="fixbottomjustmob">
										<div class="arrowswelc1">
											<div class="swiper-button-next"></div>
    										<div class="swiper-button-prev"></div>
											</div>
										<!-- <?php the_field('svgbottom'); ?> -->
										<img src="<?php the_field('svgbottom'); ?>" />
										</div>
										<div class="fixedright" style="background-image: url('<?php echo the_post_thumbnail_url();?>');">
											<div class="slider-contact-info">
												<div class="inner">
													<div class="icon-holder">
														<span><i class="fas fa-phone-volume"></i></span>
													</div>
													<div class="title-holder">
														<h3>Get a free estimate</h3>
														<a href="tel:+41766715195">076 671 51 95</a>
													</div>
												</div>
											</div>

											<div class="arrowswelc">
											<div class="swiper-button-next"></div>
    										<div class="swiper-button-prev"></div>
											</div>

										</div>

										<div class="contentwelc">
											<h1>Committed to top quality services</h1>
											<h2>Professional <br>Carpet Cleaning <br>Servces</h2>
										</div>

										
								 
						<?php else: ?>

						<?php endif;?>
    				</header>
