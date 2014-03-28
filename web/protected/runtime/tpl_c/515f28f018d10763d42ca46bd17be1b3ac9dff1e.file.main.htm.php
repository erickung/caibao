<?php /* Smarty version Smarty-3.1.13, created on 2013-10-08 02:32:09
         compiled from "D:\wamp\www\pockets\bms\protected\views\layouts\main.htm" */ ?>
<?php /*%%SmartyHeaderCode:1998852536ea9dd7f85-43835642%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '515f28f018d10763d42ca46bd17be1b3ac9dff1e' => 
    array (
      0 => 'D:\\wamp\\www\\pockets\\bms\\protected\\views\\layouts\\main.htm',
      1 => 1381161176,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1998852536ea9dd7f85-43835642',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view' => 0,
    'res' => 0,
    'content' => 0,
    'layouts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52536ea9e781e6_84115438',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52536ea9e781e6_84115438')) {function content_52536ea9e781e6_84115438($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
    <head>
    	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['view']->value)."/layouts/head.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </head>
    <body>
        <div id="loading_layer" style="display:none"><img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/img/ajax_loader.gif" alt="" /></div>
		
		<div id="maincontainer" class="clearfix">
			<header>
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['view']->value)."/layouts/horizontal_navigation.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
				
			</header>    
			<div id="contentwrapper">                
				<div class="main_content">       
					<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['view']->value)."/layouts/footprints.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
             						
					<div class="row-fluid">
					    <div class="span12">
					    	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

					    	<!--  
							<div class="chat_box">
								<div class="row-fluid">
					                
					            </div>
							</div>
							-->
						</div>
					</div>
				
					<!-- hide elements-->
					<div class="hide">
			    
					</div>                
				</div>            
			</div>            
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['layouts']->value)."/vertical_navigation.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['view']->value)."/layouts/js.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		</div>				
		<script>
	        $(document).ready(function() {
	        	//* show all elements & remove preloader
	            setTimeout('$("html").removeClass("js")',1000);
	        });
		</script>	
	</body>		
</html><?php }} ?>