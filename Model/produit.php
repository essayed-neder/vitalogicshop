<?php
	class produit{
		
		private $nom=null;
		private $prix=null;
		private $quantite=null;
		private $urlimage=null;
		private $description=null;
		private $idcategorie=null;
		private $Type_sous_Cat=null;
		
		
		
		function __construct( $nom, $prix, $quantite, $urlimage, $description, $idcategorie, $Type_sous_Cat){
			
			$this->nom=$nom;
			$this->prix=$prix;
			$this->quantite=$quantite;
			$this->urlimage=$urlimage;
			$this->description=$description;
			$this->idcategorie=$idcategorie;
			$this->Type_sous_Cat=$Type_sous_Cat;
			
		}
		
		function getNom(){
			return $this->nom;
		}
		function getprix(){
			return $this->prix;
		}
		function getquantite(){
			return $this->quantite;
		}
		function geturlimage(){
			return $this->urlimage;
		}
		function getdescription(){
			return $this->description;
		}
		function getidcategorie(){
			return $this->idcategorie;
		}
		function getType_sous_Cat(){
			return $this->Type_sous_Cat;
		}
		
        
		function setNom(string $nom){
			$this->nom=$nom;
		}
		function setprix(int $prix){
			$this->prix=$prix;
		}
		function setquantite(int $quantite){
			$this->quantite=$quantite;
		}
		function seturlimage(string $urlimage){
			$this->urlimage=$urlimage;
		}
		function setdescription(string $description){
			$this->description=$description;
		}
		function setidcategorie(int $idcategorie){
			$this->idcategorie=$idcategorie;
		}
		function setType_sous_Cat(string $idcategorie){
			$this->Type_sous_Cat=$Type_sous_Cat;
		}
		
	}


?>
