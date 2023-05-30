<?php

if ($_SERVER["REQUEST_METHOD"]=="POST")
{
    include 'partials/_dbconnect.php';
    session_start();
    $voter_id= $_SESSION['voterid'];
    $selected_party=$_POST['radio'];
    // echo $selected_party;
    // echo $voter_id;

    $sql="INSERT INTO `vote_list` (`sno`, `voter_id`, `selected_party`, `timestamp`) VALUES (NULL,'$voter_id','$selected_party', current_timestamp() )";
    $result=mysqli_query($conn,$sql);

   
    if($result){
        echo "<!DOCTYPE html>
        <html>
        <head>
        
        
        <style>
        body {
        background-image: url('img/save.gif');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
        }
        .button {
            display: inline-block;
            padding: 20px 40px;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            border-radius: 5px;
            transition: background-color 0.3s ease;
          }
      
          .button:hover {
            background-color: #0056b3;
          }
          .container {
            display: flex;
            justify-content: center;
          }
        </style>

        <body>

     
        <h1 style='text-align:center ; color:white;'>TAP TO CAST ANOTHER VOTE</h1>
        <br>
        <br>
        <div class='container'>
        <button class='button'>Cast New Vote</button>
        </div>
        </body>
        </html>
        
        ";

    }

    else{
        echo " <img src='img/error.gif' alt='vote.gif'  
        style='text-align: center;
        display: block;
        margin-left: auto;
        margin-right: auto;'>
        ";
    }
}


?>
<?php

 session_unset();
 session_destroy();
//  header("Location: voter_login.php");

?> 