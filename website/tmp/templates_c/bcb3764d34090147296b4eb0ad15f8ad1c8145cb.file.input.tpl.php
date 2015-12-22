<?php /* Smarty version Smarty-3.1.15, created on 2015-12-16 13:15:54
         compiled from "../templates/parts/input.tpl" */ ?>
<?php /*%%SmartyHeaderCode:606020422567155fa63af98-32390926%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcb3764d34090147296b4eb0ad15f8ad1c8145cb' => 
    array (
      0 => '../templates/parts/input.tpl',
      1 => 1450266771,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '606020422567155fa63af98-32390926',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'name' => 0,
    'description' => 0,
    'class' => 0,
    'id' => 0,
    'static' => 0,
    'value' => 0,
    'select' => 0,
    'extra' => 0,
    'values' => 0,
    'radio' => 0,
    'un' => 0,
    'admin_view' => 0,
    'uid' => 0,
    'image' => 0,
    'date' => 0,
    'type' => 0,
    'placeholder' => 0,
    'helpblock' => 0,
    'info' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_567155fa67f9a2_40716562',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567155fa67f9a2_40716562')) {function content_567155fa67f9a2_40716562($_smarty_tpl) {?><div class="form-group<?php if (isset($_smarty_tpl->tpl_vars['error']->value)&&$_smarty_tpl->tpl_vars['error']->value) {?> has-error<?php }?>">
  <label class="col-lg-2 control-label" for="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
    <?php echo $_smarty_tpl->tpl_vars['description']->value;?>

  </label>

  <div class="col-lg-4<?php if (isset($_smarty_tpl->tpl_vars['class']->value)&&$_smarty_tpl->tpl_vars['class']->value) {?> <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['id']->value)&&$_smarty_tpl->tpl_vars['id']->value) {?> id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"<?php }?>>
    <?php if (isset($_smarty_tpl->tpl_vars['static']->value)&&$_smarty_tpl->tpl_vars['static']->value) {?>
        <p class="form-control-static">
            <strong><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</strong>
        </p>
    <?php } elseif (isset($_smarty_tpl->tpl_vars['select']->value)&&$_smarty_tpl->tpl_vars['select']->value) {?>
        <?php $_smarty_tpl->tpl_vars["extra2"] = new Smarty_variable('', null, 0);?><?php if (isset($_smarty_tpl->tpl_vars['extra']->value)&&$_smarty_tpl->tpl_vars['extra']->value) {?><?php $_smarty_tpl->tpl_vars["extra2"] = new Smarty_variable($_smarty_tpl->tpl_vars['extra']->value, null, 0);?><?php }?>
        <?php echo c2r_getHtmlSelect($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl->tpl_vars['values']->value,'name',$_smarty_tpl->tpl_vars['value']->value,"class=\"form-control\" ".((string)$_smarty_tpl->tpl_vars['extra2']->value));?>

    <?php } elseif (isset($_smarty_tpl->tpl_vars['radio']->value)&&$_smarty_tpl->tpl_vars['radio']->value) {?>
        <input type="radio" name="default" value="<?php echo $_smarty_tpl->tpl_vars['un']->value->id;?>
" <?php if (($_smarty_tpl->tpl_vars['un']->value->is_default)) {?>checked="checked"<?php }?> />
        <?php echo $_smarty_tpl->tpl_vars['un']->value->number;?>
  
        <?php if ((!$_smarty_tpl->tpl_vars['un']->value->is_default)) {?>
            <a href="profile.php?number_delete=<?php echo $_smarty_tpl->tpl_vars['un']->value->id;?>
<?php if (($_smarty_tpl->tpl_vars['admin_view']->value)) {?>&amp;uid=<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
<?php }?>">
                <span class="glyphicon glyphicon-trash"></span>
            </a>
        <?php }?>
    <?php } elseif (isset($_smarty_tpl->tpl_vars['image']->value)&&$_smarty_tpl->tpl_vars['image']->value) {?>
        <img class="gravatar" src="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" alt="" />
    <?php } else { ?>
        <?php if (isset($_smarty_tpl->tpl_vars['date']->value)&&$_smarty_tpl->tpl_vars['date']->value) {?>
          <div class="input-group date" id="dp_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" data-date="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" data-date-format="yyyy-mm-dd"> 
            <input class="form-control" type="text" readonly="" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"> 
            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span> 
          </div>
          <script type="text/javascript">
          	  $(function() {
        	  	  $('#dp_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
').datepicker({
                todayBtn: "linked",
                autoclose: true,
                todayHighlight: true
              });
        	});
          </script>
        <?php } else { ?>
          <input<?php if (isset($_smarty_tpl->tpl_vars['type']->value)&&$_smarty_tpl->tpl_vars['type']->value) {?> type="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
"<?php }?> name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="form-control" id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['placeholder']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
">
        <?php }?>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['helpblock']->value)&&$_smarty_tpl->tpl_vars['helpblock']->value) {?>
        <p class="help-block"><?php echo $_smarty_tpl->tpl_vars['helpblock']->value;?>
</p>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)&&$_smarty_tpl->tpl_vars['error']->value) {?>
        <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span>
    <?php }?>
  </div>
  <?php if (isset($_smarty_tpl->tpl_vars['info']->value)&&$_smarty_tpl->tpl_vars['info']->value) {?>
      <?php echo $_smarty_tpl->getSubTemplate ("parts/info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('info'=>$_smarty_tpl->tpl_vars['info']->value), 0);?>

  <?php }?>
  
  <?php if (isset($_smarty_tpl->tpl_vars['text']->value)&&$_smarty_tpl->tpl_vars['text']->value) {?>
      <p class="form-control-static">
        <?php echo $_smarty_tpl->tpl_vars['text']->value;?>

      </p>
  <?php }?>
</div><?php }} ?>
