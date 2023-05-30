<!-- <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.block {
  /* display: block; */
  width: 50%;
  border: 3px;
  background-color: #0000e6;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
}
.button1 {padding: 10px 24px;}


.block:hover {
  background-color: #ddd;
  color: black;
}

body {
  background-image: url('img/digital.gif');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
</head>
<body>
<div class="container" style="text-align:center">

    <h2 style="text-align:center; color:white;">Select to Proceed</h2>

    <button class="block button1" onclick="document.location='voter_login.php'" style="padding-top: 50px;">START VOTING</button>

    <button class="block button1" onclick="document.location='voter_login.php'" style="padding-top: 50px;">START VOTING</button>
    
    <button class="block button1" onclick="document.location='voter_login.php'" style="padding-top: 50px;">START VOTING</button>

   

</div>
</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
	<title>6 Buttons in Rows</title>
	<style>
        body {
        background-image: url('img/tech.gif');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        }
		.container {
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			height: 100vh;
			padding: 10px;
		}

		.btn {
			display: inline-block;
            width:50%;
			padding: 20px;
			margin: 10px;
			font-size: 24px;
			background-color: #0000e6;
			color: white;
			border: none;
			cursor: pointer;
			transition: all 0.3s ease;
		}

		.btn:hover {
			background-color: #3e8e41;
			transform: scale(1.1);
			box-shadow: 5px 5px 20px rgba(0,0,0,0.3);
		}
	</style>
</head>
<body>
    <!-- -------------------------------NAVBAR----------------------- -->


<!-- -------------------------------------------------------------    -->

    
<!-- GIVE THE OPTIONS YOU WANT TO GIVE TO A OFFICER -->

	<div class="container">

    <h2 style="text-align:center; color:white; font-family:verdana; ">Select to Proceed</h2>

    <button class="btn" onclick="document.location='voter_login.php'">START VOTING</button>
    <button class="btn" onclick="document.location='index.php'">END VOTING</button>

    <!-- <button class="btn" onclick="document.location='voter_register.php'">REGISTER A VOTER</button>

    <button class="btn" onclick="document.location='officer_sign_up.php'">ADD A NEW OFFICER</button> -->

    <button class="btn" onclick="document.location='index.php'">BACK TO HOME</button>

    

    <!-- <button class="btn" onclick="document.location='voter_login.php'">START VOTING</button>

    <button class="btn" onclick="document.location='voter_login.php'">START VOTING</button>
 -->

	</div>
</body>
</html>
