<?php /* Smarty version Smarty-3.1.7, created on 2024-11-24 13:12:16
         compiled from "/var/www/html/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/SalutationDetailView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:669745238674326308d68b4-66429456%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8b71ce2735e332f87d56d7c5c5095c0bdf7509f' => 
    array (
      0 => '/var/www/html/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/SalutationDetailView.tpl',
      1 => 1731695518,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '669745238674326308d68b4-66429456',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECORD' => 0,
    'FIELD_MODEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_674326308d90b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_674326308d90b')) {function content_674326308d90b($_smarty_tpl) {?>


<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('salutationtype');?>


<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId(),$_smarty_tpl->tpl_vars['RECORD']->value);?>
<?php }} ?>