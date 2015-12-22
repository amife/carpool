<?php /* Smarty version Smarty-3.1.15, created on 2015-12-16 14:57:30
         compiled from "../templates/feedback.tpl" */ ?>
<?php /*%%SmartyHeaderCode:163120671756716dca948e52-49056814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d959b54fce25dcd6e7bf03d39f59fbdea7565ab' => 
    array (
      0 => '../templates/feedback.tpl',
      1 => 1450266771,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163120671756716dca948e52-49056814',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56716dca956d76_01908954',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56716dca956d76_01908954')) {function content_56716dca956d76_01908954($_smarty_tpl) {?><?php if (!is_callable('smarty_function_t')) include '../functions/function.t.php';
?><?php ob_start();?><?php echo smarty_function_t(array('t'=>'Contact'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('design/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_tmp1), 0);?>


<p><?php echo smarty_function_t(array('t'=>'We recommend to contact us via email to <a href="mailto:support@opencarpool.org">support@opencarpool.org</a>.'),$_smarty_tpl);?>
</p>
<?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
    <div class="row">
      <div class="col-lg-12">
        <p>
          <?php echo smarty_function_t(array('t'=>'Supporters wanted! Developers, marketing pros, legals, Google Transit or Maps freaks, Open Source geeks, 
          translation/localization specialists, Open Street Map gurus, project managers, evangelists and multipliers ... 
          WE NEED YOU! <b><a href="support:mail@opencarpool.org">Join the team!</a></b>'),$_smarty_tpl);?>

        </p>
      </div>
    </div>
<?php }?>
  
<?php echo $_smarty_tpl->getSubTemplate ('design/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
