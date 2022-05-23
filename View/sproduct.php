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



<section id="header">
    <a href="#"><img class="logo" src="../ds/img/chototlogo.png" alt=""></a>
    <div>
        <ul id="navbar">
            <li><a href="../index.php">Home</a></li>
            <li><a href="../View/shop.php">Shop</a></li>
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

<section id="prodetails" class="section-p1">
    <?php
        include_once ($_COOKIE['path']. "/Controller/Controller.php");
        $id = $_GET['id'];
        $product = getProductById($id);
        if(!empty($_GET['message'])) {
            $message = $_GET['message'];
            echo "<script type='text/javascript'>alert('".$message."');</script>";
        }
    ?>

    <div class="single-pro-image">
        <img src="http://drive.google.com/uc?export=view&id=<?php echo substr($product->getImageProduct(), 32, 33)?>" alt="">

        <div class="small-img-group">

            <div class="small-img-col">
                <img src="../ds/img/products/f1.jpg" width="100%" id="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="../ds/img/products/f2.jpg" width="100%" id="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="../ds/img/products/f3.jpg" width="100%" id="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="../ds/img/products/f4.jpg" width="100%" id="small-img" alt="">
            </div>

        </div>

    </div>

    <div class="single-pro-details">
        <h6>Home / <?php echo $product->getMaterialName() ?></h6>
        <h4><?php echo $product->getNameProduct() ?></h4>
        <h2><?php echo number_format($product->getPrice(), 3, '.', '.')?>VND</h2>

        <form method="post" action="../Controller/Controller.php">
            <input type="number" value="1" min="1" name="quantity">
            <input type="hidden" value="<?php echo $id?> " name="productId">
            <input type="hidden" value="<?php echo $product->getPrice()?> " name="price">
            <button class="normal" type="submit" name="add" id="add">Add to cart</button>
        </form>
        <h4>Product Details</h4>
        <span> <?php echo $product->getDescription() ?> </span>
    </div>

</section>


<section id="product1"  class="section-p1">
    <h2>Feature Products</h2>
    <p>Summer Collection New Morden Design</p>
    <div class="pro-container">

        <?php

        if(isset($listProducts)){
            shuffle($listProducts);
            $result = array_slice($listProducts, 0, 4);
            foreach ($result as $value){
                ?>
                <div class="pro" onclick="location.href='../View/sproduct.php?id='+<?php echo $value->getIdProduct() ?>;"&nbsp;>
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

<!-- chuyển đổi ảnh -->
<script>
    var MainImg = document.getElementById("MainImg");
    var smallimg = document.getElementsByClassName("small-img");

    smallimg[0].onclick = function() {
        MainImg.src = smallimg[0].src;
    }
    smallimg[1].onclick = function() {
        MainImg.src = smallimg[1].src;
    }
    smallimg[2].onclick = function() {
        MainImg.src = smallimg[2].src;
    }
    smallimg[3].onclick = function() {
        MainImg.src = smallimg[3].src;
    }

</script>


<script src="../ds/script.js"></script>
</body>
</html>


















