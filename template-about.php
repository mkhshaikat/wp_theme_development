<?php
/**
 * Template Name: About page
 *
 */
?>
<?php get_header();?>
    

    <!-- Breadcumb Area Start Here -->
    <section class="breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 text-center">
                    <h4><?php the_title(); ?></h4>
                    <ul>
                        <li><a href="<?php echo site_url(); ?>">home</a></li> / 
                        <li><?php the_title(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcumb Area End Here -->

     <!-- About Area Start Here -->
    <div class="section about-area pt-100 pb-100">
        <div class="container">
            <div class="row section-title align-items-center">
                <div class="col-md-6 text-md-end text-sm-center">

                  <?php if( have_rows('about_section', 'option') ): ?>
                       <?php while( have_rows('about_section', 'option') ) : the_row();?>
                               <span><?php the_sub_field('about_page_sub_title'); ?></span>                        
                    <h4><?php the_sub_field('about_page__title'); ?></h4>
                     
                </div>
                <div class="col-md-6">
                    <p><?php the_sub_field('about_page_sort_description_'); ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-7 col-lg-6">
                    <div class="about-content">
                        <h4><?php the_sub_field('about_main_title'); ?></h4>
                        <p><?php the_sub_field('aboutmain_description_'); ?></p>
                        <a href="" class="box-btn"><?php the_sub_field('btn'); ?></a>
                        <?php endwhile; ?> 
                                <?php endif; ?>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 mt-5 mt-lg-0">
                  <?php 
                      $args = array( 'post_type' => 'single-abouts', 'posts_per_page' => 10 );
                      $the_query = new WP_Query( $args ); 
                      ?>
                      <?php if ( $the_query->have_posts() ) : ?>
                  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="single-about">
                  
                        <div class="icon">
                            <i class="<?php the_field('icon');?>"></i>
                        </div>
                        <div>
                            <h4><?php the_title('');?></h4>
                            <p><?php the_content('');?></p>
                        </div>
                    </div>
                   <?php endwhile;
                 wp_reset_postdata(); ?>
              <?php endif; ?>
                    
                </div>
            </div>  
        </div>
    </div>
    <!-- About Area End Here -->

 
<?php
get_footer();