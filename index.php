<!doctype html>
<html lang="en">
  <head>
  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>I-VOTE</title>
  </head>
  <body >
    <?php include 'partials/_navbar.php' ?>

        <!-- CROUSAL-->
    <div id="carouselExampleControlsNoTouching" class="carousel slide" data-touch="false" data-interval="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="img/c6.jpg"  height=500 class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="img/c2.jpeg" height=500 class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="img/c4.jpg" height=500 class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="img/c5.png" height=500 class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleControlsNoTouching" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleControlsNoTouching" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>


<div class="row">
  <div class="column">
    <img src="img/login-animate.gif" alt="login gif">
  </div>

  <div class="column">
  <h4 style="font-family:Segoe UI Black;"  class="my-4"><u><b> OFFICER LOG-IN</b></u></h4>
  
        <!-- official log in  -->
<div class="container" style="padding-left: 150px;">
    
    <!-- form for log in  -->
    <form action="officer_validate.php" method="POST" id="ologin" style="padding-top: 40px"> 
            <div class="form-group">
            <label for="uname">USER ID</label>
            <input type="text" class="form-control" id="userid" name="ouserid" style="width: 500px;" placeholder="Enter user id">
            <small id="" class="form-text text-muted">We'll never share your user user id  with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="Password">Password</label>
            <input type="password" class="form-control" id="password" name="opassword" placeholder="Password" style="width: 500px;" >
        </div>
        <button type="submit" class="btn btn-primary">log-in</button>
    </form>

   

</div>
  </div>
</div>


<div class="card-footer text-muted">
for any log in issues contact     
</div>











    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>