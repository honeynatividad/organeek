<?php
session_start();
include_once '../../admin/include/config.php';
include_once '../../class/class_blog.php';
include_once '../../config.php';
$recipe = new Blog();
?>
<!DOCTYPE html>
<html>
	<head>	
		 <meta charset="utf-8">
		<!-- Title here -->
		<title>Blog - Organeek</title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="ResponsiveWebInc">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Styles -->
		<!-- Bootstrap CSS -->
		<link href="../../css/bootstrap.min.css" rel="stylesheet">
		<!-- Portfolio CSS -->
		<link href="../../css/prettyPhoto.css" rel="stylesheet">
		<!-- Font awesome CSS -->
		<link href="../../css/font-awesome.min.css" rel="stylesheet">	
		<!-- Custom Less -->
		<link href="../../css/less-style.css" rel="stylesheet">	
		<!-- Custom CSS -->
		<link href="../../css/style.css" rel="stylesheet">
		<!--[if IE]><link rel="stylesheet" href="css/ie-style.css"><![endif]-->
		<!--Sidebar Theme-->
                <link rel="stylesheet" href="../../css/theme-elements.css">
                <link rel="stylesheet" href="../../css/theme.css">
                <link href='http://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>
                <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
                <link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
                <link href='http://fonts.googleapis.com/css?family=Rancho' rel='stylesheet' type='text/css'>
                <link href="http://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet" type="text/css">
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
        }(document, 'script', 'facebook-jssdk'));</script>	
		
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
                <?php include '../../socialheader.php';?>
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
                                        <img class="img-responsive" src="<?php echo $base_url ?>img/logo/logo1.png" alt="Organeek"/>
                                        <p>Celebrating Beauty & Wellness</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-9 col-sm-7">
                                                <!-- Navigation -->
                                <?php include '../../menu.php'; ?>
                            </div>
                        </div>
                    </div>
                </div>  
                <!-- //Header Menu //-->
                        
                <!-- Banner -->
                <div class=" banner-bg">
                    <div class="banner">
                            <div class="container">
                                    <!-- Heading -->
                                    <ol class="breadcrumb">
                                            <li><a href="<?php echo $base_url ?>index.php">Home</a></li>
                                            <li><a href="<?php echo $base_url ?>blog/all">Blog</a></li>
                                            <li class="active">Wellness</li>
                                    </ol>
                                    <div class="clearfix"></div>
                            </div>
                    </div>
                </div>
                <!--// Banner //-->
                        
                <!-- Inner Content -->
                <div class="inner-page"> </div>
                    <!-- Blog Content -->
                    <div class="body-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-9 col-sm-12">
                                    <!-- The new post done by user's all in the post block -->
                                    <div class="blog-post">
                                            <!-- Entry is the one post for each user -->
                                            <?php foreach($recipe->blogList() as $a): ?>
                                            <div class="col-md-5 col-xs-12">
                                                    <!-- Post Images -->
                                                    <div class="padd1"> </div>
                                                    <div class="blog-img3 clearfix"> 
                                                            <img src="../../admin/<?php echo $a['photo'] ?>" class="img-responsive" alt="" />
                                                    </div>
                                                    <br>
                                            </div>        
                                            <div class="col-md-7 col-xs-12">
                                                    <!-- Heading of the  post -->
                                                    <div class="blog-image">
                                                        <h3> <a href="blog-single.php?id=<?php echo $a['blog_id']; ?>"><?php echo $a['title'] ?></a></h3>
                                                    </div>        
                                                    <!-- Paragraph -->
                                                    <div class="blog-det clearfix">
                                                        <?php
                                                            $out = strlen($a['body']) > 550 ? substr($a['body'],0,550)."......." : $a['body'];
                                                            echo $out;
                                                        ?>

                                                    </div>
                                                    <div class="clearfix"></div>
                                            </div>
                                            <!-- Summary Line -->
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="blog-post-details">
                                                <!-- Views -->
                                                <div class="blog-post-details-item blog-post-details-item-left fa fa-eye">
                                                        <a href="">
                                                            130 VIEWS
                                                        </a>
                                                </div>    
                                                    <!-- //Author Name// -->
                                                    <div class="blog-post-details-item blog-post-details-item-left fa fa-user">
                                                        <a href="">
                                                            Haze
                                                        </a>
                                                    </div>
                                                    <!-- Meta for this block -->
                                                    <div class="blog-post-details-item blog-post-details-item-left fa fa-calendar">
                                                        <?php echo $a['created']; ?>
                                                    </div>

                                                    <!-- Tags -->
                                                    <div class="blog-post-details-item blog-post-details-item-left blog-post-details-tags fa fa-file">
                                                        <a href="#"><?php echo $recipe->category ?></a>,
                                                        <a href="#"><?php echo $recipe->sub_category ?></a>,
                                                    </div>
                                                    <!-- //Tags// -->

                                                    <!-- Comments -->
                                                    <div class="blog-post-details-item blog-post-details-item-left blog-post-details-item-last fa fa-comment">
                                                        <a href="">
                                                            3 Comments
                                                        </a>
                                                    </div>
                                                    <!-- //Comments// -->


                                                    <!-- Read More -->
                                                    <div class="blog-post-details-item blog-post-details-item-right">
                                                        <a href="blog-single.php?id=<?php echo $a['recipe_id']; ?>">
                                                            read more <i class="fa fa-chevron-right"></i>
                                                        </a>
                                                    </div>
                                                    <!-- //Read More// -->
                                                </div>
                                            </div>
                                        <br>
                                        <!--// Summary Line// -->
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="col-md-9 col-sm-12"> 
                                    <!-- Pagination-->
                                        <ul class="pagination">
                                            <li class="disabled"><a href="#">&laquo;</a></li>
                                            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">6</a></li>
                                            <li><a href="#">7</a></li>
                                            <li><a href="#">8</a></li>
                                            <li><a href="#">9</a></li>
                                            <li><a href="#">10</a></li>
                                            <li><a href="#">&raquo;</a></li>
                                        </ul>
                                    <!-- //Pagination // -->
                                    </div>
                                </div> <!--//Main Blog column// -->
                                <div class="padd1"> </div>

                                <!-- Sidebar-->
                                <?php include '../../sidebar-blog.php'; ?>
                                <!--//Sidebar//-->
                        </div><!--//Row//-->
                    </div><!-- // Blog // -->
                </div><!-- //Body Wrapper// -->	

                <!-- Footer -->
                <?php include '../../footer.php'; ?>
                <!--//Footer//-->

                <!-- Scroll to top -->
                <span class="totop"><a href="#"><i class="fa fa-angle-up"></i></a></span> 

                <!-- Javascript files -->
                <!-- jQuery -->
                <script src="../../js/jquery.js"></script>
                <!-- Bootstrap JS -->
                <script src="../../js/bootstrap.min.js"></script>
                <!-- Pretty Photo JS -->
                <script src="../../js/jquery.prettyPhoto.js"></script>
                <!-- Respond JS for IE8 -->
                <script src="../../js/respond.min.js"></script>
                <!-- HTML5 Support for IE -->
                <script src="../../js/html5shiv.js"></script>
                <!-- Custom JS -->
                <script src="../../js/custom.js"></script>
                <!-- JS code for this page -->
		
	</body>	
</html>