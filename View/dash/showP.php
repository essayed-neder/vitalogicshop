<?php
session_start();
include '../../Controller/produitC.php';
$produitC = new produitC();
$listeproduits = $produitC->afficherproduits();
$tri=$produitC->trie_asc();
if(isset($_POST["submit"])){$listeproduits = $tri; }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   <title>Show Products</title>
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
                  <h4 class="card-title">All products</h4>

                  </p>
                  <form action="showP.php" method="POST">
                    <input type="submit" name="submit" VALUE="triascendant" >
                   
                   </form>
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>product ID</th>
                        <th>nom</th>
                        <th>prix</th>
                        <th>quantite</th>
                        <th>idcategorie</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      foreach ($listeproduits as $produits) {
                      ?>
                        <tr>
                          <td><?php echo $produits['id']; ?></td>
                          <td><?php echo $produits['nom']; ?></td>
                          <td><?php echo $produits['prix']; ?></td>
                          <td><?php echo $produits['quantite']; ?></td>
                          <td><?php echo $produits['idcategorie']; ?></td>
                          <td><button type="button" class="btn btn-primary btn-rounded btn-fw"><?php $h=$produits['id']; echo"<a style=' color: #ffffff;text-decoration: none;'  href='ModifyP.php?id=$h'>Modifier</a>";?></button></td>
                          <td><button type="button" class="btn btn-danger btn-rounded btn-fw"><?php $h=$produits['id']; $l=$_SERVER['DOCUMENT_ROOT']."/ecotopia/View/SupprimerP.php"; echo"<a style=' color: #ffffff;text-decoration: none;' href='../SupprimerP.php?id=$h'>Delete</a>";?></button></td>
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