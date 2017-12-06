<?php
/* Smarty version 3.1.30, created on 2016-09-13 23:47:15
  from "E:\Xampp\htdocs\polresapps-backend\application\views\main_templates\report\index.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57d82d9367b8b1_88010867',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a34ff8d073ade23b71924c2f2b9434a27ffc316' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\polresapps-backend\\application\\views\\main_templates\\report\\index.php',
      1 => 1473785199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57d82d9367b8b1_88010867 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class='ui-widget-content ui-corner-all datatables'>
    <h3 class="ui-accordion-header ui-helper-reset ui-state-default form-title">
        <div class='floatL form-title-left'>
            <a href="#">Reports</a>
        </div>
        <div class='clear'></div>
    </h3>
    <div class='form-content form-div'>
        <div>
            <?php echo '<?php
            ';?>$counter = 0;
            foreach ($report_data as $field => $values) {
                $even_odd = $counter % 2 == 0 ? 'odd' : 'even';
                $counter++;
                <?php echo '?>';?>
                <div class='form-field-box <?php echo '<?php ';?>echo $even_odd <?php echo '?>';?>'>
                    <div class='form-display-as-box'>
                        <?php echo '<?php ';?>echo $field;<?php echo '?>';?> :
                    </div>
                    <div class='form-input-box'>
                        <?php echo '<?php ';?>echo $values; <?php echo '?>';?>
                    </div>
                    <div class='clear'></div>
                </div>
            <?php echo '<?php ';?>} <?php echo '?>';?>
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
</div><?php }
}
