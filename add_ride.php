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
            height: 220px;
            background: #FFF;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, .3);
            padding: 30px 20px;
        }
    </style>
</head>

<body>
    <div class="d-flex flex-column w-100 p-0" style="margin-top: -252px;">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a href="welcome.php"><img src='car.jpg' alt="car" width="80" height="60" /></a>
            <a class="navbar-brand" style="color:#008B8B; font-family:emoji" href="welcome.php">FREE RIDE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a href="own_ride.php"><button type="button" class="btn btn-light" style="color:#008B8B;">My Rides</button></a>
                    </li>
                    <li class="nav-item active">
                        <a href="logout.php"><button type="button" class="btn btn-light" style="color:#008B8B">Log Out</button></a>
                    </li>
                    <li class="nav-item active">
                        <a href="signup.php"><button type="button" class="btn btn-light" style="color:#008B8B">Sign Up</button></a>
                    </li>
                    <li class="nav-item active">
                        <a href="#"><button type="button" class="btn btn-light" style="color:#008B8B">Contact Us</button></a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container" style="margin-top: 100px;">
            <h5>Provide the needed information for your ride:</h5>



            <form action="add_db.php" method="POST" style="margin-top: -110px;">
                <div id="left">
                    <label style="margin-top: 20px;">Starting pt
                    <a data-toggle="tooltip" title="starting pt must be different than destination pt otherwise ride will not be added">
                            <i><img src="hint.png" style="width:18px;height: 18px;"></i>
                        </a>
                    </label><br>
                    <?php
                    $selected = '';
                    $options = array("عاليه", "بعلبك", "البترون", "بيروت", "بنت جبيل", "طرابلس", "إهدن", "حاصبيا", "الهرمل", "جزّين", "جونية", "مرجعيون", "النبطية", "الناقورة", "راشيّا", "صيدا", "طرابلس", "صور", "زحلة", "زغرتا");
                    echo '<select name="start" required="required">';
                    echo ' <option value="">--Select--</option>';
                    foreach ($options as $option) {
                        echo '<option value="' . $option . '">' . $option . '</option>';
                    }

                    echo '</select>';

                    ?>
                </div>

                <div id="left">
                    <label style="margin-top: 20px;">Destination pt
                    <a data-toggle="tooltip" title="destination pt must be different than starting pt otherwise ride will not be added">
                            <i><img src="hint.png" style="width:18px;height: 18px;"></i>
                        </a>
                    </label><br>
                    <?php
                    echo '<select name="dest" required="required">';
                    echo ' <option value="">--Select--</option>';
                    foreach ($options as $option) {
                        echo '<option value="' . $option . '">' . $option . '</option>';
                    }

                    echo '</select>';
                    ?>


                </div>
                <div id="left">
                    <label for="seats" style="margin-top: 20px;">available seats</label>
                    <select name="seats" required="required">
                        <option value="">--Select--</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>
                <div id="left" style="margin-left:-22px;margin-top: -1px;">
                    <label for="date" style="margin-top: 20px;">Date
                    <a data-toggle="tooltip" title="Enter a valid date otherwise ride will not be added">
                            <i><img src="hint.png" style="width:18px;height: 18px;"></i>
                        </a>
                    </label>
                    <input type="date" name="date" value="" required="required">
                </div>
                <div id="left" style="margin-left:50px;margin-top: -1px;">
                    <label for="time" style="margin-top: 20px;">Time
                    <a data-toggle="tooltip" title="Enter a valid time otherwise ride will not be added">
                            <i><img src="hint.png" style="width:18px;height: 18px;"></i>
                        </a>
                    </label><br>
                    <input type="time" name="time" required="required">
                </div>
                <div id="left" style="margin-left:-20px">
                    <label for="phone" style="margin-top: 20px;">Phone Number</label>
                    <input type="text" name="phone" style="width: 120px;" required>
                </div>

                <div style="margin-top: 120px">

                    <a href="own_ride.php"><button type="submit" name="submit" class="btn btn-primary" style="color:#FFF;margin-top: 45px;">Submit</button></a>
                </div>
            </form>


        </div>

    </div>

</body>