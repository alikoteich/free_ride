<?php
    include('config.php');
    session_start();
    error_reporting(0);

    $query = " DELETE FROM rides WHERE date < CURDATE() OR(date = CURDATE() AND time < CURTIME())";
        $result = mysqli_query($conn,$query);
    $query2 = " DELETE FROM rides WHERE start = dest";
        $result = mysqli_query($conn,$query2);
?>