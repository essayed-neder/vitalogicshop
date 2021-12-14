<?php
session_start();
include_once '../Model/article.php';
include_once '../Controller/articleC.php';
$article = NULL;
$articleC = new articleC();
if (isset($_GET['post_id'])) {
    $article = $articleC->recupererArticle($_GET['post_id']);}
?>
<style>
   .eee {
  height:auto;
  width: 70%;
  background-color: #F0F0F0 ;
}
</style>
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="icon" href="images/icon_tab.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Article: <?php echo $article['title']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font awesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="blog.css">
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

    <?php
    if (isset($_GET['post_id'])) {
        $article = $articleC->recupererArticle($_GET['post_id']);
    ?>
        <center>
            <h1><?php echo $article['title']; ?></h1>
        </center>
        <center>
            <h4><?php echo $article['author']; ?>|<?php echo $article['datep']; ?></h4>
        </center>
        <center>
            <h5><?php echo $article['descr']; ?></h5>
        </center><br><br>
        <center> <div class="eee"><?php echo $article['body'];?></div></center>
    <?php
    }
    ?>
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
    <!-- end 
</body>
</html>