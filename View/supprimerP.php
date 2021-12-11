<?php
	include '../Controller/produitC.php';
	$produitC=new produitC();
	$produitC->supprimerproduits($_GET["id"]);
	header('Location:dash/showP.php');
?>