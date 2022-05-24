<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chợ tốt demo1</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="../ds/fontawesome-free-6.1.1-web/fontawesome-free-6.1.1-web/css/all.min.css">

    <link rel="stylesheet" href="../ds/style.css">


</head>
<body>



    <form method="post">
        <input type="text" placeholder="enter " name="key">
        <button type="submit" id="search" name="search"> Search </button>
    </form>


    <section id="header">
        <a href="#"><img class="logo" src="../ds/img/chototlogo.png" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a href="../index.php">Home</a></li>
                <li><a  class="active" href="shop.php">Shop</a></li>
                <li><a  class="active" href="bongtai.php">Bông tai</a></li>
                <li><a  class="active" href="daychuyen.php">Dây chuyền</a></li>
                <li><a  class="active" href="vongtay.php">Vòng tay</a></li>
                <li><a  class="active" href="nhan.php">Nhẫn</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a></li>
                <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
                <nav role="navigation">
                    <ul>
                        <li><a href="#"><i class="fa-solid fa-user"></i></a>
                            <ul class="dropdown">
                                <li><a href="profile.php"><i class="fa-solid fa-gears">Setting</i></a></li>
                                <li><a href="../View/logout.php"><i class="fa-solid fa-right-from-bracket">Logout</i></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </ul>
        </div>

        <!--reponsive thanh mở hiện trên điện thoại ,còn máy tính thì ko -->
        <div id="mobile">
            <a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a>
            <i id="bar" class="fa-solid fa-outdent"></i>
        </div>
    </section>

    <section id="page-header">
       
        <h2>#stayhome</h2>
       
        <p>𝓼𝓪𝓿𝓮 𝓶𝓸𝓻𝓮 𝔀𝓲𝓽𝓱 𝓬𝓸𝓾𝓹𝓸𝓷𝓼  𝓾𝓹 𝓽𝓸 𝓸𝓯𝓯❤️ </p>
        
    </section>

    <section id="product1"  class="section-p1"> 

        <div class="pro-container">
            <!-- Lệnh onclick bấm vào ra trang details -->
            <?php
            include_once ("../Controller/Controller.php");
            if(isset($_POST['search'])){
                $key = $_POST['key'];
                $list = getListProduct($key, 0);
            }
            else{
                $list = getListProduct("", 0);
            }
            foreach ($list as $value){
                $arr = explode("|", $value->getImageProduct())
                ?>
                <div class="pro" onclick="location.href='../View/sproduct.php?id='+<?php echo $value->getIdProduct() ?>;"&nbsp;>
                    <img src="http://drive.google.com/uc?export=view&id=<?php echo substr($arr[1], 32, 33)?>" alt="">
                    <img src="http://drive.google.com/uc?export=view&id=<?php echo substr($arr[0], 32, 33)?>" alt="" class="overplay">
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

            ?>
<!--            ?>-->
<!--            d"><i class="fa-solid fa-cart-shopping shopping"></i></a>-->
<!---->
<!--            </div>-->
<!--            <div class="pro" onclick="window.location.href='sproduct.html';">-->
<!--                <img src="../ds/img/products/f8.jpg" alt="">-->
<!--                <div class="des">-->
<!--                    <span>adidas</span>-->
<!--                    <h5>Cartoon Astronaut T-Shirts</h5>-->
<!--                    <div class="star">-->
<!--                        <i class="fa-solid fa-star"></i>-->
<!--                        <i class="fa-solid fa-star"></i>-->
<!--                        <i class="fa-solid fa-star"></i>-->
<!--                        <i class="fa-solid fa-star"></i>-->
<!--                        <i class="fa-solid fa-star-half-stroke"></i>-->
<!--                    </div>-->
<!--                    <h4>$78</h4>-->
<!--                </div>-->
<!--                <a href="#"><i class="fa-solid fa-cart-shopping shopping"></i></a>-->
<!---->
<!--            </div>-->
<!---->
<!--            <div class="pro" onclick="window.location.href='sproduct.html';">-->
<!--                <img src="../ds/img/products/n1.jpg" alt="">-->
<!--                <div class="des">-->
<!--                    <span>adidas</span>-->
<!--                    <h5>Cartoon Astronaut T-Shirts</h5>-->
<!--                    <div class="star">-->
<!--                        <i class="fa-solid fa-star"></i>-->
<!--                        <i class="fa-solid fa-star"></i>-->
<!--                        <i class="fa-solid fa-star"></i>-->
<!--                        <i class="fa-solid fa-star"></i>-->
<!--                        <i class="fa-solid fa-star-half-stroke"></i>-->
<!--                    </div>-->
<!--                    <h4>$78</h4>-->
<!--                </div>-->
<!--                <a href="#"><i class="fa-solid fa-cart-shopping shopping"></i></a>-->
<!---->
<!--            </div>-->
<!--            <div class="pro" onclick="window.location.href='sproduct.html';">-->
<!--                <img src="../ds/img/products/n2.jpg" alt="">-->
<!--                <div class="des">-->
<!--                    <span>adidas</span>-->
<!--                    <h5>Cartoon Astronaut T-Shirts</h5>-->
<!--                    <div class="star">-->
<!--                        <i class="fa-solid fa-star"></i>-->
<!--                        <i class="fa-solid fa-star"></i>-->
<!--                        <i class="fa-solid fa-star"></i>-->
<!--                        <i class="fa-solid fa-star"></i>-->
<!--                        <i class="fa-solid fa-star-half-stroke"></i>-->
<!--                    </div>-->
<!--                    <h4>$78</h4>-->
<!--                </div>-->
<!--                <a href="#"><i class="fa-solid fa-cart-shopping shopping"></i></a>-->
<!---->
<!--            </div>-->
<!--            <div class="pro" onclick="window.location.href='sproduct.html';">-->
<!--                <img src="../ds/img/products/n3.jpg" alt="">-->
<!--                <div class="des">-->
<!--                    <span>adidas</span>-->
<!--                    <h5>Cartoon Astronaut T-Shirts</h5>-->
<!--                    <div class="star">-->
<!--                        <i class="fa-solid fa-star"></i>-->
<!--                        <i class="fa-solid fa-star"></i>-->
<!--                        <i class="fa-solid fa-star"></i>-->
<!--                        <i class="fa-solid fa-star"></i>-->
<!--                        <i class="fa-solid fa-star-half-stroke"></i>-->
<!--                    </div>-->
<!--                    <h4>$78</h4>-->
<!--                </div>-->
<!--                <a href="#"><i class="fa-solid fa-cart-shopping shopping"></i></a>-->
<!---->
<!--            </div>-->
<!--            <div class="pro" onclick="window.location.href='sproduct.html';">-->
<!--                <img src="../ds/img/products/n4.jpg" alt="">-->
<!--                <div class="des">-->
<!--                    <span>adidas</span>-->
<!--                    <h5>Cartoon Astronaut T-Shirts</h5>-->
<!--                    <div class="star">-->
<!--                        <i class="fa-solid fa-star"></i>-->
<!--                        <i class="fa-solid fa-star"></i>-->
<!--                        <i class="fa-solid fa-star"></i>-->
<!--                        <i class="fa-solid fa-star"></i>-->
<!--                        <i class="fa-solid fa-star-half-stroke"></i>-->
<!--                    </div>-->
<!--                    <h4>$78</h4>-->
<!--                </div>-->
<!--                <a href="#"><i class="fa-solid fa-cart-shopping shopping"></i></a>-->
<!---->
<!--            </div>-->
<!--            <div class="pro" onclick="window.location.href='sproduct.html';">-->
<!--                <img src="../ds/img/products/n5.jpg" alt="">-->
<!--                <div class="des">-->
<!--                    <span>adidas</span>-->
<!--                    <h5>Cartoon Astronaut T-Shirts</h5>-->
<!--                    <div class="star">-->
<!--                        <i class="fa-solid fa-star"></i>-->
<!--                        <i class="fa-solid fa-star"></i>-->
<!--                        <i class="fa-solid fa-star"></i>-->
<!--                        <i class="fa-solid fa-star"></i>-->
<!--                        <i class="fa-solid fa-star-half-stroke"></i>-->
<!--                    </div>-->
<!--                    <h4>$78</h4>-->
<!--                </div>-->
<!--                <a href="#"><i class="fa-solid fa-cart-shopping shopping"></i></a>-->
<!---->
<!--            </div>-->
<!--            <div class="pro" onclick="window.location.href='sproduct.html';">-->
<!--                <img src="../ds/img/products/n6.jpg" alt="">-->
<!--                <div class="des">-->
<!--                    <span>adidas</span>-->
<!--                    <h5>Cartoon Astronaut T-Shirts</h5>-->
<!--                    <div class="star">-->
<!--                        <i class="fa-solid fa-star"></i>-->
<!--                        <i class="fa-solid fa-star"></i>-->
<!--                        <i class="fa-solid fa-star"></i>-->
<!--                        <i class="fa-solid fa-star"></i>-->
<!--                        <i class="fa-solid fa-star-half-stroke"></i>-->
<!--                    </div>-->
<!--                    <h4>$78</h4>-->
<!--                </div>-->
<!--                <a href="#"><i class="fa-solid fa-cart-shopping shopping"></i></a>-->
<!---->
<!--            </div>-->
<!--            <div class="pro" onclick="window.location.href='sproduct.html';">-->
<!--                <img src="../ds/img/products/n7.jpg" alt="">-->
<!--                <div class="des">-->
<!--                    <span>adidas</span>-->
<!--                    <h5>Cartoon Astronaut T-Shirts</h5>-->
<!--                    <div class="star">-->
<!--                        <i class="fa-solid fa-star"></i>-->
<!--                        <i class="fa-solid fa-star"></i>-->
<!--                        <i class="fa-solid fa-star"></i>-->
<!--                        <i class="fa-solid fa-star"></i>-->
<!--                        <i class="fa-solid fa-star-half-stroke"></i>-->
<!--                    </div>-->
<!--                    <h4>$78</h4>-->
<!--                </div>-->
<!--                <a href="#"><i class="fa-solid fa-cart-shopping shopping"></i></a>-->
<!---->
<!--            </div>-->
<!--            <div class="pro" onclick="window.location.href='sproduct.html';">-->
<!--                <img src="../ds/img/products/n8.jpg" alt="">-->
<!--                <div class="des">-->
<!--                    <span>adidas</span>-->
<!--                    <h5>Cartoon Astronaut T-Shirts</h5>-->
<!--                    <div class="star">-->
<!--                        <i class="fa-solid fa-star"></i>-->
<!--                        <i class="fa-solid fa-star"></i>-->
<!--                        <i class="fa-solid fa-star"></i>-->
<!--                        <i class="fa-solid fa-star"></i>-->
<!--                        <i class="fa-solid fa-star-half-stroke"></i>-->
<!--                    </div>-->
<!--                    <h4>$78</h4>-->
<!--                </div>-->
<!--                <a href="#"><i class="fa-solid fa-cart-shopping shopping"></i></a>-->
<!---->
<!--            </div>-->
        </div>
    </section>

    <section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
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
            <img class="logo2" src="../ds/img/chototlogo.png" alt="">
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
                <img src="../ds/img/pay/app.jpg" alt="">
                <img src="../ds/img/pay/play.jpg" alt="">
            </div>
            <p>Secured Payment Gateways</p>
            <img src="../ds/img/pay/pay.png" alt="">
        </div>

        <div class="copyright">
            <p>© 2022, chotot - All Rights Reverved</p>
        </div>
    </footer>

    
    <script src="../ds/script.js"></script>
</body>
</html>