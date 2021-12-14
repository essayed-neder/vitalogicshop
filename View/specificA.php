<?php
session_start();
include_once '../Model/animal.php';
include_once '../Controller/animalC.php';
error_reporting(0); // For not showing any error

$animal = NULL;
$animalC = new animalC();
if (isset($_GET['id'])) {

    $animal = $animalC->recupereranimals($_GET['id']);}
    include 'config.php';

    if (isset($_POST['submit'])) { // Check press or not Post Comment Button
        $name = $_POST['name']; // Get Name from form
        $email = $_POST['email']; // Get Email from form
        $comment = $_POST['comment']; // Get Comment from form
    
        $sql = "INSERT INTO comments (name, email, comment)
                VALUES ('$name', '$email', '$comment')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>alert('Comment added successfully.')</script>";
        } else {
            echo "<script>alert('Comment does not add.')</script>";
        }
    }  
    
?>
<style>
   .eee {
  height:auto;
  width: 70%;
  background-color: #F0F0F0 ;
}

</style>
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
                <a href="afficheranimals.php">ADOPTION</a>
                </div>
            </div>
            <div class="background">
                <div class="background-image">
                    <img src="assets1/img/backgroun3.jpg" alt="">
                </div>
            </div>
        </div>
    </header>
  <section class="content">
     <section class="block">
     <div class="container">
     <?php
             if (isset($_GET['id'])) {
              $animal = $animalC->recupereranimals($_GET['id']);
           ?>
              <center>
               <h1><?php echo $animal['nom']; ?></h1>
               </center> 
                <center>
                <h3><?php echo $animal['description']; ?></h3>
                </center><br><br>
                
                <center>
                <img style="width:700px !important" src=<?php echo $animal['urlimage']; ?>>
                </center><br><br>
          
            <?php
             }
           ?>

         
          </div>
      </section>
    </section>
    <style>
        dy {
    width: 100%;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background: #00b894;
}

.wrapper {
    padding: 20px;
    background: #FFF;
    box-shadow: 0 5px 10px rgba(0,0,0,0.3);
    width: 600px;
    min-height: 400px;
    margin: 20px 0;
}

.wrapper .row {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
}

.wrapper .form .row .input-group {
    padding: 0 10px;
    display: block;
}

.wrapper .form .row .input-group:first-child {
    padding-left: 0;
}

.wrapper .form .row .input-group:last-child {
    padding-right: 0;
}

.wrapper .form .input-group {
    width: 100%;
    height: 50px;
    margin-bottom: 50px;
}

.wrapper .form .input-group label {
    font-weight: 600;
    margin-bottom: 5px;
    display: block;
}

.wrapper .form .input-group .btn {
    margin: 20px 0;
    display: block;
    padding: .7rem 2rem;
    opacity: .8;
    color: #FFF;
    background: #00b894;
    border: none;
    outline: none;
    border-radius: 3px;
    cursor: pointer;
    font-size: 1rem;
    transition: .3s ease-in;
}

.wrapper .form .input-group .btn:hover {
    opacity: 1;
}

.wrapper .form .input-group input, .wrapper .form .input-group textarea {
    width: 100%;
    height: 100%;
    border: 1px solid #00b894;
    outline: none;
    padding: 5px 10px;
}

.wrapper .form .input-group.textarea {
    height: 200px;
}

.wrapper .form .input-group.textarea textarea {
    resize: none;
}

.wrapper .prev-comments {
    margin-top: 50px;
}

.wrapper .prev-comments .single-item {
    background: #FFF;
    box-shadow: 0 5px 10px rgba(0,0,0,0.2);
    padding: 10px 20px;
    text-align: left;
    margin-bottom: 25px;
}

.wrapper .prev-comments .single-item h4 {
    font-size: 1.3rem;
    font-weight: 800;
    color: #111;
}

.wrapper .prev-comments .single-item a {
    margin: 10px 0;
    font-size: 1rem;
    color: #111;
    text-decoration: none;
    display: inline-block;
}

.wrapper .prev-comments .single-item p {
    font-size: .9rem;
    color: #111;
}
</style>
<div class="wrapper">
		<form action="" method="POST" class="form">
			<div class="row">
				<div class="input-group">
					<label for="name">Name</label>
					<input type="text" name="name" id="name" placeholder="Enter your Name" required>
				</div>
				<div class="input-group">
					<label for="email">Email</label>
					<input type="email" name="email" id="email" placeholder="Enter your Email" required>
				</div>
			</div>
			<div class="input-group textarea">
				<label for="comment">Comment</label>
				<textarea id="comment" name="comment" placeholder="Enter your Comment" required></textarea>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Post Comment</button>
			</div>
		</form>
		<div class="prev-comments">
			<?php 
			
			$sql = "SELECT * FROM comments";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {

			?>
			<div class="single-item">
				<h4><?php echo $row['name']; ?></h4>
				<a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>
				<p><?php echo $row['comment']; ?></p>
			</div>
			<?php

				}
			}
			
			?>
		</div>
	</div>  
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

               