<?php
	include '../Controller/animalC.php';
	$animalC=new animalC();
	$animalC->supprimeranimals($_GET["id"]);
	header('Location:dash/showA.php');
?>