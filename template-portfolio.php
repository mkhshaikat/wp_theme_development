<?php
/**
 * Template Name: Portfolio page
 */
 ?>
<?php get_header();?>

    <!-- Breadcumb Area Start Here -->
    <section class="breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 text-center">
                    <h4><?php the_title(); ?></php></h4>
                    <ul>
                        <li><a href="<?php echo site_url(); ?>">home</a></li> / 
                        <li><?php the_title(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcumb Area End Here -->

    <!-- Portfolio Area Start Here -->
    <section class="portfolio-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <ul class="portfolio-menu">
                        <li class="active" data-filter="*">All</li>

                        <?php $terms = get_terms('category'); if( $terms ):?>

                        <?php foreach ($terms as $term ) : ?>

                        <li data-filter=".<?php echo $term->name;?>">
                        <?php echo  $term->name; ?></li>
                       
                 <?php endforeach; ?>
                          <?php endif; ?>
                    </ul>
                </div>
            </div>
            <div class="row g-0 portfolio-items">
              <?php 
                      $args = array( 'post_type' => 'Portfolio', 'posts_per_page' => 10 );
                      $the_query = new WP_Query( $args );?>
                      <?php if ( $the_query->have_posts() ) : ?>
                  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <div class="col-md-4 

                  <?php $tabs = get_the_terms(get_the_ID(),'category');
                       foreach( $tabs as $tab ):
                        echo $tab->slug.'';?>
                        <?php endforeach; ?>
                    <?php echo $tab->slug.''; ?>">

                    <div class="single-portfolio">
                        <img src="<?php echo the_post_thumbnail_url();?>" alt="">
                        <div class="portfolio-overlay">
                            <i class="fas fa-link"></i>
                            <h4><?php the_title('');?> <span><?php the_content('');?></span></h4>
                        </div>
                    </div>
                </div>
              <?php endwhile;
                 wp_reset_postdata(); ?>
              <?php endif; ?>
               
            </div>
        </div>
    </section>
    <!-- Portfolio Area End Here -->

   

<?php
get_footer();