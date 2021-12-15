<?php

// include_once "../../config.php";
include_once '../../Controller/eventC.php'; 

    $control = new eventC();

    $number=$_GET['number'];

    $control -> supprimerEvenement($number); 

    header("location:events.php");

?>