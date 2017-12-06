<?php
/* Smarty version 3.1.30, created on 2016-09-11 11:05:44
  from "E:\Xampp\htdocs\polresapps-backend\application\views\main_templates\layout.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57d4d8180f6410_84647730',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b36956aa881d62f40fdf1357dfb23d151ca3076b' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\polresapps-backend\\application\\views\\main_templates\\layout.html',
      1 => 1473566740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57d4d8180f6410_84647730 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo assets_url();?>
bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo assets_url();?>
dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo assets_url();?>
dist/css/skins/skin-blue.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo assets_url();?>
plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo assets_url();?>
plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo assets_url();?>
plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo assets_url();?>
plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo assets_url();?>
plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo assets_url();?>
plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  
  <?php if (isset($_smarty_tpl->tpl_vars['gc_data']->value->css_files)) {?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gc_data']->value->css_files, 'file');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
?>
  <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
" />
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  <?php }?>
  
  <?php if (isset($_smarty_tpl->tpl_vars['map']->value['js'])) {?>
  <?php echo $_smarty_tpl->tpl_vars['map']->value['js'];?>

  <?php }?>
  

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>K</b>DR</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Polres</b>Kediri</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="Image">
              <span class="hidden-xs"><?php echo $_smarty_tpl->tpl_vars['user_active']->value->first_name;?>
 <?php echo $_smarty_tpl->tpl_vars['user_active']->value->last_name;?>
</span> 
              <!--<span class="hidden-xs">Administrator</span>tak ganti admin, belum tau ngambil seesion nya-->
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                    <?php echo $_smarty_tpl->tpl_vars['user_active']->value->first_name;?>
 <?php echo $_smarty_tpl->tpl_vars['user_active']->value->last_name;?>
 - <?php echo $_smarty_tpl->tpl_vars['user_active']->value->company;?>

                    <!--    Administrator-->
                </p>
              </li>
              <li class="user-footer">
                  <a href="<?php echo base_url();?>
auth/logout" class="btn btn-default btn-flat btn-block">Sign out</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <aside class="main-sidebar">
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['dashboard_menu']->value)) {?>active<?php }?>">
          <a href="<?php echo base_url();?>
dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['places_menu']->value)) {?>active<?php }?> treeview">
          <a href="#">
            <i class="fa fa-map-o"></i>
            <span>Places</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>
places/index/add"><i class="fa fa-circle-o"></i> Add Place</a></li>
            <li><a href="<?php echo base_url();?>
places"><i class="fa fa-circle-o"></i> List Place</a></li>
          </ul>
        </li>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['places_category_menu']->value)) {?>active<?php }?> treeview">
          <a href="#">
            <i class="fa fa-map-o"></i>
            <span>Places Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>
places/category/add"><i class="fa fa-circle-o"></i> Add Place Category</a></li>
            <li><a href="<?php echo base_url();?>
places/category"><i class="fa fa-circle-o"></i> List Place Category</a></li>
          </ul>
        </li>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['users_menu']->value)) {?>active<?php }?> treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>
users/index/add"><i class="fa fa-circle-o"></i> Add User</a></li>
            <li><a href="<?php echo base_url();?>
users"><i class="fa fa-circle-o"></i> List Users</a></li>
          </ul>
        </li>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['message_menu']->value)) {?>active<?php }?> treeview">
          <a href="#">
            <i class="fa fa-envelope-o"></i>
            <span>Messages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>
messages/index/add"><i class="fa fa-circle-o"></i> Send Message</a></li>
            <li><a href="<?php echo base_url();?>
messages/broadcast/add"><i class="fa fa-circle-o"></i> Broadcast Message</a></li>
            <li><a href="<?php echo base_url();?>
messages"><i class="fa fa-circle-o"></i> List Messages</a></li>
          </ul>
        </li>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['qresponse_menu']->value)) {?>active<?php }?> treeview">
          <a href="<?php echo base_url();?>
qresponses">
            <i class="fa fa-bolt"></i>
            <span>Quick Response</span>
          </a>
        </li>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['report_menu']->value)) {?>active<?php }?> treeview">
          <a href="<?php echo base_url();?>
reports">
            <i class="fa fa-bug"></i>
            <span>Problem Reports</span>
          </a>
        </li>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['emags_menu']->value)) {?>active<?php }?> treeview">
          <a href="#">
            <i class="fa fa-file-o"></i>
            <span>E-Magazine</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>
emags/index/add"><i class="fa fa-circle-o"></i> Add Magazine</a></li>
            <li><a href="<?php echo base_url();?>
emags"><i class="fa fa-circle-o"></i> List Magazine</a></li>
          </ul>
        </li>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['services_menu']->value)) {?>active<?php }?> treeview">
          <a href="#">
            <i class="fa fa-globe"></i>
            <span>Pelayanan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>
services/index/binmas"><i class="fa fa-circle-o"></i> List Binmas Requests</a></li>
            <li><a href="<?php echo base_url();?>
services/index/training"><i class="fa fa-circle-o"></i> List Training Requests</a></li>
            <li><a href="<?php echo base_url();?>
services/sim"><i class="fa fa-circle-o"></i>Pembuatan SIM</a></li>
            <li><a href="<?php echo base_url();?>
services/skck"><i class="fa fa-circle-o"></i>Pembuatan SKCK</a></li>
          </ul>
        </li>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['cctv_menu']->value)) {?>active<?php }?> treeview">
          <a href="<?php echo base_url();?>
cctv">
            <i class="fa fa-film"></i>
            <span>CCTV</span>
          </a>
        </li>
        <li class="header">ADMINISTRATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Admins</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>
admin/index/add"><i class="fa fa-circle-o"></i> Add Admin</a></li>
            <li><a href="<?php echo base_url();?>
admin"><i class="fa fa-circle-o"></i> List Admins</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="<?php echo base_url();?>
configs">
            <i class="fa fa-cogs"></i>
            <span>Settings</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php if (isset($_smarty_tpl->tpl_vars['page']->value)) {
echo $_smarty_tpl->tpl_vars['page']->value;
}?>
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>
dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?php if (isset($_smarty_tpl->tpl_vars['page']->value)) {
echo $_smarty_tpl->tpl_vars['page']->value;
}?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
      <?php if (isset($_smarty_tpl->tpl_vars['main_content']->value)) {?>
        <?php echo $_smarty_tpl->tpl_vars['main_content']->value;?>

      <?php }?>
      <?php if (isset($_smarty_tpl->tpl_vars['gc_data']->value->output)) {?>
        <section class="col-lg-12">
          <?php echo $_smarty_tpl->tpl_vars['gc_data']->value->output;?>

        </section>
      <?php }?>
      <?php if (isset($_smarty_tpl->tpl_vars['map']->value['html'])) {?>
      <section class="col-lg-12">
          <h3>Peta Persebaran <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</h3>
          <?php echo $_smarty_tpl->tpl_vars['map']->value['html'];?>

      </section>
      <?php }?>
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.6
    </div>
    <strong>Copyright &copy; 2016 <a href="#">Agra Nirwasita Technology</a>.</strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->
<!-- jQuery 2.2.3 -->
<?php echo '<script'; ?>
 src="<?php echo assets_url();?>
plugins/jQuery/jquery-2.2.3.min.js"><?php echo '</script'; ?>
>
<!-- jQuery UI 1.11.4 -->
<?php echo '<script'; ?>
 src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"><?php echo '</script'; ?>
>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<?php echo '<script'; ?>
>
  $.widget.bridge('uibutton', $.ui.button);
<?php echo '</script'; ?>
>
<!-- Bootstrap 3.3.6 -->

<?php echo '<script'; ?>
 src="<?php echo assets_url();?>
bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!-- Morris.js charts -->
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo assets_url();?>
plugins/morris/morris.min.js"><?php echo '</script'; ?>
>
<!-- Sparkline -->
<?php echo '<script'; ?>
 src="<?php echo assets_url();?>
plugins/sparkline/jquery.sparkline.min.js"><?php echo '</script'; ?>
>
<!-- jvectormap -->
<?php echo '<script'; ?>
 src="<?php echo assets_url();?>
plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo assets_url();?>
plugins/jvectormap/jquery-jvectormap-world-mill-en.js"><?php echo '</script'; ?>
>
<!-- jQuery Knob Chart -->
<?php echo '<script'; ?>
 src="<?php echo assets_url();?>
plugins/knob/jquery.knob.js"><?php echo '</script'; ?>
>
<!-- daterangepicker -->
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo assets_url();?>
plugins/daterangepicker/daterangepicker.js"><?php echo '</script'; ?>
>
<!-- datepicker -->
<?php echo '<script'; ?>
 src="<?php echo assets_url();?>
plugins/datepicker/bootstrap-datepicker.js"><?php echo '</script'; ?>
>
<!-- Bootstrap WYSIHTML5 -->
<?php echo '<script'; ?>
 src="<?php echo assets_url();?>
plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"><?php echo '</script'; ?>
>
<!-- Slimscroll -->
<?php echo '<script'; ?>
 src="<?php echo assets_url();?>
plugins/slimScroll/jquery.slimscroll.min.js"><?php echo '</script'; ?>
>
<!-- FastClick -->
<?php echo '<script'; ?>
 src="<?php echo assets_url();?>
plugins/fastclick/fastclick.js"><?php echo '</script'; ?>
>

<!-- Grocery Crud -->
  <?php if (isset($_smarty_tpl->tpl_vars['gc_data']->value->js_files)) {?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gc_data']->value->js_files, 'file');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
?>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
"><?php echo '</script'; ?>
>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  <?php }?>
<!-- AdminLTE App -->
<?php echo '<script'; ?>
 src="<?php echo assets_url();?>
dist/js/app.min.js"><?php echo '</script'; ?>
>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<?php echo '<script'; ?>
 src="<?php echo assets_url();?>
dist/js/pages/dashboard.js"><?php echo '</script'; ?>
>
<!-- AdminLTE for demo purposes -->
<?php echo '<script'; ?>
 src="<?php echo assets_url();?>
dist/js/demo.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
