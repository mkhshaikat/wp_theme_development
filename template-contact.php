<?php
/**
 * Template Name: Contact page
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

    <!-- Contact Area Start Here -->
    <section class="contact-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 col-md-12 mx-auto">
                    <div class="row">
                       <?php if( have_rows('contact__and_map', 'option') ): ?>
                       <?php while( have_rows('contact__and_map', 'option') ) : the_row();?>
                        <div class="col-md-4">
                            <div class="contact-address">
                                <i class="<?php the_sub_field('icon'); ?>"></i>
                                <h4><?php the_sub_field('address_title'); ?> <span><?php the_sub_field('address'); ?></span></h4>
                            </div>
                        </div>
                        <?php endwhile; ?> 
                         <?php endif; ?>
                        

                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="contact-form">
                              <?php echo apply_shortcodes( '[contact-form-7 id="eddc8af" title="custom mail"]' ); ?>
   
                            </div>
                        </div>
                        <div class="col-md-5">
                             <?php if ( is_active_sidebar( 'sidebar-7' ) ) { ?>
                      <?php dynamic_sidebar( 'sidebar-7' ); ?>
                   <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Area End Here -->

   

    <?php
get_footer();