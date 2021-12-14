<?php
session_start();
include_once '../../Model/article.php';
include_once '../../Controller/articleC.php';
$i = $_GET['post_id'];

$article = NULL;
$articleC = new articleC();
$db = config::getConnexion();
if (isset($_POST["title"]) && isset($_POST["description"]) && isset($_POST["img"])) {
  $sql = "UPDATE articles SET title ='" . $_POST["title"] . "', descr ='" . $_POST["description"] . "', img ='" . $_POST["img"] . "', body ='" . $_POST["text_body"] . "' where post_id='" . $i . "'";
  //$article = new article($_POST['title'], $_POST['text_body'], $_POST['description'], $_POST['img'], 0, $_SESSION["user"], date("Y-m-d"), NULL);
  try {
    $query = $db->prepare($sql);
    $query->execute();
    header('Location:Articles.php');
  } catch (PDOException $e) {
  }
} else {
  $error = "Missing information";
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
              <h4 class="card-title">Write Article</h4>
              <p class="card-description"> Basic form elements </p>
              <?php
              if (isset($_GET['post_id'])) {
                $article = $articleC->recupererArticle($_GET['post_id']);
              ?>
                <form class="forms-sample" method="POST">
                  <div class="form-group">
                    <label for="exampleInputName1">Title</label>
                    <input type="text" class="form-control" name="title" id="exampleInputName1" value=<?php echo $article["title"]; ?>>
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea1">Article</label>
                    <textarea class="form-control" name="text_body" id="myEditor" rows="4"><?php echo $article["body"]; ?></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputCity1">Image</label>
                    <input type="text" class="form-control" name="img" id="exampleInputCity1" value=<?php echo $article["img"]; ?>>
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea1">Description</label>
                    <textarea class="form-control" name="description" id="exampleTextarea1" rows="4"><?php echo $article["descr"]; ?></textarea>
                  </div>

                  <button type="submit" class="btn btn-primary mr-2">Modify</button>
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