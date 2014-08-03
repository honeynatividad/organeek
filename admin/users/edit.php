<?php
session_start();
include_once '../class/class_admin.php';
include_once '../include/config.php';
$admin = new Admin();
$id = $_GET['id'];
$admin->adminData($id);
if(!isset($_SESSION['username'])){
    header("Location: ../login.php");
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $admin->admin_id = mysql_escape_string($_POST['admin_id']);
    $admin->username = mysql_escape_string($_POST['username']);
    $admin->email_add = mysql_escape_string($_POST['email_add']);
    $admin->role = mysql_escape_string($_POST['role']);
    $admin->status = mysql_escape_string($_POST['status']);
    $admin->adminEdit();
}


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Organeek | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="../css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- DATA TABLES -->
        <link href="../css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="../css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="<?php echo $base_url."admin/index.php" ?>" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Organeek
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <?php include('../rightsidemenu.php'); ?>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, <?php echo $_SESSION['username'] ?></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <?php include('../leftsidemenu.php'); ?>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Admin
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo $base_url ?>admin/index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?php echo $base_url ?>admin/users/index.php"><i class="fa fa-dashboard"></i> Admin</a></li>
                        <li class="active">Edit</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <div class="box">
                                <div class="box-header">
                                    
                                </div><!-- /.box-header -->
                                <form role="form" action="edit.php" method="POST">
                                    <input type="hidden" name="admin_id" value="<?php echo $id; ?>">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Username</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="username" value="<?php echo $admin->username ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" name="email_add" value="<?php echo $admin->email_add ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Role</label>
                                            <select class="form-control" name="role">
                                                <option value="<?php echo $admin->role ?>"><?php echo $admin->role ?></option>
                                                <option value="Admin">Admin</option>
                                                <option value="Contributor">Contributor</option>
                                                <option value="Editor">Editor</option>
                                                <option value="User">User</option>
                                                
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Staus</label>
                                            <select class="form-control" name="status">
                                                <option value="<?php echo $admin->status ?>">
                                                    <?php 
                                                    if($admin->status==1){
                                                        echo 'Active';
                                                    }else{
                                                        echo 'Not Active';
                                                    }
                                                     ?></option>
                                                
                                                <option value="1">Active</option>
                                                <option value="0">Not Active</option>
                                                
                                            </select>
                                        </div>
                                        
                                        
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <!-- DATA TABES SCRIPT -->
        <script src="../js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="../js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="../js/AdminLTE/app.js" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../js/AdminLTE/demo.js" type="text/javascript"></script>
        <!-- page script -->
        <script type="text/javascript">
            $(function() {
                $("#example1").dataTable();
                $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
            });
        </script>

    </body>
</html>