<?php
    include('config.php');
    session_start();
    error_reporting(0);
    $message = '';
    if(isset($_POST['submit'])){
        $username = $_SESSION['username'];
        $subject = $_POST['subject'];
        $body = $_POST['body'];

        $query = "INSERT INTO contact (id, username, subject, body, time) values (NULL, '$username', '$subject', '$body',current_timestamp())";
        $result = mysqli_query($conn, $query);
        if($result){
            $message = "message sent successfully.";
        }
        else{
            $message = "Something went wrong!";
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
    <h1 style="color:#FFF; font-family:Sans-serif; margin-top:20px;margin-left:730px">Contact Us:</h1>
    <div style="margin-top: 70px; margin-left: 690px">
        <form method="POST" action="contactus.php">
            <label style="font-family:sans-serif;color:#FFF;margin-top: 40px;margin-left:45px"><?php echo $message?></label>
            <input class="form-control mr-sm-2" type="text" placeholder="Subject" name="subject" style="width: 300px; color:#008B8B; height: 43px;margin-left:2px;margin-top:10px" required>
            <textarea name="body" rows="5" placeholder="Type a Message" style="margin-top: 20px;width:304px" required></textarea>
            <div class="view-ride-btn">
                <button type="submit" name="submit" class="btn btn-light btn-lg" style="width: 300px; color:#008B8B;margin-left:-717px">Submit</button>
            </div>
        </form>
    </div>
    
</body>

</html>