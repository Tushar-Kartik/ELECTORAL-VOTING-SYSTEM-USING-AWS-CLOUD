<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body {
            background-image: url('img/ds.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
            font-family: Arial, sans-serif;
            font-size: 16px;
        }
        .green-button {
            background-color: #00b8e6;
            color: white;
            border: none;
            padding: 12px 24px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }
        .green-button:hover {
            background-color: #005266;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            max-width: 960px;
            margin: 0 auto;
            padding: 20px;
        }

        .table {
            background-color: #fff;
            border-collapse: collapse;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            width: 47%;
        }

        .table th, .table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            font-size: 16px;
        }

        .table th {
            background-color: #f2f2f2;
            color: #333;
            font-weight: bold;
        }

        .table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .table tr:hover {
            background-color: #f5f5f5;
        }

        .heading {
            background-color: #333;
            color: #fff;
            font-size: 30px;
            padding: 20px;
            text-align: center;
            margin-bottom: 20px;
        }

        @media screen and (max-width: 767px) {
            .table {
                width: 100%;
            }
        }
    </style>
</head>
<body>

    <div class="heading">
        DASHBOARD
    </div>
    
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th colspan="2" style="text-align:center;">POLLING RESULTS</th>
                </tr>
                <tr>
                    <th>ELECTION PARTY</th>
                    <th>NUMBER OF VOTES</th>
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
        <table class="table">
            <thead>
                <tr>
                    <th colspan="2" style="text-align:center;">SUMMARY</th>
                </tr>
                <!-- <tr>
                    <th>Right Table Column 1</th>
                    <th>Right Table Column 2</th>
                </tr> -->
            </thead>
            <tbody>
                <tr>
                    <td>winning party</td>

                    <!-- finding the party with max number of votes  -->
                    <?php 
                    include 'partials/_dbconnect.php';
                    $sql="SELECT selected_party, COUNT(selected_party) as count FROM vote_list GROUP BY selected_party";
                    $fire= mysqli_query($conn,$sql);
                    if ($result = mysqli_fetch_assoc($fire))
                    {
                        
                        echo " <td>".$result['selected_party']. "</td> " ;
                                      
                    }
                    ?>
                </tr>


                <tr>
                    <td>total votes of winning party</td>
                    <!-- finding total votes of winning partyy  -->
                    <!-- finding the party with max number of votes  -->
                    <?php 
                    include 'partials/_dbconnect.php';
                    $sql="SELECT selected_party, COUNT(selected_party) as count FROM vote_list GROUP BY selected_party";
                    $fire= mysqli_query($conn,$sql);
                    if ($result = mysqli_fetch_assoc($fire))
                    {
                        
                        echo " <td>".$result['count']. "</td> " ;
                                      
                    }
                    ?>
                </tr>

            </tbody>
        </table>
    </div>

    <div class="container" style="align:center">
    <button class="green-button" style="align:center" onclick="window.location.href = 'index.html';">Back to Home Page</button>
    </div>

</body>
</html>
