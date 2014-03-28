<?php /* Smarty version Smarty-3.1.13, created on 2013-10-11 17:22:44
         compiled from "/home/eric/share/pocket/cms/protected/modules/admin/views/user/user_info.htm" */ ?>
<?php /*%%SmartyHeaderCode:16268717855257c3648c2478-05006847%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed7c0df2711d194710379e7e3108682f38504e1b' => 
    array (
      0 => '/home/eric/share/pocket/cms/protected/modules/admin/views/user/user_info.htm',
      1 => 1381474572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16268717855257c3648c2478-05006847',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5257c36495e274_30941334',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5257c36495e274_30941334')) {function content_5257c36495e274_30941334($_smarty_tpl) {?><div class="row-fluid">
	<div class="span12">
		<h3 class="heading">用户信息</h3>
		<div id="user_info" class="span8">
			<form method="POST" class="bms-form form-horizontal" action="" onSubmit="this.action='/admin/user/edit';this.submit();">
				<div class="control-group">
					<label class="control-label" for="user_email">Email<span class="f_req">*</span></label>
					<div class="controls">
						<input type="text" required name="user_email" id="user_email" placeholder="Email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->user_email;?>
">
					</div>
            	</div>
				<div class="control-group">
					<label class="control-label" for="user_name">用户名<span class="f_req">*</span></label>
					<div class="controls">
						<input type="text" required id="user_name" name="user_name" placeholder="用户名" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->user_name;?>
">
					</div>
            	</div>
       
				<div class="control-group">
					<label class="control-label" for="user_group">用户组<span class="f_req">*</span></label>&nbsp;&nbsp;&nbsp;&nbsp;
					<select name="chosen_b" id="chosen_b" multiple data-placeholder="选择组" class="chzn_b span12">
						<option value="部门1">部门1</option>
						<option value="部门2">部门2</option>
						<option value="部门3">4部门3</option>
						<option value="部门4">2部门4</option>
						<option value="部门5">3部门5</option>	
					</select>	
				</div>
				<br><br>
				<div class="control-group">
					<div class="controls">&nbsp;&nbsp;&nbsp;&nbsp;
						<input class="btn btn-gebo" type="submit" value="提交">&nbsp;&nbsp;&nbsp;&nbsp;
						<button type="button" class="btn" onclick="javascript:history.go(-1);return;">取消</button>
					</div>
				</div>
				
				<input type="hidden" name="action" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
				<input type="hidden" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->user_id;?>
">
			</form>
		</div>
		<div class="span4"></div>
		
		
	</div>
</div><?php }} ?>