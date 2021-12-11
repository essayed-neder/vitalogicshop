<?php

$connect = new PDO('mysql:host=localhost;dbname=vitalogicshop', 'root', '');

if(isset($_POST["query"]))
{	

	$data = array();

	$condition = preg_replace('/[^A-Za-z0-9\- ]/', '', $_POST["query"]);

	$query = "
	SELECT nom FROM produits
		WHERE nom LIKE '%".$condition."%' 
		ORDER BY id DESC 
		LIMIT 10
	";

	$result = $connect->query($query);

	$replace_string = '<b>'.$condition.'</b>';

	foreach($result as $row)
	{
		$data[] = array(
			'nom'		=>	str_ireplace($condition, $replace_string, $row["nom"])
			
		);
	}

	echo json_encode($data);
}

?>