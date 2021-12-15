<?php

  include_once "../../config.php";

session_start();

  function recuperer_evenement(){
    $db = config::getconnexion();

    try {
        $query = $db->query(
        "SELECT * FROM Evenement"
        );
        return $query;

    } catch (PDOException $e) {
        $e->getMessage();
    }
  }

  $evenement=recuperer_evenement();

?>


<html>
<?php include "segments/plugin.php"; ?>
<body onload="imprimer_page()">
<center>
    <h1>Event list<h1>
</center>
<div class="card" >
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Event name</th>
                    <th>Event number</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>City</th>
                    <th>Street</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach($evenement as $e){ ?>
                <tr>
                    <td><?php echo $e['nom'] ?></td>
                    <td><?php echo $e['matricule_evenement'] ?></td>
                    <td><?php echo $e['description'] ?></td>
                    <td><?php echo $e['date'] ?></td>
                    <td><?php echo $e['lieu'] ?></td>
                    <td><?php echo $e['quartier'] ?></td>

                    </td>
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