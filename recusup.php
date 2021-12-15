<?php

    include_once '../Controller/eventC.php';

    $matricule = $_POST['matricule'];
    

    $control = new eventC();
    //$test = new Evenement($matricule,$nom,$description,$lieu,$date,$quartier);
   $control->supprimerEvenement($matricule);

    header("location:index.php");
?>