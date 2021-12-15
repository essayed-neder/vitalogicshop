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

class config {
    private static $pdo = NULL;

    public static function getConnexion() {
      if (!isset(self::$pdo)) {
        try{

          self::$pdo = new PDO('mysql:host=localhost;dbname=vitalogic', 'root', '',
          [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
        }catch(Exception $e){
          die('Erreur: '.$e->getMessage());
        }
      }
      return self::$pdo;
    }
  }

    class eventC{
        function ajouter_evenement($newEvent){
            $db=config::getConnexion();
            
            try {
                $query = $db->prepare(
                    'INSERT INTO evenement (matricule_evenement,nom,description,lieu,date,quartier) 
                        VALUES (:matricule_evenement,:nom,:description,:lieu,:date,:quartier)'
                );// INSERT INTO 'nom_de_la_table'
                $query->execute([
                    'matricule_evenement' => $newEvent->getmatricule_evenement(),
                    'nom' => $newEvent->getnom(),
                    'description' => $newEvent->getdescription(),
                    'lieu' => $newEvent->getlieu(),
                    'date' => $newEvent->getdate(),
                    'quartier' => $newEvent->getquartier()
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }


    function supprimerEvenement($matricule_evenement){
        $db=config::getConnexion();
        try {
            $query = $db->prepare(
                "DELETE FROM evenement WHERE matricule_evenement = '$matricule_evenement'"
            );
            $query->execute([
                'matricule_evenement' => $matricule_evenement
            ]);
        } 
        catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function modifier($matricule_evenement,$nom,$description,$lieu,$date,$quartier){
        $db = config::getConnexion();
        try{
            $query = $db->prepare(
                "UPDATE evenement SET nom = '$nom', description = '$description', lieu = '$lieu', date ='$date', quartier ='$quartier'  WHERE matricule_evenement = '$matricule_evenement' "
            );
            $query = $query->execute([
                'matricule_evenement' => $matricule_evenement,
                'nom' => $nom,
                'description' => $description,
                'lieu' => $lieu,
                'date' => $date,
                'quartier' => $quartier
            ]);
        }catch(PDOException $e){
            $e->getMessage();
        }
    }

    function add_participation($id,$matricule_evenement){
        $db = config::getConnexion();

        try {
            $query = $db->prepare(
                'INSERT INTO participer (matricule_evenement,id) 
                    VALUES (:matricule_evenement,:id)'
            );
            $query->execute([
                'matricule_evenement' => $matricule_evenement,
                'id' => $id
            ]);
        } catch (PDOException $e) {
            $e->getMessage();
        }

    }

    
}
    
    //  $test = new Evenement('matriculetest','evenement2','ffffffffff','sousse','02-12-21');
    //  //var_dump($test);
    //  $control = new eventC();

    //  $control->supprimerEvenement($test);

?>


