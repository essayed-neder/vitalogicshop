<?php

  include_once "../../config.php";

session_start();

  function recuperer_evenement(){
    $db = config::getconnexion();

    try {
        $query = $db->query(
        "SELECT user.name,evenement.nom FROM user,evenement,participer 
        where participer.id=user.id AND participer.matricule_evenement=evenement.matricule_evenement"
        );
        return $query;

    } catch (PDOException $e) {
        $e->getMessage();
    }
  }

  $participer=recuperer_evenement();

?>


<html>
<?php include "segments/plugin.php"; ?>

<body onload="imprimer_page()">
    <center>
        <h1>Participants list<h1>
    </center>
    <div class="card">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Name Participant</th>
                        <th>Event Name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($participer as $e){ ?>
                    <tr>
                        <td><?php echo $e['name'] ?></td>
                        <td><?php echo $e['nom'] ?></td>
                    </tr>
                    <?php } ?>
            </table>
        </div>
    </div>

    <script type="text/javascript">
    function imprimer_page() {
        window.print();
    }
    </script>


</body>

</html>