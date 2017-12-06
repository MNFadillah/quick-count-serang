<?php
/* Smarty version 3.1.30, created on 2017-11-24 01:28:21
  from "/Users/rama/Documents/WebProjects/quickcount/application/views/main_templates/layout.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a171345ca98b5_71056088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5d307d26e43afa74e431435841c6b1faf628743' => 
    array (
      0 => '/Users/rama/Documents/WebProjects/quickcount/application/views/main_templates/layout.html',
      1 => 1511461701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a171345ca98b5_71056088 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php if (isset($_smarty_tpl->tpl_vars['website_name']->value)) {
echo $_smarty_tpl->tpl_vars['website_name']->value;
}?> | <?php if (isset($_smarty_tpl->tpl_vars['page']->value)) {
echo $_smarty_tpl->tpl_vars['page']->value;
}?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <link rel="shortcut icon" type="image/png" href="<?php echo assets_url();?>
uploads/images/<?php echo $_smarty_tpl->tpl_vars['website_logo']->value;?>
"/>
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
  <!-- <link rel="stylesheet" href="<?php echo assets_url();?>
plugins/morris/morris.css">-->
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
  <?php echo '<script'; ?>
 src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async='async'><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
    var OneSignal = window.OneSignal || [];
    OneSignal.push(["init", {
      appId: "d2752609-88b4-45b7-a08e-90faf2ee1ce5",
      autoRegister: false, /* Set to true to automatically prompt visitors */
      subdomainName: 'bospolrestakediri.onesignal.com',   
      notifyButton: {
          enable: true /* Set to false to hide */
      }
    }]);
  <?php echo '</script'; ?>
>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url();?>
" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Q</b>C</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>QuickCount</b> Serang</span>
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
              <img src="<?php echo assets_url();?>
uploads/images/<?php echo $_smarty_tpl->tpl_vars['user_active']->value->image;?>
" class="user-image" alt="Image">
              <span class="hidden-xs"><?php echo $_smarty_tpl->tpl_vars['user_active']->value->first_name;?>
 <?php echo $_smarty_tpl->tpl_vars['user_active']->value->last_name;?>
</span> 
              <!--<span class="hidden-xs">Administrator</span>tak ganti admin, belum tau ngambil seesion nya-->
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="<?php echo assets_url();?>
uploads/images/<?php echo $_smarty_tpl->tpl_vars['user_active']->value->image;?>
" class="img-circle" alt="User Image">

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
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['kecamatan_menu']->value)) {?>active<?php }?> treeview">
          <a href="#">
            <i class="fa fa-map-o"></i>
            <span>Kecamatan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>
kecamatan/index/add"><i class="fa fa-circle-o"></i> Add Kecamatan</a></li>
            <li><a href="<?php echo base_url();?>
kecamatan"><i class="fa fa-circle-o"></i> List Kecamatan</a></li>
          </ul>
        </li>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['desa_menu']->value)) {?>active<?php }?> treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Desa</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>
desa/index/add"><i class="fa fa-circle-o"></i> Add Desa</a></li>
            <li><a href="<?php echo base_url();?>
desa"><i class="fa fa-circle-o"></i> List Users</a></li>
          </ul>
        </li>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['cades_menu']->value)) {?>active<?php }?> treeview">
          <a href="#">
            <i class="fa fa-envelope-o"></i>
            <span>Calon Kades</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>
cades/index/add"><i class="fa fa-circle-o"></i> Add Calon Kades</a></li>
            <li><a href="<?php echo base_url();?>
cades"><i class="fa fa-circle-o"></i> List Calon Kades</a></li>
          </ul>
        </li>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['panitia_menu']->value)) {?>active<?php }?> treeview">
          <a href="<?php echo base_url();?>
qresponses">
            <i class="fa fa-bolt"></i>
            <span>Panitia</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>
panitia/index/add"><i class="fa fa-circle-o"></i> Add Panitia</a></li>
            <li><a href="<?php echo base_url();?>
panitia"><i class="fa fa-circle-o"></i> List Panitia</a></li>
          </ul>
        </li>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['tps_menu']->value)) {?>active<?php }?> treeview">
          <a href="<?php echo base_url();?>
reports">
            <i class="fa fa-bug"></i>
            <span>TPS</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>
tps/index/add"><i class="fa fa-circle-o"></i> Add TPS</a></li>
            <li><a href="<?php echo base_url();?>
tps"><i class="fa fa-circle-o"></i> List TPS</a></li>
          </ul>
        </li>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['qc_menu']->value)) {?>active<?php }?> treeview">
          <a href="#">
            <i class="fa fa-globe"></i>
            <span>Quick Count</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <!-- <ul class="treeview-menu">
            <li>
                <a href="<?php echo base_url();?>
services/index/binmas"><i class="fa fa-circle-o"></i> List Binmas Requests
                    <?php if ($_smarty_tpl->tpl_vars['j_pembinaan_new']->value > 0) {?><span class="label bg-green pull-right-container"><?php echo $_smarty_tpl->tpl_vars['j_pembinaan_new']->value;?>
</span><?php }?>
                </a>
                
            </li>
            <li><a href="<?php echo base_url();?>
services/index/training"><i class="fa fa-circle-o"></i> List Training Requests
                    <?php if ($_smarty_tpl->tpl_vars['j_penyuluhan_new']->value > 0) {?><span class="label bg-yellow pull-right-container"><?php echo $_smarty_tpl->tpl_vars['j_penyuluhan_new']->value;?>
</span><?php }?>
                </a>
            </li>
            <li><a href="<?php echo base_url();?>
services/sim"><i class="fa fa-circle-o"></i>Pembuatan SIM
                <?php if ($_smarty_tpl->tpl_vars['j_sim_new']->value > 0) {?><span class="label bg-light-blue pull-right-container"><?php echo $_smarty_tpl->tpl_vars['j_sim_new']->value;?>
</span><?php }?>
                </a>
            </li>
            <li><a href="<?php echo base_url();?>
services/skck"><i class="fa fa-circle-o"></i>Pembuatan SKCK
                    <?php if ($_smarty_tpl->tpl_vars['j_skck_new']->value > 0) {?><span class="label bg-purple pull-right-container"><?php echo $_smarty_tpl->tpl_vars['j_skck_new']->value;?>
</span><?php }?>
                </a>
            </li>
          </ul> -->
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
<!--<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"><?php echo '</script'; ?>
>-->
<!--<?php echo '<script'; ?>
 src="<?php echo assets_url();?>
plugins/morris/morris.min.js"><?php echo '</script'; ?>
>-->
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

<!-- Grocery Crud -->
  <?php if (isset($_smarty_tpl->tpl_vars['gc_data']->value->js_files)) {?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gc_data']->value->js_files, 'file');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
"><?php echo '</script'; ?>
>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  <?php }?>
</body>
</html>
<?php }
}
