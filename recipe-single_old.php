<?php
session_start();
include_once '../admin/include/config.php';
include_once 'class/class_recipe.php';
include_once 'class/class_comment.php';
$recipe = new Recipe();
$id = $_GET['id'];
if(empty($id)){
    header("Location: recipe.php");
}
$recipe->recipeData($id);
$comment = new Comment();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comment->name = mysql_escape_string($_POST['name']);
    $comment->email_add = mysql_escape_string($_POST['email_add']);
    $comment->website = mysql_escape_string($_POST['website']);
    $comment->comment = mysql_escape_string($_POST['comment']);
    $comment->commentAdd('recipe', $id);
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<!-- Title here -->
		<title>Recipe Single - Organeek</title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="ResponsiveWebInc">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Styles -->
		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Portfolio CSS -->
		<link href="css/prettyPhoto.css" rel="stylesheet">
		<!-- Font awesome CSS -->
		<link href="css/font-awesome.min.css" rel="stylesheet">	
		<!-- Custom Less -->
		<link href="css/less-style.css" rel="stylesheet">	
		<!-- Custom CSS -->
		<link href="css/style.css" rel="stylesheet">
		<!--[if IE]><link rel="stylesheet" href="css/ie-style.css"><![endif]-->
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="#">
	</head>
	
	<body>
		
			
		<!-- Shopping cart Modal -->
		<div class="modal fade" id="shoppingcart1" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-body">						<!-- Items table -->
						<img src="../admin/<?php echo $recipe->photo ?>" class="img-responsive img-thumbnail" alt="" />
					</div>
					
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		<!-- Model End -->
		
		<!-- Page Wrapper -->
		<div class="wrapper">
		
			<!-- Header Start -->
			
			<div class="header">
				<div class="container">
					<!-- Header top area content -->
					<div class="header-top">
						<div class="row">
							<div class="col-md-4 col-sm-4">
								<!-- Header top left content contact -->
								<div class="header-contact">
									<!-- Contact number -->
                                                                        <span><a href="#">Contact Us</a></span> |
                                                                        <span><a href="aboutus.html"> About Us</a></span>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<!-- Header top right content search box -->
								<div class=" header-search">
									<form class="form" role="form">
										<div class="input-group">
										  <input type="text" class="form-control" placeholder="Search...">
										  <span class="input-group-btn">
											<button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
										  </span>
										</div>
									</form>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<!-- Button Kart -->
								<div class="btn-cart-md">
									<a class="cart-link" href="#">
										<!-- Image -->
										<img class="img-responsive" src="img/cart.png" alt="" />
										<!-- Heading -->
										<h4>Shopping Cart</h4>
										<span>3 items $489/-</span>
										<div class="clearfix"></div>
									</a>
									<ul class="cart-dropdown" role="menu">
										<li>
											<!-- Cart items for shopping list -->
											<div class="cart-item">
												<!-- Item remove icon -->
												<a href="#"><i class="fa fa-times"></i></a>
												<!-- Image -->
												<img class="img-responsive img-rounded" src="img/nav-menu/nav1.jpg" alt="" />
												<!-- Title for purchase item -->
												<span class="cart-title"><a href="#">Exception Reins Evocative</a></span>
												<!-- Cart item price -->
												<span class="cart-price pull-right red">$200/-</span>
												<div class="clearfix"></div>
											</div>
										</li>
										<li>
											<!-- Cart items for shopping list -->
											<div class="cart-item">
												<!-- Item remove icon -->
												<a href="#"><i class="fa fa-times"></i></a>
												<!-- Image -->
												<img class="img-responsive img-rounded" src="img/nav-menu/nav2.jpg" alt="" />
												<!-- Title for purchase item -->
												<span class="cart-title"><a href="#">Taut Mayoress Alias Appendicitis</a></span>
												<!-- Cart item price -->
												<span class="cart-price pull-right red">$190/-</span>
												<div class="clearfix"></div>
											</div>
										</li>
										<li>
											<!-- Cart items for shopping list -->
											<div class="cart-item">
												<!-- Item remove icon -->
												<a href="#"><i class="fa fa-times"></i></a>
												<!-- Image -->
												<img class="img-responsive img-rounded" src="img/nav-menu/nav3.jpg" alt="" />
												<!-- Title for purchase item -->
												<span class="cart-title"><a href="#">Sinter et Molests Perfectionist</a></span>
												<!-- Cart item price -->
												<span class="cart-price pull-right red">$99/-</span>
												<div class="clearfix"></div>
											</div>
										</li>
										<li>
											<!-- Cart items for shopping list -->
											<div class="cart-item">
												<a class="btn btn-danger" data-toggle="modal" href="#shoppingcart1">Checkout</a>
											</div>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 col-sm-5">
							<!-- Link -->
							<a href="index.html">
								<!-- Logo area -->
								<div class="logo">
									<img class="img-responsive" src="img/ologo2.png" alt="" />
									<!-- Heading 
									<h1>Organeek</h1>-->
									<!-- Paragraph -->
									<p>Beauty |  Health</p>
								</div>
							</a>
						</div>
						<div class="col-md-8 col-sm-7">
							<!-- Navigation -->
							<nav class="navbar navbar-default navbar-right" role="navigation">
								<div class="container-fluid">
									<!-- Brand and toggle get grouped for better mobile display -->
									<div class="navbar-header">
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>

									<!-- Collect the nav links, forms, and other content for toggling -->
									<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
										<ul class="nav navbar-nav">
											<li><a href="index.html"><img src="img/nav-menu/nav1.jpg" class="img-responsive" alt="" /> Home</a></li>
											<li class="dropdown hidden-xs">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="img/nav-menu/beauty.jpg" class="img-responsive" alt="" /> Beauty <b class="caret"></b></a>
												<ul class="dropdown-menu dropdown-md">
													<li>
														<div class="row">
															<div class="col-md-4 col-sm-6">
																<!-- Menu Item -->
																<div class="menu-item">
																	<!-- Heading -->
																	<h3>Recipe</h3>
																	<!-- Image -->
																	<img src="img/dish/dish1.jpg" class="img-responsive" alt="" />
																	<!-- Paragraph -->
																	<p>Sea nut perspicacity under omni piste natures mirror of there with consequent.</p>
																	<!-- Button -->
																	<a href="menu.html" class="btn btn-danger btn-xs">View Menu</a>
																</div>
															</div>
															<div class="col-md-4 col-sm-6">
																<!-- Menu Item -->
																<div class="menu-item">
																	<!-- Heading -->
																	<h3>Blog</h3>
																	<!-- Image -->
																	<img src="img/dish/dish2.jpg" class="img-responsive" alt="" />
																	<!-- Paragraph -->
																	<p>Sea nut perspicacity under omni piste natures mirror as precode consequent.</p>
																	<!-- Button -->
																	<a href="menu.html" class="btn btn-danger btn-xs">View Menu</a>
																</div>
															</div>
                                                                                                                        <div class="col-md-4 col-sm-6">
																<!-- Menu Item -->
																<div class="menu-item">
																	<!-- Heading -->
																	<h3>Shop</h3>
																	<!-- Image -->
																	<img src="img/dish/dish2.jpg" class="img-responsive" alt="" />
																	<!-- Paragraph -->
																	<p>Sea nut perspicacity under omni piste natures mirror as precode consequent.</p>
																	<!-- Button -->
																	<a href="menu.html" class="btn btn-danger btn-xs">View Menu</a>
																</div>
															</div>
														</div>
													</li>
												</ul>
											</li>
											<li class="dropdown visible-xs">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Menu <b class="caret"></b></a>
												<ul class="dropdown-menu">
													<li><a href="menu.html">Vegetarian</a></li>
													<li><a href="menu.html">Non Vegetarian</a></li>
													<li><a href="menu.html">Special Menu</a></li>
												</ul>
											</li>
											<li><a href="gallery.html"><img src="img/nav-menu/ingredients.jpg" class="img-responsive" alt="" /> Ingredients</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="img/nav-menu/recipe.jpg" class="img-responsive" alt="" /> Recipe <b class="caret"></b></a>
												<ul class="dropdown-menu">
													<li><a href="recipe.php">All</a></li>
													<li><a href="recipe.php">Face Care</a></li>
													<li><a href="recipe.php">Body & Skin</a></li>
                                                                                                        <li><a href="recipe.php">Oral Care</a></li>
                                                                                                        <li><a href="recipe.php">Health</a></li>
                                                                                                        <li><a href="recipe.php">Personal Hygiene</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="img/nav-menu/blog.jpg" class="img-responsive" alt="" /> Blog <b class="caret"></b></a>
												<ul class="dropdown-menu">
													<li><a href="blog.php">Blog</a></li>
													<li><a href="blog-single.html">Blog Single</a></li>
													<li><a href="components.html">Components</a></li>
													<li><a href="general.html">General</a></li>
													<li><a href="nutrition-info.html">Nutrition Info</a></li>
												</ul>
											</li>
                                                                                        <li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="img/nav-menu/shop.jpg" class="img-responsive" alt="" /> Shop <b class="caret"></b></a>
												<ul class="dropdown-menu">
													<li><a href="items.html">Shopping</a></li>
													<li><a href="item-single.html">Order Now</a></li>
													<li><a href="checkout.html">Checkout</a></li>
													<li><a href="reserve-seats.html">Reservation</a></li>
													<li><a href="contact.html">Contact Us</a></li>
												</ul>
											</li>
                                                                                </ul>
									</div><!-- /.navbar-collapse -->
								</div><!-- /.container-fluid -->
							</nav>
						</div>
					</div>
				</div> <!-- / .container -->
			</div>
			
			<!-- Header End -->
			
			<!-- Banner Start -->
			
			<div class="banner padd">
				<div class="container">
					<!-- Image -->
					<img class="img-responsive" src="img/logo/recipelogo.png" alt="" />
					<div class="clearfix"></div>
				</div>
			</div>
			
			<!-- Banner End -->
			
			
			
			<!-- Inner Content -->
                        
			<div class="inner-page padd">
			
				<!-- Blog Start -->
					
				<div class="blog">
					<div class="container">
						<div class="row">
							<div class="col-md-8">
								<!-- The new post done by user's all in the post block -->
								<div class="blog-post">
									<!-- Entry is the one post for each user -->
									<div class="entry">
										<!-- Post Images -->
										<div class="blog-img pull-left">
                                                                                        <a data-toggle="modal" href="#shoppingcart1" ><img src="../admin/<?php echo $recipe->photo ?>" class="img-responsive img-thumbnail" alt="" /></a>
										</div>
										<!-- Category >> Sub-category -->
                                                                                
										<div class="meta">
											<i class="fa "></i>&nbsp;  <span class="label label-success"> <?php echo $recipe->category ?> </span> ► <span class="label label-success"> <?php echo $recipe->sub_category ?></span>
											<span class="pull-right"><i class="fa fa-comment"></i> <a href="#">&nbsp;2 Comments</a></span>
										</div>
										<!-- Heading of the  post -->
										<h3><a href="recipe-single.php?id=<?php echo $recipe->recipe_id ?>"><?php echo $recipe->title ?></a></h3>
                                                                                <div class="meta">
                                                                                    <i class="fa fa-calendar"></i>&nbsp;<?php echo $recipe->created ?>
                                                                                </div>                                                                                
										<!-- Paragraph -->
                                                                                <p><?php echo $recipe->benefits ?></p>
                                                                                <div class="clearfix"></div>
									</div>
                                                                        <div class="component-content">
                                                                        <!-- Recipe1 -->
                                                                                <!-- tabs -->
                                                                                <ul id="myTab" class="nav nav-tabs">
                                                                                  <li class="active"><a href="#home" data-toggle="tab">Overview</a></li>
                                                                                  <li><a href="#profile" data-toggle="tab">Directions</a></li>
                                                                                  <li><a href="#cont" data-toggle="tab">Recommended Recipe</a></li>
                                                                                </ul>
                                                                                <div id="myTabContent" class="tab-content">
                                                                                  <div class="tab-pane fade in active" id="home">
                                                                                    <?php echo $recipe->overview ?>
                                                                                  </div>
                                                                                  <div class="tab-pane fade" id="profile">
                                                                                        <p><?php echo $recipe->instructions ?></p>
                                                                                  </div>
                                                                                  <div class="tab-pane fade" id="cont">
                                                                                        <p><?php echo $recipe->recommended ?></p>
                                                                                  </div>
                                                                                </div>
                                                                                
                                                                         </div>
                                                                        
                                                                        <!-- Ingredients -->
                                                                                <h5>Ingredients</h5>
                                                                                <div class="component-content">
                                                                                  <?php echo $recipe->ingredients ?>
                                                                                </div>
                                                                                
                                                                                <img class="img-responsive" src="img/recipebg5.png" alt="" />
                                                                        <!-- Comment section -->						  
									<div class="comments">
										<div class="title"><h5>2 Comments</h5></div>
										<ul class="comment-list">
											<li class="comment">
												<a class="pull-left" href="#">
													<img class="avatar" src="img/user.jpg" alt="" />
												</a>
												<div class="comment-author"><a href="#">Uiousve Rsionsha</a></div>
												<div class="cmeta">Commented on 26/1/2014</div>
												<p>Nulla facilisi. Sed justo dui, scelerisque ut consectetur vel, eleifend id erat. Phasellus condimentum rutrum aliquet. Quisque eu consectetur erat.</p>
												<div class="clearfix"></div>
											</li>
											<li class="comment reply">
												<a class="pull-left" href="#">
													<img class="avatar" src="img/user.jpg" alt="" />
												</a>
												<div class="comment-author"><a href="#">Uiousve Rsionsha</a></div>
												<div class="cmeta">Commented on 02/2/2014</div>
												<p>Nulla facilisi. Sed justo dui, scelerisque ut consectetur vel, eleifend id erat. Phasellus condimentum rutrum aliquet. Quisque eu consectetur erat.</p>
											</li>
										</ul>
										<div class="clearfix"></div>
									</div><!--/ Comment section end -->
								</div><!--/ Blog post class end -->
								<!-- Comment posting -->							  
								<div class="respond well">
									<div class="title"><h5>Post Reply</h5></div>
									<div class="form">
                                                                            <form class="form-horizontal" role="form" action="recipe-single.php?id=<?php echo $id; ?>" method="post">
											<div class="form-group">
												<label for="name" class="col-lg-2 control-label">Name</label>
												<div class="col-lg-10">
													<input type="text" class="form-control" id="name" name="name" placeholder="Name">
												</div>
											</div>
											<div class="form-group">
												<label for="email" class="col-lg-2 control-label">Email</label>
												<div class="col-lg-10">
													<input type="email" class="form-control" id="email" name="email_add" placeholder="Email">
												</div>
											</div>
											<div class="form-group">
												<label for="website" class="col-lg-2 control-label">Website</label>
												<div class="col-lg-10">
													<input type="text" class="form-control" id="website" name="website" placeholder="Website">
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-lg-2" for="comment">Comment</label>
												<div class="col-lg-10">
												  <textarea class="form-control" id="comment" rows="3" name="comment" placeholder="Comment"></textarea>
												</div>
											</div>
											  
											<div class="form-group">
												<div class="col-lg-offset-2 col-lg-10">
													<button type="submit" class="btn btn-danger btn-sm">Submit</button> &nbsp;
													<button type="reset" class="btn btn-default btn-sm">Reset</button>
												</div>
											</div>
										</form>
									</div>
								</div><!--/ Comment posting end -->	
								<!-- Navigation -->
								<div class="navigation button">  
									<div class="pull-left">
										<a href="blog.html" class="btn btn-danger btn-sm">&laquo; Previous Post</a>
									</div>
									<div class="pull-right">
										<a href="blog.html" class="btn btn-danger btn-sm">Next Post &raquo;</a>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
							</div> <!--/ Main blog column end -->
							<div class="col-md-4">
								<!-- Blog page sidebar -->
								<div class="blog-sidebar">
									<div class="row">
										<div class="col-md-12 col-sm-6">
											<!-- Blog sidebar page widget -->
											<div class="sidebar-widget">
												<!-- Widget Heading -->
												<h4>Search</h4>
												<!-- search button and input box -->
												<form role="form" class="form-inline">
												<div class="input-group">
												<input type="text" class="form-control" placeholder="Type to search">
												<span class="input-group-btn">
												<button class="btn btn-danger" type="button"><i class="fa fa-search"></i></button>
												</span>
												</div>
												</form><!--/ Form end -->
											</div><!--/ Widget end -->
										</div>
										<div class="col-md-12 col-sm-6">
											<!-- Blog sidebar page widget -->
											<div class="sidebar-widget">
												<!-- Widget Heading -->
												<h4>Categories</h4>
												<!-- Recent post list -->
												<ul class="list-unstyled">
													<li><i class="fa fa-angle-double-right"></i> <a href="#">Face Care</a></li>
													<li><i class="fa fa-angle-double-right"></i> <a href="#">Body & Skin</a></li>
                                                                                                        <li><i class="fa fa-angle-double-right"></i> <a href="#">Oral Care</a></li>
                                                                                                        <li><i class="fa fa-angle-double-right"></i> <a href="#">Hair Care</a></li>
                                                                                                        <li><i class="fa fa-angle-double-right"></i> <a href="#">Personal Hygiene</a></li>
                                                                                                        <li><i class="fa fa-angle-double-right"></i> <a href="#">Health</a></li>
                                                                                                </ul>
											</div><!--/ Widget end -->
										</div>
										<div class="col-md-12 col-sm-6">
											<!-- Blog sidebar page widget -->
											<div class="sidebar-widget">
												<!-- Widget Heading -->
												<h4>Tags</h4>
												<a href="#" class="btn btn-warning btn-sm">Dessert</a>
												<a href="#" class="btn btn-danger btn-sm">Spicy Non-Veg</a>
												<a href="#" class="btn btn-default btn-sm">Drinks</a>
												<a href="#" class="btn btn-success btn-sm">Seafood</a>
												<a href="#" class="btn btn-info btn-sm">Globalist</a>
												<a href="#" class="btn btn-warning btn-sm">Cake</a>
												<a href="#" class="btn btn-success btn-sm">French</a>
												<a href="#" class="btn btn-info btn-sm">Indigent</a>
												<a href="#" class="btn btn-success btn-sm">Strum</a>
												<a href="#" class="btn btn-default btn-sm">Squalor</a>
												<a href="#" class="btn btn-warning btn-sm">Nobelium</a>
											</div><!--/ Widget end -->
										</div>
										<div class="col-md-12 col-sm-6">
											<!-- Blog sidebar page widget -->
											<div class="sidebar-widget">
												<!-- Widget Heading -->
												<h4>Subscribe</h4>
												<!-- Paragraph -->
												<p>Receive all recent updates in recipe, blogs and ingredients.</p>
												<!-- Subscribe form -->
												<form role="form">
                                                                                                        <div class="form-group">
                                                                                                                <input class="form-control" type="text" placeholder="Your name" />
                                                                                                        </div>
                                                                                                        <div class="form-group">
                                                                                                                <input class="form-control" type="email" placeholder="Your email" />
                                                                                                        </div>
                                                                                                        <button class="btn btn-danger" type="button">Subscribe</button>
                                                                                                </form>
											</div><!--/ Widget end -->
										</div>
									</div><!--/ Inner row end -->
								</div><!--/ Page sidebar end -->
							</div>
						</div><!--/ Row end -->
					</div>
				</div>
				
				<!-- Blog End -->
			
				<!-- Showcase Start -->
				
				<div class="showcase">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<!-- Showcase section item -->
								<div class="showcase-item">
									<!-- Image -->
									<img class="img-responsive" src="img/beauty.png" alt="" />
									<!-- Heading -->
									<h3><a href="#">Beauty</a></h3>
									<!-- Paragraph -->
									<p>All you need to know to achieve beauty in the most natural way. Organeek's motto is beauty from the inside out.</p>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<!-- Showcase section item -->
								<div class="showcase-item">
									<!-- Image -->
									<img class="img-responsive" src="img/health2.png" alt="" />
									<!-- Heading -->
									<h3><a href="#">Health</a></h3>
									<!-- Paragraph -->
									<p>Healthiest lifestyle in the palm of your hand. Organeek will ensure to divulge nature's greatest gift.</p>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Showcase End -->
				
			</div><!-- / Inner Page Content End -->	
			
			<!-- Footer Start -->
			
			<div class="footer padd">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-6">
							<!-- Footer widget -->
							<div class="footer-widget">
								<!-- Logo area -->
								<div class="logo">
									<img class="img-responsive" src="img/ologo.png" alt="" />
									<!-- Heading -->
									<h1>Organeek</h1>
								</div>
								<!-- Paragraph -->
								<p>Organeek aspires to be the leading source of natural health and beauty information and promotes wellness through proper utilization of natural resources.</p>
                                                                <h6><a href="general.html">Disclaimer</a></h6>
								<hr />
								<!-- Heading -->
								<h6>Online Payment</h6>
								<!-- Images -->
								<a href="#"><img class="payment img-responsive" src="img/payment/2co.gif" alt="" /></a>
								<a href="#"><img class="payment img-responsive" src="img/payment/authorizenet.gif" alt="" /></a>
								<a href="#"><img class="payment img-responsive" src="img/payment/discover.gif" alt="" /></a>
								<a href="#"><img class="payment img-responsive" src="img/payment/egold.gif" alt="" /></a>
								<a href="#"><img class="payment img-responsive" src="img/payment/mastercard.gif" alt="" /></a>
								<a href="#"><img class="payment img-responsive" src="img/payment/paypal.gif" alt="" /></a>
								<a href="#"><img class="payment img-responsive" src="img/payment/visa.gif" alt="" /></a>
								<a href="#"><img class="payment img-responsive" src="img/payment/worldpay.gif" alt="" /></a>
							</div> <!--/ Footer widget end -->
						</div>
						<div class="col-md-3 col-sm-6">
							<!-- Footer widget -->
							<div class="footer-widget">
								<!-- Heading -->
								<h4>Famous Recipe</h4>
								<!-- Images -->
								<a href="#"><img class="dish img-responsive" src="img/dish/dish1.jpg" alt="" /></a>
								<a href="#"><img class="dish img-responsive" src="img/dish/dish1.jpg" alt="" /></a>
								<a href="#"><img class="dish img-responsive" src="img/dish/dish1.jpg" alt="" /></a>
								<a href="#"><img class="dish img-responsive" src="img/dish/dish1.jpg" alt="" /></a>
								<a href="#"><img class="dish img-responsive" src="img/dish/dish1.jpg" alt="" /></a>
								<a href="#"><img class="dish img-responsive" src="img/dish/dish1.jpg" alt="" /></a>
								<a href="#"><img class="dish img-responsive" src="img/dish/dish1.jpg" alt="" /></a>
								<a href="#"><img class="dish img-responsive" src="img/dish/dish1.jpg" alt="" /></a>
								<a href="#"><img class="dish img-responsive" src="img/dish/dish1.jpg" alt="" /></a>
							</div> <!--/ Footer widget end -->
						</div>
						<div class="clearfix visible-sm"></div>
						<div class="col-md-3 col-sm-6">
							<!-- Footer widget -->
							<div class="footer-widget">
								<!-- Heading -->
								<h4>Join Us Today</h4>
								<!-- Paragraph -->
								<p>Subscribe to receive all the hottest updates in Organeek.</p>
								<!-- Subscribe form -->
								<form role="form">
									<div class="form-group">
										<input class="form-control" type="text" placeholder="Your name" />
									</div>
									<div class="form-group">
										<input class="form-control" type="email" placeholder="Your email" />
									</div>
									<button class="btn btn-danger" type="button">Subscribe</button>
								</form>
							</div> <!--/ Footer widget end -->
						</div>
						<div class="col-md-3 col-sm-6">
							<!-- Footer widget -->
							<div class="footer-widget">
								<!-- Heading -->
								<h4>Contact Us</h4>
								<div class="contact-details">
									<!-- Address / Icon -->
									<i class="fa fa-map-marker br-red"></i> <span>EPV <br/> Taguig City,<br /> Philippines - 1630</span>
									<div class="clearfix"></div>
									<!-- Contact Number / Icon -->
									<i class="fa fa-phone br-green"></i> <span>+63 935.136.3297</span>
									<div class="clearfix"></div>
									<!-- Email / Icon -->
									<i class="fa fa-envelope-o br-lblue"></i> <span><a href="#">admin@organeek.com</a></span>
									<div class="clearfix"></div>
								</div>
								<!-- Social media icon -->
								<div class="social">
									<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
									<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
									<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
									<a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
								</div>
							</div> <!--/ Footer widget end -->
						</div>
					</div>
					<!-- Copyright -->
					<div class="footer-copyright">
						<!-- Paragraph -->
						<p>&copy; Copyright 2014 <a href="#">Organeek</a></p>
					</div>
				</div>
			</div>
			
			<!-- Footer End -->
			
		</div><!-- / Wrapper End -->
		
		
		<!-- Scroll to top -->
		<span class="totop"><a href="#"><i class="fa fa-angle-up"></i></a></span> 
		
		
		
		<!-- Javascript files -->
		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
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
		
		</script>
	</body>	
</html>