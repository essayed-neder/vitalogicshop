<?php
session_start();
include '../Controller/produitC.php';
$produitC = new produitC();
$listeproduits = $produitC->afficherproduits();
if (isset($_REQUEST['search_box']))
$listerecherche= $produitC->rechercheproduit($_REQUEST['search_box']);

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
                        <div class="container">
      <h2 class="text-center mt-4 mb-4">Search for a product</h2>
      <div class="row mt-5 mb-5">
        <div class="col col-sm-2">&nbsp;</div>
        <div class="col col-sm-8">
          <div class="dropdown">
            <form method="GET">
              <input type="text" name="search_box" class="form-control form-control-lg" placeholder="Type Here..." id="search_box" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onkeyup="javascript:load_data(this.value)" onfocus="javascript:load_search_history()" />
            </form>
            <span id="search_result"></span>
          </div>
        </div>
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
                    <h1>SHOP</h1>
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
  <?php if($_SESSION['type']== "admin"){ echo"<button ><a  href='dash/addP.php'>Add Porduct</a></button><br>";}?>
  <button ><a  href='../logout.php'>Log out</a></button>
  </div>

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
                    <div class="float-right d-xs-none thumbnail-toggle">
                        <a href="#" class="change-class active" data-change-from-class="list" data-change-to-class="masonry" data-parent-class="items">
                            <i class="fa fa-th"></i>
                        </a>
                        <a href="#" class="change-class" data-change-from-class="masonry" data-change-to-class="list" data-parent-class="items">
                            <i class="fa fa-th-list"></i>
                        </a>
                    </div>
                </div>
              
                <div class="content-afficher">
     
      <div class="main-content" style="display:flex ; flex-wrap:wrap;">
         <?php
         if (isset($_REQUEST['search_box']))
          $liste=$listerecherche;
          else
          $liste=$listeproduits;
         foreach($liste as $produit){
       
         ?>
                     <div class='card' style="width:20%">
                         <a href=<?php echo "/vitalogicshop/View/specificP.php?id=".$produit["id"] ?>>
     
                           <img src="<?php echo $produit["urlimage"]; ?>" class='image-produit'/>  </a>
                            <p><?php echo $produit["nom"]; ?></p>
                            <button  class='card-btn'><?php echo $produit["prix"]."dt";?></button>
                    </div> 
           <?php } ?>     
      </div>
     
    </div>
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
<script>
  function load_search_history() {
    var search_query = document.getElementsByName('search_box')[0].value;

    if (search_query == '') {

      fetch("process_data.php", {

        method: "POST",

        body: JSON.stringify({
          action: 'fetch'
        }),

        headers: {
          'Content-type': 'application/json; charset=UTF-8'
        }

      }).then(function(response) {

        return response.json();

      }).then(function(responseData) {

        if (responseData.length > 0) {

          var html = '<ul class="list-group">';

          html += '<li class="list-group-item d-flex justify-content-between align-items-center"><b class="text-primary"><i>Your Recent Searches</i></b></li>';

          for (var count = 0; count < responseData.length; count++) {

            html += '<li class="list-group-item text-muted" style="cursor:pointer"><i class="fas fa-history mr-3"></i><span onclick="get_text(this)">' + responseData[count].search_query + '</span> <i class="far fa-trash-alt float-right mt-1" onclick="delete_search_history(' + responseData[count].id + ')"></i></li>';

          }

          html += '</ul>';

          document.getElementById('search_result').innerHTML = html;

        }

      });

    }
  }

  function get_text(event) {
    var string = event.textContent;

    document.getElementsByName('search_box')[0].value = string;

    document.getElementById('search_result').innerHTML = '';
  }

  function load_data(query) {
    if (query.length > 2) {
      var form_data = new FormData();

      form_data.append('query', query);

      var ajax_request = new XMLHttpRequest();

      ajax_request.open('POST', 'process_data.php');

      ajax_request.send(form_data);

      ajax_request.onreadystatechange = function() {
        if (ajax_request.readyState == 4 && ajax_request.status == 200) {
          var response = JSON.parse(ajax_request.responseText);

          var html = '<div class="list-group">';

          if (response.length > 0) {
            for (var count = 0; count < response.length; count++) {
              html += '<a href="#" class="list-group-item list-group-item-action" style="color:black;" onclick="get_text(this)">' + response[count].nom + '</a>';
            }
          } else {
            html += '<a href="#" class="list-group-item list-group-item-action disabled">No Data Found</a>';
          }

          html += '</div>';

          document.getElementById('search_result').innerHTML = html;
        }
      }
    } else {
      document.getElementById('search_result').innerHTML = '';
    }
  }
</script>