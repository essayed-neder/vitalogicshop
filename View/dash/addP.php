<?php
session_start();
include_once '../../Model/produit.php';
include_once '../../Controller/produitC.php';
include_once '../../Controller/categorieC.php';

$error = "";
$produit = NULL;
$produitC = new produitC();
$catC = new categorieC();
$listeCat = $catC->affichercategories();
// ========

if(isset($_POST["submit"])){
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  }
 

    $produit = new produit(
      $_POST['nom'],
      $_POST['prix'],
      $_POST['quantite'],
      "dash/".$target_file,
      $_POST['description'],
      $_POST['idcategorie'],
      $_POST['Type_sous_Cat']
      
      
    );
    $produitC->ajouterproduits($produit);
    header('Location:showP.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <title>Add New Product</title>
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
                    <h4 class="card-title">add product</h4>
                    <p class="card-description"> Basic form elements </p>
                    <form class="forms-sample" method="POST" action="addP.php" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputName1">nom</label>
                        <input type="text" class="form-control" name="nom" id="exampleInputName1" placeholder="nom">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPrix">Prix</label>
                        <input type="number" class="form-control" name="prix" id="exampleInputPrix" placeholder="Prix">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputQuantite">Quantite</label>
                        <input type="number" class="form-control"  name="quantite" id="exampleInputQuantite" placeholder="Quantite">
                      </div>
                     
                      <div class="form-group">
                        <label for="exampleInputCity1">image</label>
                        <input type="file" class="form-control" name="fileToUpload" id="exampleInputCity1" placeholder="image URL">
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
                        <div class="form-group">
                        <label for="exampleFormControlSelectsouscategorie">select sous categorie</label>
                         <select class="form-control" name="Type_sous_Cat"  id="exampleFormControlSelectsouscategorie">
                             <option>alimentaire</option>
                             <option>cosmetique</option>
                             <option>produits de menage</option>
                             <option>jouets animaux</option>
                             <option>alimentaire animaux</option>
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