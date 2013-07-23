<?php /* Smarty version Smarty-3.1.14, created on 2013-07-23 18:28:55
         compiled from "D:\www\xukang.ouyangtao.com\template\app\blog\admin\article\page\list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2016451ece0dc1fc697-59315649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c68de4c8ee5f2b4c001c3b82378fe794d8008c97' => 
    array (
      0 => 'D:\\www\\xukang.ouyangtao.com\\template\\app\\blog\\admin\\article\\page\\list.tpl',
      1 => 1374575330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2016451ece0dc1fc697-59315649',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_51ece0dc27d563_96057496',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ece0dc27d563_96057496')) {function content_51ece0dc27d563_96057496($_smarty_tpl) {?><?php if(!class_exists('FISResource')){require_once('D:/www/xukang.ouyangtao.com/smarty/libs/plugins/FISResource.class.php');}FISResource::setFramework(FISResource::getUri("/static/mod.js", $_smarty_tpl->smarty)); ?><html>
<head>
<?php if(!class_exists('FISResource')){require_once('D:/www/xukang.ouyangtao.com/smarty/libs/plugins/FISResource.class.php');}echo FISResource::cssHook();?></head>
<body>
	<?php if(!class_exists('FISResource')){require_once('D:/www/xukang.ouyangtao.com/smarty/libs/plugins/FISResource.class.php');}FISResource::load("/static/mod.js",$_smarty_tpl->smarty);?>
	<?php if(!class_exists('FISResource')){require_once('D:/www/xukang.ouyangtao.com/smarty/libs/plugins/FISResource.class.php');}FISResource::load("libs/bootstrap/2.3.2:bootstrap.css",$_smarty_tpl->smarty);?>
	list de

	<?php if(!class_exists('FISResource')){require_once('D:/www/xukang.ouyangtao.com/smarty/libs/plugins/FISResource.class.php');}$_tpl_path=FISResource::load("app/blog/admin/article:widget/a.tpl",$_smarty_tpl->smarty);if(isset($_tpl_path)){echo $_smarty_tpl->getSubTemplate($_tpl_path, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, $_smarty_tpl->caching, $_smarty_tpl->cache_lifetime, array('title'=>"title"), Smarty::SCOPE_LOCAL);}else{trigger_error('unable to locale resource "'."app/blog/admin/article:widget/a.tpl".'"', E_USER_ERROR);}?>
	
</body><?php if(class_exists('FISResource')){echo FISResource::render('js');echo FISResource::renderScriptPool();}?>
<?php $_smarty_tpl->registerFilter('output', array('FISResource', 'renderResponse'));?></html><?php if(!class_exists('FISResource')){require_once('D:/www/xukang.ouyangtao.com/smarty/libs/plugins/FISResource.class.php');}FISResource::load("app/blog/admin/article:page/list.tpl",$_smarty_tpl->smarty);?><?php }} ?>