<?php /* Smarty version Smarty-3.1.13, created on 2013-10-12 11:24:28
         compiled from "/home/eric/share/pocket/cms/protected/modules/admin/views/user/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:19069488815257c33f4a9ce6-77194028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '740359d9b80fe87c44e80e19a66ab2be4b9d4cb4' => 
    array (
      0 => '/home/eric/share/pocket/cms/protected/modules/admin/views/user/index.htm',
      1 => 1381548265,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19069488815257c33f4a9ce6-77194028',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5257c33f4e72f5_55466004',
  'variables' => 
  array (
    'columns' => 0,
    'fields' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5257c33f4e72f5_55466004')) {function content_5257c33f4e72f5_55466004($_smarty_tpl) {?><div class="row-fluid">
	<div class="span12">
		<h3 class="heading">用户管理</h3>
		<div id="datagrid-layout"></div>
	</div>
</div>

<script>

Ext.require([
             'Ext.grid.*',
             'Ext.data.*',
             'Ext.util.*',
             'Ext.state.*'
         ]);
         Ext.onReady(function() {
        	    var sm = Ext.create('Ext.selection.CheckboxModel', {
        	        listeners: {
        					selectionchange: function(sm, selections) {
        	            }
        	        }
        	    });
        	    
        	    
        	    var columns = <?php echo $_smarty_tpl->tpl_vars['columns']->value;?>
;
        	    var opts = {
        				xtype:'actioncolumn',
        				width:85,
        				text: '操作',
        				items: [{
        					iconCls : 'splashy-document_letter_edit',
        					tooltip: '修改',
        					handler: function(grid, rowIndex, colIndex) {
        						var id = grid.getStore().getAt(rowIndex).get('user_id');
        						window.location.href = '/admin/user/userinfo?action=edit&id=' + id;
        					}
        				}]
        			};
        	    columns.push(opts);
        	    
        		Ext.QuickTips.init();
        	    // register model
        	    Ext.define('media', {
        	        extend: 'Ext.data.Model',
        	        fields: <?php echo $_smarty_tpl->tpl_vars['fields']->value;?>
,
        	        idProperty: 'user_id'
        	    });
        	    var store = Ext.create('Ext.data.ArrayStore', {
        			pageSize : 20,
        			page : 1,
        			start : 0,
        	        model: 'media',
        	        remoteSort: true,
        			remoteFilter:true,
        			autoLoad: true,
        			autoSync: true,
        	        proxy: {
        				type: 'ajax',
        	            url: '/admin/user/userlist',
        	            simpleSortMode: true
        	        },
        	        /*
        	        sorters: [{
        	            property: 'user_id',
        	            direction: 'DESC'
        	        }]
        	        */
        	    });


             // create the Grid
             window.grid = Ext.create('Ext.grid.Panel', {
                 id:'grid',
                 store: store,
         		 stateId : 'bms_manage_media',
                 columns: columns,
                 columnLines: true,
                 selModel: sm,
                 renderTo:'datagrid-layout',
                 dockedItems: [{
                	 xtype: 'toolbar',
                	 height: 40, 
                	 items: [
						{
							height:25,
							html: '<a href="#" ><i class="splashy-contact_blue_add" ></i>&nbsp;新增用户</a>',
							handler: function(){
								window.location.href = "/admin/user/userinfo";
							}
						},
						'-',
						{
							itemId: 'user_email',
							xtype: 'textfield',
							emptyText : '邮箱',
							width:125,
							height:25,
						},
						'-',
						{
							itemId: 'user_name',
							xtype: 'textfield',
							emptyText : '用户名',
							width:125,
							height:25,
						},
						'-',
						{
							text:'选择用户组',
							width:125,
							xtype: 'combobox',
							//typeAhead: true,
							triggerAction: 'all',
							selectOnTab: true,
							editable:false,
							emptyText : '选择省份',
							store: [
									['','状态'],
									['1','发布'],
									['0','草稿'],
								],
							lazyRender: true,
							style: {
								'vertical-align':'middle'
					        }
							//listClass: 'x-combo-list-small'
							/*
							items:[
							 	{
							 		text:'a'
							 	}，
							 	{
							 		text:'b'
							 	}
							       
							 ]*/
						}
                	 ],
                 }]
             });
         });

</script>
<?php }} ?>