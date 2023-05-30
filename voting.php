<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>voting page</title>
  </head>
  <body>

<div class="row" style="height:10%;" >
    <div class="column" style="width:30%; height=100%;">
    <img src="img/fetching_details.gif" alt="login gif" width="250" height="150">
    </div>
    
<div class="column" style="width:70%;heigth=100%; ">
        <h1 align="center">voter's detail</h1>
        <hr>
    
        <div class="container" >
            <!-- showing details using php in left  cloumn   -->
            <?php
            include 'partials/_dbconnect.php' ;
            session_start();
            $voter__id=$_SESSION['voterid'];
            echo " sesion voter id :".$voter__id ;


            
            if ($_SERVER["REQUEST_METHOD"]=="POST")
            {
                    $votersid = $_POST["votersid"];

                    $sql="SELECT * FROM `voter_detail` WHERE `voter_id` = $votersid" ;

                    $result = mysqli_query($conn,$sql);
                    if(!$result)
                    {
                        echo " there is some error";
                    }
                    else{
                        while( $row = mysqli_fetch_assoc( $result ) )
                        {
                            

                        echo'<div class="container">
                            <h5 style="font-family:verdana">VOTER id: '.$row['voter_id'].'<br>
                            NAME:'.$row['name'].' <br>
                             DOB:'.$row['DOB'].' </H5>
                            </div> ' ;

                        }
                    }
            }
            ?>        
        </div>
            
</div>
</div>


    <h5 align="center" padding="4px">SELECT YOUR VOTING PARTY</h5>
    <hr>


<?php  
include 'partials/_dbconnect.php' ;
if ($_SERVER["REQUEST_METHOD"]=="POST")
{
        $votersid = $_POST["votersid"];
        $sql="SELECT * FROM `voter_detail` WHERE `voter_id` = $votersid" ;

        $result = mysqli_query($conn,$sql);
        if(!$result)
        {
            echo " there is some error";
        }
        else{
            while( $row = mysqli_fetch_assoc( $result ) )
            {


                echo '
                <div class="container" style="text-align: center;">              
                your id : <input type="text" name="votersid" value='.$row['voter_id'].' >
                </div>
  

                
                
                <form action="sucess.php" method="POST">
                <div class="container" align="row" style=" display: flex;">

                
                
                  <input type="radio" id="BJP" name="radio" value="BJP">
                  <label for="BJP"><img src="img/bjp.png" alt="buttonpng" border="3" width="250" height="250"/></label>

                  <input type="radio" id="CONGRESS" name="radio" value="CONGRESS">
                  <label for="CONGRESS"><img src="img/congress.webp" alt="buttonpng" border="3" width="250" height="250"/></label>

                  <input type="radio" id="AAP" name="radio" value="AAP">
                  <label for="AAP"><img src="img/aap.jpeg" alt="buttonpng" border="3" width="250" height="250"/></label>

                <input type="radio" id="BSP" name="radio" value="BSP">
                <label for="BSP"><img src="img/mayavati.png" alt="buttonpng" border="3" width="250" height="250"/></label>
                
                </div>
                <hr>


                <button type="submit" class="btn btn-primary">cast vote</button>


                <!-- -----------------------------this is commented part ------------------------------ -->
                <!-- <button type="submit">
                        <img src="img/bjp.png" alt="buttonpng" border="3" width="250" height="250"/>
                    </button>
                    <button type="submit">
                        <img src="img/congress.webp" alt="buttonpng" border="3" width="250" height="250"/>
                    </button>
                    <button type="submit">
                        <img src="img/mayavati.png" alt="buttonpng" border="3" width="250" height="250"/>
                    </button>
                    <button type="submit">
                        <img src="img/aap.jpeg" alt="buttonpng" border="3" width="250" height="250"/>
                    </button> -->


                </form> ' ;
            }
            }
}
?>





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


    <!-- background-image:url('img/gradient.gif'); background-repeat: no-repeat;background-attachment: fixed;background-size: cover; -->
  </body>
</html>