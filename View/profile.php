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
        include_once ("../Controller/Controller.php");
        $id = $_COOKIE['id'];
        $user = getUserById($id);
        if(!empty($_GET['message'])) {
            $message = $_GET['message'];
            echo "<script type='text/javascript'>alert('".$message."');</script>";
        }
    ?>

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
    </section>
    <div class="profile">
        <div class="avt">
            <img src="http://chiase24.com/wp-content/uploads/2022/02/Tong-hop-hinh-anh-avatar-de-thuong-lam-hinh-dai-dien-dep-nhat-35.png" alt="">
        </div>
        <form method="post" action="../Controller/Controller.php">
            <div class="info">
                <p class="title">CHỈNH SỬA THÔNG TIN CÁ NHÂN</p>
                <span>Email</span>
                <input type="email" placeholder="email ..." value="<?php echo $user->getEmail()?>" name="email">
                <br>
                <span>Phone</span>
                <input type="text" placeholder="Phone ..." value="<?php echo $user->getPhone()?>" name="phone">
                <br>
                <span>Address</span>
                <input type="text" placeholder="Address ..." value="<?php echo $user->getAddress()?>" name="address">
                <br>
                <span>User name</span>
                <input type="text" placeholder="user name ..." value="<?php echo $user->getNameUser()?>" name="username">
                <div class="password-change">
                    <p >Change password</p>
                    <span>Current password</span>
                    <input type="password" placeholder="......" name="password">
                    <br>
                    <span>New password</span>
                    <input type="password" placeholder="......" name="newPass">
                    <br>
                    <span>Confirm password</span>
                    <input type="password" placeholder="......" name="confirmPass">
                </div>
                <button class="submit" type="submit" name="saveChange" id="saveChange">Save Changes</button>
            </div>
        </form>
    </div>
    
        
</body>
</html>