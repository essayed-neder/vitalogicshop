<?php
session_start();
include_once '../../Model/animal.php';
include_once '../../Controller/animalC.php';
include_once '../../Controller/categorieC.php';

$error = "";
$animal = NULL;
$animalC = new animalC();
$catC = new categorieC();
$listeCat = $catC->affichercategories();
if(isset($_POST["submit"])){
    $animal = new animal(
      $_POST['nom'],
     
      $_POST['urlimage'],
      $_POST['description'],
      $_POST['idcategorie']
     
      
      
    );
    $animalC->ajouteranimals($animal);
    header('Location:showA.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <title>Add New Animal</title>
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
                    <h4 class="card-title">add animal</h4>
                    <p class="card-description"> Basic form elements </p>
                    <form class="forms-sample" method="POST" action="addA.php">
                      <div class="form-group">
                        <label for="exampleInputName1">nom</label>
                        <input type="text" class="form-control" name="nom" id="exampleInputName1" placeholder="nom">
                      </div>
                      
                     
                      <div class="form-group">
                        <label for="exampleInputCity1">image</label>
                        <input type="text" class="form-control" name="urlimage" id="exampleInputCity1" placeholder="image URL">
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Description</label>
                        <textarea class="form-control" name="description" id="exampleTextarea1" rows="4"></textarea>
                      </div>
                     
                      <div class="form-group">
                      <label for="exampleFormControlselectcategorie">select categorie</label>
                      <select class="form-control" name="idcategorie" id="exampleFormControlselectcategorie">

                      <?php
                      foreach ($listeCat as $categories) {
                      ?>
                          <option value=<?php echo $categories['id']; ?>><?php echo $categories['nom']; ?></option>
                      <?php
                      }
                      ?>
                    
                     
                       </select>
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