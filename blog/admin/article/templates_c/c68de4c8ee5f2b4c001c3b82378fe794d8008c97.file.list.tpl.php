<?php /* Smarty version Smarty-3.1.14, created on 2013-08-01 11:10:51
         compiled from "D:\www\xukang.ouyangtao.com\template\app\blog\admin\article\page\list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2016451ece0dc1fc697-59315649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c68de4c8ee5f2b4c001c3b82378fe794d8008c97' => 
    array (
      0 => 'D:\\www\\xukang.ouyangtao.com\\template\\app\\blog\\admin\\article\\page\\list.tpl',
      1 => 1375326650,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2016451ece0dc1fc697-59315649',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_51ece0dc27d563_96057496',
  'variables' => 
  array (
    'list' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ece0dc27d563_96057496')) {function content_51ece0dc27d563_96057496($_smarty_tpl) {?><!DOCTYPE HTML>
<?php  ?><html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php if(!class_exists('FISResource')){require_once('D:/www/xukang.ouyangtao.com/smarty/libs/plugins/FISResource.class.php');}echo FISResource::cssHook();?></head>
<body>
	<?php if(!class_exists('FISResource')){require_once('D:/www/xukang.ouyangtao.com/smarty/libs/plugins/FISResource.class.php');}FISResource::load("/static/mod.js",$_smarty_tpl->smarty);?>
	<?php if(!class_exists('FISResource')){require_once('D:/www/xukang.ouyangtao.com/smarty/libs/plugins/FISResource.class.php');}FISResource::load("libs/bootstrap/2.3.2:bootstrap.css",$_smarty_tpl->smarty);?>
	<?php if(!class_exists('FISResource')){require_once('D:/www/xukang.ouyangtao.com/smarty/libs/plugins/FISResource.class.php');}FISResource::load("libs/bootstrap/2.3.2:bootstrap-responsive-980.css",$_smarty_tpl->smarty);?>
	
	
	<?php if(!class_exists('FISResource')){require_once('D:/www/xukang.ouyangtao.com/smarty/libs/plugins/FISResource.class.php');}$_tpl_path=FISResource::load("app/common/navbar/1.0.0:widget/navbar.tpl",$_smarty_tpl->smarty);if(isset($_tpl_path)){echo $_smarty_tpl->getSubTemplate($_tpl_path, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, $_smarty_tpl->caching, $_smarty_tpl->cache_lifetime, array('navActive'=>"new"), Smarty::SCOPE_LOCAL);}else{trigger_error('unable to locale resource "'."app/common/navbar/1.0.0:widget/navbar.tpl".'"', E_USER_ERROR);}?>
	
	
	<div class="container">
		<div class="row">
			<div class="span12">
				<h2>文章列表</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th class="span1">#</th>
							<th class="span2">分类</th>
							<th>标题</th>
							<th class="span2">操作</th>
						</tr>
					</thead>
					<tbody>
						<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->index++;
?>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['item']->index;?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['item']->value['category'];?>
</td>
							<td><a href="detail.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></td>
							<td><a href="delete.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="btn btn-link  btn-small">删除</a></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	
	<?php if(!class_exists('FISResource')){require_once('D:/www/xukang.ouyangtao.com/smarty/libs/plugins/FISResource.class.php');}$_tpl_path=FISResource::load("app/common/footer/1.0.0:widget/footer.tpl",$_smarty_tpl->smarty);if(isset($_tpl_path)){echo $_smarty_tpl->getSubTemplate($_tpl_path, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, $_smarty_tpl->caching, $_smarty_tpl->cache_lifetime, array(), Smarty::SCOPE_LOCAL);}else{trigger_error('unable to locale resource "'."app/common/footer/1.0.0:widget/footer.tpl".'"', E_USER_ERROR);}?>
</body><?php if(class_exists('FISResource')){echo FISResource::render('js');echo FISResource::renderScriptPool();}?>
<?php $_smarty_tpl->registerFilter('output', array('FISResource', 'renderResponse'));?></html><?php }} ?>