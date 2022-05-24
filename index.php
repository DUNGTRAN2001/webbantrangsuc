<?php
session_start();
setcookie('path', __DIR__, time() + 60 * 60 * 24 * 365, '/');
if(!isset($_SESSION['IS_LOGIN'])){
    header('location:View/login.php');
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chợ tốt demo1</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="ds/fontawesome-free-6.1.1-web/fontawesome-free-6.1.1-web/css/all.min.css">

    <link rel="stylesheet" href="ds/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">


</head>
<body>
    


    <section id="header">
        <a href="#"><img class="logo" src="ds/img/chototlogo.png" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a  class="active" href="View/shop.php">Shop</a></li>
                <li><a  class="active" href="View/bongtai.php">Bông tai</a></li>
                <li><a  class="active" href="View/daychuyen.php">Dây chuyền</a></li>
                <li><a  class="active" href="View/vongtay.php">Vòng tay</a></li>
                <li><a  class="active" href="View/nhan.php">Nhẫn</a></li>
                <li><a href="View/blog.php">Blog</a></li>
                <li><a href="View/about.php">About</a></li>
                <li><a href="View/contact.php">Contact</a></li>
                <li id="lg-bag"><a href="View/cart.php"><i class="fa-solid fa-bag-shopping"></i></a></li>
                <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
                <nav role="navigation">
                    <ul>
                        <li><a href="#"><i class="fa-solid fa-user"></i></a>
                            <ul class="dropdown">
                                <li><a href="View/profile.php"><i class="fa-solid fa-gears">Setting</i></a></li>
                                <li><a href="View/logout.php"><i class="fa-solid fa-right-from-bracket">Logout</i></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </ul>
        </div>

        <!--reponsive thanh mở hiện trên điện thoại ,còn máy tính thì ko -->
        <div id="mobile">
            <a href="View/cart.php"><i class="fa-solid fa-bag-shopping"></i></a>
            <i id="bar" class="fa-solid fa-outdent"></i>
        </div>
    </section>

 

    <section id="hero">
        <h4>Trade-in-order</h4>
        <h2>Super value deals</h2>
        <h1>On all products</h1>
        <p>Save more with coupon % up to 70% off ❤ </p>
        <button><a href="View/shop.php">Shop Now</a></button>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="ds/img/features/f1.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="ds/img/features/f2.png" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="ds/img/features/f3.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="ds/img/features/f4.png" alt="">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="ds/img/features/f5.png" alt="">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="ds/img/features/f6.png" alt="">
            <h6>F24/7 Support</h6>
        </div>
    </section>

    <section id="product1"  class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection New Modern Design</p>
        <div class="pro-container">
            <?php
            include_once ("Controller/Controller.php");
            checkOrder($_COOKIE['id']);
            $listProducts = getListProduct("", 0);
            if(isset($listProducts)){
                shuffle($listProducts);
                $result = array_slice($listProducts, 0, 8);
                foreach ($result as $value){
                    ?>
                    <div class="pro" onclick="location.href='View/sproduct.php?id='+<?php echo $value->getIdProduct() ?>;"&nbsp;>
                        <img src="http://drive.google.com/uc?export=view&id=<?php echo substr($value->getImageProduct(), 32, 33)?>" alt="">
                        <div class="des">
                            <span>adidas</span>
                            <h5><?php echo $value->getNameProduct()?></h5>
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <h4><?php echo number_format($value->getPrice(), 3, '.', '.')?>VND</h4>
                        </div>
                        <a href="#"><i class="fa-solid fa-cart-shopping shopping"></i></a>
                    </div>
                    <?php
                }
            }

            ?>
        </div>
    </section>

    <section id="banner" class="section-m1">
        <h4>Repair Services</h4>
        <h2>Up to <span>70% Off</span> - All t-Shirts & Accessories</h2>
        <button class="normal">Explore More</button>
    </section>

    <section id="product1"  class="section-p1">
        <h2>New Arrivals</h2>
        <p>Summer Collection New Morden Design</p>
        <div class="pro-container">
            <?php

            if(isset($listProducts)){
                shuffle($listProducts);
                $result = array_slice($listProducts, 0, 8);
                foreach ($result as $value){
                    ?>
                    <div class="pro" onclick="location.href='View/sproduct.php?id='+<?php echo $value->getIdProduct() ?>;"&nbsp;>
                        <img src="http://drive.google.com/uc?export=view&id=<?php echo substr($value->getImageProduct(), 32, 33)?>" alt="">
                        <div class="des">
                            <span>adidas</span>
                            <h5><?php echo $value->getNameProduct()?></h5>
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <h4><?php echo number_format($value->getPrice(), 3, '.', '.')?>VND</h4>
                        </div>
                        <a href="#"><i class="fa-solid fa-cart-shopping shopping"></i></a>
                    </div>
                    <?php
                }
            }

            ?>
        </div>
    </section>

    <section id="sm-banner" class="section-p1">
        
        <div class="banner-box">
            <h4>creazy deals</h4>
            <h2>buy 1 get 1 free</h2>
            <span>The best classic dress is on sale at cara </span>
            <button class="white">Learn More</button>
        </div>

        <div class="banner-box banner-box2">
            <h4>spring/summer</h4>
            <h2>upcoming season</h2>
            <span>The best classic dress is on sale at cara </span>
            <button class="white">Collection</button>
        </div>

    </section>

    <section id="banner3">

        <div class="banner-box">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection -50% OFF</h3>
        </div>

        <div class="banner-box banner-box2">
            <h2>NEW FOOTWEAR COLLECTION</h2>
            <h3>Spring / Summer 2022</h3>
        </div>

        <div class="banner-box banner-box3">
            <h2>T-SHIRTS</h2>
            <h3>New Trendy Prints</h3>
        </div>

    </section>

    <section id="newsletter" class="section-p1 section-m1">

        <div class="newstext">
            <h4> Sign Up For Newsletter</h4>
            <p>Get E-mail updates about our latest shop and <span>special offer.</span></p>
        </div>

        <div class="form">
            <input type="text" placeholder="Your email address"> 
            <button class="normal">Sign Up</button>
        </div>

    </section>

    <footer class="section-p1">

        <div class="col">
            <img class="logo2" src="ds/img/chototlogo.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address:</strong>02 Ngô Đức Kế, Phường Bến Nghé, Quận 1, TP Hồ Chí Minh</p>
            <p><strong>Phone:</strong>(+84) 0312120782</p>
            <p><strong>Hours:</strong>10:00 - 18:00, Mon - Sat</p>
            <div class="follow">
                <h4>Follow us</h4>
                <div class="icon">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-youtube"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-tiktok"></i>
                    <i class="fa-brands fa-whatsapp"></i>
                </div>
            </div>
        </div>



        <div class="col">
            <h4>About</h4>
            <a href="#">About Us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#"> Contacts Us</a>
        </div>

        <div class="col">
            <h4> My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Whistlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>


        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row">
                <img src="ds/img/pay/app.jpg" alt="">
                <img src="ds/img/pay/play.jpg" alt="">
            </div>
            <p>Secured Payment Gateways</p>
            <img src="ds/img/pay/pay.png" alt="">
        </div>

        <div class="copyright">
            <p>© 2022, chotot - All Rights Reverved</p>
        </div>


    








    </footer>

    <script src="ds/script.js"></script>
</body>
</html>