<?php /* Smarty version Smarty-3.1.13, created on 2013-10-08 02:46:17
         compiled from "D:\wamp\www\pockets\bms\protected\modules\admin\views\layouts\vertical_navigation.htm" */ ?>
<?php /*%%SmartyHeaderCode:16728525371f963a6e5-58275368%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f156da207e50a1251c7c1e8d832b3f1b34880837' => 
    array (
      0 => 'D:\\wamp\\www\\pockets\\bms\\protected\\modules\\admin\\views\\layouts\\vertical_navigation.htm',
      1 => 1381161216,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16728525371f963a6e5-58275368',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_525371f96425d4_85781022',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525371f96425d4_85781022')) {function content_525371f96425d4_85781022($_smarty_tpl) {?><a href="javascript:void(0)" class="sidebar_switch on_switch ttip_r" title="Hide Sidebar">Sidebar switch</a>
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