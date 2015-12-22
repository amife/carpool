<?php /* Smarty version Smarty-3.1.15, created on 2015-12-16 13:15:54
         compiled from "../templates/parts/info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:659334576567155fa6847d1-58137783%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '258cf5793ae5113e8e0984bc1a8f2de8c2b0ebaa' => 
    array (
      0 => '../templates/parts/info.tpl',
      1 => 1450266771,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '659334576567155fa6847d1-58137783',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_567155fa687576_99467964',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567155fa687576_99467964')) {function content_567155fa687576_99467964($_smarty_tpl) {?>  <span class="form-control-static" data-trigger="hover click" data-toggle="popover" data-placement="right" data-html="true" data-content="<?php echo $_smarty_tpl->tpl_vars['info']->value;?>
">
    <span class="glyphicon glyphicon-info-sign" ></span>
  </span>
<?php }} ?>
