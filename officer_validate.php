<?php
include 'partials/_dbconnect.php';
if ($_SERVER["REQUEST_METHOD"]=="POST")
{ 
       $officer_id = $_POST['ouserid'];
       $officer_password = $_POST['opassword'];

       $sql="SELECT * FROM officer_detail where ouserid='$officer_id' and opassword='$officer_password';";
    // echo $sql;
       $result= mysqli_query($conn,$sql);
    
       if (mysqli_fetch_assoc($result)  )
       {   
        session_start();
        $_SESSION['officer_id']    =   "$officer_id";

        echo "login sucess";

        header("Location: officer_options.php");
        }

        else{
            echo"invalid credentials";
        }

}