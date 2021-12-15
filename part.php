<?php


include_once '../../Controller/eventC.php'; 

session_start();

    $control = new eventC();

    $number=$_GET['number'];
    $id=$_SESSION['id'];


    $control -> add_participation($id,$number); 

    header("location:../eventfront.php");

?>