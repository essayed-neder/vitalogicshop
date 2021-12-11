<?php
session_start();
include '../../Controller/articleC.php';
$articleC = new articleC();
$listeArticles = $articleC->afficher();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  
  <title>Articles</title>
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
                  <h4 class="card-title">All Articles</h4>

                  </p>
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Article ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Likes</th>
                        <th>Comments</th>
                        <th>Author</th>
                        <th>Date</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      foreach ($listeArticles as $article) {
                      ?>
                        <tr>
                          <td><?php echo $article['post_id']; ?></td>
                          <td><?php echo $article['title']; ?></td>
                          <td><?php echo $article['descr']; ?></td>
                          <td><?php echo $article['likes']; ?></td>
                          <td>0</td>
                          <td><?php echo $article['author']; ?></td>
                          <td><?php echo $article['datep']; ?></td>
                          <td><button type="button" class="btn btn-primary btn-rounded btn-fw"><?php $h=$article['post_id']; echo"<a style=' color: #ffffff;text-decoration: none;'  href='ModifyB.php?post_id=$h'>Modifier</a>";?></button></td>
                          <td><button type="button" class="btn btn-danger btn-rounded btn-fw"><?php $h=$article['post_id']; $l=$_SERVER['DOCUMENT_ROOT']."/ecotopia/View/SupprimerB.php"; echo"<a style=' color: #ffffff;text-decoration: none;' href='../SupprimerB.php?post_id=$h'>Delete</a>";?></button></td>
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
        <?php include "segments/footer.php"; ?>
 
</body>

</html>