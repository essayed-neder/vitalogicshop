<?php
	include '../Controller/articleC.php';
	$articleC=new articleC();
	$articleC->supprimerArticle($_GET["post_id"]);
	header('Location:dash/articles.php');
?>