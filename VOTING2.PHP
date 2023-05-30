

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- --------------------------------------------------------------------------------------------------- -->

    <title>VOTING 2</title>


	<style>
        
        .table, th, td {
            border:1px solid black;
        }
		.row1 {
			display: flex;
			flex-direction: row;
			width: 100%;
			height: 200px;
            /* background-color: blue; */
		}
        .row2 {
			display: flex;
			flex-direction: row;
			width: 100%;
			height: 500px;
            background-color:#FFF8DC;
		}
        #image { position:absolute; top:0; left:0; }
		
        .center {
                margin-left: auto;
                margin-right: auto;
                text-align: center;
                
                }
        hr {
            /* border: 0; */
            /* clear:both; */
            /* display:block; */
            width:100%;               
            background-color:grey;
            height: 0.5px;
            }
	</style>
  </head>
  <body>
  
  <!-- this is row one  -->
	<div class="row1" style="background-image: url('img/ashok.gif');
  background-repeat: no-repeat; "  >

  
 



        <div class="container" style="text-align: center;">

            <h3 style="padding-bottom:30px; font-family:Garamond;"><u>VOTER DETAILS</u> </h3>
            
            
            <!-- php script -->
            <?php
                include 'partials/_dbconnect.php' ;
                //  session starts 
                session_start();
                // echo "voter id:".$_SESSION['voterid'];
                // echo "<br>";
                // echo "voters name:".$_SESSION['voter_name'];
                // echo "<br>";
                // echo "voters DOB:".$_SESSION['voter_DOB'];
                // echo "<br>";
                // echo "voters city:".$_SESSION['voter_city'];
                // echo "<br>";

                echo '
                

                <table class="center" border="2" width="50%">

                    <tbody>
                    <tr>
                        <th>voter ID</th>
                        <td>'.$_SESSION['voterid'].'</td>
                        
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>'. $_SESSION['voter_name'].'</td>
                        
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>'. $_SESSION['voter_city'].' </td>
                        
                    </tr>
                    </tbody>
                </table></code>

                </div>
                ';
            ?>
            
        </div>

	</div>

    <!-- this is row two  -->
    <div class="row2">

            <div class="center" style="padding-top:20px">
        <form action="sucess.php" method="POST">

        <table >
            
            <tr>
                <td>
                <input type="radio" id="BJP" name="radio" value="BJP">
                <label for="BJP"><img src="img/bjp.png" alt="buttonpng"  width="150" height="150"/></label>
                </td>

                <td>
                <input type="radio" id="CONGRESS" name="radio" value="CONGRESS">
                <label for="CONGRESS"><img src="img/congress.webp" alt="buttonpng"  width="150" height="150"/></label>
                </td>

                <td>
                <input type="radio" id="AAP" name="radio" value="AAP">
                <label for="AAP"><img src="img/aap.jpeg" alt="buttonpng"  width="150" height="150"/></label>
                </td>

                <td>
                <input type="radio" id="BJP" name="radio" value="BJP">
                <label for="BJP"><img src="img/mayavati.png" alt="buttonpng"  width="150" height="150"/></label>
                </td>

            </tr>

        
        </table>

            <hr>
            <button type="submit" class="btn btn-primary">cast vote</button>
        
        </form>
        </div>
      

    
    </div>


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
