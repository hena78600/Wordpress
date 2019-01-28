<?php
/*Template name: Home Template*/
 get_header(); 
?>
<!--end menu-->
<div class="clearfix"></div>
  <div class="master-slider margintop ms-skin-default" id="masterslider"> 
    
<?php  if(get_field('slider')): while(has_sub_field('slider')): ?>
    <div class="ms-slide slide-1" data-delay="9">
      
      <img src="<?php the_sub_field('slider_image'); ?>" data-src="<?php the_sub_field('slider_image'); ?>" alt=""/>
      
      <h3 class="ms-layer text18 "
			style="left:850px; top: 200px;"
			data-type="text"
			data-delay="500"
		 	data-duration="2000"
		 	data-ease="easeOutExpo"
		 	data-effect="rotatefront(-40,900,tr)"><?php the_sub_field('slider1_title'); ?> </h3>

        <h3 class="ms-layer text19"
			style="left:850px; top: 260px; font-size:20px;"
			data-type="text"
			data-delay="1000"
		 	data-duration="2000"
		 	data-ease="easeOutExpo"
		 	data-effect="rotate3dright(10,50,0,100)"><?php the_sub_field('slider2_title'); ?> </h3>
            
      <h3 class="ms-layer text20"
        	style="left:855px; top: 320px;"
            data-type="text"
            data-effect="top(45)"
            data-duration="2000"
            data-delay="1500"
            data-ease="easeOutExpo"><?php the_sub_field('slider_content'); ?>   </h3>
        
      <a href="<?php the_sub_field('slider_button1_link'); ?>" class="ms-layer sbut5 white"
			style="left: 1030px; top: 430px;"
			data-type="text"
			data-delay="2500"
			data-ease="easeOutExpo"
			data-duration="1200"
			data-effect="scale(1.5,1.6)"> <?php the_sub_field('slider_button1'); ?> </a>
            
            <a href="<?php the_sub_field('slider_button2__link'); ?>" class="ms-layer sbut5 orange2"
			style="left: 855px; top: 430px;"
			data-type="text"
			data-delay="2500"
			data-ease="easeOutExpo"
			data-duration="1200"
			data-effect="scale(1.5,1.6)"> <?php the_sub_field('slider_button2'); ?>  </a>
             
            
            </div>
   <?php endwhile; endif ?>

  </div>
  
  <div class="clearfix"></div>
  
<section class="section-orange-5 sec-topmargin">
  <div class="container">
    <div class="row">
      
<?php
 $args=array('post_type' => 'service','order' => 'ASC', 'posts_per_page'=> 4) ;
$the_qyery= new WP_Query($args);
 if ($the_qyery->have_posts()) :
 while ( $the_qyery->have_posts() ) : $the_qyery->the_post();?>

    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="row feature-box">
          <div class="col-lg-4 col-md-4 col-sm-3"><div class="iconbox-xxlarge round dark-outline"><?php echo the_field('services_icon');?></div></div>
            <div class="col-lg-8 col-md-8 col-sm-9">
              <h3 class="text-white"><?php the_title(); ?></h3>
                <p><?php the_content(); ?> </p></div>
        </div> 


     <!--  <div class="clearfix"></div> 
        <div class="row feature-box">
          <div class="col-lg-4 col-md-4 col-sm-3"><div class="iconbox-xxlarge round dark-outline"><i class="fa fa-sliders"></i></div></div>
            <div class="col-lg-8 col-md-8 col-sm-9">
              <h3 class="text-white">Accounting Services</h3>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo Praesent mattis. </p></div>
        </div> -->
    </div>
  <?php endwhile; endif; ?>



<!-- 
 <div class="col-lg-6 col-md-6 col-sm-12">
  <div class="row feature-box">
    <div class="col-lg-4 col-md-4 col-sm-3"><div class="iconbox-xxlarge round dark-outline"><i class="fa fa-desktop"></i></div></div>
      <div class="col-lg-8 col-md-8 col-sm-9">
        <h3 class="text-white">Wealth Managment Consulting</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo Praesent mattis. </p></div>
  </div>  

  <div class="clearfix"></div>
  <div class="row feature-box">
    <div class="col-lg-4 col-md-4 col-sm-3"><div class="iconbox-xxlarge round dark-outline"><i class="fa fa-wechat"></i></div></div>
      <div class="col-lg-8 col-md-8 col-sm-9">
        <h3 class="text-white">CFO Center</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo Praesent mattis. </p></div>
  </div>
       
