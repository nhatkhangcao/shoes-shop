<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="header_style.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="footer_style.css">
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

    <div class="slideshow-container">


        <div class="mySlides">
            <div class="numbertext">1 / 3</div>
            <img src="images/silder1.jpg">
            <div class="text"></div>
        </div>

        <div class="mySlides">
            <div class="numbertext">2 / 3</div>
            <img src="images/silder2.jpg">
            <div class="text"></div>
        </div>

        <div class="mySlides">
            <div class="numbertext">3 / 3</div>
            <img src="images/slider3.jpg">
            <div class="text"></div>
        </div>



        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>


    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>





    <div class="site-container">
        <h1 id="C1" class="article-text" style="text-align:center">
            NEW ARRIVALS
        </h1>
        <div class="article-container">
            <article class="article-card">
                <figure class="article-image">
                    <img src="./images/af1.jpeg">
                </figure>


                <div class="article-content">
                    <a href="#" class="card-title">Air Force 1</a>
                    <p class="card-excerpt">200.00$</p>
                    
     
                </div>
                <form action="cart.php" method="POST">
                    <input class="cart-amount" type="number" name="amount" value="1" min=1>
                    <input class="btn-order" type="submit" name="addcart" value="Order">
                    <input type="hidden" name="productname" value="Air Force 1">
                    <input type="hidden" name="price" value="200.00">
                    <input type="hidden" name="img" value="images/af1.jpeg">
                </form>
            </article>

            <article class="article-card">
                <figure class="article-image">
                    <img src="./images/jordan1.jpeg">
                </figure>


                <div class="article-content">
                    <a href="#" class="card-title">Jordan 1</a>
                    <p class="card-excerpt">234.00$</p>
                </div>
                <form action="cart.php" method="POST">
                    <input class="cart-amount" type="number" name="amount" value="1" min=1>
                    <input class="btn-order" type="submit" name="addcart" value="Order">
                    <input type="hidden" name="productname" value="Jordan 1">
                    <input type="hidden" name="price" value="234.00">
                    <input type="hidden" name="img" value="images/jordan1.jpeg">
                </form>
            </article>

            <article class="article-card">
                <figure class="article-image">
                    <img src="./images/jordan1retro.jpeg">
                </figure>


                <div class="article-content">
                    <a href="#" class="card-title">Jordan 1 Retro</a>
                    <p class="card-excerpt">250.00$</p>
                </div>
                <form action="cart.php" method="POST">
                    <input class="cart-amount" type="number" name="amount" value="1" min=1>
                    <input class="btn-order" type="submit" name="addcart" value="Order">
                    <input type="hidden" name="productname" value="Jordan Retro 1">
                    <input type="hidden" name="price" value="250.00">
                    <input type="hidden" name="img" value="images/jordan1retro.jpeg">
                </form>
            </article>

            <article class="article-card">
                <figure class="article-image">
                    <img src="./images/nikecourtzoom.jpeg">
                </figure>


                <div class="article-content">
                    <a href="#" class="card-title">CourtZoom NXT</a>
                    <p class="card-excerpt">150.00$</p>
                </div>
                <form action="cart.php" method="POST">
                    <input class="cart-amount" type="number" name="amount" value="1" min=1>
                    <input class="btn-order" type="submit" name="addcart" value="Order">
                    <input type="hidden" name="productname" value="CoutrZoom NXT">
                    <input type="hidden" name="price" value="150.00">
                    <input type="hidden" name="img" value="images/nikecourtzoom.jpeg">
                </form>
            </article>

            <article class="article-card">
                <figure class="article-image">
                    <img src="./images/airmax270.jpeg">
                </figure>


                <div class="article-content">
                    <a href="#" class="card-title">Air Max 270</a>
                    <p class="card-excerpt">170.00$</p>
                </div>
                <form action="cart.php" method="POST">
                    <input class="cart-amount" type="number" name="amount" value="1" min=1>
                    <input class="btn-order" type="submit" name="addcart" value="Order">
                    <input type="hidden" name="productname" value="Air Max 270">
                    <input type="hidden" name="price" value="170.00">
                    <input type="hidden" name="img" value="images/airmax270.jpeg">
                </form>
            </article>

            <article class="article-card">
                <figure class="article-image">
                    <img src="./images/vistasandals.jpeg">
                </figure>


                <div class="article-content">
                    <a href="#" class="card-title">Vista Sandals</a>
                    <p class="card-excerpt">100.00$</p>
                </div>
                <form action="cart.php" method="POST">
                    <input class="cart-amount" type="number" name="amount" value="1" min=1>
                    <input class="btn-order" type="submit" name="addcart" value="Order">
                    <input type="hidden" name="productname" value="Vista Sandals">
                    <input type="hidden" name="price" value="100.00">
                    <input type="hidden" name="img" value="images/vistasandals.jpeg">
                </form>
            </article>

            <article class="article-card">
                <figure class="article-image">
                    <img src="./images/courtvisionmid.jpeg">
                </figure>


                <div class="article-content">
                    <a href="#" class="card-title">Court Vision Mid</a>
                    <p class="card-excerpt">50.00$</p>
                </div>
                <form action="cart.php" method="POST">
                    <input class="cart-amount" type="number" name="amount" value="1" min=1>
                    <input class="btn-order" type="submit" name="addcart" value="Order">
                    <input type="hidden" name="productname" value="Court Vision Mid">
                    <input type="hidden" name="price" value="50.00">
                    <input type="hidden" name="img" value="images/courtvisionmid.jpeg">
                </form>
            </article>

            <article class="article-card">
                <figure class="article-image">
                    <img src="./images/mctrainertraining.jpeg">
                </figure>


                <div class="article-content">
                    <a href="#" class="card-title">MC Trainer</a>
                    <p class="card-excerpt">300.00$</p>
                </div>
                <form action="cart.php" method="POST">
                    <input class="cart-amount" type="number" name="amount" value="1" min=1>
                    <input class="btn-order" type="submit" name="addcart" value="Order">
                    <input type="hidden" name="productname" value="MC Trainer">
                    <input type="hidden" name="price" value="300.00">
                    <input type="hidden" name="img" value="images/mctrainertraining.jpeg">
                </form>
            </article>

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