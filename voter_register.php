<!-- ---------------------------------------  -->
<!doctype html>
<html lang="en">
  <head><style>
      /* CSS styles */
      body {
        background-image: url('img/gradient.gif');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
        }

      
    .center {
        margin: 0;
        position: absolute;
        top: 70%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        }
      form {
        margin: 20px auto;
        width: 400px;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.2);
      }
      
      label {
        display: block;
        margin-bottom: 8px;
      }
      
      input[type=text], input[type=date] {
        padding: 8px;
        border-radius: 4px;
        border: 1px solid #ccc;
        width: 100%;
        box-sizing: border-box;
      }
      
      input[type=submit] {
        background-color: #4CAF50;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
        float: right;
      }
      
      input[type=submit]:hover {
        background-color: #45a049;
      }
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>voter Registration</title>
  </head>
  <body>
    <!-- php script  -->
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    include 'partials/_dbconnect.php';

    $name=$_POST['name'];
    $voter_id=$_POST['voter_id'];
    $dob=$_POST['dob'];
    $city=$_POST['city'];

    // echo $name;
    // echo "<br>";
    // echo $voter_id;
    // echo "<br>";
    // echo $dob;
    // echo "<br>";
    // echo $city;
    // echo "<br>";

    
    $sql="INSERT INTO `voter_detail` (`voter_id`, `name`, `DOB`, `city`) VALUES ('$voter_id','$name', '$dob', '$city')";
    
    $result=mysqli_query($conn,$sql);
    

    if ($result==1){  
        echo '<div class="alert alert-warning sucess-dismissible fade show" role="alert">
        <strong>you are registered!</strong> thank you for registering
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     ';  
               
    }

}

?>
    
    <form action=voter_register.php method='POST'>
      <h2>voter Registration</h2>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
      <label for="voter-id">Voter ID:</label>
      <input type="text" id="voter_id" name="voter_id" required>
      <label for="dob">Date of Birth:</label>
      <input type="date" id="dob" name="dob" required>
      <label for="city">City:</label>
      <input type="text" id="city" name="city" required>
      <input type="submit" value="Register ">
    </form>
   
<div class="center">
    <button style="background-color: red; color: white;" class="btn" type="submit" onclick="document.location='index.php'">BACK TO HOME</button>
  </div>  <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>