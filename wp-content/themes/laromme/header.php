<!DOCTYPE html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    
	<title>Laromme - Bakkerij &amp; Bakery Home </title>
    
    <meta name="description" content="" />
	<meta name="author" content="" />
    
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <!-- **Favicon** -->
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
    
    <!-- **CSS - stylesheets** -->
    <!-- Le styles --><link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
 <!-- **CSS - stylesheets** -->
    
    <link id="shortcodes-css" href="<?php echo get_template_directory_uri(); ?>/css/shortcodes.css" rel="stylesheet" media="all" />    
    <link id="skin-css" href="<?php echo get_template_directory_uri(); ?>/skins/palebrown/style.css" rel="stylesheet" media="all" />
    
    <!--[if lt IE 9]>
        <script src="js/html5.js"></script>
    <![endif]-->
    
    <link href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" rel="stylesheet" media="all" />
    <link href="<?php echo get_template_directory_uri(); ?>/css/superfish.css" rel="stylesheet" media="all" />
    <link href="<?php echo get_template_directory_uri(); ?>/css/slicknav.css" rel="stylesheet" media="all" />
    
    <!-- **Font Awesome** -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" />
    
    <!-- **Google - Fonts** -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Bitter:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Norican' rel='stylesheet' type='text/css'>
    
    <!-- SLIDER STYLES STARTS -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/js/revolution/settings.css" media="screen" />
    <!-- SLIDER STYLES ENDS -->
    
    <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr-2.6.2.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-easing-1.3.js"></script>    
<?php wp_head(); ?>

</head>

<body>
	<!-- main-content div Starts here -->
	<div class="main-content">
		<!-- wrapper div Starts here -->
        <div class="wrapper">
            <!-- top bar div Starts here -->
            <div class="top-bar">
                <div class="container">
                    <div class="float-left">
                        <p><i class=" fa fa-phone"></i>Bel : 020 644 7567</p>
                    </div>
                    <div class="float-right">
                        <?php if ( dynamic_sidebar('top area') ) : else : endif; ?>
                    </div>
                </div>
            </div>
            <!-- top bar div Ends here -->
            <!-- header div Starts here -->
            <header class="header1">
                <div class="container">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="logo"></a>
                    <nav id="main-menu">
                        <?php
                        wp_nav_menu( array(
                        'theme_location' => 'top_menu',
                        'depth' => 2,
                        'container' => false,
                        'menu_class' => 'nav navbar-nav',
                        'fallback_cb' => 'wp_page_menu',
                        //Process nav menu using our custom nav walker
                        'walker' => new wp_bootstrap_navwalker())
                        );
                        ?>
                    </nav>
                </div>
                <div class="header-bottom"></div>
            </header>
            <!-- header div Ends here -->
            <?php if(is_front_page() ) { ?>

            <!-- Banner Starts -->
            <div class="fullwidthbanner-container banner">
                <div class="fullwidthbanner">
                    <ul>
                    
                    <li data-transition="random" data-slotamount="7" data-masterspeed="300">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/banner1920.jpg" alt="Slider BG" >
      
                        
                            <!--div class="tp-caption custom_subtitle sft"
                                data-x="250" 
                                data-y="280"                     
                                data-speed="1000" 
                                data-start="3000" 
                                data-easing="easeOutExpo">    <span style="color: #333;">Brood, taart en ander banket op maat</span>                                  
                            </div-->     
                             
         
                </li>
                     
                    
                  <li data-transition="random" data-slotamount="7" data-masterspeed="300" data-delay="10000" >
                            <img src="<?php echo get_template_directory_uri(); ?>/images/banner19202.jpg"  alt="slider-bg"  data-fullwidthcentering="on">               
                    <div class="tp-caption custom_title lft skewfromrightshort"
                                data-x="0" 
                                data-y="130"                     
                                data-speed="1000" 
                                data-start="2500" 
                                data-easing="easeOutExpo"><span>Kom langs </span>                                     
                            </div>
                        
                            <div class="tp-caption custom_subtitle sft"
                                data-x="0" 
                                data-y="186"                     
                                data-speed="1000" 
                                data-start="3000" 
                                data-easing="easeOutExpo">bij de lekkerste koshere bakkerij van Amsterdam                                       
                            </div>
                        
                            <div class="tp-caption custom_content sfl"
                                data-x="2" 
                                data-y="247"                     
                                data-speed="1000" 
                                data-start="3500" 
                                data-easing="easeOutExpo">Catering voor uw feesten en partijen. <br>
    Verbaas iedereen met geweldige catering verzorgt door ons!                                         
                            </div>
                        
                            <div class="tp-caption randomrotate"
                                data-x="0" 
                                data-y="335"                     
                                data-speed="1000" 
                                data-start="4000" 
                                data-easing="easeOutExpo"><img src="<?php echo get_template_directory_uri(); ?>/images/revolution/cook.png" alt="Image 9">                                       
                            </div>
                        
                            <div class="tp-caption custom_service sft"
                                data-x="50" 
                                data-y="344"                     
                                data-speed="1000" 
                                data-start="4500" 
                                data-easing="easeOutExpo">We bakken                                        
                            </div>
                        
                            <div class="tp-caption randomrotate"
                                data-x="160" 
                                data-y="335"                     
                                data-speed="1000" 
                                data-start="5000" 
                                data-easing="easeOutExpo"><img src="<?php echo get_template_directory_uri(); ?>/images/revolution/accomodate.png" alt="Image 6">                                         
                            </div>
                        
                            <div class="tp-caption custom_service sfr"
                                data-x="210" 
                                data-y="344"                     
                                data-speed="1000" 
                                data-start="5000" 
                                data-easing="easeOutExpo">We bezorgen                                      
                            </div>
                        
                            <div class="tp-caption randomrotate"
                                data-x="335" 
                                data-y="335"                     
                                data-speed="1000" 
                                data-start="5500" 
                                data-easing="easeOutExpo"><img src="<?php echo get_template_directory_uri(); ?>/images/revolution/serve.png" alt="Image 9">                                      
                            </div>
                        
                            <div class="tp-caption custom_service sft"
                                data-x="385" 
                                data-y="344"                     
                                data-speed="1000" 
                                data-start="6000" 
                                data-easing="easeOutExpo">We bedienen                                   
                            </div>
                        </li>
                        <li data-transition="random" data-slotamount="7" data-masterspeed="300" data-delay="10000" >
                            <img src="<?php echo get_template_directory_uri(); ?>/images/banner19203.jpg"  alt="slider-bg"  data-fullwidthcentering="on">               
                        </li>
                         <li data-transition="random" data-slotamount="7" data-masterspeed="300" data-delay="10000" >
                            <img src="<?php echo get_template_directory_uri(); ?>/images/banner19204.jpg"  alt="slider-bg"  data-fullwidthcentering="on">               
                        </li>
                          <li data-transition="random" data-slotamount="7" data-masterspeed="300" data-delay="10000" >
                            <img src="<?php echo get_template_directory_uri(); ?>/images/banner19205.jpg"  alt="slider-bg"  data-fullwidthcentering="on">                   
                        </li>

                  </ul>
                </div>
            </div><!-- Banner Ends -->
            <?php } ?>