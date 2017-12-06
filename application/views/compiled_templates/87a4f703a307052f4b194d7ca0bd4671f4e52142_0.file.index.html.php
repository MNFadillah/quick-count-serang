<?php
/* Smarty version 3.1.30, created on 2016-09-08 18:20:47
  from "/home/bospolre/public_html/application/views/main_templates/configs/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57d1498f116198_06629206',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87a4f703a307052f4b194d7ca0bd4671f4e52142' => 
    array (
      0 => '/home/bospolre/public_html/application/views/main_templates/configs/index.html',
      1 => 1471620262,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57d1498f116198_06629206 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-md-12">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Setting</h3>
        </div>
        <div class="panel-body">
            <div class="form-group col-md-12">
                <label class="control-label col-sm-2">Info Satuan Narkoba</label>
                <div class="col-sm-10">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <?php echo $_smarty_tpl->tpl_vars['info_satnarkoba']->value;?>

                        </div>
                    </div>
                    <div>
                        <a href="<?php echo base_url();?>
configs/index/edit/1">
                            <button type="button" class="btn btn-default btn-flat">
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-12">
                <label class="control-label col-sm-2">Info Satuan Sabhara</label>
                <div class="col-sm-10">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <?php echo $_smarty_tpl->tpl_vars['info_satsabhara']->value;?>

                        </div>
                    </div>
                    <div>
                        <a href="<?php echo base_url();?>
configs/index/edit/2">
                            <button type="button" class="btn btn-default btn-flat">
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-12">
                <label class="control-label col-sm-2">Info Satuan Intelkam</label>
                <div class="col-sm-10">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <?php echo $_smarty_tpl->tpl_vars['info_satintelkam']->value;?>

                        </div>
                    </div>
                    <div>
                        <a href="<?php echo base_url();?>
configs/index/edit/3">
                            <button type="button" class="btn btn-default btn-flat">
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-12">
                <label class="control-label col-sm-2">Info Satuan Binmas</label>
                <div class="col-sm-10">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <?php echo $_smarty_tpl->tpl_vars['info_satbinmas']->value;?>

                        </div>
                    </div>
                    <div>
                        <a href="<?php echo base_url();?>
configs/index/edit/4">
                            <button type="button" class="btn btn-default btn-flat">
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-12">
                <label class="control-label col-sm-2">Info Satuan Lalu Lintas</label>
                <div class="col-sm-10">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <?php echo $_smarty_tpl->tpl_vars['info_satlantas']->value;?>

                        </div>
                    </div>
                    <div>
                        <a href="<?php echo base_url();?>
configs/index/edit/5">
                            <button type="button" class="btn btn-default btn-flat">
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-12">
                <label class="control-label col-sm-2">Nama Website</label>
                <div class="col-sm-10">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <?php echo $_smarty_tpl->tpl_vars['website_name']->value;?>

                        </div>
                    </div>
                    <div>
                        <a href="<?php echo base_url();?>
configs/index/edit/6">
                            <button type="button" class="btn btn-default btn-flat">
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-12">
                <label class="control-label col-sm-2" for="nama">Logo</label>
                <div class="col-xs-6 col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="<?php echo assets_url();
echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="Logo Image">
                    </a>
                </div>
                <div>
                    <a href="<?php echo base_url();?>
configs/index/edit/7">
                        <button type="button" class="btn btn-default btn-flat">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
