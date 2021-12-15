<?php

    include_once '../Controller/eventC.php';

    $matricule_evenement = $_POST['matricule'];
    $nom = $_POST['nom'];
    $description = $_POST['description'];
    $lieu = $_POST['lieu'];
    $date = $_POST['date'];
    $quartier = $_POST['quartier'];
    

    $control = new eventC();
    //$test = new Evenement($matricule,$nom,$description,$lieu,$date,$quartier);
   $control->modifier($matricule_evenement,$nom,$description,$lieu,$date,$quartier);
    
   
    header("location:index.php");
?>