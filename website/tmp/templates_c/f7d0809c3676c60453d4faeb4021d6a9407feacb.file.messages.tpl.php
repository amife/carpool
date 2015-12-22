<?php /* Smarty version Smarty-3.1.15, created on 2015-12-16 13:15:08
         compiled from "../templates/parts/messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1633331857567155cc213f51-27376182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7d0809c3676c60453d4faeb4021d6a9407feacb' => 
    array (
      0 => '../templates/parts/messages.tpl',
      1 => 1450266771,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1633331857567155cc213f51-27376182',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msgs' => 0,
    'msg' => 0,
    'errors' => 0,
    'err' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_567155cc21e1a4_69060954',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567155cc21e1a4_69060954')) {function content_567155cc21e1a4_69060954($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['msgs']->value)) {?>
  <div class="alert alert-success">
    <ul>
      <?php  $_smarty_tpl->tpl_vars['msg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['msg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['msgs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->key => $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->_loop = true;
?>
      <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
      <?php } ?>
    </ul>
  </div>
<?php }?>
<?php if (count($_smarty_tpl->tpl_vars['errors']->value)) {?>
  <div class="alert alert-danger">
    <ul>
  <?php  $_smarty_tpl->tpl_vars['err'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['err']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['err']->key => $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->_loop = true;
?>
    <li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
    <?php } ?>
    </ul>
  </div>
<?php }?><?php }} ?>
