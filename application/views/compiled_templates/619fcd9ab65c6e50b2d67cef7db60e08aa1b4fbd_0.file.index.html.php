<?php
/* Smarty version 3.1.30, created on 2016-08-23 11:26:36
  from "E:\Xampp\htdocs\polresapps-backend\application\views\main_templates\dashboard\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57bbd07cbc85e3_76954017',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '619fcd9ab65c6e50b2d67cef7db60e08aa1b4fbd' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\polresapps-backend\\application\\views\\main_templates\\dashboard\\index.html',
      1 => 1471859952,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57bbd07cbc85e3_76954017 (Smarty_Internal_Template $_smarty_tpl) {
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
              <h3><?php echo $_smarty_tpl->tpl_vars['j_emag']->value;?>
</h3>

              <p>E-Magazine</p>
            </div>
            <div class="icon">
              <i class="fa fa-file"></i>
            </div>
            <a href="<?php echo base_url();?>
/emags" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
<?php }
}
