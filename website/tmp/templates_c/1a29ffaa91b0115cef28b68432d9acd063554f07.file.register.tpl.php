<?php /* Smarty version Smarty-3.1.15, created on 2015-12-16 13:15:54
         compiled from "../templates/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1548112906567155fa5b7686-17280457%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a29ffaa91b0115cef28b68432d9acd063554f07' => 
    array (
      0 => '../templates/register.tpl',
      1 => 1450266771,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1548112906567155fa5b7686-17280457',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display' => 0,
    't_intro' => 0,
    'err' => 0,
    't_error' => 0,
    't_name' => 0,
    'err_name_text' => 0,
    't_email' => 0,
    'err_email_text' => 0,
    't_phone' => 0,
    'err_phone_text' => 0,
    't_submit' => 0,
    't_thankyou' => 0,
    't_entercode' => 0,
    'code' => 0,
    't_confirmcode' => 0,
    'err_code_text' => 0,
    't_finish' => 0,
    't_error_code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_567155fa60c756_88167338',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567155fa60c756_88167338')) {function content_567155fa60c756_88167338($_smarty_tpl) {?><?php if (!is_callable('smarty_function_t')) include '../functions/function.t.php';
?><?php ob_start();?><?php echo smarty_function_t(array('t'=>'Register'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('design/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_tmp1), 0);?>


<?php if (($_smarty_tpl->tpl_vars['display']->value==1)) {?>

    <?php echo $_smarty_tpl->tpl_vars['t_intro']->value;?>

    
    <?php if (($_smarty_tpl->tpl_vars['err']->value)) {?>
        <?php echo $_smarty_tpl->tpl_vars['t_error']->value;?>

    <?php }?>
    <?php ob_start();?><?php echo smarty_function_t(array('t'=>'Register'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("parts/panel_start.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_tmp2), 0);?>

        <form action="register.php" method="post" role="form" class="form-horizontal register">
            <input type="hidden" name="step1" value="1" />
        
            
          	<?php ob_start();?><?php echo smarty_function_t(array('t'=>'Use the name your colleagues should be given to contact you to arrange a pickup. The full name is recommended.'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('parts/input.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"name",'description'=>$_smarty_tpl->tpl_vars['t_name']->value,'placeholder'=>$_smarty_tpl->tpl_vars['t_name']->value,'value'=>$_POST['name'],'error'=>$_smarty_tpl->tpl_vars['err_name_text']->value,'info'=>$_tmp3), 0);?>

            
            
          	<?php ob_start();?><?php echo smarty_function_t(array('t'=>'Please only use your corporate email address. All other addresses will not be allowed.'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('parts/input.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"email",'description'=>$_smarty_tpl->tpl_vars['t_email']->value,'placeholder'=>$_smarty_tpl->tpl_vars['t_email']->value,'value'=>$_POST['email'],'error'=>$_smarty_tpl->tpl_vars['err_email_text']->value,'info'=>$_tmp4), 0);?>

        
            
          	<?php ob_start();?><?php echo smarty_function_t(array('t'=>'The number consists of 3 parts:<ul><li><b>+1</b> ... country code depending on your country, see link at +1</li><li><b>234</b> ...area or provider code</li><li><b>567890</b> ... phone number</li></ul>Your phone must support SMS text messages.'),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('parts/input.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"handynummer",'description'=>$_smarty_tpl->tpl_vars['t_phone']->value,'placeholder'=>$_smarty_tpl->tpl_vars['t_phone']->value,'value'=>$_POST['handynummer'],'error'=>$_smarty_tpl->tpl_vars['err_phone_text']->value,'info'=>$_tmp5), 0);?>

        
            
          	<?php echo $_smarty_tpl->getSubTemplate ('parts/panel_submit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('text'=>$_smarty_tpl->tpl_vars['t_submit']->value,'symbol'=>'ok'), 0);?>

      </form>
  <?php echo $_smarty_tpl->getSubTemplate ("parts/panel_end.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>  

<?php if (($_smarty_tpl->tpl_vars['display']->value==2)) {?>
    <?php echo $_smarty_tpl->tpl_vars['t_thankyou']->value;?>

    <hr/>
    <p><?php echo smarty_function_t(array('t'=>'Here is how you can register:'),$_smarty_tpl);?>
</p>
    <img class="img-responsive" src="images/ocp-register_400.jpg" alt="<?php echo smarty_function_t(array('t'=>'How to register at Open CarPool'),$_smarty_tpl);?>
" />
<?php }?>

<?php if (($_smarty_tpl->tpl_vars['display']->value==3)) {?>

  <?php ob_start();?><?php echo smarty_function_t(array('t'=>'Enter confirmation code'),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("parts/panel_start.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_tmp6), 0);?>
  
  <?php echo $_smarty_tpl->tpl_vars['t_entercode']->value;?>

  <form action="register.php" method="post" role="form" class="form-horizontal register">
    <input type="hidden" name="step1" value="3" />
    <input type="hidden" name="code" value="<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
" />

    
  	<?php echo $_smarty_tpl->getSubTemplate ('parts/input.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"smscode",'description'=>$_smarty_tpl->tpl_vars['t_confirmcode']->value,'placeholder'=>$_smarty_tpl->tpl_vars['t_confirmcode']->value,'value'=>$_POST['smscode'],'error'=>$_smarty_tpl->tpl_vars['err_code_text']->value), 0);?>


    
  	<?php echo $_smarty_tpl->getSubTemplate ('parts/panel_submit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('text'=>$_smarty_tpl->tpl_vars['t_submit']->value,'symbol'=>'ok'), 0);?>

  </form>
  <?php echo $_smarty_tpl->getSubTemplate ("parts/panel_end.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<?php if (($_smarty_tpl->tpl_vars['display']->value==4)) {?>
    <?php echo $_smarty_tpl->tpl_vars['t_finish']->value;?>

    <hr/>
    <p><?php echo smarty_function_t(array('t'=>'Here is how you can register:'),$_smarty_tpl);?>
</p>
    <img class="img-responsive" src="images/ocp-register_400.jpg" alt="<?php echo smarty_function_t(array('t'=>'How to register at Open CarPool'),$_smarty_tpl);?>
" />
<?php }?>

<?php if (($_smarty_tpl->tpl_vars['display']->value==5)) {?>
    <?php echo $_smarty_tpl->tpl_vars['t_error_code']->value;?>

    <hr/>
    <p><?php echo smarty_function_t(array('t'=>'Here is how you can register:'),$_smarty_tpl);?>
</p>
    <img class="img-responsive" src="images/ocp-register_400.jpg" alt="<?php echo smarty_function_t(array('t'=>'How to register at Open CarPool'),$_smarty_tpl);?>
" />
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ('design/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
