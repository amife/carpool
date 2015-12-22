<?php /* Smarty version Smarty-3.1.15, created on 2015-12-16 13:15:08
         compiled from "../templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1043132497567155cc0fca25-25246152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16598974be41913e67d6e2462715a26137b17224' => 
    array (
      0 => '../templates/index.tpl',
      1 => 1450266771,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1043132497567155cc0fca25-25246152',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_567155cc129e88_32170799',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567155cc129e88_32170799')) {function content_567155cc129e88_32170799($_smarty_tpl) {?><?php if (!is_callable('smarty_function_t')) include '../functions/function.t.php';
?><?php echo $_smarty_tpl->getSubTemplate ('design/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Open CarPool"), 0);?>


<div class="row">
<?php if (!isset($_smarty_tpl->tpl_vars['user']->value)||!$_smarty_tpl->tpl_vars['user']->value->group_id) {?>
  <div class="col-lg-6">
    <p>
	<?php echo smarty_function_t(array('t'=>'Open CarPool is a simple but effective ride sharing system. For more information, please visit'),$_smarty_tpl);?>
 <a href="http://www.opencarpool.org">www.opencarpool.org</a>.
    </p>
    <ul>
	<li><?php echo smarty_function_t(array('t'=>'To offer or request a lift, please <a href="login.php">log in</a>.'),$_smarty_tpl);?>
    </li>
      	<li><?php echo smarty_function_t(array('t'=>'If you have not got an account yet, please <a href="register.php">register</a>.'),$_smarty_tpl);?>
    </li>
	<li><?php echo smarty_function_t(array('t'=>'For support, feedback or requests to use it for your own organization, please contact us via our contact tab on the right side of this page.'),$_smarty_tpl);?>
    </li>
    </ul>
 </div>

<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['user']->value)) {?>
  <div class="col-lg-6">
    <p><?php echo smarty_function_t(array('t'=>'Open CarPool helps you to find colleagues driving your route at the same time. In case of a match, the system will simply show you the names and phone numbers of matching colleagues. Call each other and arrange a pick up!'),$_smarty_tpl);?>
</p>

    <div class="row">
      <div class="col-lg-6">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><?php echo smarty_function_t(array('t'=>'Passenger?'),$_smarty_tpl);?>
</h3>
          </div>
          <div class="panel-body">
		      <a href="request.php" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> <?php echo smarty_function_t(array('t'=>'Request a lift'),$_smarty_tpl);?>
</a>
          </div>
        </div>
      </div>
  
      <div class="col-lg-6">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><?php echo smarty_function_t(array('t'=>'Driver?'),$_smarty_tpl);?>
</h3>
          </div>
          <div class="panel-body">
		      <a href="offer.php" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> <?php echo smarty_function_t(array('t'=>'Offer a lift'),$_smarty_tpl);?>
</a>
          </div>
        </div>
      </div>
    </div>
  </div>  
<?php }?>

  <div class="col-lg-6">
    <p>
      <strong><?php echo smarty_function_t(array('t'=>'Here is how Open Carpool works:'),$_smarty_tpl);?>
</strong><br />
	    <img alt="<?php echo smarty_function_t(array('t'=>'Here is how Open Carpool works:'),$_smarty_tpl);?>
" src="images/<?php echo smarty_function_t(array('t'=>'open-carpool_how-it-works_400x447.jpg'),$_smarty_tpl);?>
" class="img-responsive">
    </p>
  </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('design/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
