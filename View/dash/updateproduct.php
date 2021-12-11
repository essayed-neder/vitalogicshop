<?php
include_once '../../Model/produit.php';
include_once '../../Controller/produitC.php';
$produit = null
;
if (
    
    
    isset($_POST["nom"]) &&		
    isset($_POST["prix"]) &&
    isset($_POST["quantite"]) && 
    isset($_POST["urlimage"]) && 
    isset($_POST["description"])&&
    isset($_POST["idcategorie"])&&
    isset($_POST["Type_sous_Cat"])
   
    

) {
    
        $produit = new produit(
            $_POST['nom'],
            $_POST['prix'],
            $_POST['quantite'], 
          
            $_POST['urlimage'],
            $_POST['description'],
            $_POST['idcategorie'],
            $_POST['Type_sous_Cat']
        );
        $produitC = new produitC();

        $produitC->modifierproduits($produit, $_POST["id"]);
        header('Location:showP.php');

    }


?>