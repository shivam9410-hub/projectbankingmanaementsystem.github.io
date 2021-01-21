<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body >
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid  p-0 m-0">
      <!-- Introduction section -->
   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/7849.jpg" alt="First slide">
        <div class="carousel-caption">
    <h5 class="display-4">Welcome To The Sparks Bank</h5>
    <p>We are here to serve you  please connect with</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/18593.jpg" alt="Second slide">
        <div class="carousel-caption ">
    <h5  class="display-4">Welcome To The Sparks  Bank</h5>
    <p>We are here to serve you  please connect with</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/672.jpg" alt="Third slide">
       <div class="carousel-caption ">
    <h5  class="display-4">Welcome To The Sparks  Bank</h5>
    <p>We are here to serve you  please connect with</p>
  </div
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

      <!-- Activity section -->
            <div class="row text-center p-4">
              <div class="col-md-4 col-lg-4 col-sm-12">
              <img class="img-fluid" src="img/4860259.jpg">
              <br>
                    <a href="createuser.php"><button class="btn-primary">Create a User</button></a>
              </div>
              <div class="col-md-4 col-lg-4 col-sm-12">
                 <img class="img-fluid " src="img/42589.jpg">
                  <br>
                    <a href="transfermoney.php"><button class="btn-primary">Make a Transaction</button></a>
              </div>
              <div class="col-md-4 col-lg-4 col-sm-12">
                 <img class="img-fluid" src="img/63691.jpg">
                 <br>
                    <a href="transactionhistory.php"><button class="btn-primary">Transaction History</button></a>
              </div>
      </div>
      <footer class="text-center mt-5 py-2 bg-dark text-white">
        <p> Made by <b>Shivam Kumar</b> <br>Web Developer Winter Intern @ TheSparksFoundation  </p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>