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
                <a href="contactus.php"><button type="button" class="btn btn-light" style="color:#008B8B">Contact Us</button></a>
            </li>
            <li class="nav-item active">
                <?php
                include('config.php');
                session_start();
                error_reporting(0);
                if (isset($_SESSION['username'])) {
                    $username = $_SESSION['username'];
                    if ($username == 'root_admin') {
                        echo '<a href="admin.php"><button type="button" class="btn btn-light" style="color:#008B8B">admin</button></a>';
                    }else
                    echo '<a href="admin.php"><button type="button" class="btn btn-light" style="color:#008B8B" disabled>admin</button></a>';
                }else
                echo '<a href="admin.php"><button type="button" class="btn btn-light" style="color:#008B8B" disabled>admin</button></a>';
                ?>
                
            </li>
        </ul>
    </div>
</nav>