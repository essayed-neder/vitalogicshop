<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   <title>Show Commands</title>
    <!-- plugins:css -->
    <?php include "segments/plugin.php"; ?> 
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
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Basic Tables </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Striped Table</h4>
                    
                    </p>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>User</th>
                          <th>Product</th>
                          <th>Sale</th>
                          <th>Status</th>
                          <th>Delete</th>
                          <th>Product</th>
                          <th>Sale</th>
                          <th>Status</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Jacob</td>
                          <td>Photoshop</td>
                          <td> 28.76%</td>
                          <td><button type="button" class="btn btn-primary btn-rounded btn-fw">Primary</button></td>
                          <td><button type="button" class="btn btn-danger btn-rounded btn-fw">Danger</button></td>
                        </tr>
                        <tr>
                          <td>Messsy</td>
                          <td>Flash</td>
                          <td  > 21.06% </td>
                          <td><button type="button" class="btn btn-primary btn-rounded btn-fw">Primary</button></td>
                          <td><button type="button" class="btn btn-danger btn-rounded btn-fw">Danger</button></td>
                        </tr>
                        <tr>
                          <td>John</td>
                          <td>Premier</td>
                          <td  > 35.00% </td>
                          <td><button type="button" class="btn btn-primary btn-rounded btn-fw">Primary</button></td>
                          <td><button type="button" class="btn btn-danger btn-rounded btn-fw">Danger</button></td>
                        </tr>
                        <tr>
                          <td>Peter</td>
                          <td>After effects</td>
                          <td > 82.00</td>
                          <td><button type="button" class="btn btn-primary btn-rounded btn-fw">Primary</button></td>
                          <td><button type="button" class="btn btn-danger btn-rounded btn-fw">Danger</button></td>
                        </tr>
                        <tr>
                          <td>Dave</td>
                          <td>53275535</td>
                          <td > 98.05</td>
                          <td><button type="button" class="btn btn-primary btn-rounded btn-fw">Primary</button></td>
                          <td><button type="button" class="btn btn-danger btn-rounded btn-fw">Danger</button></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
             
             
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="footer-inner-wraper">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Ecotopia 2020</span>
                
              </div>
            </div>
            <?php include "segments/footer.php"; ?>
</html>