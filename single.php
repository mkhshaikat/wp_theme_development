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
    
    <section class="blog-details-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-details">
                        <h2><?php the_title('');?></h2>
                        <img src="<?php echo the_post_thumbnail_url('large');?>" alt="">
                        <p><?php the_content('');?></p>
                    </div>
                   
                    <div class="comments">
                      <h5>leave a reply</h5>
                  <?php
                  if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
                      ?>
                          <p class="no-comments"><?php _e( 'Comments are close.', 'ffita' ); ?></p>
                      <?php endif; ?>

                  <?php comment_form(); ?>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sidebar">
                        <?php if ( is_active_sidebar( 'sidebar-5' ) ) { ?>
                      <?php dynamic_sidebar( 'sidebar-5' ); ?>
                   <?php } ?>
                    </div>
                    <div class="sidebar">
                       <?php if ( is_active_sidebar( 'sidebar-6' ) ) { ?>
                      <?php dynamic_sidebar( 'sidebar-6' ); ?>
                   <?php } ?>
                    </div>
                    <div class="sidebar">
                        <?php if ( is_active_sidebar( 'sidebar-4' ) ) { ?>
                      <?php dynamic_sidebar( 'sidebar-4' ); ?>
                   <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php
get_footer();