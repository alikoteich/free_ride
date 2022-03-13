<?php
    include('config.php');

    session_start();
    error_reporting(0);
    
    if(isset($_POST['submit'])){
        $start = $_POST['start'];
        $dest = $_POST['dest'];
        $seats = $_POST['seats'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $phone = $_POST['phone'];
        $username = $_SESSION['username'];
        $query = "INSERT INTO rides (username, start,dest,seats,date,time,contact) values ('$username','$start','$dest','$seats','$date','$time','$phone')";
        $result = mysqli_query($conn,$query);
        if($result){
            header("Location: own_ride.php");
        }
    }
  
    ?>