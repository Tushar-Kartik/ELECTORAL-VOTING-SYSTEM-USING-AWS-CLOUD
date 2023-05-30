<?php
include 'partials/_dbconnect.php';
if ($_SERVER["REQUEST_METHOD"]=="POST")
{ 
        // fetching details from database using the voter id 
    $voter_id=$_POST['votersid'];
    $validation_sql="SELECT * FROM `voter_detail` WHERE `voter_id` = $voter_id" ;
    $result= mysqli_query($conn,$validation_sql);
    // if voter exist it will start session and redirect 

    


//   this condition check if voter exist or not and voter has already voted or not  
    if (mysqli_fetch_assoc($result)  ){    
                // voter exist 
            
            
                $voter_already_voted_sql="SELECT * FROM `vote_list` WHERE `voter_id` = $voter_id";
                $result2=mysqli_query($conn,$voter_already_voted_sql);

                
                if (mysqli_fetch_assoc($result2)){
                    // voter exist and voter has alrady voted 
                
                    echo "
                    <!DOCTYPE html>
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
                    <a href='voter_login.php'>
                    <button class='button'>Cast New Vote</button>
                    </a>
                    </div>
                    </body>
                    </html>
                    
                    ";
    }

    else {
                $validation_sql="SELECT * FROM `voter_detail` WHERE `voter_id` = $voter_id" ;
                $result= mysqli_query($conn,$validation_sql);
                while($row=mysqli_fetch_assoc($result))
                {
                    $voter_id   =$row['voter_id'];
                    $voter_name =$row['name'];
                    $voter_dob  =$row['DOB'];
                    $voter_city =$row['city'];

                }

                // echo "$voter_name" ;
                // echo "<br>";
                // echo "$voter_dob";
                // echo "<br>";
                // echo "$voter_city";
                
                // starting session and defing values 
                    session_start();
                $_SESSION['voterid']    =   "$voter_id";
                $_SESSION['voter_name'] =   "$voter_name";
                $_SESSION['voter_DOB']  =   "$voter_dob";
                $_SESSION['voter_city'] =   "$voter_city";
                
                header("Location: voting2.php");
    }


}
else{
    if(mysqli_fetch_assoc($result2))
    {
    echo " <h5 style='text-align:center ; color:white;'>your vote has been saved ! </h5>";
    }
    else{
        echo "<h5 style='text-align:center ; color:white;'>voter does not exist </h5>";
    }
    }
    



}






// if (mysqli_fetch_assoc($result))
// {
//     // STARTING THE SESSION AND CREATING SESSION DATA,WITH THE HELP OF POST REQUEST 
    // session_start();
    // $_SESSION['voterid']    =   "$voter_id";
    // $_SESSION['voter_name'] =   "$voter_name";
    // $_SESSION['voter_DOB']  =   "$voter_DOB";
    // $_SESSION['voter_city'] =   "$voter_city";

//     echo "voter id exist";
//     // header("Location: voting2.php");
    
// }
// else{
//     echo " voter id does not exist";
// }
  
?>







<!-- <H3 style='text-align:center'>voter has already voted</H3>
                    <h1 style='text-align:center'>TAP TO CAST ANOTHER VOTE</h1>


                    
                    <a href='voter_login.php'>
                    <img src='img/vote.gif' alt='vote.gif'  
                    style='text-align: center;
                    display: block;
                    margin-left: auto;
                    margin-right: auto;'>
                    </a> -->