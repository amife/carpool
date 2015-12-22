<?php /* Smarty version Smarty-3.1.15, created on 2015-12-16 15:08:33
         compiled from "../templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12125307765671706190f3a3-93600320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '927222f66c1cabf1737d32d5161fdb6810b2fdcc' => 
    array (
      0 => '../templates/login.tpl',
      1 => 1450266771,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12125307765671706190f3a3-93600320',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56717061954fa3_78590476',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56717061954fa3_78590476')) {function content_56717061954fa3_78590476($_smarty_tpl) {?><?php if (!is_callable('smarty_function_t')) include '../functions/function.t.php';
?><?php ob_start();?><?php echo smarty_function_t(array('t'=>'Login'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('design/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_tmp1), 0);?>


<?php ob_start();?><?php echo smarty_function_t(array('t'=>'Login'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("parts/panel_start.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_tmp2), 0);?>

<form role="form" action="login.php" method="post" accept-charset="utf-8" class="form-horizontal">
  

  <?php ob_start();?><?php echo smarty_function_t(array('t'=>'Email adress'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_t(array('t'=>'Enter email adress'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('parts/input.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"email",'description'=>$_tmp3,'placeholder'=>$_tmp4), 0);?>

    
  
  <?php ob_start();?><?php echo smarty_function_t(array('t'=>'Password'),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_t(array('t'=>'Enter password'),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('parts/input.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"password",'description'=>$_tmp5,'placeholder'=>$_tmp6,'type'=>"password"), 0);?>

    
  
  <?php ob_start();?><?php echo smarty_function_t(array('t'=>'sign in'),$_smarty_tpl);?>
<?php $_tmp7=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('parts/panel_submit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('text'=>$_tmp7,'symbol'=>'ok'), 0);?>

    
</form>
<?php echo $_smarty_tpl->getSubTemplate ("parts/panel_end.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




<div class="row row-space-after">
    <div class="col-lg-12">
        <a href="#" onclick="$('#lostpw').toggle()" class="btn btn-primary"><?php echo smarty_function_t(array('t'=>'Lost Password'),$_smarty_tpl);?>
</a>
    </div>
</div>
	
<?php ob_start();?><?php echo smarty_function_t(array('t'=>'Lost Password'),$_smarty_tpl);?>
<?php $_tmp8=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("parts/panel_start.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_tmp8,'hidden'=>true,'id'=>'lostpw'), 0);?>

    <form role="form" action="login.php" method="post" accept-charset="utf-8" class="form-horizontal">
      
      <?php ob_start();?><?php echo smarty_function_t(array('t'=>'Email adress'),$_smarty_tpl);?>
<?php $_tmp9=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_t(array('t'=>'Enter email adress'),$_smarty_tpl);?>
<?php $_tmp10=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('parts/input.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"lost_email",'description'=>$_tmp9,'placeholder'=>$_tmp10), 0);?>

                
      
      <?php ob_start();?><?php echo smarty_function_t(array('t'=>'continue'),$_smarty_tpl);?>
<?php $_tmp11=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('parts/panel_submit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('text'=>$_tmp11,'symbol'=>'ok'), 0);?>

    </form>
<?php echo $_smarty_tpl->getSubTemplate ("parts/panel_end.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  
<script>		
  $(function() {
    $('#lostpw').hide();
  });	
</script>

<?php echo $_smarty_tpl->getSubTemplate ('design/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
