<?php
    session_start();
    include "library.php";
    if(isset($_POST['checkout'])&&($_POST['checkout'])){

        $name =$_POST['name'];
        $address =$_POST['address'];
        $phone =$_POST['phone'];
        $email =$_POST['email'];
        $total = total();

        //insert - database
        $idbill=createorder($name, $address, $phone, $email, $total);

        for($i=0;$i<sizeof($_SESSION['shcart']); $i++)
        {
            $productimg  = $_SESSION['shcart'][$i][0];
            $productname = $_SESSION['shcart'][$i][1];
            $price  = $_SESSION['shcart'][$i][2];
            $amount = $_SESSION['shcart'][$i][3];
            $ctotal = $price*$amount;
            createshcart($productname, $productimg, $price, $amount, $ctotal,$idbill);
        }

        $customerinf=' 
                    <h1>Order code: '.$idbill.'</h1>
                      
                <table style=" 
                text-align: center;">
                    <tr>
                        <td>Full Name: </td>
                        <td>'.$name.'</td>
                    </tr>

                    <tr>
                        <td>Address:</td>
                        <td>'.$address.'</td>
                    </tr>

                    <tr>
                        <td>Phone:</td>
                        <td>'.$phone.'</td>
                    </tr>

                    <tr>
                        <td>Email:</td>
                        <td>'.$email.'</td>
                    </tr>
                  


                </table>';

                $shinfo = showcart();

                unset($_SESSION['shcart']);



    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="header_style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="footer_style.css">
    <link rel="stylesheet" href="cart_style.css">
</head>

<body>

    <header>
        <nav>
            <div class="nav-bar">
                <i class='bx bx-menu sidebarOpen'></i>
                <span class="logo navLogo"><a href="index.php">Logo</a></span>
                <div class="menu">
                    <ul class="nav-links">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#C1">Product</a></li>
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
                    <a href="cart.php">
                        <div class="dark-light">
                            <i class="large material-icons">shopping_bag</i>
                        </div>
                    </a>

                    <a href="login.php">
                        <div class="dark-light">

                            <i class="large material-icons">person</i>


                        </div>
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <div class="shopping-container">
      
            <div class="shopping-info">
                
                <?php
                    echo $customerinf;
                ?>
            </div>

            <div class="shopping-cart">
                <br>
            
                <table>
                    <tr>
                        <th>Number</th>
                        <th>Product</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Amount</th>
                        <th>Select</th>


                    </tr>
                    <?php
                     echo $shinfo;
                    ?>


                </table>



            </div>
            
        
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