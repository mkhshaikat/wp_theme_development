<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package neuron
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

				<!-- Top Area Start Here -->
    <section class="top-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-7">
                    <div class="top-left">
                        <a href="mailto:mkhsoikot@gmail.com"><i class="<?php the_field('email_icon', 'option'); ?>"></i> <?php the_field('email', 'option'); ?></a>
                        <a href="tel:+123456789"><i class="<?php the_field('phone_icon', 'option'); ?>"></i><?php the_field('phone_number', 'option'); ?></a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-5">
                    <div class="top-social">
                      <?php if( have_rows('social_icon', 'option') ): ?>
                       <?php while( have_rows('social_icon', 'option') ) : the_row(); ?>
                        <a href="<?php the_sub_field('icon_social'); ?>"><i class="<?php the_sub_field('icon_social'); ?>"></i></a>
                      
                       <?php endwhile; ?> 
                   <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Top Area End Here -->

   <!-- Header Area Start Here -->
   <header class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">


                <nav class="navbar navbar-expand-lg navbar-light">
                      <a class="navbar-brand logo" href="index.html">
                        <?php the_custom_logo();?></a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <ul>


<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
          'menu_class'        => 'navbar-nav',
            'walker'               => new WP_Bootstrap_Navwalker(),
				)
			);
			?>


<!-- 

                                <li><a class="nav-link" href="index.html">Home</a></li>
                                <li class="caret"><a class="nav-link" href="about.html">About</a>
                                    <ul>
                                        <li><a href="">About Style 1</a></li>
                                        <li><a href="">About Style 2</a></li>
                                        <li><a href="">About Style 3</a></li>          
                                        <li><a href="">About Style 4</a></li>
                                        <li><a href="">About Style 5</a></li>
                                    </ul>
                                </li>
                                <li><a class="nav-link" href="services.html">Services</a></li>
                                <li><a class="nav-link" href="portfolio.html">Portfolio</a></li>
                                <li class="caret"><a class="nav-link" href="gallery.html">Gallery</a>
                                    <ul>
                                        <li><a href="">Gallery Style 1</a></li>
                                        <li><a href="">Gallery Style 2</a></li>
                                        <li><a href="">Gallery Style 3</a></li>          
                                        <li><a href="">Gallery Style 4</a></li>
                                        <li><a href="">Gallery Style 5</a></li>
                                    </ul>
                                </li>
                                <li><a class="nav-link" href="blog.html">Blog</a></li>
                                <li><a class="nav-link" href="contact.html">Contact</a></li> -->
                            </ul>
                        </div>
                      </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header Area End Here -->


<?php wp_footer();?>
   