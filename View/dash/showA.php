<?php
session_start();
include '../../Controller/animalC.php';
$animalC = new animalC();
$listeanimals = $animalC->afficheranimals();
$tri=$animalC->trie_asc();
if(isset($_POST["submit"])){$listeanimals = $tri; }
?>

<!DOCTYPE
<html lang="en">
  <head>
    <!-- Required meta tags -->
   <title>Show animals</title>
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
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">All animals</h4>

                  </p>
                  <form action="showA.php" method="POST">
                    <input type="submit" name="submit" VALUE="tri alpha" >
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>animal ID</th>
                        <th>nom</th>
                    
                        <th>idcategorie</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      foreach ($listeanimals as $animals) {
                      ?>
                        <tr>
                          <td><?php echo $animals['id']; ?></td>
                          <td><?php echo $animals['nom']; ?></td>
                       
                          <td><?php echo $animals['idcategorie']; ?></td>
                          <td><button type="button" class="btn btn-primary btn-rounded btn-fw"><?php $h=$animals['id']; echo"<a style=' color: #ffffff;text-decoration: none;'  href='ModifyA.php?id=$h'>Modifier</a>";?></button></td>
                          <td><button type="button" class="btn btn-danger btn-rounded btn-fw"><?php $h=$animals['id']; $l=$_SERVER['DOCUMENT_ROOT']."/ecotopia/View/SupprimerA.php"; echo"<a style=' color: #ffffff;text-decoration: none;' href='../SupprimerA.php?id=$h'>Delete</a>";?></button></td>
                        </tr>
                      <?php
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>


          </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="footer-inner-wraper">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Ecotopia 2020</span>
                
              </div>
            </div>
            <?php include "segments/footer.php"; ?>
  </body>
</html>