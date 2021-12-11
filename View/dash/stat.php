<!-- stat -->
<?php 
session_start();
 include_once '../../Model/produit.php';
 include_once '../../Controller/produitC.php';
 include_once "../../config.php";
 $error = "";
$produit = NULL;
$produitC = new produitC();
$listeproduits = $produitC->calcul();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <title>static</title>
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
        
	 <div align="center">
     <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
            <br>
            <h4>Statistics</h4> 
              <div class="table-responsive p-0">
           <div class="wrap-table100">
     <table class="table align-items-center mb-0"> 
		<th  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps">Prix</th>
		<th  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps">Total</th>
     <?php 
  
    foreach($listeproduits as $row){
    	 print"<tr>";
	     echo"<td>".$row['total']."</td>"; 
	   	 echo"<td>".$row['quantite']."</td>"; 

     $dataPoints = array(
	array("label"=> "Price", "y"=>$row['total']),
	array("label"=> "Amount", "y"=> $row['quantite']),);
     }?> 
     <br>
     </table>
      </div>
     <br><br>
      <div id="chartContainer" style="height: 300px; width: 100%;"></div>
       <br></div></div></div></div></div>
      <!-- end stat -->



       <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        <script>
        window.onload = function () {
        var chart = new CanvasJS.Chart("chartContainer", {
	   animationEnabled: true,
	  exportEnabled: true,
	  data: [{
		type: "pie",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - #percent%",
		yValueFormatString: "฿#,##0",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	     }]
        });
       chart.render();
 
        }
       </script>
      </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <?php include "segments/footer.php"; ?>
  </body>
</html>