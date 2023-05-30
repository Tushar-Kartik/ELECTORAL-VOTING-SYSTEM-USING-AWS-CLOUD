<?php
include 'partials/_dbconnect.php';
if ($_SERVER["REQUEST_METHOD"]=="POST")
{ 
       $admin_id = $_POST['user-id'];
       $admin_password = $_POST['admin-password'];

       $sql="SELECT * FROM admin_details where admin_id='$admin_id' and password='$admin_password';";
    // echo $sql;
       $result= mysqli_query($conn,$sql);
    
       if (mysqli_fetch_assoc($result)  )
       {   
        session_start();
        $_SESSION['admin_id']    =   "$admin_id";

        echo "login sucess";

        header("Location: admin_home.php");
        }

        else{
            echo"invalid credentials";
        }

}