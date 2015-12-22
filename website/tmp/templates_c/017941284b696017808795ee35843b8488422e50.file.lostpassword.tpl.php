<?php /* Smarty version Smarty-3.1.15, created on 2015-12-16 14:57:28
         compiled from "../templates/lostpassword.tpl" */ ?>
<?php /*%%SmartyHeaderCode:163853487156716dc85ff2b4-48088796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '017941284b696017808795ee35843b8488422e50' => 
    array (
      0 => '../templates/lostpassword.tpl',
      1 => 1450266771,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163853487156716dc85ff2b4-48088796',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56716dc8667347_36367364',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56716dc8667347_36367364')) {function content_56716dc8667347_36367364($_smarty_tpl) {?><?php if (!is_callable('smarty_function_t')) include '../functions/function.t.php';
?><?php ob_start();?><?php echo smarty_function_t(array('t'=>'Lost Password'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('design/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_tmp1), 0);?>

	
<?php ob_start();?><?php echo smarty_function_t(array('t'=>'Lost Password'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("parts/panel_start.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_tmp2,'hidden'=>false,'id'=>'lostpw'), 0);?>

<form role="form" action="login.php" method="post" accept-charset="utf-8" class="form-horizontal">
  
  <?php ob_start();?><?php echo smarty_function_t(array('t'=>'Email adress'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_t(array('t'=>'Enter email adress'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('parts/input.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"lost_email",'description'=>$_tmp3,'placeholder'=>$_tmp4), 0);?>

            
  
  <?php ob_start();?><?php echo smarty_function_t(array('t'=>'continue'),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('parts/panel_submit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('text'=>$_tmp5,'symbol'=>'ok'), 0);?>

</form>
<?php echo $_smarty_tpl->getSubTemplate ("parts/panel_end.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('design/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
