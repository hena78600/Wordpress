
<section class="section-dark five sec-padding">
<div class="container">
<div class="row">
<div class="col-md-4 colmargin" >
<h3 class="footer-title" style="color: #fff;">About Us</h3>
<div class="footer-title-bottomstrip"></div>
<div class="clearfix"></div>
  <?php dynamic_sidebar('one'); ?>
</div>

<div class="col-md-4 colmargin usefull-links tex-left" >
<h3 class="footer-title" style="color: #fff;">Quick Links</h3>
<div class="footer-title-bottomstrip"></div>
<div class="clearfix"></div>
    <?php dynamic_sidebar('two'); ?>

<!-- <ul class="usefull-links tex-left ">
<li><a href="#"><i class="fa fa-angle-right"></i>Home</a></li>
<li><a href="#"><i class="fa fa-angle-right"></i>Articles</a></li>
<li><a href="#"><i class="fa fa-angle-right"></i>Industry </a></li>
<li><a href="#"><i class="fa fa-angle-right"></i>Contact Us</a></li>
</ul> -->
</div>



<div class="col-md-4 colmargin" data-anim-type="fade-in-left" data-anim-delay="100">
        <?php dynamic_sidebar('three'); ?>

         <!-- <h3 class="footer-title" style="color: #fff;">Contacts</h3>
          <ul class="address-info no-border">
            <li><i class="fa fa-map-marker"></i> 	1000 E Atlantic Blvd, Suite 203 Pompano Beach,</li>
            <li><i class="fa fa-phone"></i> 844-997-2743 / 754-444-1779 </li>
           
            <li class="last"><i class="fa fa-envelope"></i> Office@desirfinancial.com </li>
          </ul> -->
        </div>


</div>
</div>
</section>
<!--end section-->
<?php global $redux_demo;?>
<section class="section-copyrights fulldark5">
    <div class="container">
      <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><span class="margin-top1"><?php echo $redux_demo['copyri90r']; ?></div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <ul class="social-icons-2 pink">
            <?php echo $redux_demo['copyri9go']; ?>
          </ul>
          <div class="clearfix"></div>
         </div>
      </div>
    </div>
  </section>
<!--end section-->

<a href="#" class="scrollup orange2"><i class="fa fa-angle-up"></i></a>
</div>
<!-- ========== Js Files ========== --> 

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/universal/jquery.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/mainmenu/customeUI.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/mainmenu/jquery.sticky.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/masterslider/masterslider.min.js"></script> 
<script>
(function($) {
 "use strict";
	var slider = new MasterSlider();
	// adds Arrows navigation control to the slider.
	slider.control('arrows');
	slider.control('bullets');
	
	slider.setup('masterslider' , {
		 width:1600,    // slider standard width
		 height:600,   // slider standard height
		 space:5,
		 speed:45,
		 layout:'fullwidth',
		 loop:true,
		 preload:0,
		 autoplay:true,
         fullwidth:true,
         autoHeight:true,
		 view:"parallaxMask"
	});
})(jQuery);
</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/ytplayer/jquery.mb.YTPlayer.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/ytplayer/elementvideo-custom.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/ytplayer/play-pause-btn.js"></script>
<script>
 $(function(){
    $(".dropdown").hover(            
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            });
    });
    
</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/cubeportfolio/jquery.cubeportfolio.min.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/cubeportfolio/main.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/animations/js/animations.min.js" type="text/javascript"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/animations/js/appear.min.js" type="text/javascript"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/scrolltotop/totop.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/owl-carousel/owl.carousel.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/owl-carousel/custom.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/tabs/assets/js/responsive-tabs.min.js" type="text/javascript"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/tabs/smk-accordion.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/tabs/custom.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/style-swicher/style-swicher.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/style-swicher/custom.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts/functions.js" type="text/javascript"></script>
</body>
</html>