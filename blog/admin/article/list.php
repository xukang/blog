<?php

 
require($_SERVER['DOCUMENT_ROOT']."/smarty/libs/Smarty.class.php");

$smarty = new Smarty;
$smarty->setTemplateDir($_SERVER['DOCUMENT_ROOT']."/template/");
$smarty->setConfigDir($_SERVER['DOCUMENT_ROOT']."/config/");
$smarty->setLeftDelimiter('{%');
$smarty->setRightDelimiter('%}'); 


require("./article.class.php");

$list = array(
	array("id"=>1, "title"=>"titleA", "category"=>"1"),
	array("id"=>2, "title"=>"titleB", "category"=>"2"),
	array("id"=>3, "title"=>"titleC", "category"=>"3"),
	array("id"=>4, "title"=>"titleD", "category"=>"4"),
);

$smarty->assign("list", $list);

$smarty->display("app/blog/admin/article/page/list.tpl");

?>
    