</div> -->
        
      </div>
    </div>
  </section>
  <!-- end section -->
  
  <div class="clearfix"></div>

 <!--<section class="section_category32">
<div class="container">
<div class="row" data-anim-type="bounce-in-right" data-anim-delay="100">
 <div class="col-lg-12  center">
 <div class="sec_title3"><h1>Responsive Template</h1></div>
 <p class="mt-20">Looks Awasome On any Multi Devices.</p>
 </div></div>

 
 <div class="clearfix"></div> 

<div class="row">

<div class="col-lg-6 col-md-6 col-sm-5 col-xs-12" data-anim-type="zoom-in" data-anim-delay="100"><img class="img-responsive padding-bottom-2" src="images/devices8.png"></div>

<div class="col-lg-6 col-md-6 col-sm-7 col-xs-12 ">
<div class="margin-top3"></div>
<h3 class="" data-anim-type="fade-in-right" data-anim-delay="100">Optimized for Multi Touch Devices</h3>
<p class="" data-anim-type="fade-in-up" data-anim-delay="100">Lorem ipsum dolor sit amet, coper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et.</p>
<div class="margin-top2"></div>
<ul>
<li class="" ><i class="fa fa-check-square-o"></i>Sed massa tellus aliquam rhoncus venenatis quis.</li>
<li class="" data-anim-type="fade-in-left" data-anim-delay="200"><i class="fa fa-check-square-o"></i>Development dolor sit amet consectetur adipiscing elit Phasellus</li>
<li class="" data-anim-type="fade-in-left" data-anim-delay="300"><i class="fa fa-check-square-o"></i>Etiam dictum Nunc enim Sed massa tellus aliquam rhoncus venenatis.</li>
<li class="" data-anim-type="fade-in-left" data-anim-delay="400"><i class="fa fa-check-square-o"></i>Magna eget scelerisque metus massa in neque sit consectetur </li>
</ul>
<div class="margin-top3"></div>

<div class="row ">
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6" >
<div class="info-box center">
<div class="info-box-icon">
<i class="fa fa-headphones"></i>
</div>
<p>Customer Support</p>
</div></div>

<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
<div class="info-box center">
<div class="info-box-icon">
<i class="fa fa-paint-brush"></i>
</div>
<p>Unlimited Colors</p>
</div></div>

<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
<div class="info-box center">
<div class="info-box-icon">
<i class="fa fa-plug"></i>
</div>
<p>Powerful Templates</p>
</div></div>

</div>
<div class="clearfix"></div>
<div class="margin-top3"></div>
<p><a href="#" class="btn btn-border orange-5 uppercase" ><span>Read More</span></a> 
<a href="#" class="btn btn-border dark  uppercase margin-left-2" data-anim-type="fade-in-right" data-anim-delay="100"><span>Buy Now</span></a></p>
<div class="margin-top3"></div>
</div>

</div>

 </div>
</section>-->
<?php wp_reset_query(); ?>
<section class="section_category48">
<div class="container">
<div class="row">
<div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
<div class="section_light">
<img src="<?php echo the_field('we_deliver_enduring_results_image'); ?>
" class="img-responsive" alt="">
</div></div>
<div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
<div class="margin-top6"></div>
<?php echo the_field('we_deliver_enduring_results_content'); ?>

<div class="margin-top2"></div>

<div class="margin-top5"></div>
</div>

</div>
</div>
</section>

 <!--end section-->
  <div class="clearfix"></div>

<section class="section_category33">

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 nopadding ">
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 nopadding "></div>
<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 nopadding ">
<div class="feature-box">
<?php echo the_field('business_consulting_content'); ?>
<p class="text-right"><a href="#" class="btn uppercase"><span><?php echo the_field('business_consulting_button'); ?></span></a></p>
<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur eget orci. Cras laoreet ligula.</p>

<ul>
<li><i class="fa fa-check"></i>Sed massa tellus aliquam rhoncus venenatis quis enim Sed massa tellus.</li>
<li><i class="fa fa-check"></i>Development dolor sit amet consectetur adipiscing elit Phasellus</li>
</ul>
<p class="text-right"><a href="#" class="btn uppercase"><span>Read More</span></a></p>-->
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 nopadding">
<img class="img-responsive" src="<?php echo the_field('right_side_business_consulting_image'); ?>" style="height:365PX;">
</div>
 <!-- end section -->
