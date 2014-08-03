<?php if($_SESSION['role']=='admin'){ ?>
<ul class="sidebar-menu">
    <li class="active">
        <a href="<?php echo $base_url ?>admin/index.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
    </li>                        
    <li class="treeview">
        <a href="#">
            <i class="fa fa-bar-chart-o"></i>
            <span>Charts</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo $base_url ?>admin/pages/charts/morris.html"><i class="fa fa-angle-double-right"></i> Morris</a></li>
            <li><a href="<?php echo $base_url ?>admin/pages/charts/flot.html"><i class="fa fa-angle-double-right"></i> Flot</a></li>
            <li><a href="<?php echo $base_url ?>admin/pages/charts/inline.html"><i class="fa fa-angle-double-right"></i> Inline charts</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Blog</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo $base_url ?>admin/blogs/add.php"><i class="fa fa-angle-double-right"></i> Add Blog</a></li>
            <li><a href="<?php echo $base_url ?>admin/blogs/index.php"><i class="fa fa-angle-double-right"></i> List of Blogs</a></li>                                
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Recipe</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo $base_url ?>admin/recipes/add.php"><i class="fa fa-angle-double-right"></i> Add Recipe</a></li>
            <li><a href="<?php echo $base_url ?>admin/recipes/index.php"><i class="fa fa-angle-double-right"></i> List of Recipe</a></li>                                
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Users</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo $base_url ?>admin/users/add.php"><i class="fa fa-angle-double-right"></i> Add User</a></li>
            <li><a href="<?php echo $base_url ?>admin/users/index.php"><i class="fa fa-angle-double-right"></i> List of Users</a></li>                                
        </ul>
    </li>
                        
    <li class="treeview">
        <a href="#">
            <i class="fa fa-table"></i> <span>Orders</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html"><i class="fa fa-angle-double-right"></i> Add Order</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-angle-double-right"></i> List of Order</a></li>
        </ul>
    </li>
                        
</ul>
<?php }elseif($_SESSION['role']=='Contributor'){ ?>
<ul class="sidebar-menu">
    
    <li class="treeview">
        <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Blog</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo $base_url ?>admin/blogs/add.php"><i class="fa fa-angle-double-right"></i> Add Blog</a></li>
            <li><a href="<?php echo $base_url ?>admin/blogs/index.php"><i class="fa fa-angle-double-right"></i> List of Blogs</a></li>                                
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Recipe</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo $base_url ?>admin/recipes/add.php"><i class="fa fa-angle-double-right"></i> Add Recipe</a></li>
            <li><a href="<?php echo $base_url ?>admin/recipes/index.php"><i class="fa fa-angle-double-right"></i> List of Recipe</a></li>                                
        </ul>
    </li>
                        
</ul>
<?php } ?>
