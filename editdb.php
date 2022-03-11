<?php
    include('config.php');
    include('target.php');
  
    //error_reporting(0);
    if(isset($_POST['delete'])){
        
        $edit = $_SESSION['edit'];
 
        $query = "DELETE FROM rides WHERE id = '$edit'";
        $result = mysqli_query($conn,$query);
        if($result){
            header("Location: own_ride.php");
        }
    }
    if(isset($_POST['submit'])){
        $start = $_POST['start'];
        $dest = $_POST['dest'];
        $seats = $_POST['seats'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $phone = $_POST['phone'];
        $username = $_SESSION['username'];
        $edit = $_SESSION['edit'];
 
        $query = "UPDATE rides SET username='$username', start='$start',dest='$dest',seats='$seats',date='$date',time='$time',contact='$phone' WHERE id = '$edit'";
        $result = mysqli_query($conn,$query);
        if($result){
            header("Location: own_ride.php");
        }
    }
  
    ?>