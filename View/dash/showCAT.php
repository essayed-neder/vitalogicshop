<?php
session_start();
include '../../Controller/categorieC.php';
$categorieC = new categorieC();
$listecategories = $categorieC->affichercategories();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   <title>Show categories</title>
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
                  <h4 class="card-title">All categories</h4>

                  </p>
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>categories ID</th>
                        <th>nom</th>
                        
                        
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      foreach ($listecategories as $categories) {
                      ?>
                        <tr>
                          <td><?php echo $categories['id']; ?></td>
                          <td><?php echo $categories['nom']; ?></td>
                          <td><button type="button" class="btn btn-primary btn-rounded btn-fw"><?php $h=$categories['id']; echo"<a style=' color: #ffffff;text-decoration: none;'  href='ModifyCat.php?id=$h'>Modifier</a>";?></button></td>
                          <td><button type="button" class="btn btn-danger btn-rounded btn-fw"><?php $h=$categories['id']; $l=$_SERVER['DOCUMENT_ROOT']."/ecotopia/View/SupprimerCAT.php"; echo"<a style=' color: #ffffff;text-decoration: none;' href='../SupprimerCAT.php?id=$h'>Delete</a>";?></button></td>
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