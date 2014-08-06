    <div class="col-md-3 col-sm-12">
        <!-- Search Sidebar Start-->
                <div class="sidebar-widget padd4">
                    <!-- search button and input box -->
                        <form role="form" class="form-inline">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search Recipe...">
                                <span class="input-group-btn">
                                    <button class="btn btn-danger" type="button"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </form><!--/ Form end -->
                </div>
                <!--//Search Sidebar//-->

                <!-- Category Sidebar-->
                <div class="category">
                    <div class="category-text">
                    Categories
                    </div>
                </div>
                <br>
                
                    <ul class="nav nav-list primary">
                        <li>
                            <a data-toggle="collapse" data-target="#beautyMenu"> 
                                <i class="fa fa-plus"></i>Beauty
                            </a>
                            
                            <ul style="list-style: none;" class="collapse nav" id="beautyMenu">
                                <li><a href="<?php echo $base_url ?>blog/beauty"><i class="fa fa-chevron-right"></i>  Body & Skin Care</a></li>
                                <li><a href="<?php echo $base_url ?>blog/beauty"><i class="fa fa-chevron-right"></i>  Eye Care</a></li>
                                <li><a href="<?php echo $base_url ?>blog/beauty"><i class="fa fa-chevron-right"></i>  Face Care</a></li>
                                <li><a href="<?php echo $base_url ?>blog/beauty"><i class="fa fa-chevron-right"></i>  Hair</a></li>
                                <li><a href="<?php echo $base_url ?>blog/beauty"><i class="fa fa-chevron-right"></i>  Hands & Feet</a></li>
                                <li><a href="<?php echo $base_url ?>blog/beauty"><i class="fa fa-chevron-right"></i>  Oral Care</a></li>
                            </ul>
                        </li>
                        <li>
                            <a data-toggle="collapse" data-target="#wellnessMenu">
                             <i class="fa fa-plus"></i>Wellness
                            </a>
                            
                            <ul style="list-style: none;" class="collapse nav" id="wellnessMenu">
                                <li><a href="<?php echo $base_url ?>blog/wellness"><i class="fa fa-chevron-right"></i>  Body & Skin Care</a></li>
                                <li><a href="<?php echo $base_url ?>blog/wellness"><i class="fa fa-chevron-right"></i>  Exercise</a></li>
                                <li><a href="<?php echo $base_url ?>blog/wellness"><i class="fa fa-chevron-right"></i>  Eye Care</a></li>
                                <li><a href="<?php echo $base_url ?>blog/wellness"><i class="fa fa-chevron-right"></i>  Face Care</a></li>
                                <li><a href="<?php echo $base_url ?>blog/wellness"><i class="fa fa-chevron-right"></i>  Hair</a></li>
                                <li><a href="<?php echo $base_url ?>blog/wellness"><i class="fa fa-chevron-right"></i>  Hands & Feet</a></li>
                                <li><a href="<?php echo $base_url ?>blog/wellness"><i class="fa fa-chevron-right"></i>  Health</a></li>
                                <li><a href="<?php echo $base_url ?>blog/wellness"><i class="fa fa-chevron-right"></i>  Oral Care</a></li>
                                <li><a href="<?php echo $base_url ?>blog/wellness"><i class="fa fa-chevron-right"></i>  Personal Hygiene</a></li>
                            </ul>
                        </li>
                        <li>
                            <a data-toggle="collapse" data-target="#homeMenu">
                             <i class="fa fa-plus"></i>Natural Home
                            </a>
                            
                            <ul style="list-style: none;" class="collapse nav" id="homeMenu">
                                <li><a href="<?php echo $base_url ?>blog/naturalhome"><i class="fa fa-chevron-right"></i>Gardening</a></li>
                                <li><a href="<?php echo $base_url ?>blog/naturalhome"><i class="fa fa-chevron-right"></i>Household Products</a></li>
                                <li><a href="<?php echo $base_url ?>blog/naturalhome"><i class="fa fa-chevron-right"></i>Kitchen</a></li>
                            </ul>
                        </li>
                    </ul>
                <!--//Category Sidebar//-->

                <!-- Tab Sidebar -->
                <div class="category">
                    <div class="category-text">
                    Recipes & Tags
                    </div>
                </div>
                <br>

                <div class="tabs">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#popularPosts" data-toggle="tab"><i class="fa fa-star">&nbsp;&nbsp;</i>Popular</a></li>
                        <li><a href="#recentPosts" data-toggle="tab"><i class="fa fa-cutlery">&nbsp;&nbsp;</i></i>Recent</a></li>
                        <li><a href="#tags" data-toggle="tab"><i class="fa fa-tag">&nbsp;&nbsp;</i></i>Tags</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="popularPosts">
                            <ul class="simple-post-list">
                                <li>
                                    <div class="post-image">
                                        <a href="#"><img class=" imgs-thumbnail img-responsive" src="<?php echo $base_url ?>img/dish/dish2.jpg" alt="" /></a>
                                    </div>
                                    <div class="p">
                                        <a href="recipe-single.html">Why you should not use soap with Triclosan</a>

                                    </div>
                                </li>
                                <li>
                                    <div class="post-image">
                                        <a href="#"><img class=" imgs-thumbnail img-responsive" src="<?php echo $base_url ?>img/toothpaste.jpg" alt="" /></a>
                                    </div>
                                    <div class="post-info">
                                        <a href="recipe-single.html">What does FDA says about soap with Triclosan and SLS</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-image">
                                        <a href="#"><img class=" imgs-thumbnail img-responsive" src="<?php echo $base_url ?>img/dish/dish2.jpg" alt="" /></a>
                                    </div>
                                    <div class="post-info">
                                        <a href="recipe-single.html">Vitae Nibh Un Odiosters</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-image">
                                        <a href="#"><img class=" imgs-thumbnail img-responsive" src="<?php echo $base_url ?>img/dish/dish1.jpg" alt="" /></a>
                                    </div>
                                    <div class="post-info">
                                        <a href="recipe-single.html">Vitae Nibh Un Odiosters</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-image">
                                        <a href="#"><img class=" imgs-thumbnail img-responsive" src="<?php echo $base_url ?>img/dish/dish2.jpg" alt="" /></a>
                                    </div>
                                    <div class="post-info">
                                        <a href="recipe-single.html">Vitae Nibh Un Odiosters</a>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-pane" id="recentPosts">
                            <ul class="simple-post-list">
                                <li>
                                    <div class="post-image">
                                        <a href="#"><img class=" imgs-thumbnail img-responsive" src="<?php echo $base_url ?>img/dish/dish2.jpg" alt="" /></a>
                                    </div>
                                    <div class="post-info">
                                        <a href="recipe-single.html">Nullam Vitae Nibh Un Odiosters</a>

                                    </div>
                                </li>
                                <li>
                                    <div class="post-image">
                                        <a href="#"><img class=" imgs-thumbnail img-responsive" src="<?php echo $base_url ?>img/dish/dish1.jpg" alt="" /></a>
                                    </div>
                                    <div class="post-info">
                                        <a href="recipe-single.html">Vitae Nibh Un Odiosters</a>
                                    </div>
                                </li>   
                            </ul>
                        </div>
                        <div class="tab-pane" id="tags">
                            <div class="sidebar-block sidebar-content tags">
                                        <a href="#">Dessert</a>
                                        <a href="#">Dessert</a>
                                        <a href="#">Dessert</a>
                                        <a href="#">Dessert</a>
                                        <a href="#">Dessert</a>
                                        <a href="#">Dessert</a>
                                        <a href="#">Dessert</a>
                                        <a href="#">Dessert</a>
                                        <a href="#">Dessert</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Random Recipe-->
                <div id="Awesome" class="anim750">
                    <div class="reveal circle_wrapper">
                        <div class="circle"> 
                            <a href="<?php echo $base_url ?>recipe/all"> CLICK ME! </a>
                        </div>
                    </div>

                    <div class="sticky anim750">
                        <div class="front circle_wrapper anim750">
                            <div class="circle anim750"></div>
                        </div>
                    </div>


                    <h4>Random Recipe</h4>

                    <div class="sticky anim750">
                        <div class="back circle_wrapper anim750">
                            <div class="circle anim750"></div>
                        </div>
                    </div>
                </div>
                <!--//Random Recipe//-->
            </div>
