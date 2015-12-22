<?php /* Smarty version Smarty-3.1.15, created on 2015-12-16 13:15:08
         compiled from "../templates/design/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1575330813567155cc220ab1-07403061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65960e2fabd77baa0883af9cfad7639b3778b514' => 
    array (
      0 => '../templates/design/footer.tpl',
      1 => 1450266771,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1575330813567155cc220ab1-07403061',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'zendeskid' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_567155cc242ed9_67504919',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567155cc242ed9_67504919')) {function content_567155cc242ed9_67504919($_smarty_tpl) {?><?php if (!is_callable('smarty_function_t')) include '../functions/function.t.php';
?>
            <div class="row text-center text-muted">
                <hr />
                <p>
                    <small>Open CarPool &copy; 2014</small>
                    |
                    <small><a href="http://www.opencarpool.org/4_1.html" target="_new"><?php echo smarty_function_t(array('t'=>'Site info'),$_smarty_tpl);?>
</a></small>
                </p>
            </div>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['zendeskid']->value) {?>
            <!-- Zendesk Feedback Form Integration -->
            <script type="text/javascript" src="//assets.zendesk.com/external/zenbox/v2.6/zenbox.js"></script>
            <style type="text/css" media="screen, projection">
                @import url(//assets.zendesk.com/external/zenbox/v2.6/zenbox.css);
            </style>
            <script type="text/javascript">
                if (typeof(Zenbox) !== "undefined") {
                    Zenbox.init({
                        dropboxID:   "<?php echo $_smarty_tpl->tpl_vars['zendeskid']->value;?>
",
                        url:         "https://opencarpool.zendesk.com",
                        tabTooltip:  "Service",
                        tabImageURL: "https://assets.zendesk.com/external/zenbox/images/tab_service_right.png",
                        tabColor:    "black",
                        tabPosition: "Right"<?php if (isset($_smarty_tpl->tpl_vars['user']->value)) {?>,
                        requester_name: "<?php echo $_smarty_tpl->tpl_vars['user']->value->name;?>
",
                        requester_email: "<?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
"<?php }?>
                    });
                }
            </script>
        <?php }?> 

    </body>
</html><?php }} ?>
