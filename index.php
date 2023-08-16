
 <?php get_header();?>
    <!-- Breadcumb Area Start Here -->
    <section class="breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 text-center">
                    <h4> <?php echo single_post_title('');?></h4>
                    <ul>
                        <li><a href=" <?php site_url('');?>">home</a></li> / 
                        <li> <?php echo single_post_title('');?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcumb Area End Here -->

    <section class="blog-page-area pt-100 pb-100">
        <div class="container">
            <div class="row">

                <?php 
  $args = array( 'post_type' => 'post', 'paged'=> $paged, 'posts_per_page' => 6 );
                      $the_query = new WP_Query( $args ); 
                      ?>
                      <?php if ( $the_query->have_posts() ) : ?>
                  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


                <div class="col-md-4">
                    <div class="single-blog">
                        <img src="<?php echo the_post_thumbnail_url('large');?>" alt="">
                        <div class="blog-content">
                            <div class="blog-title">
                                <h4><a href="<?php the_permalink();?>">
                                <?php the_title();?></a></h4>
                            </div>
                            <div class="blog-meta">
                                <a href=""><?php echo wp_date( get_option( 'date_format' ), get_post_timestamp('') ); ?></a>
                                <a href=""><?php the_category(' ,   ');?></a>
                                 <a href=""><?php the_author('');?></a>
                            </div>
                            <?php the_excerpt('');?>
                            <a href="<?php the_permalink();?>" class="box-btn">read more</a>
                        </div>
                    </div>
                </div>
               
                <?php endwhile;
                 wp_reset_postdata(); ?>
              <?php endif; ?>
               
            </div>
          <?php the_posts_pagination( array(
            'mid_size'  => 10,
            'prev_text' => __( 'Back', 'neuron' ),
            'next_text' => __( 'next', 'neuron' ),
          ) );
                ?>
    </section>


    <?php
get_footer();