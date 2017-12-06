<?php
/* Smarty version 3.1.30, created on 2017-12-06 22:10:24
  from "E:\xampp\htdocs\serang\application\views\main_templates\dashboard\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2808600d2269_68317203',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dedbe07cb13fd178e704513c454df029dcb45465' => 
    array (
      0 => 'E:\\xampp\\htdocs\\serang\\application\\views\\main_templates\\dashboard\\index.html',
      1 => 1511581858,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2808600d2269_68317203 (Smarty_Internal_Template $_smarty_tpl) {
?>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $_smarty_tpl->tpl_vars['kecamatanCount']->value;?>
</h3>

              <p>Kecamatan</p>
            </div>
            <div class="icon">
              <i class="fa fa-home"></i>
            </div>
            <a href="<?php echo base_url();?>
kecamatan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $_smarty_tpl->tpl_vars['desaCount']->value;?>
</h3>

              <p>Desa</p>
            </div>
            <div class="icon">
              <i class="fa fa-envelope"></i>
            </div>
            <a href="<?php echo base_url();?>
desa" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $_smarty_tpl->tpl_vars['cadesCount']->value;?>
</h3>

              <p>Calon Kades</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?php echo base_url();?>
cades" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $_smarty_tpl->tpl_vars['panitiaCount']->value;?>
</h3>

              <p>Panitia</p>
            </div>
            <div class="icon">
              <i class="fa fa-warning"></i>
            </div>
            <a href="<?php echo base_url();?>
panitia" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-maroon">
            <div class="inner">
              <h3><?php echo $_smarty_tpl->tpl_vars['qcCount']->value;?>
</h3>

              <p>Quick Count</p>
            </div>
            <div class="icon">
              <i class="fa fa-file-text"></i>
            </div>
            <a href="<?php echo base_url();?>
count" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        
        <!-- ./col -->
<?php }
}
