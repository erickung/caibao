<?php /* Smarty version Smarty-3.1.13, created on 2013-10-06 13:54:39
         compiled from "G:\wamp\www\pocket\bms\protected\views\layouts\main.htm" */ ?>
<?php /*%%SmartyHeaderCode:28309525152d6812881-55570419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1115aaefab8b5727ab78145fc2a6f1d38a36214f' => 
    array (
      0 => 'G:\\wamp\\www\\pocket\\bms\\protected\\views\\layouts\\main.htm',
      1 => 1381067676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28309525152d6812881-55570419',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_525152d68abb73_77787618',
  'variables' => 
  array (
    'view' => 0,
    'res' => 0,
    'content' => 0,
    'layouts' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525152d68abb73_77787618')) {function content_525152d68abb73_77787618($_smarty_tpl) {?><!DOCTYPE html>
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