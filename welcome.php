<?php
    session_start();
    error_reporting(0);
    if(isset($_POST['submit'])){
        if(!empty($_POST['search'])){
            $_SESSION['search'] = $_POST['search'];
            //echo $_SESSION['search'];
            header("location:search.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="mainstyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Welcome</title>

</head>

<body>
<?php include('inc/header.php'); ?>
    <div class="search-bar">
        <form  method="POST" class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="enter your destination" aria-label="Search" name = "search" style="width: 300px; color:#008B8B; height: 43px">
            <button class="btn btn-success my-2 my-sm-0" type="submit" name = "submit">Search</button>
        </form>
    </div>
    <div class="add-ride-btn">
        <a href="add_ride.php"><button type="button" class="btn btn-light btn-lg" style="width: 300px; color:#008B8B">Add a Ride</button></a>
    </div>
    <div class="view-ride-btn">
        <a href="view_rides.php"><button type="button" class="btn btn-light btn-lg" style="width: 300px; color:#008B8B">View Rides</button></a>
    </div>
</body>

</html>