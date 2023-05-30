<!DOCTYPE html>
<html>
<head>
	<title>Administrator CONSOLE</title>
	<style>
        body {
        background-image: url('img/adminb.jpg');
        background-repeat:no-repeat ;
        background-attachment:fixed;
		background-size: ; 
         background-size: cover;
        }
		.container {
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			height: 50vh;
			padding: 10px;
		}

		.btn {
			display: inline-block;
            width:50%;
			padding: 20px;
			margin: 10px;
			font-size: 24px;
			background-color:  #80ced6;
			color:black;
			
			cursor: pointer;
			transition: all 0.3s ease;
			border: 2px solid white;
			border-radius: 5px;
		}

		.btn:hover {
			background-color: #00bfff;
			transform: scale(1.1);
			box-shadow: 5px 5px 20px rgba(0,0,0,0.3);
		}
		.heading {
            background-color: #333;
            color: #fff;
            font-size: 30px;
            padding: 20px;
            text-align: center;
            margin-bottom: 2px;
        }
	</style>
</head>
<body>
    <!-- -------------------------------NAVBAR----------------------- -->
<img href="img/admin.gif" >
<!-- -------------------------------------------------------------    -->

<div class="heading">
       SELECT TO PROCEED
	   </div>

	<div class="container">

   

    <button class="btn" onclick="document.location='voter_login.php'">START VOTING</button>

    <button class="btn" onclick="document.location='voter_register.php'">REGISTER A VOTER</button>

    <button class="btn" onclick="document.location='officer_sign_up.php'">ADD A NEW OFFICER</button>

    <button class="btn" onclick="document.location='index.php'">BACK TO HOME</button>

   
    

    <!-- <button class="btn" onclick="document.location='voter_login.php'">START VOTING</button>

    <button class="btn" onclick="document.location='voter_login.php'">START VOTING</button>
 -->

	</div>
</body>
</html>
