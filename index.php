<?php
  $pageName = "home";
  $pageTitle = "Stay at Goldeneye Farm";
?>
<!DOCTYPE html>
<html lang="en">
  <?php include('_inc/head.php'); ?>

  <body class="home-page">

    <?php include('_inc/navbar.php'); ?>

    <div class="jumbotron">
      <div class="container">
        <div class="row">
          <img class="logo" id="logo" src="_img/goldeneye-logo.png" />
          <div class="stay-at-goldeneye">
            <h1>Stay at Goldeneye Farm</h1>
            <p>Your restful getaway on beautiful Orcas Island!</p>
            <p><a class="btn btn-lg btn-book-now" href="http://bookings.sanjuanpm.com/Unit/Details/110672" role="button">Book now!</a></p>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="_js/bootstrap/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="_js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
