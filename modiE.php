<?php
    include_once "../../config.php";

    function checkEvenement($matricule_evenement){
        $db = config::getconnexion();
    
        try {
            $query = $db->query(
                "SELECT * FROM evenement where matricule_evenement = '$matricule_evenement' "
            );
            return $query->fetch();
    
        } catch (PDOException $e) {
            $e->getMessage();
        }
    } 
    if(isset($_GET['number'])){
        $evenement=checkEvenement($_GET['number']);
    }
?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <title>Add New Event</title>
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
                    <h4 class="card-title">Event information</h4>
                    
                    <form class="forms-sample" action="../recumodi.php" method="POST">
                      <div class="form-group">
                        <label for="exampleInputName1">Event Name</label>
                        <input type="text" class="form-control" id="nom" name="nom" value="<?php if(isset($evenement['nom'])){ echo $evenement['nom']; } ?>" placeholder="<?php if(isset($evenement['nom'])){ echo $evenement['nom']; } ?>" >
                      </div>
                      <div class="form-group">
                                <label for="name" class="col-form-label required">Event number</label>
                                <input  type="text" class="form-control" id="matricule" name="matricule" value="<?php  if(isset($evenement['matricule_evenement'])){ echo $evenement['matricule_evenement']; } ?>" placeholder="<?php if(isset($evenement['matricule_evenement'])){ echo $evenement['matricule_evenement']; } ?>"  required>
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Description</label>
                        <textarea class="form-control" id="description" name="description" value="<?php if(isset($evenement['description'])){ echo $evenement['description']; } ?>" placeholder="<?php if (isset($evenement['description'])){ echo $evenement['description']; } ?>" rows="4"></textarea>
                      </div>
                      <div class="form-group">
                                    <label for="date" class="col-form-label">Event Date</label>
                                    <input name="date" type="date" class="form-control" id="date" value="<?php if(isset($evenement['date'])){ echo $evenement['date']; } ?>" placeholder="<?php if(isset($evenement['date'])){ echo $evenement['date']; } ?>">
                       </div>
                       <div class="form-group">
                                        <label for="city" class="col-form-label required">City</label>
                                        <input name="lieu" type="text" class="form-control" id="lieu" value="<?php if(isset($evenement['lieu'])){ echo $evenement['lieu']; } ?>" placeholder="<?php if(isset($evenement['lieu'])){ echo $evenement['lieu']; } ?>">
                        </div>
                        <div class="form-group">
                                        <label for="street" class="col-form-label">Street</label>
                                        <input name="quartier" type="text" class="form-control" id="quartier" value="<?php if(isset($evenement['quartier'])){ echo $evenement['quartier']; } ?>" placeholder="<?php if(isset($evenement['quartier'])){ echo $evenement['quartier']; } ?>">
                        </div>
                    
                      <button type="submit" class="btn btn-primary mr-2">Confirm Modification</button>
                      <button type="reset" class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
             
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <?php include "segments/footer.php"; ?><!-- End custom js for this page -->
  </body>