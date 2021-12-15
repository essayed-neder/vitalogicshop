<?php
session_start();
include '../Controller/articleC.php';
include_once "../config.php";



function recuperer_evenement(){
    $db = config::getconnexion();

    try {
        $query = $db->query(
        "SELECT * FROM Evenement"
        );
        return $query;

    } catch (PDOException $e) {
        $e->getMessage();
    }
  }

  $evenement=recuperer_evenement();

function countevent($matricule_evenement){
        $db = config::getconnexion();

        try{
            $query = $db->query(
                "SELECT count(*) as nb FROM participer where matricule_evenement = '$matricule_evenement'"
                );
                return $query->fetch();

        }   catch (PDOException $e) {
            $e->getMessage();
        }

  }

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

    <title>shop</title>

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
                                                <option value="1">Eco-friendly products</option>
                                                <option value="2">All pets products</option>
                                           
                                            </select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <button type="submit" class="btn btn-primary width-100 small">Search</button>
                                </div>
                            </div>
                        </div>
                        <div class="alternative-search-form">
                            <a href="#collapseAlternativeSearchForm" class="icon" data-toggle="collapse" aria-expanded="false" aria-controls="collapseAlternativeSearchForm"><i class="fa fa-plus"></i>More Options</a>
                            <div class="collapse" id="collapseAlternativeSearchForm">
                                <div class="wrapper">
                                    <div class="form-row">
                                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 d-xs-grid d-flex align-items-center justify-content-between">
                                            <label>
                                                    <input type="checkbox" name="epicerie bio">
                                                    epicerie bio
                                                </label>
                                            <label>
                                                    <input type="checkbox" name="cosmetique">
                                                    cosmetique
                                                </label>
                                            <label>
                                                    <input type="checkbox" name="produits de menage">
                                                   produits de menage
                                                </label>
                                             <label>
                                                    <input type="checkbox" name="alimentation animaux ">
                                                    alimentation animaux
                                                </label>
                                             <label>
                                                    <input type="checkbox" name="jouets">
                                                   jouets
                                                </label>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="page-title">
                <div class="container">
                    <h1>Events</h1>
                </div>
            </div>
            <div class="background">
                <div class="background-image">
                    <img src="assets1/img/vitalogic.jpg" alt="">
                </div>
            </div>
        </div>
    </header>

    <section class="content">
        <section class="block">
            <div class="container">
                <div class="section-title clearfix">
                    <div class="float-left float-xs-none">
                        <label class="mr-3 align-text-bottom">Sort by: </label>
                        <select name="sorting" id="sorting" class="small width-200px" data-placeholder="Default Sorting">
                                <option value="">Default Sorting</option>
                                <option value="1">Newest First</option>
                                <option value="2">Oldest First</option>
                           
                            </select>

                    </div>
                    <section class="content">
            <!--============ Featured Ads ===========================================================================-->
            <section class="block">
                <div class="container">
                    <h2>Evenements</h2>
                    <div class="items grid grid-xl-3-items grid-lg-3-items grid-md-2-items">
                        <?php foreach($evenement as $e){ ?>
                        <div class="item">
                            <div class="wrapper">
                                <div class="image">


                                    <h3>
                                        <!-- <a href="#" class="tag category">Adventure</a> -->
                                        <?php echo $e['nom'] ?>
                                        <!-- <span class="tag">Ad</span> -->
                                    </h3>
                                    <a href="single-listing-1.html" class="image-wrapper background-image">
                                        <img src="assets3/img/vitalogic.png" alt="">
                                    </a>
                                </div>
                                <!--end image-->
                                <h4 class="location">
                                    <a href="#"><?php echo $e['lieu'] ?>, <?php echo $e['quartier'] ?></a>
                                </h4>
                                <!-- <div class="price">$1,560</div> -->
                                <div class="meta">
                                    <figure>
                                        <i class="fa fa-calendar-o"></i><?php echo $e['date'] ?>
                                    </figure>
                                    <figure>
                                        <a href="#">
                                            <i class="fa fa-user">      <?php  $nb=countevent($e['matricule_evenement']); echo "  ".$nb['nb']; ?></i>
                                        </a>
                                    </figure>
                                </div>
                                <!--end meta-->
                                <div class="description">
                                    <p><?php echo $e['description'] ?></p>
                                    
                                </div>
                                <!--end description-->
                                <a href="dash/part.php?number=<?php echo $e['matricule_evenement'] ?>&id=<?php echo $_SESSION['id'] ?>" class="btn width-100" style="background-color:rgb(34, 168, 11);">Participate</a>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </section>
        </section>
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