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
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <title>Show Events</title>
    <!-- plugins:css -->
    <?php include "segments/plugin.php"; ?>
  </head>
  <body>
  <form class="forms-sample" action="../recusup.php" method="POST">
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
                        </tr>
                        <?php } ?>
                        
                      </tbody>
                    </table>
                    <div class="form-group">
                            <label for="name" class="col-form-label required">Enter the number of the event you want to delete</label>
                            <input  type="text" class="form-control" id="matricule" name="matricule"  required>
             </div>

             <button type="submit" class="btn btn-primary mr-2">Delete</button>
                  </div>
                </div>
              </div>
             
              
            </div>
          </div>

                      </form>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <?php include "segments/footer.php"; ?>

  </body>
</html>