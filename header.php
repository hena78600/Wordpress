<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php if ( is_front_page() ) : ?>
    <title><?php bloginfo( 'title' ); ?></title>
<?php else : ?>
    <title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'title' ); ?></title>
<?php endif; ?>

<!-- Meta -->
<meta name="keywords" content="" />
<meta name="author" content="">
<meta name="robots" content="" />
<meta name="description" content="" />

<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" type="image/x-icon" />
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png">

<!-- Web Fonts  -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800|Roboto:400,300,500,700,900|Raleway:400,300,500,600,700,800,900' rel='stylesheet' type='text/css'>

<!-- stylesheets -->
<link rel="stylesheet" media="screen" href="<?php echo get_template_directory_uri(); ?>/js/bootstrap/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/mainmenu/menu-5.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/theme-default.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/theme-style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/shortcodes.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/masterslider/style/masterslider.css" />
<link href="<?php echo get_template_directory_uri(); ?>/js/animations/css/animations.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo get_template_directory_uri(); ?>/js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link rel="stylesheet" media="screen" href="<?php echo get_template_directory_uri(); ?>/css/responsive-style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/js/tabs/assets/css/responsive-tabs.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/ytplayer/ytplayer.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
<?php wp_head(); ?>
</head>

<body>
  <?php global $redux_demo; ?>
<div class="site_wrapper font-style5">

  <div class="topbar dark2 ">
    <div class="container">
      <div class="topbar-left-items">
        <ul class="toplist pull-left">
          <li class="lineright"><i class="fa fa-phone"></i> <?php echo $redux_demo['mobileno09']; ?> </li>
          <li class="lineright"><a href="mailto:office@desirfinancial.com"><i class="fa fa-envelope"></i>  <?php echo $redux_demo['email978']; ?></a></li>
        </ul>
      </div>
      <!--end left-->      
      <div class="topbar-right-items pull-right">
        <ul class="toplist social-icons-1">          
          <li><a href="<?php echo $redux_demo['facebook01']; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
          <li><a href="<?php echo $redux_demo['twitter_link1']; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
          <li><a href="<?php echo $redux_demo['google-plus786']; ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="<?php echo $redux_demo['linked8569']; ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
  
  <div class="clearfix"></div>

