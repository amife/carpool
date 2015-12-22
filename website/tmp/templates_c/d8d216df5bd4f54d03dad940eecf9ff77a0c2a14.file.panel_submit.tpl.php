<?php /* Smarty version Smarty-3.1.15, created on 2015-12-16 13:15:54
         compiled from "../templates/parts/panel_submit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88918593567155fa688bb4-75749577%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8d216df5bd4f54d03dad940eecf9ff77a0c2a14' => 
    array (
      0 => '../templates/parts/panel_submit.tpl',
      1 => 1450266771,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88918593567155fa688bb4-75749577',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'symbol' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_567155fa68e662_17974278',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567155fa68e662_17974278')) {function content_567155fa68e662_17974278($_smarty_tpl) {?><div class="form-group">
  <div class="col-lg-offset-2 col-lg-10">
    <button type="submit" class="btn btn-success"><?php if (isset($_smarty_tpl->tpl_vars['symbol']->value)) {?><span class="glyphicon glyphicon-<?php echo $_smarty_tpl->tpl_vars['symbol']->value;?>
"></span> <?php }?><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</button>
  </div>
</div><?php }} ?>
