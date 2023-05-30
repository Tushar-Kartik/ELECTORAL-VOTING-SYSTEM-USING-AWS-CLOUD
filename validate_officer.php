<?php
include 'partials/_dbconnect.php';
if ($_SERVER["REQUEST_METHOD"]=="POST")
{ 
       $user_id= $_POST['ouserid'];
       $opassword=$_POST['opassword'];

       $sql="SELECT FROM 'officer_detail' where userid='$user_id' and password='$opassword';"
       $result=mysqli_query($conn,$sql);
    
       if (mysqli_fetch_assoc($result)  )
       {   
        session_start();
        $_SESSION['officer_id']    =   "$user_id";

        header("Location: admin_options.php");
         }
        else{
            echo"invalid credentials";
        }

}