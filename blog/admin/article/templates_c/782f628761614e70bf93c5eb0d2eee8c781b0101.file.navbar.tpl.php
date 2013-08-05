<?php /* Smarty version Smarty-3.1.14, created on 2013-07-30 14:26:09
         compiled from "D:\www\xukang.ouyangtao.com\template\app\common\navbar\1.0.0\widget\navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36351f757fd8838e8-84787269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '782f628761614e70bf93c5eb0d2eee8c781b0101' => 
    array (
      0 => 'D:\\www\\xukang.ouyangtao.com\\template\\app\\common\\navbar\\1.0.0\\widget\\navbar.tpl',
      1 => 1375165565,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36351f757fd8838e8-84787269',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_51f757fd8cca24_68912588',
  'variables' => 
  array (
    'navActive' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f757fd8cca24_68912588')) {function content_51f757fd8cca24_68912588($_smarty_tpl) {?><div class="navbar navbar-inverse navbar-static-top">
	<div class="navbar-inner">
		<div class="container">

			<ul class="nav">
				<li <?php if ($_smarty_tpl->tpl_vars['navActive']->value=="index"){?>class="active"<?php }?>><a href="/blog/admin/">首页</a></li>
				<li <?php if ($_smarty_tpl->tpl_vars['navActive']->value=="new"){?>class="active"<?php }?>><a href="new.php">新建</a></li>
				<li <?php if ($_smarty_tpl->tpl_vars['navActive']->value=="list"){?>class="active"<?php }?>><a href="list.php">列表</a></li>
			</ul>
		
		</div>
	</div>
</div><?php }} ?>