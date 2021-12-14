<?php
	include '../Controller/categorieC.php';
	$categorieC=new categorieC();
	$categorieC->supprimercategories($_GET["id"]);
	header('Location:dash/showCAT.php');
?>