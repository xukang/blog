<?php /* Smarty version Smarty-3.1.14, created on 2013-08-01 11:10:53
         compiled from "D:\www\xukang.ouyangtao.com\template\app\blog\admin\article\page\detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1980951f9cab0a5bf67-98783705%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae1e64578c94dc6c915bac7cd326d3bd8630310e' => 
    array (
      0 => 'D:\\www\\xukang.ouyangtao.com\\template\\app\\blog\\admin\\article\\page\\detail.tpl',
      1 => 1375324927,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1980951f9cab0a5bf67-98783705',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_51f9cab0bf4b88_76073925',
  'variables' => 
  array (
    'id' => 0,
    'title' => 0,
    'category' => 0,
    'content' => 0,
    'keyword' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f9cab0bf4b88_76073925')) {function content_51f9cab0bf4b88_76073925($_smarty_tpl) {?><!DOCTYPE HTML>
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
			<h2>新建文章</h2>
			<form action="demo.php" method="post">
				<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
				<fieldset>
					<label>标题</label>
					<input type="text" name="title" class="span8" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
">
					
					
					<label class="" >分类</label>
					<select name="category" class="span2">
						<option value="0">&nbsp;&nbsp;</option>
						<option value="1" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['category']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1==1){?>selected<?php }?>>HTML</option>
						<option value="2" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['category']->value;?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2==2){?>selected<?php }?>>CSS</option>
					</select>
					 
					 <label>正文</label>
					 <textarea name="content" rows="20" class="span8" ><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</textarea>
					
					 <label>关键字</label>
					 <input type="text" name="keyword" class="span8" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
">

					 <div>
						<button type="submit" class="btn btn-primary">保存</button>
						<button type="button" class="btn">取消</button>
					 </div>
				</fieldset>
			</form>
			
		</div>
		</div>
	</div>

	
	<?php if(!class_exists('FISResource')){require_once('D:/www/xukang.ouyangtao.com/smarty/libs/plugins/FISResource.class.php');}$_tpl_path=FISResource::load("app/common/footer/1.0.0:widget/footer.tpl",$_smarty_tpl->smarty);if(isset($_tpl_path)){echo $_smarty_tpl->getSubTemplate($_tpl_path, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, $_smarty_tpl->caching, $_smarty_tpl->cache_lifetime, array(), Smarty::SCOPE_LOCAL);}else{trigger_error('unable to locale resource "'."app/common/footer/1.0.0:widget/footer.tpl".'"', E_USER_ERROR);}?>
</body><?php if(class_exists('FISResource')){echo FISResource::render('js');echo FISResource::renderScriptPool();}?>
<?php $_smarty_tpl->registerFilter('output', array('FISResource', 'renderResponse'));?></html><?php }} ?>