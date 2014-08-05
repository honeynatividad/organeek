<?php
include_once 'config.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
		<!-- Title here -->
        <title>Organeek</title>
		<!-- Description, Keywords and Author -->
	<meta name="description" content="Your description">
	<meta name="keywords" content="Your,Keywords">
	<meta name="author" content="ResponsiveWebInc">
		
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Styles -->
		<!-- Bootstrap CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
	<link href="css/settings.css" rel="stylesheet">		
		<!-- FlexSlider Css -->
	<link rel="stylesheet" href="css/flexslider.css" media="screen" />
		<!-- Portfolio CSS -->
	<link href="css/prettyPhoto.css" rel="stylesheet">
		<!-- Font awesome CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">	
		<!-- Custom Less -->
	<link href="css/less-style.css" rel="stylesheet">	
		<!-- Custom CSS -->
	<link href="css/style.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Rancho' rel='stylesheet' type='text/css'>
        <link href="http://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet" type="text/css">
		<!--[if IE]><link rel="stylesheet" href="css/ie-style.css"><![endif]-->
		
		<!-- Favicon -->
        <link rel="shortcut icon" href="#">
    </head>
	
    <body>
	<div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=651121894919208&version=v2.0";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        </script>	
			
		<!-- Shopping cart Modal -->
        <div class="modal fade" id="shoppingcart1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h4 class="modal-title">Shopping Cart</h4>
                    </div>
                    <div class="modal-body">
						<!-- Items table -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
				</tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="#">Exception Reins Evocative</a></td>
                                    <td>2</td>
                                    <td>$200</td>
				</tr>
				<tr>
                                    <td><a href="#">Taut Mayoress Alias Appendicitis</a></td>
                                    <td>1</td>
                                    <td>$190</td>
				</tr>
				<tr>
                                    <td><a href="#">Sinter et Molests Perfectionist</a></td>
                                    <td>4</td>
                                    <td>$99</td>
				</tr>
				<tr>
                                    <th></th>
                                    <th>Total</th>
                                    <th>P489</th>
				</tr>
                            </tbody>
			</table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Continue Shopping</button>
			<button type="button" class="btn btn-info">Checkout</button>
                    </div>
		</div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<!-- Modal End -->
		 
        <!-- Top Banner -->
        <?php include 'socialheader.php';?>
        <!-- //Top Banner //-->
        
        <!--Header Menu -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-5">
                                        <!-- Link -->
                        <a href="index.php">
                                                <!-- Logo area -->
                            <div class="logo">
                                <img class="img-responsive" src="<?php echo $base_url ?>img/logo/ologo2.png" alt="Organeek"/>
                                <p>Celebrating Beauty & Wellness</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-9 col-sm-7">
                                        <!-- Navigation -->
                        <?php include 'menu.php'; ?>
                    </div>
                </div>
            </div>
        </div>  
        <!-- //Header Menu//-->
	
         <!-- Start Here-->
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="default-heading">
                        <!-- Crown image -->
                        <img class="img-responsive" src="<?php echo $base_url ?>img/crown.png" alt="Organeek" />
                        <!-- Heading -->
                        <h2>Start Here</h2>
                    </div>
                        <p> Thank you for visiting Organeek website. Whether you’ve just stumbled accidentally on this site, referred by a friend, or on the precipice of annihilating all the chemicals from your personal care product, you’ve definitely  come to the right place. Organeek will be there for you every step of the way as we embark on healthier alternatives in beauty, home and lifestyle. </p>
                        <br>
                        <p>If you’re new to this website, I highly recommend reading the articles below. This part is not mandatory, but is highly recommended if you would like to have greater insights on natural DIY schemes and would want to know what to expect in this arena. I have divided these guidelines into 3 sections. Ideally, it should be read from top to bottom, however, almost all posts are standalone and can be read individually. </p>
                        <br>
                        
                        <!--Beauty Topics-->
                        <div class="col-md-12 col-xs-12">
                            <div class="category">
                                <div class="category-text madd">
                                Beauty
                                </div>
                            </div>
                        </div>
                        
                        <div class="starthere-box">
                            <div class="col-md-3 col-xs-3">
                                <a href="<?php echo $base_url ?>recipe/all/"> 
                                    <img class="starthere-image" src="http://localhost/organeek/img/beauty1.png" alt="Beauty">
                                </a>
                            </div>

                            <div class="col-md-9 col-xs-9">
                                <ul class="starthere-title">
                                    <li class="fa fa-angle-right">
                                        <a href="#"> Beauty DIY 101 </a>
                                    </li>
                                    <li class="fa fa-angle-right">
                                        <a href="#"> 10 DIY mistakes to avoid </a>
                                    </li>
                                    <li class="fa fa-angle-right">
                                        <a href="#"> Skin pH  </a>
                                    </li>
                                    <li class="fa fa-angle-right">
                                        <a href="#"> Find out your skin type</a>
                                    </li>
                                    <li class="fa fa-angle-right">
                                        <a href="#"> Top 10 beauty kitchen ingredients essentials </a>
                                    </li>
                                    <li class="fa fa-angle-right">
                                        <a href="#"> Top 10 beauty kitchen ingredients never to use on your beauty routine </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--//Beauty Topics//-->
                        
                        <!--Wellness Topics-->
                        <div class="col-md-12 col-xs-12">
                            <div class="category">
                                <div class="category-text madd">
                                Wellness
                                </div>
                            </div>
                        </div>
                        
                        <div class="starthere-box">
                            <div class="col-md-3 col-xs-3">
                                <a href="<?php echo $base_url ?>recipe/all/"> 
                                    <img class="starthere-image" src="http://localhost/organeek/img/wellness.png" alt="Beauty">
                                </a>
                            </div>

                            <div class="col-md-9 col-xs-9">
                                <ul class="starthere-title">
                                    <li class="fa fa-angle-right">
                                        <a href="#"> Beauty DIY 101 </a>
                                    </li>
                                    <li class="fa fa-angle-right">
                                        <a href="#"> 10 DIY mistakes to avoid </a>
                                    </li>
                                    <li class="fa fa-angle-right">
                                        <a href="#"> Skin pH  </a>
                                    </li>
                                    <li class="fa fa-angle-right">
                                        <a href="#"> Find out your skin type</a>
                                    </li>
                                    <li class="fa fa-angle-right">
                                        <a href="#"> Top 10 beauty kitchen ingredients essentials </a>
                                    </li>
                                    <li class="fa fa-angle-right">
                                        <a href="#"> Top 10 beauty kitchen ingredients never to use on your beauty routine </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--//Wellness Topics//-->
                        
                        <!--Natural Home Topics-->
                        <div class="col-md-12 col-xs-12">
                            <div class="category">
                                <div class="category-text madd">
                                Natural Home
                                </div>
                            </div>
                        </div>
                        
                        <div class="starthere-box">
                            <div class="col-md-3 col-xs-3">
                                <a href="<?php echo $base_url ?>recipe/all/"> 
                                    <img class="starthere-image" src="http://localhost/organeek/img/nav-menu/home-nav.png" alt="Beauty">
                                </a>
                            </div>

                            <div class="col-md-9 col-xs-9">
                                <ul class="starthere-title">
                                    <li class="fa fa-angle-right">
                                        <a href="#"> Beauty DIY 101 </a>
                                    </li>
                                    <li class="fa fa-angle-right">
                                        <a href="#"> 10 DIY mistakes to avoid </a>
                                    </li>
                                    <li class="fa fa-angle-right">
                                        <a href="#"> Skin pH  </a>
                                    </li>
                                    <li class="fa fa-angle-right">
                                        <a href="#"> Find out your skin type</a>
                                    </li>
                                    <li class="fa fa-angle-right">
                                        <a href="#"> Top 10 beauty kitchen ingredients essentials </a>
                                    </li>
                                    <li class="fa fa-angle-right">
                                        <a href="#"> Top 10 beauty kitchen ingredients never to use on your beauty routine </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--//Natural Home Topics//-->
                    </div> <!--//Start Here//-->
                    
                <!-- Sidebar-->
                    <?php include 'sidebar.php'; ?>
                <!--//Sidebar//-->
            </div>
        </div>
                <!-- Footer -->
                <?php include 'footer.php'; ?>
                <!--//Footer//-->

                <!-- Scroll to top -->
                <span class="totop"><a href="#"><i class="fa fa-angle-up"></i></a></span> 



                <!-- Javascript files -->
                <!-- jQuery -->
                <script src="js/jquery.js"></script>
                <!-- Bootstrap JS -->
                <script src="js/bootstrap.min.js"></script>
                <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
                <script type="text/javascript" src="js/jquery.themepunch.plugins.min.js"></script>
                <script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
                <!-- FLEX SLIDER SCRIPTS  -->
                <script defer src="js/jquery.flexslider-min.js"></script>
                <!-- Pretty Photo JS -->
                <script src="js/jquery.prettyPhoto.js"></script>
                <!-- Respond JS for IE8 -->
                <script src="js/respond.min.js"></script>
                <!-- HTML5 Support for IE -->
                <script src="js/html5shiv.js"></script>
                <!-- Custom JS -->
                <script src="js/custom.js"></script>
                <!-- JS code for this page -->
                <script>
                /* ******************************************** */
                /*  JS for SLIDER REVOLUTION  */
                /* ******************************************** */
                                jQuery(document).ready(function() {
                                           jQuery('.tp-banner').revolution(
                                                {
                                                        delay:9000,
                                                        startheight:500,

                                                        hideThumbs:10,

                                                        navigationType:"bullet",	

                                                        hideArrowsOnMobile:"on",

                                                        touchenabled:"on",
                                                        onHoverStop:"on",

                                                        navOffsetHorizontal:0,
                                                        navOffsetVertical:20,

                                                        stopAtSlide:-1,
                                                        stopAfterLoops:-1,

                                                        shadow:0,

                                                        fullWidth:"on",
                                                        fullScreen:"off"
                                                });
                                });
                /* ******************************************** */
                /*  JS for FlexSlider  */
                /* ******************************************** */

                        $(window).load(function(){
                                $('.flexslider-recent').flexslider({
                                        animation:		"fade",
                                        animationSpeed:	1000,
                                        controlNav:		true,
                                        directionNav:	false
                                });
                                $('.flexslider-testimonial').flexslider({
                                        animation: 		"fade",
                                        slideshowSpeed:	5000,
                                        animationSpeed:	1000,
                                        controlNav:		true,
                                        directionNav:	false
                                });
                        });

                /* Gallery */

                jQuery(".gallery-img-link").prettyPhoto({
                   overlay_gallery: false, social_tools: false
                });

                </script>
    </body>	
</html>