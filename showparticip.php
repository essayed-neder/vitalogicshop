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

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <title>Show Events</title>
    <!-- plugins:css -->
    <?php include "segments/plugin.php"; ?>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <?php include "segments/header.php"; ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <?php include "segments/side_bar.php"; ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Event list </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                    
                    </p>
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
                      
                        <a href="printfe.php" class="btn btn-primary mr-2">Print</a>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
             
             
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <?php include "segments/footer.php"; ?>
  </body>
</html>