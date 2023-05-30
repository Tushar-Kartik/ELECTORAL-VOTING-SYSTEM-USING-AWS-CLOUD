<!doctype html>
<html lang="en">
  <head>
  <style>
    body {
  background-image: url('img/bk.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}



        table {
			font-family: Arial, sans-serif;
			/* border-collapse: collapse; */
			width: 40%;
			margin-top: 20px;
			margin-bottom: 20px;
		}
        td,th,tr {background-color: #f2f2f2;}
		table td, table th {
			border: 1px solid #ddd;
			padding: 8px;
			text-align: left;
			font-size: 16px;
		}

		table th {
			background-color: #f2f2f2;
			color: #333;
			font-weight: bold;
		}

		table tr:nth-child(even) {
			background-color: #f9f9f9;
		}

		table tr:hover {
			background-color: #f5f5f5;
		}
        table
        { 
        margin-left: auto;
        margin-right: auto;
        }
        </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DASHBOARD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>


  <body>
    
    <div class="container" style="text-align:center;">
                <h3 class="p3" style="background-color:black; text-color:white;"> <u>RESULT TABLE </u></h3>


                <table>
                <thead>
                    <tr>
                        <th>Name of Party</th>
                        <th>number of votes</th>
                    </tr>
                </thead>

                <tbody>
                    <?php 
                include 'partials/_dbconnect.php';
                $sql="SELECT selected_party, COUNT(selected_party) as count FROM vote_list GROUP BY selected_party";
                $fire= mysqli_query($conn,$sql);
                while($result = mysqli_fetch_assoc($fire))
                {
                    
                    echo "<tr>
                            <td>".$result['selected_party']. "</td>
                            <td>".$result['count']."</td>
                        </tr>";
                }
                ?>
                </tbody>
                </table>
    </div>
    
    
    
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>