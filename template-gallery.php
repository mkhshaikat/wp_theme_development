<?php
/**
 * Template Name: Gallery page
 *
 */
?>
<?php get_header();?>

    <!-- Breadcumb Area Start Here -->
    <section class="breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 text-center">
                    <h4><?php the_title('');?></h4>
                    <ul>
                        <li><a href="<?php site_url('');?>">home</a></li> / 
                        <li><?php the_title('');?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcumb Area End Here -->

    <section class="gallery-area pt-100 pb-100">
        <div class="container">
            <div class="row">

  <?php 
                      $args = array( 'post_type' => 'Gallery', 'posts_per_page' => 10 );
                      $the_query = new WP_Query( $args ); 
                      ?>
                      <?php if ( $the_query->have_posts() ) : ?>
                      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <div class="col-md-4">
                    <div class="single-gallery">
                        <img src="<?php echo the_post_thumbnail_url();?>" alt="">
                        <div class="gallery-overlay">
                            <a href="<?php the_field('gallery'); ?>" class="gallery"><i class="fas fa-plus"></i></a>
                            <h4><?php the_title();?></h4>
                        </div>
                    </div>
                </div>
               
               <?php endwhile;
       wp_reset_postdata(); ?>

        <?php endif; ?> 
               
            </div>
        </div>
    </section>



    <?php
get_footer();