<?php
session_start();
include_once '../../Model/categorie.php';
include_once '../../Controller/categorieC.php';
$error = "";
$categorie = NULL;
$categorieC = new categorieC();
if(isset($_POST["submit"])){
    $categorie = new categorie(
      $_POST['nom'],
    
    );
    $categorieC->ajoutercategories($categorie);
    header('Location:showCAT.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <title>Add New category</title>
    <!-- plugins:css -->
    <?php include "segments/plugin.php"; ?>
   <script src="https://cdn.tiny.cloud/1/4avatqxpxn93pmv0nn2v5rsgo6xv2ysad25jn86kv7sulge6/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
    tinymce.init({
      selector: '#myEditor',
      branding: false,
      plugins: 'link image table',
      contextmenu: 'link image table',
      draggable_modal: true,
    });
  </script>
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
         
              
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">add category</h4>
                    <p class="card-description"> Basic form elements </p>
                    <form class="forms-sample" method="POST" action="addCat.php">
                      <div class="form-group">
                        <label for="exampleFormControlselectcategorie">nom</label>
                        <input type="text" class="form-control" name="nom" id="exampleFormControlselectcategorie" placeholder="nom">
                      </div>
                      
                     <input type="submit" name="submit" >
                      <button class="btn btn-light">Cancel</button>
                    </form>
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