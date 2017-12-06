<?php
/* Smarty version 3.1.30, created on 2017-11-24 01:03:59
  from "/Users/rama/Documents/WebProjects/quickcount/application/views/main_templates/dashboard/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a170d8f547534_83023307',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0c17b387f45f5c2594454a7817e4d2e79be630e' => 
    array (
      0 => '/Users/rama/Documents/WebProjects/quickcount/application/views/main_templates/dashboard/index.html',
      1 => 1511460224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a170d8f547534_83023307 (Smarty_Internal_Template $_smarty_tpl) {
?>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $_smarty_tpl->tpl_vars['j_place']->value;?>
</h3>

              <p>Kecamatan</p>
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

              <p>Desa</p>
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

              <p>Calon Kades</p>
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

              <p>Panitia</p>
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

              <p>Quick Count</p>
            </div>
            <div class="icon">
              <i class="fa fa-file-text"></i>
            </div>
            <a href="<?php echo base_url();?>
reports" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        
        <!-- ./col -->
<?php }
}
