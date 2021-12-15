<?php

    class Evenement{

        
        private string $matricule_evenement;
        private string $nom;
        private string $description;
        private string $lieu;
        private string $date;
        private string $quartier;
    
        public function __construct(string $matricule_evenement, string $nom,string $description,string $lieu,string $date,string $quartier){
            $this->matricule_evenement = $matricule_evenement;
            $this->nom = $nom;
            $this->description = $description;
            $this->lieu = $lieu;
            $this->date = $date;
            $this->quartier = $quartier;
            //$this->registrationDate = date('y-m-d');
            //$this->userId = generateUserId($userType);
        }

        public function getmatricule_evenement():string{
            return $this->matricule_evenement;
        }
        public function getnom():string{
            return $this->nom;
        }
        public function getdescription():string{
            return $this->description;
        }
        public function getlieu():string{
            return $this->lieu;
        }
        public function getdate():string{
            return $this->date;
        }
        public function getquartier():string{
            return $this->quartier;
        }

        public function setmatricule_evenement($matricule_evenement):void{
            $this->matricule_evenement=$matricule_evenement;
        }
        public function setnom($nom):void{
            $this->nom=$nom;
        }
        public function setdescription($description):void{
            $this->description=$description;
        }
        public function setlieu($lieu):void{
            $this->lieu=$lieu;
        }
        public function setdate($date):void{
            $this->date=$date;
        }
        public function setquartier($quartier):void{
            $this->quartier=$quartier;
        }
    }


    // $test = new Evenement('matriculetest','evenement1','ffffffffff','tunis','02-12-21');
    // var_dump($test);

?>