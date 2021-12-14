<?php
session_start();
include '../Controller/animalC.php';
$animalC = new animalC();
$listeanimals = $animalC->afficheranimals();

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="ThemeStarz">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="assets1/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets1/fonts/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="assets1/css/selectize.css" type="text/css">
    <link rel="stylesheet" href="assets1/css/style.css">
    <link rel="stylesheet" href="assets1/css/user.css">
    <link rel="stylesheet" href="assets1/css/neder.css">
    

    <title>adoption</title>

</head>

<body>
    <div class="page sub-page"></div>

    <header class="hero has-dark-background">
        <div class="hero-wrapper">

            <div class="secondary-navigation">
                <div class="container">
                    <ul class="left">
                        <li>
                            <span>
                                <i class="fa fa-phone"></i> +216 41 220 555
                            </span>
                        </li>
                    </ul>

                    <ul class="right">

                        <li>
                            <br>
                            <i class="fa fa-sign-in"></i>Sign In
                           
                        </li>
                        <li>
                            <br>
                            <i class="fa fa-pencil-square-o"></i>Register     
                        </li>
                        <li>
                            <br>
                            <i class="fa fa-panier"></i>Panier
                           
                        </li>
                    </ul>

                </div>

            </div>

            <div class="main-navigation">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light justify-content-between">

                        <img src="assets1/img/logo-inverted.png" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        <div class="collapse navbar-collapse" id="navbar">



                        </div>

                        <a href="#collapseMainSearchForm" class="main-search-form-toggle" data-toggle="collapse" aria-expanded="false" aria-controls="collapseMainSearchForm">
                            <i class="fa fa-search"></i>
                            <i class="fa fa-close"></i>
                        </a>

                    </nav>



                </div>

            </div>

            <div class="collapse" id="collapseMainSearchForm">
                <form class="hero-form form">
                    <div class="container">

                        <div class="main-search-form">
                            <div class="form-row">
                                <div class="col-md-3 col-sm-3">
                                    <div class="form-group">
                                        <label for="what" class="col-form-label">Research?</label>
                                        <input name="keyword" type="text" class="form-control small" id="what" placeholder="Research?">
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-3">
                                    <div class="form-group">
                                        <label for="category" class="col-form-label">Category?</label>
                                        <select name="category" id="category" class="small" data-placeholder="Select Category">
                                                <option value="">Select Category</option>
                                                <option value="1">dogs</option>
                                                <option value="2">cats</option>
                                           
                                            </select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <button type="submit" class="btn btn-primary width-100 small">Search</button>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </form>
            </div>

            <div class="page-title">
                <div class="container">
                    <h1>ADOPTION</h1>
                </div>
            </div>
            <div class="background">
                <div class="background-image">
                    <img src="assets1/img/backgroun3.jpg" alt="">
                </div>
            </div>
        </div>
    </header>
    <div class="ff">
  <label ><?php $a=$_SESSION['type'];$b=$_SESSION['user'];echo"$a: $b" ;?></label><br>
  <?php if($_SESSION['type']== "admin"){ echo"<button ><a  href='dash/addA.php'>Add animal</a></button><br>";}?>
  <button ><a  href='../logout.php'>Log out</a></button>
  </div>

    <section class="content">
       
      <div class="main-content">
         <?php
         foreach($listeanimals as $animal){
       
         ?>
                     <div class='card'>
                         <a href=<?php echo "/vitalogicadop/View/specificA.php?id=".$animal["id"] ?>>
     <style>
         .image-produit {
    width: 100%;
    height: 230px;
}
</style>
                           <img src=<?php echo $animal["urlimage"]; ?> class='image-produit'/>  </a>
                            <p><?php echo $animal["nom"]; ?></p>
                    </div> 
           <?php } ?>     
      </div>
     
    </div>
            </div>
              <div class="page-pagination">
                <nav aria-label="Pagination">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">
                                            <i class="fa fa-chevron-left"></i>
                                        </span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">
                                            <i class="fa fa-chevron-right"></i>
                                        </span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
           </div>
        </section>
    </section>


    <script src="assets1/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="assets1/js/popper.min.js"></script>
    <script type="text/javascript" src="assets1/bootstrap/js/bootstrap.min.js"></script>
    
    <script src="assets1/js/selectize.min.js"></script>
    <script src="assets1/js/masonry.pkgd.min.js"></script>
    <script src="assets1/js/icheck.min.js"></script>
    <script src="assets1/js/jquery.validate.min.js"></script>
    <script src="assets1/js/custom.js"></script>

</body>

</html>