<?php

include_once  $_SERVER['DOCUMENT_ROOT']."/vitalogicshop/config.php";
    include_once  $_SERVER['DOCUMENT_ROOT']."/vitalogicshop//Model/produit.php";
    
	class produitC {
		function afficherproduits(){
			$sql="SELECT * FROM produits where id";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}

		function rechercheproduit($nom){
			$sql="SELECT * from produits where nom='$nom'";
			$db = config::getConnexion();
			try{
				$query=$db->query($sql);

				
				return $query;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		
		function ajouterproduits($produits){
			$sql="INSERT INTO produits ( nom, prix, quantite, urlimage, description, idcategorie, Type_sous_Cat ) 
			VALUES ( :nom, :prix, :quantite, :urlimage, :description, :idcategorie, :Type_sous_Cat  )";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					
					'nom' => $produits->getnom(),
					'prix' => $produits->getprix(),
					'quantite' => $produits->getquantite(),
					'urlimage' => $produits->geturlimage(),
					'description' => $produits->getdescription(),
					'idcategorie' => $produits->getidcategorie(),
					'Type_sous_Cat' => $produits->getType_sous_Cat()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
				
			}			
		}
	
		function recupererproduits($id){
			$sql="SELECT * from produits where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$produits=$query->fetch();
				return $produits;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		
		
		function modifierproduits($produits, $id){
			var_dump($produits->getNom());
			try {

				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE produits SET 
						nom= :nom, 
						prix= :prix, 
						quantite= :quantite, 
						urlimage= :urlimage, 
						description= :description,
						idcategorie= :idcategorie,
						Type_sous_Cat= :Type_sous_Cat  
					WHERE id= :id'
				);
				$query->execute([
					'nom' => $produits->getNom(),
					'prix' => $produits->getprix(),
					'quantite' => $produits->getquantite(),
					'urlimage' => $produits->geturlimage(),
					'description' => $produits->getdescription(),
					'idcategorie' => $produits->getidcategorie(),
					'Type_sous_Cat' => $produits->getType_sous_Cat(),
					 
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
        function supprimerproduits($id){
			$sql="DELETE FROM produits WHERE id=:id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id', $id);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function trie_asc (){
			//$sql="SElECT * From produit e inner join formationphp.produit a on e.idProduit= a.idProduit";
			$sql="SELECT * FROM produits order by prix ASC ";
			$db = config::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		function calcul(){
			$sql="SELECT sum(prix) as total,sum(quantite) as quantite from produits ";
			$db = config::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

	}
?>