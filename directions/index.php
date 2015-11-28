<?php
  $pageName = "directions";
  $pageTitle = "Stay at Goldeneye Farm - Directions";
?>
<!DOCTYPE html>
<html lang="en">
  <?php include('../_inc/head.php'); ?>

  <body class="directions-page">

    <?php include('../_inc/navbar.php'); ?>

    <div class="container">
      <h1>Directions to Goldeneye Farm</h1>
      <div class="row">
        <div class="map col-sm-7 col-xs-12">
          <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d42177.07171396407!2d-122.91912943475651!3d48.6468338011978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x5485871e34e9507d%3A0xdff668f5e559eca4!2sFerry+Dock%2C+Eastsound%2C+WA+98245!3m2!1d48.597919999999995!2d-122.9440149!4m5!1s0x54858462bce1f06d%3A0x71903e09aa30e810!2s850+Point+Lawrence+Rd%2C+Olga%2C+WA+98279!3m2!1d48.624207999999996!2d-122.820488!5e0!3m2!1sen!2sus!4v1448685538103" frameborder="0" style="border:0" allowfullscreen></iframe>
          <br>
          <a target="_blank" href="https://www.google.com/maps/dir/Ferry+Dock,+Eastsound,+WA+98245/850+Point+Lawrence+Rd,+Olga,+WA+98279/@48.6467588,-122.957659,12z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x5485871e34e9507d:0xdff668f5e559eca4!2m2!1d-122.9440149!2d48.59792!1m5!1m1!1s0x54858462890ddbbb:0x49c885ae04530ae3!2m2!1d-122.8199529!2d48.6262431">Link to Google Maps</a>
        </div>
        <div class="directions col-sm-5 col-xs-12">
          <ol>
            <li>After exiting the ferry, turn left. This becomes Orcas Road.</li>
            <li>Drive on Orcas Road for 8 miles and then turn right onto Main Street. This is Eastsound, the largest town on Orcas.</li>
            <li>Keep driving on Main St. and you will get through town after about four blocks. Now you are on Crescent Beach Drive.</li>
            <li>Continue on Crescent Beach Drive for about 1 mile, and then take a right onto Olga Road.</li>
            <li>Follow Olga Road for 6.5 miles and then take a left onto Point Lawrence Road. The turn is at the bottom of a hill.</li>
            <li>Follow Point Lawrence Road for about 1 mile until you see the Goldeneye Farm sign on the right!</li>
          </ol>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../_js/bootstrap/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../_js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
