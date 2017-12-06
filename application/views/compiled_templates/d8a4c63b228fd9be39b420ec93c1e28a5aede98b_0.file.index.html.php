<?php
/* Smarty version 3.1.30, created on 2016-10-27 21:23:48
  from "E:\Xampp\htdocs\sipongan-backend\application\views\main_templates\dashboard\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58120df4e04b09_13590205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8a4c63b228fd9be39b420ec93c1e28a5aede98b' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\sipongan-backend\\application\\views\\main_templates\\dashboard\\index.html',
      1 => 1477578226,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58120df4e04b09_13590205 (Smarty_Internal_Template $_smarty_tpl) {
?>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $_smarty_tpl->tpl_vars['j_place']->value;?>
</h3>

              <p>Places</p>
            </div>
            <div class="icon">
              <i class="fa fa-home"></i>
            </div>
            <a href="<?php echo base_url();?>
places" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $_smarty_tpl->tpl_vars['j_message']->value;?>
</h3>

              <p>Messages</p>
            </div>
            <div class="icon">
              <i class="fa fa-envelope"></i>
            </div>
            <a href="<?php echo base_url();?>
messages" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $_smarty_tpl->tpl_vars['j_user']->value;?>
</h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?php echo base_url();?>
users" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $_smarty_tpl->tpl_vars['j_qr']->value;?>
</h3>

              <p>Quick Responses</p>
            </div>
            <div class="icon">
              <i class="fa fa-warning"></i>
            </div>
            <a href="<?php echo base_url();?>
qresponses" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-maroon">
            <div class="inner">
              <h3><?php echo $_smarty_tpl->tpl_vars['j_report']->value;?>
</h3>

              <p>Problem Reports</p>
            </div>
            <div class="icon">
              <i class="fa fa-file-text"></i>
            </div>
            <a href="<?php echo base_url();?>
reports" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-olive">
            <div class="inner">
              <h3><?php echo $_smarty_tpl->tpl_vars['j_report']->value;?>
</h3>

              <p>Pelayanan</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="<?php echo base_url();?>
Services" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
<?php }
}
