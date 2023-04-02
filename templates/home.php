<?php
/**
 * Template Name: Home
 */
get_header(); 
$mypost= $post;
?>


<!-- Our Introduction Section -->
<div class="introduction" id="us">
	<div class="container">

		<div class="intro">
			<h1>Our Introduction</h1>
			<h2>Welcome To Cleaning Company</h2>
		</div>
		<div class="row">

		<div class="left col-lg-6">
			<div class="welcome-image-box clearfix">
			<div class="vid1">
			<img src="<?php the_field('vid1'); ?>" />
			</div>

			<div class="vid2">
			<img src="<?php the_field('vid2'); ?>" />
			</div>

			<div class="vid3">
			<img src="<?php the_field('vid3'); ?>" />
			</div>
			</div>
		</div>


		<div class="right col-lg-6">
		<div class="line1">
			<img src="<?php the_field('icon'); ?>" alt="">
			<h1><?php the_field('title'); ?></h1>
		</div>
		<div class="line2">
			<h2><?php the_field('txt'); ?></h2>
		</div>

		<div class="line3">
			<div class="video-holder-box">
				<div class="img-holder">
				<img src="<?php the_field('videobgr'); ?>" />
					<div class="icon-holder">
						<div class="icon">
							<div class="inner">
								<a class="html5lightbox" title="Fouens Video Gallery" href="https://www.youtube.com/watch?v=p25gICT63ek">
									<span><i class="fas fa-play"></i></span>
								</a>
							</div>   
						</div>
					</div>
				</div>    
			</div>

			<div class="rightext">
			<h3>Click on this video to check how we work with <span>Our Clients</span></h3>
			</div>
		</div>
		</div>
		</div>
	</div>
</div>







<!-- Services Section -->
<div class="services" id="services" style="background-image: url('<?php the_field('bgrservices'); ?>');">
	<div class="container">
	<div class="intro">
			<h1>Our Sevices</h1>
			<h2>Carpet Care Services</h2>
		</div>

		<div class="row">
			<?php
			$args = array(
			'post_type' => 'services',
			'posts_per_page' => '-1',
			);
			$loop = new WP_Query($args);
			while($loop->have_posts()):
			$loop->the_post();
			?>

				<div class="col-lg-4">

				<div class="box-bg">
					<div class="justimg">
					<div class="scale-hover">
					<img src="<?php the_post_thumbnail_url();?>" alt="">
					</div>
					</div>
				<div class="titleicon">

					<div class="button">
                        <a href=""><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>    
					</div>

					<div class="titlee">
					<a href=""><?php the_title(); ?></a>    
					</div>

				</div>
				</div>

				</div>

								
			<?php endwhile;
			wp_reset_postdata();
			?>
		</div>
				<div class="bottomlineservices">
					<h3>Don’t hesitate, contact us for help and services. <span><a href="">Book Online</a></span></h3>
				</div>
	</div>
</div>








<div class="howitworks">
	<div class="container">

		<div class="intro">
			<h1>How It Works</h1>
			<h2>Follow 4 Easy Steps</h2>
		</div>

		<div class="row">
			<?php
			$args = array(
			'post_type' => 'steps',
			'posts_per_page' => '-1',
			);
			$loop = new WP_Query($args);
			while($loop->have_posts()):
			$loop->the_post();
			?>

				
								
				<div class="steps col-lg-3 col-md-6">
					<div class="box__steps">
						<li class="single-working-steps-box">
							<div class="icon-holder">
								<span><?php the_field('icon'); ?></i></span>
								<div class="count">
									<h5><?php the_title(); ?></h5>
								</div>
							</div>
							<div class="text-holder">
								<h4><a href="/"><?php the_field('title1'); ?></a></h4>
								<p><?php the_field('descr1'); ?></p>
							</div>
                        </li>
					</div>
				</div>
				

			<?php endwhile;
			wp_reset_postdata();
			?>
			</div>
	</div>
</div>








<div class="justpos" id="contact">

<div class="video-conta scale-hover">
<!-- <div class="" style="background-image: url('<?php the_field('videocontbgr'); ?>');"> -->
<img src="<?php the_field('videocontbgr'); ?>" alt="">
	
	

</div>

<div class="icon-holder">
		<div class="icon">
			<div class="inner text-center">
				<a class="html5lightbox" title="Fouens Video Gallery" href="https://www.youtube.com/watch?v=p25gICT63ek">
					<span><i class="fas fa-play"></i></span>
				</a>
				<h3>We’re a Leading Carpet Cleaning Company</h3>
				<h1>We bring professionalism <br>to everything we do</h1>
			</div>   
		</div>

	</div>

<div class="posjust">
	<div class="contactform container">

		<div class="contacti col-lg-8 col-md-7">
			<h2>Get a Free Quote</h2>
			<div class="contactii">
			<?php the_field('contactform'); ?>
		</div>
		</div>

		<div class="imgright col-lg-4 col-md-5">

			<div class="quote-right-box">
				<div class="image-holder">
					<img src="<?php the_field('imgcontactform'); ?>" alt="">
				</div>
				<div class="text-holder">
					<h3>Fouens is trusted by more than 8,700 clients.</h3>
					
				</div>
			</div>


		</div>

	</div>
	</div>


</div>






<div class="resonswhyus" style="background-image: url('<?php the_field('contbgrwhy'); ?>');">
	<div class="container">

	<div class="intro">
			<h1>Why You Should Choose Us</h1>
			<h2>Reasons To Choose Us</h2>
		</div>

		<div class="row">
            <ul class="choose-content fix">

			<?php
			$args = array(
			'post_type' => 'whyus',
			'posts_per_page' => '-1',
			);
			$loop = new WP_Query($args);
			while($loop->have_posts()):
			$loop->the_post();
			?>


				<li class="single-choose-box">
					<span><?php the_field('icon'); ?></span> 
					<h4><?php the_title(); ?></h4>   
				</li>
								  
							
                       
				

			<?php endwhile;
			wp_reset_postdata();
			?>
			</ul>
			</div>

				<div class="bottomlineservices">
					<h3>Don’t hesitate, contact us for help and services. <span><a href="">Book Online</a></span></h3>
				</div>

	</div>
</div>



<div class="weuse">
	<div class="container">
		<div class="row">
		<div class="swiper-container containers2">
        <div class="swiper-wrapper ">
			<?php
			$args = array(
			'post_type' => 'products',
			'posts_per_page' => '-1',
			);
			$loop = new WP_Query($args);
			while($loop->have_posts()):
			$loop->the_post();
			?>

			<div class="swiper-slide">
				<div class="image-prod">
					<div class="jstpadding">
					<img src="<?php the_post_thumbnail_url();?>" alt="">
					</div>
				</div>		
			</div>

			<?php endwhile;
			wp_reset_postdata();
			?>
			</div>
			</div>
		</div>
	</div>
</div>



<?php get_footer(); ?>
