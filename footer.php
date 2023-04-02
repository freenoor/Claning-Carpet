<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cleaning
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
      <div class="container">
			<div class="row">

            <div class="footersection1 footer-4 col-lg-4">
                <a class="logo-footer" href="<?php echo esc_url(home_url('/')); ?>">
                    <?php dynamic_sidebar('logo_footer');?>
                </a>
            </div> 


            <div class="footersection2 footer-4 col-lg-3">
              <div class="titlefooter">
              <h1>Quick Links</h1>
              </div>
                <nav class="navbar2 navbar-expand-lg ">
                    <div class="" id="navMenu2">
                        <?php wp_nav_menu(
                                array(
                                'theme_location'    => 'menu-2',
                                'container_class'  => 'navbar-nav mr-auto',
                                'container'=>'ul',
                        )
                        );?>
                    </div>    
                </nav>     
            </div>

            

            <div class="footersection3 footer-4 col-lg-2">
                <div class="titlefooter">
                <h1>Social Media</h1>
                </div>
                    <?php dynamic_sidebar('socials_footer') ?>
            </div>

            <div class="footersection4 footer-4 col-lg-3">
                <div class="titlefooter">        
                <h1>You have any question?</h1>
                </div>
                    <?php dynamic_sidebar('contact') ?>
            </div>






            </div>
            </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>





<script>
    var swiper = new Swiper('.container1', {
		loop: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      fadeEffect: { crossFade: true },
      virtualTranslate: true,
  //     autoplay: {
  //     delay: 2500,
  //     disableOnInteraction: true,
  // },
  speed: 1000, 
  slidersPerView: 1,
  effect: "fade"
    });


  </script>
<script>
    var swiper = new Swiper('.containers2', {
		loop: true,
    slidesPerView: 1,
      spaceBetween: 0,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        375.98: {
          slidesPerView: 2,
        },
       470: {
          slidesPerView: 3,
        },
        575.98: {
          slidesPerView: 4,
        },
        1024: {
          slidesPerView: 5,
        },
      },
    });
  </script>


</body>
</html>
