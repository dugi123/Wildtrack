<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <title>Wild Tracks</title>
    <link rel="icon" type="image/x-icon" href="img/wildtrackslklogo.png" />
    <link rel="stylesheet" href="styles/roomsgrid.css" />
    <link rel="stylesheet" href="styles/header.css" />
    <link rel="stylesheet" href="styles/footer.css" />
  </head>
  <body>
    <?php include 'includes/header.php'; ?>
    <h1 class="rooms_heading">Our Tours</h1>
    <div class="small-text">
      <span class="small-text1">Home </span>
      <img class="arrow-head" src="img/arrow-head.png" alt="arrow-head">
      <span class="small-text2">Tours</span>
    </div>
    <div class="rooms__grid">
      <?php
      $sql = "SELECT * FROM tours";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
              echo "<div class=room-component-container>";
              echo "<div class=image-container>";
              echo "<img class=room-img src=img/".$row['TourImage']." alt=room-1 />";
              echo "</div>";
              echo "<div class=text-container>";
              echo "<h3 class=room-type-heading>".$row['TourType']."</h3>";
              echo "<span class=room-price1>".$row['price']."$</span>";
              echo "<span class=room-price2>/Per Day</span>";
              echo "<table class=room-facilities-table>";
              echo "<tr>";
              echo "<th>Vehicle Type:</th>";
              echo "<td>".$row['VehicleType']." </td>";
              echo "</tr>";
              echo "<tr>";
              echo "<th>Capacity:</th>";
              echo "<td>".$row['capacity']."</td>";
              echo "</tr>";
              echo "<tr>";
              echo "<th>Includs:</th>";
              echo "<td>".$row['Includs']."</td>";
              echo "</tr>";
              echo "<tr>";
              // echo "<th>Facilities:</th>";
              // echo "<td>".$row['Includs']."</td>";
              // echo "</tr>";
              echo "</table>";
              $queryString = http_build_query($row);
              echo "<a class=room-details-link href=roomdetails.php?TourId=$row[TourId]>More Details</a>";
              echo "</div>";
              echo "</div>";
          } 
      }
      ?>
    </div>
    <?php include 'includes/footer.php'; ?>
  </body>
</html>
