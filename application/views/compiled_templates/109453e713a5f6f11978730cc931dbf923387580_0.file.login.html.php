<?php
/* Smarty version 3.1.30, created on 2017-11-27 20:51:39
  from "/home/bantenbersatu/public_html/serang/application/views/main_templates/auth/login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1c186bad8834_17178382',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '109453e713a5f6f11978730cc931dbf923387580' => 
    array (
      0 => '/home/bantenbersatu/public_html/serang/application/views/main_templates/auth/login.html',
      1 => 1511769702,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1c186bad8834_17178382 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Quick Count Kabupaten Serang | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <link rel="shortcut icon" type="image/png" href="<?php echo assets_url();?>
uploads/images/logo.png"/>
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
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo assets_url();?>
plugins/iCheck/square/blue.css">

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
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo base_url();?>
"><img src="<?php echo assets_url();?>
uploads/images/logo.png" class="img-responsive" style="width:60%;margin:0 auto;" /></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg"><?php echo lang('login_subheading');?>
</p>
    <?php echo form_open("auth");?>

      <div class="form-group has-feedback">
        <input type="email" name="identity" id="identity" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <?php echo form_checkbox('remember','1',FALSE,'id="remember"');?>
 Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    <?php echo form_close();?>


    <a href="forgot_password">I forgot my password</a><br>
    <!-- <a href="register.html" class="text-center">Register a new membership</a> -->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<?php echo '<script'; ?>
 src="<?php echo assets_url();?>
plugins/jQuery/jquery-2.2.3.min.js"><?php echo '</script'; ?>
>
<!-- Bootstrap 3.3.6 -->
<?php echo '<script'; ?>
 src="<?php echo assets_url();?>
bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!-- iCheck -->
<?php echo '<script'; ?>
 src="<?php echo assets_url();?>
plugins/iCheck/icheck.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
