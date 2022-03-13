<?php
include("config.php");
session_start();
//error_reporting(0);
if( isset($_GET['myHiddenField']) ){
  $_SESSION['edit'] = $_GET['myHiddenField'];
  //echo $_SESSION['id'];
  header("location: edit_ride.php");
}
?>