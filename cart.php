<?php
session_start();
include "library.php";
if (!isset($_SESSION['shcart'])) $_SESSION['shcart'] = [];
//delete shopping cart  
if (isset($_GET['delid']) && ($_GET['delid'] >= 0)) {
    array_splice($_SESSION['shcart'], $_GET['delid'], 1);
}
//get data
if (isset($_POST['addcart']) && ($_POST['addcart'])) {
    $myimg = $_POST['img'];
    $prodname = $_POST['productname'];
    $price = $_POST['price'];
    $amount = $_POST['amount'];

    //check the same
    $temp = 0;
    for ($i = 0; $i < sizeof($_SESSION['shcart']); $i++) {
        if ($_SESSION['shcart'][$i][1] == $prodname) {
            $temp = 1;
            $newamount = $amount + $_SESSION['shcart'][$i][3];
            $_SESSION['shcart'][$i][3] = $newamount;
            break;
        }
    }

    if ($temp == 0) {
        $product = [$myimg, $prodname, $price, $amount];
        
        $_SESSION['shcart'][] = $product;
    }
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
        <form action="bill.php " method="POST">
            <div class="shopping-info">
                <h1>Information</h1>
                <table>
                    <tr>
                        <td>Full Name</td>
                        <td><input type="text" name="name" required></td>
                    </tr>

                    <tr>
                        <td>Address</td>
                        <td><input type="text" name="address" required></td>
                    </tr>

                    <tr>
                        <td>Phone</td>
                        <td><input type="text" name="phone" required></td>
                    </tr>

                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="email" required></td>
                    </tr>


                </table>
            </div>

            <div class="shopping-cart">
                <h1>Shopping Cart</h1>
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
                    echo showcart();
                    ?>


                </table>



            </div>
            <div class="shopping-func">
               <input type="submit" class="shopping-fuc_btn" value="Checkout" name="checkout">
            </div>
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