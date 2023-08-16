<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package neuron
 */

?>
 <!-- CTA Area Start Here -->
    <section class="cta-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h4><?php the_field('cta_title', 'option'); ?> </h4>
                    <p><?php the_field('cta_sub_title', 'option'); ?></p>
                </div>
                <div class="col-md-6 text-center">
                    <a href="<?php the_field('cta_btn_url', 'option'); ?>" class="box-btn"><?php the_field('cta_btn', 'option'); ?><i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA Area End Here -->
    
	  <!-- Footer Area Start Here -->
    <footer class="footer-area bg" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/footer-bg.png');">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <?php if ( is_active_sidebar( 'footer-1' ) ) { ?>
                      <?php dynamic_sidebar( 'footer-1' ); ?>
                   <?php } ?>
                </div>
                <div class="col-xl-2 col-lg-3 mt-5 mt-lg-0">
                    <?php if ( is_active_sidebar( 'footer-2' ) ) { ?>
                      <?php dynamic_sidebar( 'footer-2' ); ?>
                   <?php } ?>
                </div>
                <div class="col-xl-4 col-lg-3 mt-5 mt-lg-0">
                  
                     <?php if ( is_active_sidebar( 'footer-3' ) ) { ?>
                      <?php dynamic_sidebar( 'footer-3' ); ?>
                   <?php } ?>
                   
                </div>
                <div class="col-lg-3 mt-5 mt-sm-0">
                    <div class="single-footer">
                        <h4> <?php the_field('footer_contact_heading','option'); ?></h4>
                        <ul>
                          <?php if( have_rows('footer_contacted_', 'option') ): ?>
                       <?php while( have_rows('footer_contacted_', 'option') ) : the_row();?>
                            <li><i class="<?php the_sub_field('footer_contact_icon','option'); ?>"></i> <?php the_sub_field('footer_contact_title','option'); ?></li>
                           
                             <?php endwhile;
                 wp_reset_postdata(); ?>
              <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row footer-bottom">
                <div class="col-sm-6">
                    <div class="footer-copy">
                        <p><?php the_field('copy_right','option'); ?></p>
                    </div>
                </div>
                <div class="col-sm-6 text-end">
                    <div class="footer-social">
                         <?php if( have_rows('social_icon', 'option') ): ?>
                       <?php while( have_rows('social_icon', 'option') ) : the_row(); ?>
                        <a href="<?php the_sub_field('icon_social'); ?>"><i class="<?php the_sub_field('icon_social'); ?>"></i></a>
                      
                       <?php endwhile; ?> 
                   <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End Here -->

    
</body>
</html>

