
<?php 
/*
Template Name: Service page

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

   <!-- Services Area Start Here -->
   <section class="services-area pt-100 pb-100">
    <div class="container">
        <div class="row section-title align-items-center">
            <div class="col-md-6 text-md-end text-sm-center">
                <span>who we are?</span>
                <h4>our services</h4>
            </div>
            <div class="col-md-6">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo vitae dicta, hic sapiente sit perspiciatis modi officiis inventore architecto minima.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-6">
                <div class="single-service">
                    <i class="fas fa-laptop"></i>
                    <h4>web design</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas perferendis, deserunt quos ratione maxime doloribus asperiores hic obcaecati praesentium libero!</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="single-service">
                    <i class="fas fa-cogs"></i>
                    <h4>web development</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas perferendis, deserunt quos ratione maxime doloribus asperiores hic obcaecati praesentium libero!</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="single-service">
                    <i class="fas fa-mobile-alt"></i>
                    <h4>responsive design</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas perferendis, deserunt quos ratione maxime doloribus asperiores hic obcaecati praesentium libero!</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="single-service">
                    <i class="fas fa-magic"></i>
                    <h4>graphics design</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas perferendis, deserunt quos ratione maxime doloribus asperiores hic obcaecati praesentium libero!</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="single-service">
                    <i class="fas fa-pencil-alt"></i>
                    <h4>creative design</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas perferendis, deserunt quos ratione maxime doloribus asperiores hic obcaecati praesentium libero!</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="single-service">
                    <i class="fas fa-flag"></i>
                    <h4>branding</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas perferendis, deserunt quos ratione maxime doloribus asperiores hic obcaecati praesentium libero!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Area End Here -->

   

<?php
get_footer();