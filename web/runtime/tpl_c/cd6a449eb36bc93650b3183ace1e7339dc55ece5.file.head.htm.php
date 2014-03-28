<?php /* Smarty version Smarty-3.1.13, created on 2013-12-31 02:59:23
         compiled from "D:\wamp\www\jiankong\cms\protected\views\layouts\head.htm" */ ?>
<?php /*%%SmartyHeaderCode:48652c2330b3c3766-41646841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd6a449eb36bc93650b3183ace1e7339dc55ece5' => 
    array (
      0 => 'D:\\wamp\\www\\jiankong\\cms\\protected\\views\\layouts\\head.htm',
      1 => 1381491719,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48652c2330b3c3766-41646841',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'res' => 0,
    'extjs' => 0,
    'css_arr' => 0,
    'css' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52c2330b44cb96_14509447',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c2330b44cb96_14509447')) {function content_52c2330b44cb96_14509447($_smarty_tpl) {?>	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Gebo Admin Panel</title>

	<!-- Bootstrap framework -->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/bootstrap/css/bootstrap-responsive.min.css" />
	<!-- jQuery UI theme -->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/lib/jquery-ui/css/Aristo/Aristo.css" />
	<!-- tooltips-->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/lib/qtip2/jquery.qtip.min.css" />
	<!-- colorbox -->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/lib/colorbox/colorbox.css" />
	
	<!-- code prettify -->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/lib/google-code-prettify/prettify.css" />    
	<!-- sticky notifications -->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/lib/sticky/sticky.css" />    
	<!-- aditional icons -->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/img/splashy/splashy.css" />
	<!-- flags -->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/img/flags/flags.css" />	
	<!-- datatables -->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/lib/datatables/extras/TableTools/media/css/TableTools.css">
	
	<?php if ($_smarty_tpl->tpl_vars['extjs']->value){?>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/extjs/resources/css/ext-all.css" />
		<link rel="stylesheet" href="/assets/css/ext-plugin.css" />
		<script src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/extjs/ext-all.js"></script>
	<?php }else{ ?>
		<link rel="stylesheet" href="/assets/css/not-ext.css" />
	<?php }?>
	
	<?php  $_smarty_tpl->tpl_vars['css'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['css']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['css_arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['css']->key => $_smarty_tpl->tpl_vars['css']->value){
$_smarty_tpl->tpl_vars['css']->_loop = true;
?>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
" />
	<?php } ?>
	
	<!-- main styles -->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/style.css" />
	<link rel="stylesheet" href="/assets/css/bms.css" />
	<!-- theme color-->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/blue.css" id="link_theme" />	
	
	<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
	
	
	
	
	<!-- favicon -->
	<link rel="shortcut icon" href="favicon.ico" />
	
	<!--[if lte IE 8]>
	    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/ie.css" />
	<![endif]-->
	
	<!--[if lt IE 9]>
	<script src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/js/ie/html5.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/js/ie/respond.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/lib/flot/excanvas.min.js"></script>
	<![endif]-->
	<script>
	//* hide all elements & show preloader
	document.documentElement.className += 'js';
	</script><?php }} ?>