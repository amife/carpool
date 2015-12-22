<?php /* Smarty version Smarty-3.1.15, created on 2015-12-16 13:15:54
         compiled from "../templates/parts/panel_start.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127909649567155fa611ab3-56045801%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '515f5e5d66d75b8ffc1a068e9c8a10faf8e46446' => 
    array (
      0 => '../templates/parts/panel_start.tpl',
      1 => 1450266771,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127909649567155fa611ab3-56045801',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hidden' => 0,
    'id' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_567155fa639bb6_21071445',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567155fa639bb6_21071445')) {function content_567155fa639bb6_21071445($_smarty_tpl) {?><div class="row"<?php if (isset($_smarty_tpl->tpl_vars['hidden']->value)&&$_smarty_tpl->tpl_vars['hidden']->value) {?> style="display:none"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['id']->value)&&$_smarty_tpl->tpl_vars['id']->value) {?> id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"<?php }?>>
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
      </div>
      <div class="panel-body"><?php }} ?>
