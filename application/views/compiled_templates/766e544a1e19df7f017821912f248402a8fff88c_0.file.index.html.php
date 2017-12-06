<?php
/* Smarty version 3.1.30, created on 2016-09-14 00:25:34
  from "E:\Xampp\htdocs\polresapps-backend\application\views\main_templates\report\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57d8368ef23667_24357494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '766e544a1e19df7f017821912f248402a8fff88c' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\polresapps-backend\\application\\views\\main_templates\\report\\index.html',
      1 => 1473787533,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57d8368ef23667_24357494 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once 'E:\\Xampp\\htdocs\\polresapps-backend\\application\\third_party\\smarty\\libs\\plugins\\modifier.capitalize.php';
?>
<div class='ui-widget-content ui-corner-all datatables report_view'>
    <h3 class="ui-accordion-header ui-helper-reset ui-state-default form-title">
        <div class='floatL form-title-left'>
            <a href="#">Reports</a>
        </div>
        <div class='clear'></div>
    </h3>
    <div class='form-content form-div'>
        <div>
            <?php $_smarty_tpl->_assignInScope('counter', 0);
?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['report_data']->value, 'values', false, 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value => $_smarty_tpl->tpl_vars['values']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['field']->value == 'id' || $_smarty_tpl->tpl_vars['field']->value == 'id_user') {?>
                    <?php continue 1;?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['field']->value == 'name_member') {?>
                    <?php $_smarty_tpl->_assignInScope('field', 'pengirim');
?>
                <?php }?>
                <?php $_smarty_tpl->_assignInScope('even_odd', 'even');
?>
                <?php if ($_smarty_tpl->tpl_vars['counter']->value%2 == 0) {?>
                    <?php $_smarty_tpl->_assignInScope('even_odd', 'odd');
?>
                <?php }?>
                <?php $_smarty_tpl->_assignInScope('counter', $_smarty_tpl->tpl_vars['counter']->value+1);
?>
                <div class='form-field-box <?php echo $_smarty_tpl->tpl_vars['even_odd']->value;?>
'>
                    <div class='form-display-as-box'>
                        <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['field']->value);?>

                    </div>
                    <div class='form-input-box'>
                        <?php if ($_smarty_tpl->tpl_vars['field']->value == 'image') {?>
                        <a href='<?php echo base_url();?>
assets/uploads/images/<?php echo $_smarty_tpl->tpl_vars['values']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['values']->value;?>
</a>
                        <?php } else { ?>
                        <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['values']->value);?>

                        <?php }?>
                    </div>
                    <div class='clear'></div>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <div class='line-1px'></div>
            <div id='report-error' class='report-div error'></div>
            <div id='report-success' class='report-div success'></div>
        </div>
        <div class='buttons-box'>
            <div class='form-button-box'>
                <input type='button' value='cancel' class='ui-input-button back-to-list' id="cancel-button" />
            </div>
            <div class='clear'></div>
        </div>
    </div>
</div>
<p>&nbsp;</p>
<h4 class='report_view'>Tanggapan</h4>
<style>
    .report_view{
        margin : 10px;
    }
</style><?php }
}
