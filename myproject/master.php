<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
?>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">My Website</a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-info-sign"></span> About Us</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-phone-alt"></span> Contact Us</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if (isset($_SESSION['USERNAME'])): ?>
                    <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
                <?php else: ?>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <li><a href="register.php"><span class="glyphicon glyphicon-pencil"></span> Registration</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
