<?php
 include 'conn.php';
include 'Admin.php';
?>



<!DOCTYPE HTML>
<html>
<head>
    <style>
     
        </style>
    
 <meta charset="utf-8">
 <title>TechJunkGigs</title>
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script type="text/javascript">
 google.load("visualization", "1", {packages:["corechart"]});
 google.setOnLoadCallback(drawChart);
 function drawChart() {
 var data = google.visualization.arrayToDataTable([

 ['class Name','Students'],
 <?php 
			$query = "SELECT * from class";

			 $exec = mysqli_query($conn,$query);
			 while($row = mysqli_fetch_array($exec)){

			 echo "['".$row['class_name']."',".$row['students']."],";
			 }
			 ?> 
 
 ]);

 var options = {
  pieHole: 0.75
          };
 var chart = new google.visualization.PieChart(document.getElementById("columnchart12"));
 chart.draw(data,options);
 }
	
    </script>

</head>
<body>
 <div class="container-fluid">
 <div id="columnchart12" style="margin-left:500px" ></div>

</div>
</body>
</html>

