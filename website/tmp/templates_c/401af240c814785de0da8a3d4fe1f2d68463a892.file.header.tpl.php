<?php /* Smarty version Smarty-3.1.15, created on 2015-12-16 13:15:08
         compiled from "../templates/design/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:628780559567155cc12b4a2-30597113%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '401af240c814785de0da8a3d4fe1f2d68463a892' => 
    array (
      0 => '../templates/design/header.tpl',
      1 => 1450266771,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '628780559567155cc12b4a2-30597113',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'title' => 0,
    'titletag' => 0,
    'maps' => 0,
    'ocp_logourl' => 0,
    'ocp_allowed_user_for_translation' => 0,
    'ocp_language' => 0,
    'ocp_languages' => 0,
    'short' => 0,
    'long' => 0,
    'breadcrumb' => 0,
    'url' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_567155cc212a06_45752580',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567155cc212a06_45752580')) {function content_567155cc212a06_45752580($_smarty_tpl) {?><?php if (!is_callable('smarty_function_t')) include '../functions/function.t.php';
?><!DOCTYPE html>
<!-- Open CarPool is free software published under GPLv3 license, see license.txt for details. (C) 2009 Oliver Pintat, Clemens Rath -->
<html <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>lang="<?php echo $_smarty_tpl->tpl_vars['user']->value->ui->language;?>
"<?php } elseif ($_COOKIE['language']) {?>lang="<?php echo $_COOKIE['language'];?>
"<?php }?>>
	<head>
        <meta charset="utf-8">
        <xmeta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title><?php if ($_smarty_tpl->tpl_vars['title']->value) {?><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['titletag']->value;?>
<?php }?> | eBay Inc. Green Team</title>
        
        <link rel="icon" href="favicon.ico" type="image/ico">
        
        <link rel="stylesheet" type="text/css" href="lib/bootstrap/dist/css/bootstrap.min.css" media="screen">
        <!-- DataTables CSS -->
        <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
        <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" title="CSS" charset="utf-8"/>
    	<link rel="stylesheet" type="text/css" href="lib/datepicker/css/datepicker.css">
        
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="lib/bootstrap/assets/js/html5shiv.js"></script>
          <script src="lib/bootstrap/assets/js/respond.min.js"></script>
        <![endif]-->

    	<script src="lib/bootstrap/assets/js/jquery.js"></script>
    	
    	<!-- DataTables -->
        <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
        <script src="lib/bootstrap/dist/js/bootstrap.min.js"></script>
        
        <?php if (isset($_smarty_tpl->tpl_vars['maps']->value)&&$_smarty_tpl->tpl_vars['maps']->value) {?>
            
            <script type="text/javascript" src="https://maps.google.com/maps/api/js?libraries=places&sensor=true"></script>
        <?php }?>
        
        <script src="lib/datepicker/js/bootstrap-datepicker.js"></script>
        <script src="js/ocp.js"></script>

	</head>
	
	<body>
        <div class="navbar navbar-inverse navbar-fixed-top" id="main-navbar">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
				  <a class="navbar-brand" href="index.php"><?php if ($_smarty_tpl->tpl_vars['ocp_logourl']->value) {?><img id="ocp_logo" src="<?php echo $_smarty_tpl->tpl_vars['ocp_logourl']->value;?>
"><?php } else { ?><img id="ocp_logo" src="images/opencarpool.png" alt="Open CarPool" width="70" height="32"><?php }?><div id="logo_spacer"></div></a>
                </div>
                <div class="navbar-collapse collapse">
                    
                  <ul class="nav navbar-nav">
                  <?php if (isset($_smarty_tpl->tpl_vars['user']->value)&&$_smarty_tpl->tpl_vars['user']->value) {?>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo smarty_function_t(array('t'=>'Passenger'),$_smarty_tpl);?>
 <b class="caret"></b></a>
                      <ul class="dropdown-menu">                    
                       	<li><a href="request.php"><span class="glyphicon glyphicon-search"></span> <?php echo smarty_function_t(array('t'=>'Request a Lift'),$_smarty_tpl);?>
</a></li>
                       	<li><a href="matchingoffers.php"><span class="glyphicon glyphicon-ok"></span> <?php echo smarty_function_t(array('t'=>'Matching Offers'),$_smarty_tpl);?>
</a></li>
                       	<li><a href="requests.php?status=open"><span class="glyphicon glyphicon-user"></span> <?php echo smarty_function_t(array('t'=>'My Requests'),$_smarty_tpl);?>
</a></li>
                      </ul>
                    </li>
                    
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-road"></span> <?php echo smarty_function_t(array('t'=>'Driver'),$_smarty_tpl);?>
 <b class="caret"></b></a>
                      <ul class="dropdown-menu">                    
                       	<li><a href="offer.php"><span class="glyphicon glyphicon-plus"></span> <?php echo smarty_function_t(array('t'=>'Offer a Lift'),$_smarty_tpl);?>
</a></li>
                       	<li><a href="matchingrequests.php"><span class="glyphicon glyphicon-ok"></span> <?php echo smarty_function_t(array('t'=>'Matching Requests'),$_smarty_tpl);?>
</a></li>
                       	<li><a href="offers.php?status=open"><span class="glyphicon glyphicon-user"></span> <?php echo smarty_function_t(array('t'=>'My Offers'),$_smarty_tpl);?>
</a></li>
                      </ul>
                    </li>
                    
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-transfer"></span> <?php echo smarty_function_t(array('t'=>'Routes'),$_smarty_tpl);?>
 <b class="caret"></b></a>
                      <ul class="dropdown-menu">      
                         
                         
                       	 <li><a href="allroutes.php"><span class="glyphicon glyphicon-transfer"></span> <?php echo smarty_function_t(array('t'=>'All Routes'),$_smarty_tpl);?>
</a></li>
                       	 <li><a href="routes.php?my=1"><span class="glyphicon glyphicon-user"></span> <?php echo smarty_function_t(array('t'=>'My Routes'),$_smarty_tpl);?>
</a></li>
                      </ul>
                    </li>
    
                    <!-- Admin functions won't be translated -->
    				<?php if ((isset($_smarty_tpl->tpl_vars['user']->value)&&$_smarty_tpl->tpl_vars['user']->value->group_id>1)) {?>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin<b class="caret"></b></a>
                      <ul class="dropdown-menu">                    
                       	<li><a href="pickuppoints.php">Pickup Points</a></li>
                       	<li><a href="routes.php">Routes</a></li>
                       	<li><a href="locations.php">Locations</a></li>
    			              <li><a href="offers.php?all=1&status=open">All Offers</a></li>
    			              <li><a href="requests.php?all=1&status=open">All Requests</a></li>
                        <li><a href="users.php">User</a></li>
                        <li><a href="emailsuffix.php">Email Suffix</a></li>
                        <li><a href="companies.php?do=edit&amp;cid=<?php echo $_smarty_tpl->tpl_vars['user']->value->company_id;?>
">Company</a></li>
                        <?php if (($_smarty_tpl->tpl_vars['user']->value->group_id==2&&in_array($_smarty_tpl->tpl_vars['user']->value->id,$_smarty_tpl->tpl_vars['ocp_allowed_user_for_translation']->value))) {?>
                          <li><a href="translations.php">Translations</a></li>
                        <?php }?>
                        <?php if (($_smarty_tpl->tpl_vars['user']->value->group_id>2)) {?>
                        <li class="divider"></li>
                        <li class="dropdown-header">Super Admin</li>
                      	<li><a href="companies.php">Companies</a></li>
                      	<li><a href="translations.php">Translations</a></li>
                        <?php }?>
                      </ul>
                    </li>
                    <?php }?>
    
                    <?php } else { ?>
                      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> <?php echo smarty_function_t(array('t'=>'Register'),$_smarty_tpl);?>
</a></li>
                    <?php }?>
    
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->group_id==1&&in_array($_smarty_tpl->tpl_vars['user']->value->id,$_smarty_tpl->tpl_vars['ocp_allowed_user_for_translation']->value)) {?>
                        <li><a href="translations.php"><span class="glyphicon glyphicon-globe"></span> <?php echo smarty_function_t(array('t'=>'Translations'),$_smarty_tpl);?>
</a></li>
                    <?php }?>
    
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-info-sign"></span> <?php echo smarty_function_t(array('t'=>'Help &amp; Contact'),$_smarty_tpl);?>
 <b class="caret"></b></a>
                      <ul class="dropdown-menu">                    
                       	<li><a href="https://opencarpool.zendesk.com/" target="_blank"><span class="glyphicon glyphicon-question-sign"></span> <?php echo smarty_function_t(array('t'=>'Help (new window)'),$_smarty_tpl);?>
</a></li>
                       	<li><a href="feedback.php"><span class="glyphicon glyphicon-envelope"></span> <?php echo smarty_function_t(array('t'=>'Contact'),$_smarty_tpl);?>
</a></li>
    			        <?php if (!$_smarty_tpl->tpl_vars['user']->value->group_id) {?>
                      		<li><a href="lostpassword.php"><span class="glyphicon glyphicon-warning-sign"></span> <?php echo smarty_function_t(array('t'=>'Lost Password'),$_smarty_tpl);?>
</a></li>
    			        <?php }?>
                      </ul>
                    </li>
                  </ul>
                  
                  <?php if (!$_smarty_tpl->tpl_vars['user']->value||!$_smarty_tpl->tpl_vars['user']->value->group_id) {?>
                      <form action="login.php" class="navbar-form navbar-right" method="post">
                       <div class="form-group">
                          <input type="text" placeholder="<?php echo smarty_function_t(array('t'=>'Email'),$_smarty_tpl);?>
" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                          <input type="password" placeholder="<?php echo smarty_function_t(array('t'=>'Password'),$_smarty_tpl);?>
" name="password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-globe"></span> <?php echo smarty_function_t(array('t'=>'Sign in'),$_smarty_tpl);?>
</button>
                      </form>
                      <ul class="nav navbar-nav navbar-right">                  
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-globe"></span> <?php echo $_smarty_tpl->tpl_vars['ocp_languages']->value[$_smarty_tpl->tpl_vars['ocp_language']->value];?>
<b class="caret"></b></a>
                          <ul class="dropdown-menu">
                            <?php  $_smarty_tpl->tpl_vars['long'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['long']->_loop = false;
 $_smarty_tpl->tpl_vars['short'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ocp_languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['long']->key => $_smarty_tpl->tpl_vars['long']->value) {
$_smarty_tpl->tpl_vars['long']->_loop = true;
 $_smarty_tpl->tpl_vars['short']->value = $_smarty_tpl->tpl_vars['long']->key;
?>
                                <li><a href="changelanguage.php?lang=<?php echo $_smarty_tpl->tpl_vars['short']->value;?>
"><span class="glyphicon glyphicon-globe"></span> <?php echo $_smarty_tpl->tpl_vars['long']->value;?>
</a></li>
                            <?php } ?>
                          </ul>
                        </li>               
                      </ul>
                  <?php } else { ?>
                    <ul class="nav navbar-nav navbar-right">                  
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img class="gravatar" src="<?php echo $_smarty_tpl->tpl_vars['user']->value->gravatar_small;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->name;?>
" style="margin: 0 10px;"/> <?php echo $_smarty_tpl->tpl_vars['user']->value->name;?>
 <b class="caret"></b></a>
                          <ul class="dropdown-menu">
                            <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> <?php echo smarty_function_t(array('t'=>'My Profile'),$_smarty_tpl);?>
</a></li>
                            <li><a href="offers.php?status=open"><span class="glyphicon glyphicon-road"></span> <?php echo smarty_function_t(array('t'=>'My Offers'),$_smarty_tpl);?>
</a></li>
                            <li><a href="requests.php?status=open"><span class="glyphicon glyphicon-search"></span> <?php echo smarty_function_t(array('t'=>'My Requests'),$_smarty_tpl);?>
</a></li>
                            <li><a href="defaultlocation.php"><span class="glyphicon glyphicon-map-marker"></span> <?php echo smarty_function_t(array('t'=>'My Location'),$_smarty_tpl);?>
</a></li>
                       	    <li><a href="routes.php?my=1"><span class="glyphicon glyphicon-transfer"></span> <?php echo smarty_function_t(array('t'=>'My Routes'),$_smarty_tpl);?>
</a></li>
                       	    <li class="divider"></li>
                            <li><a href="login.php?do=logout"><span class="glyphicon glyphicon-off"></span> <?php echo smarty_function_t(array('t'=>'Logout'),$_smarty_tpl);?>
</a></li>
                          </ul>
                        </li>               
                    </ul>
                <?php }?>
                  
                </div><!--/.navbar-collapse -->
              </div>
            </div>
    
    
            <div class="container">
              <?php if (isset($_smarty_tpl->tpl_vars['breadcrumb']->value)&&$_smarty_tpl->tpl_vars['breadcrumb']->value) {?>
              <ol class="breadcrumb">
                <li><a href="index.php"><span class="glyphicon glyphicon-globe"></span> <?php echo smarty_function_t(array('t'=>'Home'),$_smarty_tpl);?>
</a></li>
                <?php  $_smarty_tpl->tpl_vars['url'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['url']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['breadcrumb']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['url']->key => $_smarty_tpl->tpl_vars['url']->value) {
$_smarty_tpl->tpl_vars['url']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['url']->key;
?>
                  <?php if ($_smarty_tpl->tpl_vars['url']->value) {?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"><span class="glyphicon glyphicon-globe"></span> <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a></li>
                  <?php } else { ?>
                    <li class="active"><span class="glyphicon glyphicon-globe"></span> <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</li>
                  <?php }?>
                <?php } ?>
              </ol>
              <?php }?>
              
              <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
              <?php echo $_smarty_tpl->getSubTemplate ('parts/messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
