<?php

include_once  $_SERVER['DOCUMENT_ROOT']."/vitalogicadop/config.php";
    include_once  $_SERVER['DOCUMENT_ROOT']."/vitalogicadop//Model/animal.php";
    
	class animalC {
		function afficheranimals(){
			$sql="SELECT * FROM animaux where id";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		
		
		function ajouteranimals($animals){
			$sql="INSERT INTO animaux ( nom,   urlimage, description, idcategorie ) 
			VALUES ( :nom,  :urlimage, :description, :idcategorie  )";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					
					'nom' => $animals->getnom(),
					
					'urlimage' => $animals->geturlimage(),
					'description' => $animals->getdescription(),
					'idcategorie' => $animals->getidcategorie()
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
				
			}			
		}
	
		function recupereranimals($id){
			$sql="SELECT * from animaux where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$animals=$query->fetch();
				return $animals;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifieranimals($animals, $id){
			var_dump($animals);
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE animaux SET 
						nom= :nom, 
					
						urlimage= :urlimage, 
						description= :description,
						idcategorie= :idcategorie
						  
					WHERE id= :id'
				);
				$query->execute([
					'nom' => $animals->getnom(),
					
					'urlimage' => $animals->geturlimage(),
					'description' => $animals->getdescription(),
					'idcategorie' => $animals->getidcategorie(),
					 
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
        function supprimeranimals($id){
			$sql="DELETE FROM animaux WHERE id=:id";
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
			$sql="SELECT * FROM animaux order by nom ASC ";
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