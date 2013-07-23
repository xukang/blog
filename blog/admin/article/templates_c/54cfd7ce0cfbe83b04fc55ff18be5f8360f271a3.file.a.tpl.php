<?php /* Smarty version Smarty-3.1.14, created on 2013-07-23 14:07:07
         compiled from "D:\www\xukang.ouyangtao.com\template\app\blog\admin\article\widget\a.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3165751ece63c48df87-21273220%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54cfd7ce0cfbe83b04fc55ff18be5f8360f271a3' => 
    array (
      0 => 'D:\\www\\xukang.ouyangtao.com\\template\\app\\blog\\admin\\article\\widget\\a.tpl',
      1 => 1374559619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3165751ece63c48df87-21273220',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_51ece63c4cda56_96318182',
  'variables' => 
  array (
    'title' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ece63c4cda56_96318182')) {function content_51ece63c4cda56_96318182($_smarty_tpl) {?><div>
	widget: <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

</div>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1=="x"){?>
	xxx <?php if(!class_exists('FISResource')){require_once('D:/www/xukang.ouyangtao.com/smarty/libs/plugins/FISResource.class.php');}FISResource::load("app/blog/admin/article:widget/x.js",$_smarty_tpl->smarty);?>
<?php }else{ ?>
	yyy <?php if(!class_exists('FISResource')){require_once('D:/www/xukang.ouyangtao.com/smarty/libs/plugins/FISResource.class.php');}FISResource::load("app/blog/admin/article:widget/b.js",$_smarty_tpl->smarty);?>
<?php }?><?php }} ?>