<?php /* Smarty version Smarty-3.1.13, created on 2013-10-07 06:55:51
         compiled from "G:\wamp\www\pocket\bms\protected\modules\admin\views\layouts\vertical_navigation.htm" */ ?>
<?php /*%%SmartyHeaderCode:3269152516ba3aa2ae9-72503378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44d0d91f6cc213a89441ea7472f088c8ba266e99' => 
    array (
      0 => 'G:\\wamp\\www\\pocket\\bms\\protected\\modules\\admin\\views\\layouts\\vertical_navigation.htm',
      1 => 1381128948,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3269152516ba3aa2ae9-72503378',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52516ba3afda71_59278162',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52516ba3afda71_59278162')) {function content_52516ba3afda71_59278162($_smarty_tpl) {?><a href="javascript:void(0)" class="sidebar_switch on_switch ttip_r" title="Hide Sidebar">Sidebar switch</a>
<div class="sidebar">
	
	<div class="antiScroll">
		<div class="antiscroll-inner">
			<div class="antiscroll-content">
		
				<div class="sidebar_inner">
					<form action="index.php?uid=1&amp;page=search_page" class="input-append" method="post" >
						<input autocomplete="off" name="query" class="search_query input-medium" size="16" type="text" placeholder="Search..." /><button type="submit" class="btn"><i class="icon-search"></i></button>
					</form>
					<div id="side_accordion" class="accordion">
						
						<div class="accordion-group">
							<div class="accordion-heading sdb_h_active">
								<a href="#collapseOne" data-parent="#side_accordion" data-toggle="collapse" class="accordion-toggle">
									<i class="icon-user"></i> 用户管理
								</a>
							</div>
							<div class="accordion-body collapse in" id="collapseOne">
								<div class="accordion-inner">
									<ul class="nav nav-list">
										<li class="active"><a href="javascript:void(0)">用户</a></li>
										<li><a href="javascript:void(0)">用户组</a></li>
										<li><a href="javascript:void(0)">角色</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="accordion-group">
							<div class="accordion-heading">
								<a href="#collapseTwo" data-parent="#side_accordion" data-toggle="collapse" class="accordion-toggle">
									<i class="icon-th"></i> 模块管理
								</a>
							</div>
							<div class="accordion-body collapse" id="collapseTwo">
								<div class="accordion-inner">
									<ul class="nav nav-list">
										<li><a href="javascript:void(0)">Content blocks</a></li>
										<li><a href="javascript:void(0)">Tags</a></li>
										<li><a href="javascript:void(0)">Blog</a></li>
										<li><a href="javascript:void(0)">FAQ</a></li>
										<li><a href="javascript:void(0)">Formbuilder</a></li>
										<li><a href="javascript:void(0)">Location</a></li>
										<li><a href="javascript:void(0)">Profiles</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="accordion-group">
							<div class="accordion-heading">
								<a href="#collapseFour" data-parent="#side_accordion" data-toggle="collapse" class="accordion-toggle">
									<i class="icon-cog"></i> 系统管理
								</a>
							</div>
							<div class="accordion-body collapse" id="collapseFour">
								<div class="accordion-inner">
									<ul class="nav nav-list">
										<li class="nav-header">People</li>
										<li class="active"><a href="javascript:void(0)">Account Settings</a></li>
										<li><a href="javascript:void(0)">IP Adress Blocking</a></li>
										<li class="nav-header">System</li>
										<li><a href="javascript:void(0)">Site information</a></li>
										<li><a href="javascript:void(0)">Actions</a></li>
										<li><a href="javascript:void(0)">Cron</a></li>
										<li class="divider"></li>
										<li><a href="javascript:void(0)">Help</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					
					<div class="push"></div>
				</div>
			
			</div>
		</div>
	</div>

</div>
<?php }} ?>