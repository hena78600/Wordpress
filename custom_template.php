<?php
/**
* Template Name: custom_template
*/
get_header() ; ?>

   <!--banner section---->

 <div class="slider">
  <div class="titlebar five">
    <img src="<?php echo get_template_directory_uri(); ?>/images/banner/ban1.jpg" class="img-responsive">
      <div class="container">
        <div class="breadcrumb">    
          <h1><?php the_title(); ?></h1>
            <a href="<?php echo get_site_url(); ?>">Home</a> <i class="fa fa-angle-double-right"></i> <?php the_title(); ?> <!-- <i class="fa fa-angle-double-right"></i> Contact us -->
        </div></div></div></div>

 <!-- end banner section -->
  <div class="clearfix"></div>


<div class="container">  
<?php
if ( have_posts() ) :
while ( have_posts() ) : the_post();
the_content();
endwhile; endif; ?>
</div>
<br>



<?php get_footer() ; ?>