<div class="menu-main">
  <div id="header6">
    <div class="container">
      <div class="navbar navbar-default orange2 yamm dark">
          <div class="navbar-header">
            <button type="button" data-toggle="collapse" data-target="#navbar-collapse-grid" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="<?php echo get_site_url(); ?>" class="navbar-brand"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-5.png" alt=""/></a>
          </div>
          
          <div id="navbar-collapse-grid" class="navbar-collapse collapse pull-right">
          
          <ul class="nav orange2 navbar-nav">
            
            <li class="dropdown"> <a href="https://web.goigi.me/desirfinancialwp/who-we-are/" class="dropdown-toggle">Who We Are</a>             
            </li>
            <li class="dropdown"> <a href="https://web.goigi.me/desirfinancialwp/industry/" class="dropdown-toggle">Industries</a>             
            </li>
            
            <li class="dropdown"> <a href="https://web.goigi.me/desirfinancialwp/what-we-do/" class="dropdown-toggle">What We Do</a>             
            </li>     
            <li> <a href="https://web.goigi.me/desirfinancialwp/wealth-architecture/">Wealth Architecture</a></li>
                        
            <li class="dropdown"> <a href="#" class="dropdown-toggle">Service</a>
          
             <ul class="dropdown-menu ms-dropdown-menu nav-tabs" role="menu">

            <li class="tab-name active">
              <a href="#tab_default_1" data-toggle="tab">
              ACCOUNTING </a>
            </li>
            <li class="tab-name">
              <a href="#tab_default_2" data-toggle="tab">
              CONSULTING</a>
            </li>
            <li class="tab-name">
              <a href="#tab_default_3" data-toggle="tab">
              WEALTH MANAGEMENT </a>
            </li>

    <div class="tab-content">


            <div class="tab-pane active" id="tab_default_1">
             
               

                <div class="col-md-4">
                  <div class="mega-menu__container">
                  <h1 class="mega-menu__title"><a href="##">ASSURANCE</a></h1>
                    <ul class="mega-menu__sub-menu">
                        <li><a href="##">Financial Statement Audits</a></li>
                        <li><a href="##">Employee Benefit Plans</a></li>
                        <li><a href="">Internal Audit</a></li>
                        <li><a href="##">Contract Compliance</a></li>
                        <li><a href="##">Sustainability Audits</a></li>
                        <li><a href="##">Accounting for Income Taxes </a></li>
                    </ul>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="mega-menu__container">
                  <h1 class="mega-menu__title"><a href="##">ADVISORY</a></h1>
                    <ul class="mega-menu__sub-menu">
                        <li><a href="##">Outsourced Finance & Accounting</a></li>
                        <li><a href="##">Technical Accounting</a></li>
                        
                    </ul>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="mega-menu__container" style="    border-right: none;">
                  <h1 class="mega-menu__title"><a href="##">TAX</a></h1>
                    <ul class="mega-menu__sub-menu">
                        <li><a href="##">Accounting Methods</a></li>
                        <li><a href="##">Compensation & Benefits</a></li>
                        <li><a href="">Dispute Resolution</a></li>
                        <li><a href="##">Credits & Incentives</a></li>
                        <li><a href="##">International Tax</a></li>
                         <li><a href="##">Personal </a></li>
                          <li><a href="##">State & Local</a></li>
                           <li><a href="##">Tax Structuring /Planning</a></li>
                    </ul>
                  </div>
                </div>


            </div>


            <div class="tab-pane" id="tab_default_2">
            
                <div class="col-md-3">
                  <div class="mega-menu__container">
                  <h1 class="mega-menu__title"><a href="##">INFORMATION </a></h1>
                    <ul class="mega-menu__sub-menu">
                        <li><a href="##">Compliance</a></li>
                        <li><a href="##">Assessment &amp; Planning</a></li>
                        <li><a href="">Development &amp; Integration</a></li>
                        <li><a href="##">Enterprise Systems</a></li>
                        <li><a href="##">Part-time CFO</a></li>
                    </ul>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="mega-menu__container">
                  <h1 class="mega-menu__title"><a href="##">STRATEGY & OPERATIONS</a></h1>
                    <ul class="mega-menu__sub-menu">
                        <li><a href="##">Starting Your Business</a></li>
                        <li><a href="##">Data Analytics</a></li>
                        <li><a href="">Organizational Planning</a></li>
                        <li><a href="##">Succession Planning</a></li>
                        <li><a href="##">Optimize Cash Flow</a></li>
                    </ul>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="mega-menu__container">
                  <h1 class="mega-menu__title"><a href="##">TRANSACTIONS</a></h1>
                    <ul class="mega-menu__sub-menu">
                        <li><a href="##">Investment funding</a></li>
                        <li><a href="##">Due Diligence</a></li>
                        <li><a href="">Restructuring</a></li>
                        <li><a href="##">Valuations</a></li>
                        <li><a href="##">Line of Credit Guide</a></li>
                    </ul>
                  </div>
                </div>
                  <div class="col-md-3">
                  <div class="mega-menu__container" style="    border-right: none;">
                  <h1 class="mega-menu__title"><a href="##">SPECIALTY</a></h1>
                    <ul class="mega-menu__sub-menu">
                        <li><a href="##">Incorporated ( US, Foreign) </a></li>
                        <li><a href="##">Registered agent</a></li>
                        <li><a href="">Aged Companies</a></li>
                        <li><a href="##">Understanding Business Credit</a></li>
                        <li><a href="##">Financial Services </a></li>
                        <li><a href="##">Health Care </a></li>
                    </ul>
                  </div>
                </div>



            </div>




            <div class="tab-pane" id="tab_default_3">
              <div class="col-md-6">
                  <div class="mega-menu__container">
                  <h1 class="mega-menu__title"><a href="##">INDIVIDUAL</a></h1>
                    <ul class="mega-menu__sub-menu">
                        <li><a href="##">Tax</a></li>
                        <li><a href="##">Financial Planning</a></li>
                        <li><a href="">Investments</a></li>
                        <li><a href="##">Family Office</a></li>
                        <li><a href="##">Lending / Buying Consulting</a></li>
                    </ul>
                  </div>
                </div>
                 <div class="col-md-6">
                  <div class="mega-menu__container" style="    border-right: none;">
                  <h1 class="mega-menu__title"><a href="##">INSTITUTIONAL </a></h1>
                    <ul class="mega-menu__sub-menu">
                        <li><a href="##">Investments</a></li>
                        <li><a href="##">Insurance</a></li>
                       
                    </ul>
                  </div>
                </div>



            </div>
          </div>
            </ul>
                
 
            </li>
            <style>
            .mega-menu__title a{color: #678584;}
          .ms-dropdown-menu{    margin-top: 6px !important;
    padding-bottom: 20px!important;
 background: #f0f0f0!important;
    
   
    -webkit-box-shadow: 0 4px 5px #A1A1A1;
    -moz-box-shadow: 0 4px 5px #A1A1A1;
    box-shadow: 0 4px 5px #A1A1A1;

  }
          .mega-menu__container{    border-right: 1px solid #D2D2D2;}
          .mega-menu__title{    margin-top: 26px;
    font-size: 20px;
    letter-spacing: 2px;
    margin-bottom: 15px;
    line-height: 1;
    font-weight: 400;}
          .mega-menu__sub-menu{    padding: 0;
    line-height: 25px;}
.tab-name a{  border: solid 1px transparent !important;
    background: transparent !important;
    color: #fff !important;}
.tab-name a:hover{  border: solid 1px transparent !important;
    background: transparent !important;
    color: #fff !important;}


.tab-name {   cursor: pointer;   width: 33.33%;
    border: none;
    border-left: 2px solid #a1a1a1;
    margin: 0;
    text-transform: uppercase;
    background-color: #535958;
    font-family: "Founders Grotesk Cond Med",sans-serif;
    letter-spacing: 2px;
    text-align: center;
    color: #A1A1A1;}
.tab-name:hover {  background-color: #373c3b;}

  .active {  
   
  
        border-left: solid 1px transparent !important;
  }
   
  .navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a:hover {
  
    background-color: transparent !important;
}

.ms-dropdown-menu>.active{background: #f3f3f3 !important;}
.ms-dropdown-menu>.active>a{color:#678584!important;}






.ms-dropdown-menu li{
   }
 .mega-menu__title{    font-size: 20px;
    letter-spacing: 2px;
    margin-bottom: 15px;
    line-height: 1;}

 .ms-dropdown-menu{
                 width: 100% !important;
    right: 0;
    /* border: solid 1px transparent !important; */
    padding: 0 !important;
    padding-bottom: 30px !important;
    border: solid 0px transparent !important;
                }




                .ms-dropdown-menu:before {
                        content: '';
                        position: absolute;
                        top: -15px;
                        border-bottom: 15px solid #efefef;
                        border-left: 18px solid transparent;
                        border-right: 18px solid transparent;
                        right: 22%;
                        -webkit-transform: translateX(-46.75%);
                        -moz-transform: translateX(-46.75%);
                        -ms-transform: translateX(-46.75%);
                        -o-transform: translateX(-46.75%);
                        transform: translateX(-46.75%);
                }
            </style>
            
            <li> <a href="#">Articles</a></li>            
            <li> <a href="https://web.goigi.me/desirfinancialwp/contact/">Contact</a></li>
             <li> <a href="https://web.goigi.me/desirfinancialwp/join-us/">Join us</a></li>
            
          </ul>
          </div>
        </div>
</div></div></div> 