<?php

 
require($_SERVER['DOCUMENT_ROOT']."/smarty/libs/Smarty.class.php");

$smarty = new Smarty;
$smarty->setTemplateDir($_SERVER['DOCUMENT_ROOT']."/template/");
$smarty->setConfigDir($_SERVER['DOCUMENT_ROOT']."/config/");

$smarty->assign("name", "y");

$smarty->display("app/blog/admin/article/page/list.tpl");
//echo $smarty->fetch("template.html");

?>
