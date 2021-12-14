<?php
session_start();
include_once '../../Model/categorie.php';
include_once '../../Controller/categorieC.php';


$categorie = null;
// create an instance of the controller
$categorieC = new categorieC();
if (
    isset($_POST["submit"])&&
    isset($_POST["id"]) &&
    isset($_POST["nom"]) 	
) {
    if (
        !empty($_POST["id"]) && 
        !empty($_POST['nom']) 
        
    ) {
        $categorie = new categorie(
            $_POST['id'],
            $_POST['nom']
           
        );
        $categorieC->modifiercategories($categories, $_POST["id"]);
        header('Location:showCAT.php');
    }
    else
  {$error = "Missing information";
    var_dump($error);}
        
}    
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Modify Article</title>
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
              <h4 class="card-title">modifier categorie</h4>
              <p class="card-description"> Basic form elements </p>
              <?php
              if (isset($_GET['id'])) {
                $categorie = $categorieC->recuperercategories($_GET['id']);
                var_dump($categorie);
              ?>
                <form class="forms-sample"  method="POST" >
                  <div class="form-group">
                    <label for="exampleInputName1">nom</label>
                    <input type="text" class="form-control" name="nom" id="exampleInputName1" value=<?php echo $categorie["nom"]; ?>>
                  </div>
                 
                  <input type="submit" name="submit">
                  <button class="btn btn-light">Cancel</button>
                </form>
              <?php } ?>
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
