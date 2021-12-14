<?php
session_start();
include '../Controller/articleC.php';
$articleC = new articleC();
$listeArticles = $articleC->afficherArticles();
$listeArticles2 = $articleC->afficherArticles2();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>vitalogic-Blog</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font awesome icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <link rel="stylesheet" href="assets/css/blog.css">
  <link rel="icon" href="images/icon_tab.png">
  
</head>

<body>

  <!-- header -->
  <div class="top-bar">
    <div class="email-num">
      <div>
        <span class="mai-mail fg-primary"></span>
        <a href="vitalogic@gamil.com">vitalogic@gamil.com</a>
      </div>
      <div class="d-inline-block ml-2">
        <span class="mai-call fg-primary"></span>
        <a href="callus:+2165892516">+2165892516</a>
      </div>
    </div>
    <div class="col-md-4 text-right d-none d-md-block">
      <div class="social-mini-button">
        <p><i class="fab fa-facebook"></i></p>
        <p><i class="fab fa-instagram"></i></p>
        <p><i class="fab fa-snapchat-square"></i></p>
        <p><i class="fab fa-pinterest-square"></i></p>
        <p><i class="fab fa-youtube"></i></p>
      </div>
    </div>
  </div>
  <!-- .top-bar -->

  <!--barre de navigation-->
  <nav class="bar-logo">
    
    <a href="index.html">
      <img alt="logo" src="images/icon_tab.png" class="im">
    </a>
    <h1 class="e">vitalogic</h1>
    <div class="onglets">
      <p class="link">Home</p>
      <p class="link">Events</p>
      <p class="link">Blog</p>
      <p class="link">Shop</p>
      <p class="link">About us</p>
      <form>
        <input class="search" type="search" placeholder="research" />
      </form>
      <p><i class="fas fa-heart"></i></p>
      <p><i class="fas fa-shopping-cart"></i></p>
    </div>
  </nav>
  <!-- end of header -->
  <div class="ff">
  <label ><?php $a=$_SESSION['type'];$b=$_SESSION['user'];echo"$a: $b" ;?></label><br>
  <?php if($_SESSION['type']== "admin"){ echo"<button ><a  href='Add.php'>Add Article</a></button><br>";}?>
  <button ><a  href='../logout.php'>Log out</a></button>
  </div>
  <!-- design -->
  <section class="design" id="design">
    <div class="container">
      <div class="title">
        <h2>Recent Events & Work</h2>
        <p>Our events and the progress we made</p>
      </div>
      
      <div class="design-content">
      
        <!-- item -->
        <?php
        foreach ($listeArticles as $article) {
        ?>
          <div class="design-item">
            <div class="design-img">
              <?php $h = $article['img'];
              echo "<img src='$h'>"; ?>
              <span><i class="far fa-heart"></i> 22</span>
              <span></span>
            </div>
            <div class="design-title">
              <a href="#"><?php echo $article['title']; ?></a>
            </div>
          </div>
        <?php
        }
        ?>
        <!-- end of item -->
      </div>
    </div>
  </section>
  <!-- end of design -->


  <!-- blog -->
  <section class="blog" id="blog">
    <div class="container">
      <div class="title">
        <h2>Latest Blogs</h2>
        <p>Latest Events and Work</p>
      </div>
      <div class="blog-content">
        <!-- item -->
        <?php
        foreach ($listeArticles2 as $article) {
        ?>
        <div class="blog-item">
          <div class="blog-img">
          <?php $h = $article['img'];
              echo "<img src='$h'>"; ?>
            <span><i class="far fa-heart"></i></span>
          </div>
          <div class="blog-text">
            <span><?php echo $article['datep']; ?></span>
            <h2><?php echo $article['title']; ?></h2>
            <p><?php echo $article['descr']; ?></p>
            <!--<a href = "#">Read More</a>-->
            <?php $h=$article['post_id']; echo"<button><a href='specificB.php?post_id=$h'>Read More</a></button>";  ?>
            <?php $h=$article['post_id'];if($_SESSION["type"]=="admin"){ echo"<button><a href='ModifierB.php?post_id=$h'>Modifier</a></button>";  }?>
            <?php $h=$article['post_id'];if($_SESSION["type"]=="admin"){ echo"<button><a href='SupprimerB.php?post_id=$h'>Supprimer</a></button>"; } ?>
          </div>
        </div>
        <?php
        }
        ?>
      </div>
    </div>
  </section>
  
  <!-- end of blog -->

  <!-- about -->

  <!-- end of about -->

  <!-- footer -->
  <div class="footer">
    <div class="footer-container">
      <div class="footer-top">
        <h1>vitalogic</h1>
        <ul class="link-list">

        </ul>
        <div class="social-media-footer">
          <p><i class="fab fa-facebook"></i></p>
          <p><i class="fab fa-instagram"></i></p>
          <p><i class="fab fa-snapchat-square"></i></p>
          <p><i class="fab fa-pinterest-square"></i></p>
          <p><i class="fab fa-youtube"></i></p>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="footer-copyright-left">
          Created by Group 6
        </div>
        <div class="footer-copyright-right">
          &copy; 2021-2022
        </div>
      </div>
    </div>
  </div>
  <!-- end of footer -->


</body>

</html>