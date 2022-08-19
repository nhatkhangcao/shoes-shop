<?php
    include 'config.php';
    error_reporting(0);
    session_start();
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn,$sql);
        if($result->num_rows > 0){
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];
            header("Location: welcome.php");
        }else{
            echo"<script>alert('Email or Password is WRONG')</script>";
        }


    }    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="login_style.css">
    <link rel ="stylesheet" type="text/css" href="header_style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="footer_style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<header>
        <nav>
            <div class="nav-bar">
                <i class='bx bx-menu sidebarOpen'></i>
                <span class="logo navLogo"><a href="index.php">Logo</a></span>
                <div class="menu">
                    <ul class="nav-links">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Product</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>

                <div class="darkLight-searchBox">
                    <div class="searchBox">
                        <div class="searchToggle">  
                            <i class="large material-icons cancel">close</i>
                            <i class="large material-icons search">search</i>
                        </div>
                        <div class="search-field">
                            <input type="text" placeholder="Search...">
                            <i class="large material-icons">search</i>
                        </div>
                    </div>
                    <a href="cart.html">
                        <div class="dark-light">
                            <i class="large material-icons">shopping_bag</i>
                        </div>
                    </a>
                    <div class="dark-light">
                        <i class="large material-icons">person</i>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="container" >
        <form class="login"  method="POST" action="">
            <h1>
                SIGN IN
            </h1>
            <div class="login-user">
                <input type="text"placeholder="Email" name="email">

            </div>
            <div class="login-pw">
                <input type="password"placeholder="Password" name="password">
            </div>
            <button name="submit">Sign In</button>
            <span class="login-a"> 
                Don't have an account?<a href="register.php" > Register</a>
            </span>

        </form>

    </div>

    <footer>
    <div class="footer-container">
            <div class="social">
                <h1>
                    Contact US
                </h1>
                <ul>
                    <li class="social-list"><a href="https://www.facebook.com/profile.php?id=100009564918832"><i class="fa fa-facebook"></i></a></li>
                    <li class="social-list"><a href="#"><abbr class="social-mail" title="19119098@student.hcmute.edu.vn" style="color:white;"><i class="fa fa-envelope-o"></i></abbr></a></li>
                    <li class="social-list"><a href="https://www.instagram.com/nhatkhang_c"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
            <small>©2022 by UTE Student </small>
        </div>
        </footer>


    <script src="function.js"></script>
</body>

</html>