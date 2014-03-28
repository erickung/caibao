<?php /* Smarty version Smarty-3.1.13, created on 2013-12-31 02:59:23
         compiled from "D:\wamp\www\jiankong\cms\protected\views\layouts\main.htm" */ ?>
<?php /*%%SmartyHeaderCode:211352c2330b380d29-76455569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cfa08ef95995f5232767e8ac7968a432bb50869' => 
    array (
      0 => 'D:\\wamp\\www\\jiankong\\cms\\protected\\views\\layouts\\main.htm',
      1 => 1381491501,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211352c2330b380d29-76455569',
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
  'unifunc' => 'content_52c2330b3ba3b9_23282188',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c2330b3ba3b9_23282188')) {function content_52c2330b3ba3b9_23282188($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
    <head>
    	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['view']->value)."/layouts/head.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </head>
    <body>
    	<!-- 
        <div id="loading_layer" style="display:none"><img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/img/ajax_loader.gif" alt="" /></div>
		 -->
		<div id="maincontainer" class="clearfix">
			<header>
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['view']->value)."/layouts/horizontal_navigation.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
				
			</header>    
			<div id="contentwrapper">                
				<div class="main_content">       
					<!-- 
					<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['view']->value)."/layouts/footprints.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
      
					 -->       						
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
	        	$("html").removeClass("js");
	            //setTimeout('$("html").removeClass("js")',80);
	        });
		</script>	
	</body>		
</html><?php }} ?>