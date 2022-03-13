<?php include("expire.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Welcome</title>

    <style>
        #left {
            float: left;
            width: 15%;
        }

        #right {
            float: right;
            width: 30%;
        }

        .container {
            width: 1100px;
            height: 600px;
            background: #FFF;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, .3);
            padding: 30px 20px;
        }
    </style>
</head>

<body>
    <div class="d-flex flex-column w-100 p-0" style="margin-top: -52px;">
        
        <div class="container" style="margin-top: 100px;">
            <div style="margin-left:1020px;"><a href="admin.php"><i class="fa fa-refresh"></a></i></div>
            <h5>Users Feedback:</h5>
            <?php
            
            include('config.php');
            session_start();
            error_reporting(0);
            $query = "SELECT * FROM contact";
            $results = mysqli_query($conn,$query);
            $row_count = mysqli_num_rows($results);
 
            echo '<table class="table table-bordered table-sm" style="margin-top: 40px;">';
            echo'<thead>
                        <tr>
                            <th scope="col">username</th>
                            <th scope="col">subject</th>
                            <th scope="col">body</th>
                            <th scope="col">time</th>
                        </tr>
                    </thead>';
                    echo '<tbody>';
            while ($row_users = mysqli_fetch_assoc($results)) {

                echo' <tr>
                            <td>'.$row_users['username'].'</td>
                            <td>'.$row_users['subject'].'</td>
                            <td>'.$row_users['body'].'</td>
                            <td>'.$row_users['time'].'</td>
                            
                        </tr>
                        ';
            }

            echo "</tbody></table>";
            ?>


        </div>

    </div>

</body>