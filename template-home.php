<?php
/**
 * Template Name: Home Page
 */
?>
<?php get_header();?>
    <!-- Slider Area Start Here -->
    <section class="slider-area">
        <div class="sliders owl-carousel">

          <?php 
          $args = array( 'post_type' => 'sliders', 'posts_per_page' => 10 );
          $the_query = new WP_Query( $args ); 
          ?>
          <?php if ( $the_query->have_posts() ) : ?>
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


            <div class="single-slide bg" style="background-image: url('<?php echo the_post_thumbnail_url('large');?>">
                <div class="container">
                    <div class="row">
               <div class="col-xxl-12">
                            <div class="slide-content">
                                <h4><?php the_title('');?></h4>
                                <h1><?php the_field('sub-title'); ?></h1>
                                <p><?php the_content(); ?></p>
                                <a href="about.html" class="box-btn"><?php the_field('btn-btn'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
<?php endwhile;
wp_reset_postdata(); ?>

<?php endif; ?>

    </section>
    <!-- Slider Area End Here -->
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


    <!-- Skill Area Start Here -->
    <section class="skill-area bg pt-100 pb-100" style="background-image: url('assets/images/bg-skill.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="skill-title">
                        <h4> <?php the_field('faq_heading', 'option'); ?></h4>
                    </div>
                    <div class="skill-accordion">
                        <div class="accordion" id="accordionExample">
                        
                              <?php
                              $faqs = get_field('faqs', 'option');
                              $i = 0;
                              foreach($faqs as $faq ){
                                $i++;
                              ?>
                                <div class="accordion-item">
                              <h2 class="accordion-header" id="heading<?php echo $i; ?>">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse <?php echo $i; ?>">
                                   <?php echo $faq['faq_title']; ?>
                                </button>
                              </h2>
                              <div id="collapse<?php echo $i; ?>" class="accordion-collapse collapse <?php if($i == 1){echo 'show';} ?>" aria-labelledby="heading<?php echo $i; ?>" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  <?php echo $faq['faq_description_']; ?>
                                </div>
                              </div>
                            </div>
                  <?php          
                         }  
           wp_reset_postdata(); ?>

                           </div> 
                    </div>
                </div>
                <div class="col-xl-6 mt-5 mt-xl-0">
                    <div class="skill-title">
                        <h4> <?php the_field('skill_heading','option'); ?></h4>
                    </div>
                    
                       <?php while( have_rows('skills', 'option') ) : the_row();?>
                    <div class="single-progress">
                        <h4><?php the_sub_field('skills_title','option'); ?></h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: <?php the_sub_field('skills_number','option'); ?>%;" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"><?php the_sub_field('skills_number','option'); ?> %</div>
                        </div>
                    </div>
                    <?php endwhile;
                 wp_reset_postdata(); ?>
             
                  
                </div>
            </div>
        </div>
    </section>
    <!-- Skill Area End Here -->

    <!-- Services Area Start Here -->
    <section class="services-area pt-100 pb-100">
        <div class="container">
            <div class="row section-title align-items-center">
              <?php if( have_rows('our_services_heading_', 'option') ): ?>
                       <?php while( have_rows('our_services_heading_', 'option') ) : the_row();?>
                <div class="col-md-6 text-md-end text-sm-center">
                    <span><?php the_sub_field('our_services_sub_title'); ?></span>
                    <h4><?php the_sub_field('our_services__title'); ?></h4>
                </div>
                <div class="col-md-6">
                    <p><?php the_sub_field('our_services_sort_description_'); ?></p>
                </div>
                 <?php endwhile;
                 wp_reset_postdata(); ?>
              <?php endif; ?>
            </div>
            <div class="row">
               <?php 
                      $args = array( 'post_type' => 'services', 'posts_per_page' => 10 );
                      $the_query = new WP_Query( $args ); 
                      ?>
                      <?php if ( $the_query->have_posts() ) : ?>
                  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                        <div class="col-xl-4 col-lg-6"> 

                    <div class="single-service">
                        <i class="<?php the_field('services_icon');?>"></i>
                        <h4><?php the_title('');?></h4>
                       <?php the_content('');?>
                    </div>
                </div>

                   <?php endwhile;
                 wp_reset_postdata(); ?>
              <?php endif; ?>
            </div>
        </div>
    </section>
    <!-- Services Area End Here -->

    <!-- Counter Area Start Here -->
    <section class="counter-area">
        <div class="container-fluid g-0">
            <div class="row mr-counter g-0">

             <?php 
                      $args = array( 'post_type' => 'counters', 'posts_per_page' => 10 );
                      $the_query = new WP_Query( $args ); 
                      ?>
                      <?php if ( $the_query->have_posts() ) : ?>
                  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="col-xxl-3 col-sm-6">
                    <div class="single-counter">
                        <i class="<?php the_field('counters_icon');?>"></i>
                        <h4><span class="counter"><?php the_title('');?></span>
                        <?php the_content('');?></h4>
                    </div>
                </div>
               
                <?php endwhile;
                 wp_reset_postdata(); ?>
              <?php endif; ?>
                
            </div>
        </div>
    </section>
    <!-- Counter Area End Here -->

    <!-- Team Area Start Here -->
    <section class="team-area pt-100 pb-100">
        <div class="container">
            <div class="row section-title align-items-center">
                <?php if( have_rows('creative_team_heading', 'option') ): ?>
                       <?php while( have_rows('creative_team_heading', 'option') ) : the_row();?>
                <div class="col-md-6 text-md-end text-sm-center">
                    <span><?php the_sub_field('creative_team_sub_title'); ?></span>
                    <h4><?php the_sub_field('creative_team__title'); ?></h4>
                </div>
                <div class="col-md-6">
                    <p><?php the_sub_field('creative_team_sort_description'); ?></p>
                </div>
                 <?php endwhile;
                 wp_reset_postdata(); ?>
              <?php endif; ?>
            </div>
            <div class="row">
               <?php 
                      $args = array( 'post_type' => 'teams', 'orderby' => 'menu_order',
                    'order' => 'ASC', 'posts_per_page' => 3 );
                      $the_query = new WP_Query( $args ); 
                      ?>
                      <?php if ( $the_query->have_posts() ) : ?>
                  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            
                <div class="col-md-4">
                    <div class="single-team">
                        <img src="<?php echo the_post_thumbnail_url('large');?>" alt="">
                        <div class="team-content">
                            <h4><?php the_title('');?><span><?php the_content('');?></span></h4>
                            <div class="team-con">
                              <?php if( have_rows('social_icon', 'option') ): ?>
                       <?php while( have_rows('social_icon', 'option') ) : the_row(); ?>
                                <a href=""><i class="<?php the_sub_field('icon_social'); ?>"></i></a>
                                <?php endwhile; ?> 
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
               
                <?php endwhile;
                 wp_reset_postdata(); ?>
              <?php endif; ?>
            </div>
        </div>
    </section>
    <!-- Team Area End Here -->

    <!-- Testimonials Area Start Here -->
    <section class="testimonials-area pt-100 pb-100 bg" style="background-image: url('./<?php echo get_template_directory_uri();?>/assets/images/testi_back.jpg');">
        <div class="container-fluid">
            <div class="row section-title align-items-center">
                <?php if( have_rows('our_client_heading', 'option') ): ?>
                       <?php while( have_rows('our_client_heading', 'option') ) : the_row();?>
                <div class="col-md-6 text-md-end text-sm-center">
                    <span><?php the_sub_field('our_client_sub_title'); ?></span>
                    <h4><?php the_sub_field('our_client_title'); ?></h4>
                </div>
                <div class="col-md-6">
                    <p><?php the_sub_field('our_client_sort_description'); ?></p>
                </div>
                 <?php endwhile;
                 wp_reset_postdata(); ?>
              <?php endif; ?>
            </div>
            <div class="row">
                <div class="testimonials owl-carousel">

                 <?php 
                      $args = array( 'post_type' => 'testimonials', 'posts_per_page' => 10 );
                      $the_query = new WP_Query( $args ); 
                      ?>
                      <?php if ( $the_query->have_posts() ) : ?>
                  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="single-testimonial">
                        <img src=" <?php echo the_post_thumbnail_url('large');?>" alt="">                    
                         <p><?php the_content('');?></p>
                        <h4><?php the_field('client_name');?> <span><?php the_title('');?></span></h4>
                    </div>
                   
                    <?php endwhile;
                 wp_reset_postdata(); ?>
              <?php endif; ?>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials Area End Here -->

    <!-- Blog Area Start Here -->
    <section class="blog-area pt-100 pb-100">
        <div class="container">
            <div class="row section-title align-items-center">
               <?php if( have_rows('', 'option') ): ?>
                       <?php while( have_rows('our_blog_heading', 'option') ) : the_row();?>
                <div class="col-md-6 text-md-end text-sm-center">
                    <span><?php the_sub_field('our_blog_sub_title'); ?></span>
                    <h4><?php the_sub_field('our_blog_title'); ?></h4>
                </div>
                <div class="col-md-6">
                    <p><?php the_sub_field('our_blog_sort_description'); ?></p>
                </div>
                 <?php endwhile;
                 wp_reset_postdata(); ?>
              <?php endif; ?>
            </div>
            <div class="row">

                  <?php 
                      $args = array( 'post_type' => 'post', 'posts_per_page' => 3 );
                      $the_query = new WP_Query( $args ); 
                      ?>
                      <?php if ( $the_query->have_posts() ) : ?>
                  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <div class="col-md-4">
                    <div class="single-blog">
                        <img class="single-blog-img" src="<?php echo the_post_thumbnail_url('large');?>" alt="">
                        <div class="blog-content">
                            <div class="blog-title">
                                <h4><a href="<?php the_permalink('');?>"><?php the_title(' ');?></a></h4>
                            </div>
                            <div class="blog-meta">
                                <a href="<?php the_permalink('');?>"><?php echo wp_date( get_option( 'date_format' ), get_post_timestamp('') ); ?></a>
                                <a href=""><?php the_author('');?></a>
                            </div>
                            <?php the_excerpt();?>
                            <a href="<?php the_permalink('');?>" class="box-btn">read more</a>
                        </div>
                    </div>
                </div>
                 <?php endwhile;
                 wp_reset_postdata(); ?>
              <?php endif; ?>
               
            </div>
        </div>
    </section>
    <!-- Blog Area End Here -->

   

  

<?php 
get_footer();