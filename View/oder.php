<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chợ tốt demo1</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="../ds/fontawesome-free-6.1.1-web/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../ds/style.css">
    <link rel="stylesheet" href="../ds/admin.css">
    <link rel="stylesheet" href="../ds/oder-admin.css">


</head>
<body>
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
    <div class="content">
        <div class="category">
            <a href="admin.php"><p class="title-admin">Admin Dashboard</p></a>
            <ul class="category-management">
                <li class="manage"><a href="user.php">User management <i class="fa-solid fa-user"></i></a></li>
                <li class="manage"><a href="oder.php">Order management <i class="fa-solid fa-cart-shopping"></i></a></li>
                <li class="manage"><a href="statistical.php">Revenue statistics <i class="fa-solid fa-chart-line"></i></a></li>
                <li class="manage"><a href="../View/logout.php">Log out <i class="fa-solid fa-right-from-bracket"></i></a></li>
            </ul>
        </div>
        <div class="main-table">
           <table class="table">
               <tr>
                   <th>Oderid</th>
                   <th>Username</th>
                   <th>Note</th>
                   <th>Date</th>
                   <th>Total</th>
                   <th>Accept oder</th>
               </tr>
               <tr>
                    <td>1 <i class="fa-solid fa-eye eye-icon"></i></td>
                    <td>dungtran</td>
                    <td>Vận chuyển cẩn thận</td>
                    <td>22/5/20022</td>
                    <td>4.500.000 (vnđ)</td>
                    <td>Accept <input type="checkbox" class="checkbox"></td>
               </tr>
               <tr>
                    <td>2 <i class="fa-solid fa-eye eye-icon"></i></td>
                    <td>haile</td>
                    <td>Cần nhận hàng sớm</td>
                    <td>21/5/20022</td>
                    <td>3.500.000 (vnđ)</td>
                    <td>Accept <input type="checkbox" class="checkbox"></td>
                </tr>
           </table>
           <button class="submit">Submit oder</button>
           <img src="../ds/img/p7.png" alt="" class="anhmay">
        </div>
        <div class="lopmo"></div>
        <div class="detail-product">
            <div class="info-product">
                <p class="title">CHI TIẾT SẢN PHẨM</p>
                <div class="info">
                    <div class="name-prd">Name product: <p>Dây chuyền</p></div>
                    <div class="qtt-prd">Quantity: <p>2</p></div>
                    <div class="price-prd">Price : <p>2.250.000 (vnđ)</p></div>
                </div>
                <button class="close">Close</button>
            </div>
        </div>
    </div>

</body>
<script src="../ds/js/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.eye-icon').click(function(e) {
            // xử lý class
            $('.detail-product').addClass('noidunghienra');
            $('.lopmo').addClass('lopmohienra');
        });
        $('.close, .lopmo').click(function(e) {
            $('.detail-product').removeClass('noidunghienra');
            $('.lopmo').removeClass('lopmohienra');
        });
    });
</script>
</html>