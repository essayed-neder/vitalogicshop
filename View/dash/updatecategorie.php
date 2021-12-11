<?php
include_once '../../Model/categorie.php';
include_once '../../Controller/categorieC.php';
$categorie = null
;


if (
    
    
    isset($_POST["id"]) &&		
    isset($_POST["nom"]) 
    
    

) {
    
        $categorie = new categorie(
            $_POST['nom']
          
        );
        $categorieC = new categorieC();

        $categorieC->modifiercategories($categorie, $_POST["id"]);
        header('Location:showCAT.php');

    }


?>