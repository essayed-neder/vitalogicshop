<?php
session_start();
include_once '../../Model/article.php';
include_once '../../Controller/articleC.php';
$error = "";
$article = NULL;
$articleC = new articleC();
if (
  isset($_POST["title"]) &&
  isset($_POST["description"]) &&
  isset($_POST["img"])
) {
  if (
    !empty($_POST["title"]) &&
    !empty($_POST["description"]) &&
    !empty($_POST["img"])
  ) {
    $article = new article(
      $_POST['title'],
      $_POST['text_body'],
      $_POST['description'],
      $_POST['img'],
      0,
      $_SESSION["user"],
      date("Y-m-d"),
      NULL
    );
    $articleC->ajouterArticle($article);
    header('Location:articles.php');
  } else
    $error = "Missing information";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
   <title>Add New Article</title>
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
                    <h4 class="card-title">Write Article</h4>
                    <p class="card-description"> Basic form elements </p>
                    <form class="forms-sample" method="POST">
                      <div class="form-group">
                        <label for="exampleInputName1">Title</label>
                        <input type="text" class="form-control" name="title" id="exampleInputName1" placeholder="Title">
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Article</label>
                        <textarea class="form-control" name="text_body" id="myEditor" rows="4"></textarea>
                      </div>
                     
                      <div class="form-group">
                        <label for="exampleInputCity1">Image</label>
                        <input type="text" class="form-control" name="img" id="exampleInputCity1" placeholder="Image URL">
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Description</label>
                        <textarea class="form-control" name="description" id="exampleTextarea1" rows="4"></textarea>
                      </div>
                    
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
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