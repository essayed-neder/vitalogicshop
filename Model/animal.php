<?php
	class animal{
		
		private $nom=null;
	
		private $urlimage=null;
		private $description=null;
		private $idcategorie=null;
	
		
		
		
		function __construct( $nom, $urlimage, $description, $idcategorie){
			
			$this->nom=$nom;
			
			$this->urlimage=$urlimage;
			$this->description=$description;
			$this->idcategorie=$idcategorie;
			
			
		}
		
		function getNom(){
			return $this->nom;
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
			
		
        
		function setNom(string $nom){
			$this->nom=$nom;
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
	
	}


?>