<div class="clearfix"></div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 nopadding">
<img class="img-responsive" src="<?php echo the_field('accounting_services_left_side_image'); ?>" style="height:343PX;">
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 nopadding ">
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 nopadding "></div>
<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 nopadding ">
<div class="feature-box">
<?php echo the_field('accounting_services_content'); ?>
<p class="text-right"><a href="#" class="btn uppercase"><span><?php echo the_field('accounting_services_button'); ?></span></a></p>
<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur eget orci. Cras laoreet ligula.</p>

<ul>
<li><i class="fa fa-check"></i>Sed massa tellus aliquam rhoncus venenatis quis enim Sed massa tellus.</li>
<li><i class="fa fa-check"></i>Development dolor sit amet consectetur adipiscing elit Phasellus</li>
</ul>
<p class="text-right"><a href="#" class="btn uppercase"><span>Read More</span></a></p>-->
</div>
</div>
</div>

 <!-- end section -->




<!-- 
<div class="container">
<div class="row">
<div class="col-lg-1 col-md-1"></div>
<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 nopadding">
<img class="img-responsive" src="images/img7.jpg">
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 nopadding">
<div class="feature-box">
<div class="sec_title3"><h1>ACCOUNTING SERVICES</h1></div>
<p>Our firm concentrates on your most trivial affairs so that you may focus on the main objective of your business. Proficient decision making and risk management to uphold the standards of your company.</p>
<br><br>
<p class="text-right"><a href="#" class="btn uppercase"><span>Read More</span></a></p>

</div>
</div>
<div class="col-lg-1 col-md-1"></div>

</div></div> -->

</section>
<!--end section-->

<div class="clearfix"></div>

<section class="parallax-section15">
<div class="parallax-overlay">
 <div class="container">
 <div class="row">
 <div class="center">
<div class="sec_title3"><h1><?php echo the_field('welcome_to_desirfinancial_title'); ?></h1></div>
 <div class="col-md-1"></div>
 <div class="col-md-9"><?php echo the_field('welcome_to_desirfinancial_content'); ?></div>
 <div class="clearfix"></div>
  <div class="margin-top5"></div>
 <a href="#" class="btn"><?php echo the_field('welcome_to_desirfinancial_button'); ?></a>
 </div>
</div>
</div>

</div>
</section>


<!--end section-->
<div class="clearfix"></div>


<section class="section_category6">
  <div class="container">
    <div class="row">
      <div class="sec_title"><h1><?php echo the_field('fresh_news'); ?></h1></div>
        <!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis <br>commodo augue. Aliquam ornare hendrerit augue</p>-->
      <div class="clearfix mb-20"></div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
         <?php
         $args=array('post_type' => 'news','order' => 'ASC', 'posts_per_page'=> 2) ;
        $the_qyery= new WP_Query($args);
         if ($the_qyery->have_posts()) :
         while ( $the_qyery->have_posts() ) : $the_qyery->the_post();?>

  
    <div class="box-left2" data-anim-type="fade-in-up" data-anim-delay="100">
      <img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive">
        <h3><?php the_title();?></h3>
        <h6>Posted 12-09-2018 By <span>Leo Hunt</span></h6>
        <p><?php the_content(); ?></p>
        <a href="<?php the_permalink(); ?>"><span>Read More</span>
        <span><i class="fa fa-angle-right"></i></span></a>
     </div>
     
     <div class="clearfix"></div>
     
   <!--  <div class="box-left2" data-anim-type="fade-in-up" data-anim-delay="100">
        <img src="<?php echo get_template_directory_uri(); ?>/images/blog-img3.jpg" class="img-responsive">
        <h3>Desirfinancial</h3>
        <h6>Posted 12-09-2018 By <span>Leo Hunt</span></h6>
        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators...</p>
       <a href="#"><span>Read More</span>
        <span><i class="fa fa-angle-right"></i></span></a>
    </div> -->
  <?php endwhile; endif; ?>
</div>

 <?php
         $args=array('post_type' => 'news','order' => 'DESC', 'posts_per_page'=> 1) ;
        $the_qyery= new WP_Query($args);
         if ($the_qyery->have_posts()) :
         while ( $the_qyery->have_posts() ) : $the_qyery->the_post();?>

       <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-anim-type="fade-in-left" data-anim-delay="100">
        <div class="box">
            <img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive padding-bottom-1">
            <h3><?php the_title();?></h3>
            <h6>Posted <?php echo get_the_date(); ?> By <span><?php the_author(); ?></span></h6>
             <p><?php the_content(); ?></p>
         <a href="#"><span>Read More</span>
          <span><i class="fa fa-angle-right"></i></span></a>
        </div>
      </div> 

  <?php endwhile; endif; ?>


</div></div>
</section>
 <!-- end section -->
 
