<?php

 
require($_SERVER['DOCUMENT_ROOT']."/smarty/libs/Smarty.class.php");

$smarty = new Smarty;
$smarty->setTemplateDir($_SERVER['DOCUMENT_ROOT']."/template/");
$smarty->setConfigDir($_SERVER['DOCUMENT_ROOT']."/config/");
$smarty->setLeftDelimiter('{%');
$smarty->setRightDelimiter('%}'); 


require("./article.class.php");

if($_GET["id"]){
	$article = new Article(array("id"=>$_GET["id"]));
	$data = $article->get();
	if(!$data){
		echo "error";
		exit();
	}
	while(list($key,$value) = each($data)){
	
		$smarty->assign($key, $value);
	}

}else if($_POST){ print_r($_POST);
	$article = new Article($_POST);
	$result = $article->save();
	echo $result ? "ok" : "error";
	exit();
}


//$smarty->assign("name", "x");


$smarty->display("app/blog/admin/article/page/detail.tpl");
//echo $smarty->fetch("template.html");

?>
