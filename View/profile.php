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
    <link rel="stylesheet" href="../ds/profileStyle.css">


</head>
<body>
    
    <?php
        include_once ("../Controller/Controller.php")
    ?>

    <section id="header">
        <a href="#"><img class="logo" src="../ds/img/chototlogo.png" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a href="../index.php">Home</a></li>
                <li><a href="../View/shop.php">Shop</a></li>
                <li><a href="../View/blog.html">Blog</a></li>
                <li><a href="../View/about.html">About</a></li>
                <li><a href="../View/contact.html">Contact</a></li>
                <li><a href="../View/search.html"><i class="fas fa-search" id="search-icon"></i></a></li>
                <li id="lg-bag"><a href="../View/cart.html"><i class="fa-solid fa-bag-shopping"></i></a></li>
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
    </section>
    <div class="profile">
        <div class="avt">
            <img src="http://chiase24.com/wp-content/uploads/2022/02/Tong-hop-hinh-anh-avatar-de-thuong-lam-hinh-dai-dien-dep-nhat-35.png" alt="">
        </div>
        <div class="info">
            <p class="title">CHỈNH SỬA THÔNG TIN CÁ NHÂN</p>
            <span>Email</span>
            <input type="email" placeholder="email ...">
            <br>
            <span>Phone</span>
            <input type="text" placeholder="Phone ...">
            <br>
            <span>Address</span>
            <input type="text" placeholder="Address ...">
            <br>
            <span>User name</span>
            <input type="text" placeholder="user name ...">
            <div class="password-change">
                <p >Change password</p>
                <span>Current password</span>
                <input type="password" placeholder="......">
                <br>
                <span>New password</span>
                <input type="password" placeholder="......">
                <br>
                <span>Confirm password</span>
                <input type="password" placeholder="......">
            </div>
            <button class="submit">Save Changes</button>
        </div>
    </div>
    
        
</body>
</html>