<div class="clearfix"></div>
<section class="section_category35" style="padding: 0px 0px 45px 0px;">

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 left">
<div class="team">
  <?php wp_reset_query(); ?>

<div class="sec_title3"><h1><?php echo the_field('our_team'); ?></h1></div>

<div class="margin-top3"></div>
<div class="clearfix"></div>
<div class="row">
<?php
         $args=array('post_type' => 'team','order' => 'DESC', 'posts_per_page'=> 2) ;
        $the_qyery= new WP_Query($args);
         if ($the_qyery->have_posts()) :
         while ( $the_qyery->have_posts() ) : $the_qyery->the_post();?>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
  <div class="our-team">
    <div class="team-avator"><img alt="" src="<?php the_post_thumbnail_url(); ?>"></div>
    <div class="team-content"><h4><?php the_title(); ?> <br><span> <?php the_title(); ?></span></h4></div></div>
</div>
<?php endwhile; endif; ?>

</div>

</div>
</div>
<?php wp_reset_query(); ?>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 right">
<div class="testimonials2 slide-controls-color-4">
<div class="sec_title3"><h1> <?php echo the_field('portfolio'); ?></h1></div>
<div class="margin-top2"></div>
<div class="clearfix"></div>

<div id="owl-demo2" class="owl-carousel ">

<?php
         $args=array('post_type' => 'portfolio','order' => 'DESC', 'posts_per_page'=> 2) ;
        $the_qyery= new WP_Query($args);
         if ($the_qyery->have_posts()) :
         while ( $the_qyery->have_posts() ) : $the_qyery->the_post();?>

              <div class="item">
                <div class="testimonials3">
                <div class="image-left">
                    <div class="imgholder">
                    <div class="img-inner overflow-hidden"><img src="<?php the_post_thumbnail_url(); ?>" alt=""/></div>
                    <h5><?php the_title(); ?></h5></div>
                    <div class="arrow-down"></div>
                    </div>
                  <div class="textbox">
                  <p><?php the_content(); ?></p></div>
                 <div class="text-box-right">Desirfinancial.com</div>
                </div>
              </div>
              <!--end item-->
            <?php endwhile; endif; ?>
              
              <!-- <div class="item">
                <div class="testimonials3">
                <div class="image-left">
                    <div class="imgholder">
                    <div class="img-inner overflow-hidden"><img src="<?php echo get_template_directory_uri(); ?>/images/team-img11.jpg" alt=""/></div>
                    <h5>Michel John</h5></div>
                    <div class="arrow-down"></div>
                  </div>
                  <div class="textbox">
                  <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue Aliquam ornare hendrerit augue Cras tellus 
In pulvinar lectus a est Curabitur eget orci. Lorem ipsum dolor sit amet consectetuer adipiscing elit 
Suspendisse et justo Praesent mattis commodo.</p></div>                  
                  
                  <div class="text-box-right">Desirfinancial.com</div>
                </div>
              </div> -->
              <!--end item-->
            </div>

</div>
</div>
</section>
 <!-- end section -->
<?php wp_reset_query(); ?>
 <section class="section_category15 section-side-image" style="padding: 0px 0px 0px 0px;">
<div class="container">
 <h1 class="uppercase text-center text-dark2"><?php echo the_field('you_deserve_the_best_title'); ?></h1>


<div class="container-fluid">
      <div class="row">
        <div class="col-md-8  col-sm-12 col-xs-12 text-inner clearfix align-left">
          <div class="text-box light padding-3">
     <?php echo the_field('you_deserve_the_best_content'); ?>    

            <a href="#" class="btn"><?php echo the_field('you_deserve_the_best_button'); ?>  </a> </div>
        </div>
      </div>
    </div>
    
    <!-- <div class="img-holder col-md-6 col-md-offset-3 col-sm-offset-2 pull-right">
      <div class="background-imgholder" style="background:url(<?php echo the_field('you_deserve_the_best_image'); ?>);"> <img class="nodisplay-image" src="<?php echo the_field('you_deserve_the_best_image'); ?>" alt=""> </div>
    </div> -->
     <div class="img-holder col-md-6 col-md-offset-3 col-sm-offset-2 pull-right">
      <div class="background-imgholder" style="background:url(<?php echo get_template_directory_uri(); ?>/images/img2.jpg);"> <img class="nodisplay-image" src="images/img2.jpg" alt=""> </div>
    </div>
        
      </div>
    </section>

 <!-- end section -->
<div class="clearfix"></div>
  
<?php get_footer(); ?>