<?php /* Smarty version Smarty-3.1.13, created on 2013-10-08 09:09:43
         compiled from "D:\wamp\www\pockets\bms\protected\views\layouts\horizontal_navigation.htm" */ ?>
<?php /*%%SmartyHeaderCode:939452536eaa04a524-68764712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5733844c27b168fb82618280808507ab457cbff0' => 
    array (
      0 => 'D:\\wamp\\www\\pockets\\bms\\protected\\views\\layouts\\horizontal_navigation.htm',
      1 => 1381223380,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '939452536eaa04a524-68764712',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52536eaa05b539_61551373',
  'variables' => 
  array (
    'res' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52536eaa05b539_61551373')) {function content_52536eaa05b539_61551373($_smarty_tpl) {?>				<div class="navbar navbar-fixed-top">
					<div class="navbar-inner">
						<div class="container-fluid">
							<a class="brand" href="/"><i class="icon-home icon-white"></i> 风行CMS </a>
							<ul class="nav user_menu pull-right">
								<li class="hidden-phone hidden-tablet">
									<div class="nb_boxes clearfix">
										<a data-toggle="modal" data-backdrop="static" href="#myMail" class="label ttip_b" title="New messages">25 <i class="splashy-mail_light"></i></a>
										<a data-toggle="modal" data-backdrop="static" href="#myTasks" class="label ttip_b" title="New tasks">10 <i class="splashy-calendar_week"></i></a>
									</div>
								</li>
								<li class="divider-vertical hidden-phone hidden-tablet"></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle nav_condensed" data-toggle="dropdown"><i class="flag-gb"></i> <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="javascript:void(0)"><i class="flag-de"></i> Deutsch</a></li>
										<li><a href="javascript:void(0)"><i class="flag-fr"></i> Français</a></li>
										<li><a href="javascript:void(0)"><i class="flag-es"></i> Español</a></li>
										<li><a href="javascript:void(0)"><i class="flag-ru"></i> Pусский</a></li>
									</ul>
								</li>
								<li class="divider-vertical hidden-phone hidden-tablet"></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/img/user_avatar.png" alt="" class="user_avatar" />Johny Smith <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="index.php?uid=1&amp;page=user_profile">My Profile</a></li>
										<li><a href="javascrip:void(0)">Another action</a></li>
										<li class="divider"></li>
										<li><a href="/site/logout">Log Out</a></li>
									</ul>
								</li>
							</ul>
							<ul class="nav" id="mobile-nav">
								<li class="dropdown">
									<a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-list-alt icon-white"></i> Forms <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="form_elements.htm">Form elements</a></li>
										<li><a href="form_extended.htm">Extended form elements</a></li>
										<li><a href="form_validation.htm">Form Validation</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-th icon-white"></i> Components <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="alerts_btns.htm">Alerts & Buttons</a></li>
										<li><a href="icons.htm">Icons</a></li>
										<li><a href="notifications.htm">Notifications</a></li>
										<li><a href="tables.htm">Tables</a></li>
										<li><a href="tables_more.htm">Tables (more examples)</a></li>
										<li><a href="tabs_accordion.htm">Tabs & Accordion</a></li>
										<li><a href="tooltips.htm">Tooltips, Popovers</a></li>
										<li><a href="typography.htm">Typography</a></li>
										<li><a href="widgets.htm">Widget boxes</a></li>
										<li class="dropdown">
											<a href="#">Sub menu <b class="caret-right"></b></a>
											<ul class="dropdown-menu">
												<li><a href="#">Sub menu 1.1</a></li>
												<li><a href="#">Sub menu 1.2</a></li>
												<li><a href="#">Sub menu 1.3</a></li>
												<li>
													<a href="#">Sub menu 1.4 <b class="caret-right"></b></a>
													<ul class="dropdown-menu">
														<li><a href="#">Sub menu 1.4.1</a></li>
														<li><a href="#">Sub menu 1.4.2</a></li>
														<li><a href="#">Sub menu 1.4.3</a></li>
													</ul>
												</li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="dropdown">
									<a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-wrench icon-white"></i> Plugins <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="charts.htm">Charts</a></li>
										<li><a href="calendar.htm">Calendar</a></li>
										<li><a href="datatable.htm">Datatable</a></li>
										<li><a href="dynamic_tree.htm">Dynamic tree</a></li>
										<li><a href="editable_elements.htm">Editable elements</a></li>
										<li><a href="file_manager.htm">File Manager</a></li>
										<li><a href="floating_header.htm">Floating List Header</a></li>
										<li><a href="google_maps.htm">Google Maps</a></li>
										<li><a href="gallery.htm">Gallery Grid</a></li>
										<li><a href="wizard.htm">Wizard</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-file icon-white"></i> 管理 <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="blog_page.htm">用户管理</a></li>
										<li><a href="chat.htm">模块管理</a></li>
										<li><a href="error_404.html">权限管理</a></li>
										<li><a href="invoice.htm"> Invoice</a></li>
										<li><a href="mailbox.htm">Mailbox</a></li>
										<li><a href="search_page.htm">Search page</a></li>
										<li><a href="user_profile.htm">User profile</a></li>
										<li><a href="user_static.htm">User profile (static)</a></li>
									</ul>
								</li>
								<li>
								</li>
							</ul>
						</div>
					</div>
				</div>
<?php }} ?>