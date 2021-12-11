<?php
session_start();
include_once '../../Model/produit.php';
include_once '../../Controller/produitC.php';


$produit = null;
// create an instance of the controller
$produitC = new produitC();
if (
    isset($_POST["submit"])&&
    isset($_POST["id"]) &&
    isset($_POST["nom"]) &&		
    isset($_POST["prix"]) &&
    isset($_POST["quantite"]) && 
    isset($_POST["urlimage"]) && 
    isset($_POST["description"])&&
    isset($_POST["idcategorie"])&&
    isset($_POST["Type_sous_Cat"])
   
    

) {
    
        $produit = new produit(
            $_POST['id'],
            $_POST['nom'],
            $_POST['prix'], 
            $_POST['quantite'],
            $_POST['urlimage'],
            $_POST['description'],
            $_POST['idcategorie'],
            $_POST['Type_sous_Cat']
        );
        var_dump("i'm here");
        $produitC->modifierproduits($produits, $_POST["id"]);
        
        header('Location:showP.php');
    }
 

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Modify product</title>
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
              <h4 class="card-title">modifier produit</h4>
              <p class="card-description"> Basic form elements </p>
              <?php
              if (isset($_GET['id'])) {
                $produit = $produitC->recupererproduits($_GET['id']);
              ?>
                <form class="forms-sample"  method="POST" action="updateproduct.php" >
                  
                  <div class="form-group">
                    <label for="exampleInputName1">nom</label>
                    <input type="text" class="form-control" name="nom" id="exampleInputName1" value="<?php echo $produit["nom"]; ?>">
                  </div>
                  <input type="text" value=<?php echo $_GET["id"] ?> name="id" hidden>
                  <div class="form-group">
                        <label for="exampleInputPrix">Prix</label>
                        <input type="number" class="form-control" name="prix" id="exampleInputPrix" value=<?php echo $produit["prix"]; ?>>
                      </div>
                 <div class="form-group">
                        <label for="exampleInputQuantite">Quantite</label>
                        <input type="number" class="form-control" name="quantite" id="exampleInputQuantite" value=<?php echo $produit["quantite"]; ?>>
                      </div>
               
                  <div class="form-group">
                    <label for="exampleInputCity1">Image</label>
                    <input type="text" class="form-control" name="urlimage" id="exampleInputCity1" value=<?php echo $produit["urlimage"]; ?>>
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea1">Description</label>
                    <textarea class="form-control" name="description" id="exampleTextarea1" rows="4"><?php echo $produit["description"]; ?></textarea>
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlselectcategorie">select categorie</label>
                      <select class="form-control" name="idcategorie" id="exampleFormControlselectcategorie" <?php echo $produit["idcategorie"]; ?>>
                       <option value="1">produits ecofriendly</option>
                      <option value="2">produits de decoration </option>
                       </select>
                        </div>
                        <div class="form-group">
                        <label for="exampleFormControlSelectsouscategorie">select sous categorie</label>
                         <select class="form-control" name="Type_sous_Cat" id="exampleFormControlSelectsouscategorie" <?php echo $produit["Type_sous_Cat"]; ?> >
                             <option>alimentaire</option>
                             <option>cosmetique</option>
                             <option>produits de menage</option>
                             <option>outils de jardinage</option>
                             <option>decoration jardin</option>
                              </select>
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