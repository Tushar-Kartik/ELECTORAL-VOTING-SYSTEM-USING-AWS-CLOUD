

<!doctype html>
<html lang="en">
  <head>
    <!-- script for QR scanner  -->
    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
	<style>
    body {
      background-image: url("img/qrscan.gif");
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 70% 100%;
    }
    div.fixed {
      position: fixed;
      top: 50%;
      left: 41%;
      width: 300px;
      border: 3px solid #73AD21;
    }
    
    div.center {
    display: block;
    margin-left: auto;
    margin-right: auto;

    }
		#video-container {
			display: flex;
			flex-wrap: wrap;
		}

		#video-preview {
			width: 100%;
			height: 100%;
		}

		
    form {
      text-align: center;
    }
	</style>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <title>Vote</title>
  </head>


<body>
<!-- -------------------------------NAVBAR----------------------- -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">I-VOTE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    
  </div>
</nav>
<!-- -------------------------------------------------------------    -->


<?php require 'partials/_dbconnect.php' ; ?>


    <h2 style="font-family:verdana;text-align:center;"  class="my-4"> <U>VOTER Log-in</U></h2>
   

    <br>

    <!-- form for entering voter id , from here it will go to validate voter login   -->
<div class="center">
    <form action="/evoting/validate_voter_id.php" method="POST">
      <div class="form-group">
            <label for="votersid"><h4>voter id:</h4></label>
            

           <!-- working code >>> <input type="text" class="form-control" id="voter_id" name=votersid style="width: 500px;"> -->
           <!-- experiment code   -->
           <div class="container" align="center">
           <input type="text" class="form-control" id="qr-input" name=votersid style="width: 500px;">
          </div>
            <!-- <input type="text" id="qr-input" placeholder=""> -->
            <small id="voter_id" class="form-text">"please enter your voter id OR put your qr in front of camera"</small>
      </div>
          <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


    <!-- video conatiner  -->
    <div class="fixed" id="video-container">
        <video id="video-preview"></video>
    </div>
    <!-- ----------------------  -->






<!-- script for the QR code   -->

<script>
		var scanner = new Instascan.Scanner({ video: document.getElementById('video-preview'), scanPeriod: 5 });

		scanner.addListener('scan', function (content) {
			document.getElementById('qr-input').value = content;
		});

		Instascan.Camera.getCameras().then(function (cameras) {
			if (cameras.length > 0) {
				var selectedCamera = cameras[0];
				if (cameras.length > 1) {
					// Ask user to select a camera
					// ...
				}

				scanner.start(selectedCamera);
			} else {
				console.error('No cameras found.');
			}
		}).catch(function (e) {
			console.error(e);
		});
	</script>

  <!-- ---------------------   -->

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