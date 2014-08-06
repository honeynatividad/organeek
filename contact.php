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
	
        <!-- About USe-->
        <div class="border-ridge"> </div> 
        <div class="inner-page padd5">
            <!-- General Info Start -->
            <div class="general">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-xs-12">
                                <!-- General information content -->
                                <div class="tabs">
                                        <!-- Navigation tab -->
                                        <ul class="nav nav-tabs">
                                                <!-- Navigation tabs (Job titles ). Use unique value for "href" in "anchor tags". -->
                                                <li class="active"><a href="#tab1" data-toggle="tab">About Us</a></li>
                                                <li><a href="#tab2" data-toggle="tab">Disclaimer </a></li>
                                                <li><a href="#tab3" data-toggle="tab">Terms &amp; Conditions</a></li>
                                                <li><a href="#tab4" data-toggle="tab">Privacy Policy</a></li>
                                                <li><a href="#tab5" data-toggle="tab">Sources</a></li>
                                        </ul>
                                        <!-- Tab content -->
                                        <div class="tab-content">
                                                <!-- In "id", use the value which you used in above anchor tags -->
                                                <div class="tab-pane active" id="tab1">
                                                        <!-- Heading -->

                                                        <!-- Paragraph -->
                                                        <p>Organeek aspires to be the leading source of natural health and beauty information and promotes wellness through knowledge and proper utilization of natural resources.</p>
                                                        <p>We </p>
                                                        <p>Organeek has a wealth of information that promises to change how you view your life in the following realms:</p>
                                                        <!-- List content -->
                                                        <ul class="list-unstyled">
                                                                <li><i class="fa fa-check"></i> Wellness</li>
                                                                <li><i class="fa fa-check"></i> Beauty</li>
                                                                <li><i class="fa fa-check"></i> Natural Home</li>
                                                        </ul>
                                                </div> <!--/ tab-pane end --> 
                                                <div class="tab-pane" id="tab2">
                                                        <!-- heading -->

                                                        <!-- Paragraph -->
                                                        <p>It is important to note that while all of these recipes contain natural ingredients, even natural ingredients can cause allergic reactions in some individuals.  It is imperative that you test any substance on a small area of skin (preferably on the inner arm area) before using in the recommended way.  If any redness, swelling or sensitivity occurs within 20-30 minutes, discontinue use immediately and remove the substance well.  Please contact your physician if you experience any  serious complications.  Please be advised that you are using these beauty recipes at your own risk.  Organeek cannot be held liable for any reaction that you encounter while using any of these beauty recipes.  None of these formulations are meant to treat or diagnose any medical condition.  The information on this page has not been evaluated by the FDA. This site is only for informative purposes. It is not intended to be a substitute for professional medical advice. Please consult your doctor for your medical concerns. The author is not liable for any outcome or damage resulting from information obtained from this site.</p>
                                                </div> <!--/ tab-pane end --> 
                                                <div class="tab-pane" id="tab3">
                                                        <!-- heading -->

                                                        <!-- Paragraph -->
                                                        <p>Welcome to our website. If you continue to browse and use this website, you are agreeing to comply with and be bound by the following terms and conditions of use, which together with our privacy policy govern Organeek's relationship with you in relation to this website. If you disagree with any part of these terms and conditions, please do not use our website.</p>
                                                        <br>
                                                        <p>The term 'Organeek' or 'us' or 'we' refers to the owner of the website whose registered office is [address]. Our company registration number is [company registration number and place of registration]. The term 'you' refers to the user or viewer of our website.</p>
                                                        <p>The use of this website is subject to the following terms of use:</p> 
                                                            <ul class="list-unstyled">
                                                                <li><i class="fa fa-check"></i> The content of the pages of this website is for your general information and use only. It is subject to change without notice.</li>
                                                                <li><i class="fa fa-check"></i> This website uses cookies to monitor browsing preferences. If you do allow cookies to be used, the following personal information may be stored by us for use by third parties: [****}.</li>
                                                                <li><i class="fa fa-check"></i> Neither we nor any third parties provide any warranty or guarantee as to the accuracy, timeliness, performance, completeness or suitability of the information and materials found or offered on this website for any particular purpose. You acknowledge that such information and materials may contain inaccuracies or errors and we expressly exclude liability for any such inaccuracies or errors to the fullest extent permitted by law.</li>
                                                                <li><i class="fa fa-check"></i> Your use of any information or materials on this website is entirely at your own risk, for which we shall not be liable. It shall be your own responsibility to ensure that any products, services or information available through this website meet your specific requirements.</li>
                                                                <li><i class="fa fa-check"></i> This website contains material which is owned by or licensed to us. This material includes, but is not limited to, the design, layout, look, appearance and graphics. Reproduction is prohibited other than in accordance with the copyright notice, which forms part of these terms and conditions.</li>
                                                                <li><i class="fa fa-check"></i> All trade marks reproduced in this website which are not the property of, or licensed to, the operator are acknowledged on the website. </li>
                                                                <li><i class="fa fa-check"></i> Unauthorised use of this website may give rise to a claim for damages and/or be a criminal offence.</li>
                                                                <li><i class="fa fa-check"></i> From time to time this website may also include links to other websites. These links are provided for your convenience to provide further information. They do not signify that we endorse the website(s). We have no responsibility for the content of the linked website(s).</li>
                                                                <li><i class="fa fa-check"></i> Your use of this website and any dispute arising out of such use of the website is subject to the laws of Philippines. <p>
                                                            </ul>
                                                </div> <!--/ tab-pane end --> 
                                                <div class="tab-pane" id="tab4">
                                                        <!-- Paragraph -->
                                                        <p>This privacy policy sets out how Organeek uses and protects any information that you give Organeek when you use this website.</p>
                                                        <p>Organeek is committed to ensuring that your privacy is protected. Should we ask you to provide certain information by which you can be identified when using this website, then you can be assured that it will only be used in accordance with this privacy statement.</p>
                                                        <p>Organeek may change this policy from time to time by updating this page. You should check this page from time to time to ensure that you are happy with any changes. This policy is effective from June 12, 2014.</p>
                                                        <br>
                                                        <b>What we collect</b>
                                                        <p>We may collect the following information:</p>
                                                            <ul class="list-unstyled">
                                                                <li><i class="fa fa-check"></i> Contact information including email address</li>
                                                                <li><i class="fa fa-check"></i> Demographic information such as postcode, preferences and interests</li>
                                                                <li><i class="fa fa-check"></i> Other information relevant to customer surveys and/or offers</li>
                                                            </ul>
                                                        <br>
                                                        <b>What we do with the information we gather </b>
                                                        <p>We require this information to understand your needs and provide you with a better service, and in particular for the following reasons:</p>
                                                            <ul class="list-unstyled">
                                                                <li><i class="fa fa-check"></i>Internal record keeping</li>
                                                                <li><i class="fa fa-check"></i>We may use the information to improve our products and services.</li>
                                                                <li><i class="fa fa-check"></i>We may periodically send promotional emails about new products, special offers or other information which we think you may find interesting using the email address which you have provided</li>
                                                                <li><i class="fa fa-check"></i>From time to time, we may also use your information to contact you for market research purposes. We may contact you by email, phone, fax or mail. We may use the information to customise the website according to your interests</li>
                                                             </ul>
                                                        <br>
                                                        <b>Security</b>   
                                                        <p>We are committed to ensuring that your information is secure. In order to prevent unauthorised access or disclosure, we have put in place suitable physical, electronic and managerial procedures to safeguard and secure the information we collect online.</p>
                                                        <br>
                                                        <b>How we use cookies</b>
                                                        <p>A cookie is a small file which asks permission to be placed on your computer's hard drive. Once you agree, the file is added and the cookie helps analyse web traffic or lets you know when you visit a particular site. Cookies allow web applications to respond to you as an individual. The web application can tailor its operations to your needs, likes and dislikes by gathering and remembering information about your preferences.</p>
                                                        <p>We use traffic log cookies to identify which pages are being used. This helps us analyse data about webpage traffic and improve our website in order to tailor it to customer needs. We only use this information for statistical analysis purposes and then the data is removed from the system.</p>
                                                        <p>Overall, cookies help us provide you with a better website by enabling us to monitor which pages you find useful and which you do not. A cookie in no way gives us access to your computer or any information about you, other than the data you choose to share with us.</p>
                                                        <p>You can choose to accept or decline cookies. Most web browsers automatically accept cookies, but you can usually modify your browser setting to decline cookies if you prefer. This may prevent you from taking full advantage of the website.</p>
                                                        <br>
                                                        <b>Links to other websites</b>
                                                        <p>Our website may contain links to other websites of interest. However, once you have used these links to leave our site, you should note that we do not have any control over that other website. Therefore, we cannot be responsible for the protection and privacy of any information which you provide whilst visiting such sites and such sites are not governed by this privacy statement. You should exercise caution and look at the privacy statement applicable to the website in question.</p>
                                                        <br>
                                                        <b>Controlling your personal information</b>
                                                        <p>You may choose to restrict the collection or use of your personal information in the following ways:</p>
                                                        <ul class="list-unstyled">
                                                                <li><i class="fa fa-check"></i>Whenever you are asked to fill in a form on the website, look for the box that you can click to indicate that you do not want the information to be used by anybody for direct marketing purposes if you have previously agreed to us using your personal information for direct marketing purposes, you may change your mind at any time by writing to or emailing us at admin@organeek.net</li>
                                                                <li><i class="fa fa-check"></i>We will not sell, distribute or lease your personal information to third parties unless we have your permission or are required by law to do so. We may use your personal information to send you promotional information about third parties which we think you may find interesting if you tell us that you wish this to happen.</li>
                                                                <li><i class="fa fa-check"></i>You may request details of personal information which we hold about you under the Data Protection Act 1998. A small fee will be payable. If you would like a copy of the information held on you please write to admin@organeek.net</li>
                                                                <li><i class="fa fa-check"></i>If you believe that any information we are holding on you is incorrect or incomplete, please write to or email us as soon as possible at the above address. We will promptly correct any information found to be incorrect</li>
                                                             </ul>
                                                </div> 
                                                <div class="tab-pane" id="tab5">
                                                        <!-- Paragraph -->
                                                        <p>Images (website icons, menu, blogs and recipes) used for this website are all from http://www.freedigitalphotos.net/.</p>									</div><!--/ Tab content end -->
                                                </div>                               
                                            </div>
                                <!-- Blogger -->
                                <div class="chefs padd5">
                                    <!-- Default Heading -->
                                    <div class="default-heading">
                                            <!-- Crown image -->
                                            <img class="img-responsive" src="img/crown.png" alt="Organeek" />
                                            <!-- Heading -->
                                            <h2>Bloggers & Contributors</h2>
                                            <!-- Paragraph -->
                                            <p>Organeek's most dedicated bloggers and contributors who bring forth the most sumptuous tidbit about wellness and beauty.</p>
                                    </div>
                                    
                                            <div class="col-md-4 col-sm-4">
                                                    <!-- Blogger Member -->
                                                    <div class="chefs-member">
                                                            <!-- Chefs member header -->
                                                            <div class="chefs-head">
                                                                    <!-- Member background image -->
                                                                    <img class="chefs-back img-responsive" src="img/chef/blogger1.jpg" alt="" />
                                                                    <!-- chef member image -->
                                                                    <img class="chefs-img img-responsive" src="img/chef/dimple-fin.png" alt="" />
                                                            </div>
                                                            <div class="services_pic_line1"> </div>
                                                            <!--Name / Heading -->
                                                            <h3><a href="#">Haze</a></h3>
                                                            <!-- Member designation -->
                                                            <span>Founder, Contributor & Designer</span>
                                                            <!-- Social media links -->
                                                            <div class="padd3"> </div>
                                                            <div class="recipe-share">
                                                                <a href="http://facebook.com/hazel.natividad.31105" class="facebook"> <i class="fa fa-facebook"></i></a>
                                                                <a href="" class="twitter" > <i class="fa fa-twitter"></i></a>
                                                                <a href="" class="google-plus"> <i class="fa fa-google-plus"></i></a>
                                                                <a href="" class="instagram"> <i class="fa fa-instagram"></i></a>
                                                                <a href="mailto:hazel@organeek.net" class="email"> <i class="fa fa-envelope"></i></a>
                                                            </div>
                                                            <br>
                                                    </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4">
                                                    <!-- Blogger Member -->
                                                    <div class="chefs-member">
                                                            <!-- Chefs member header -->
                                                            <div class="chefs-head">
                                                                    <!-- Member background image -->
                                                                    <img class="chefs-back img-responsive" src="img/chef/c-back3.jpg" alt="" />
                                                                    <!-- chef member image -->
                                                                    <img class="chefs-img img-responsive" src="img/chef/hanna.png" alt="" />
                                                            </div>
                                                            <div class="services_pic_line1"> </div>
                                                            <!--Name / Heading -->
                                                            <h3><a href="#">Hanna Marie</a></h3>
                                                            <!-- Member designation -->
                                                            <span>Developer</span>
                                                            <!-- Social media links -->
                                                            <div class="padd3"> </div>
                                                            <div class="recipe-share">
                                                                <a href="http://facebook.com/hazel.natividad.31105" class="facebook"> <i class="fa fa-facebook"></i></a>
                                                                <a href="" class="twitter" > <i class="fa fa-twitter"></i></a>
                                                                <a href="" class="google-plus"> <i class="fa fa-google-plus"></i></a>
                                                                <a href="" class="instagram"> <i class="fa fa-instagram"></i></a>
                                                                <a href="mailto:hazel@organeek.net" class="email"> <i class="fa fa-envelope"></i></a>
                                                            </div>
                                                            <br>
                                                    </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4">
                                                    <!-- Blogger Member -->
                                                    <div class="chefs-member">
                                                            <!-- Chefs member header -->
                                                            <div class="chefs-head">
                                                                    <!-- Member background image -->
                                                                    <img class="chefs-back img-responsive" src="img/chef/blogger2.jpg" alt="" />
                                                                    <!-- chef member image -->
                                                                    <img class="chefs-img img-responsive" src="img/userjpg" alt="" />
                                                            </div>
                                                            <div class="services_pic_line1"> </div>
                                                            <!--Name / Heading -->
                                                            <h3><a href="#">Edgar</a></h3>
                                                            <!-- Member designation -->
                                                            <span>Researcher</span>
                                                            <!-- Social media links -->
                                                            <div class="padd3"> </div>
                                                            <div class="recipe-share">
                                                                <a href="http://facebook.com/hazel.natividad.31105" class="facebook"> <i class="fa fa-facebook"></i></a>
                                                                <a href="" class="twitter" > <i class="fa fa-twitter"></i></a>
                                                                <a href="" class="google-plus"> <i class="fa fa-google-plus"></i></a>
                                                                <a href="" class="instagram"> <i class="fa fa-instagram"></i></a>
                                                                <a href="mailto:hazel@organeek.net" class="email"> <i class="fa fa-envelope"></i></a>
                                                            </div>
                                                            <br>
                                                    </div>
                                            </div>
                                    </div>
                                    <!-- // Blogger & Contributor // -->
                                     </div> <!-- //General Info//-->
                                     
                                     <!-- Sidebar-->
                                        <?php include 'sidebar.php'; ?>
                                    <!--//Sidebar//-->
                                </div>
                            </div>
                        </div>
                    </div><!-- //Inner Page Content// -->	
                
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
                
    </body>	
</html>