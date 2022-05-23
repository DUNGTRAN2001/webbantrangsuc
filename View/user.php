
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chợ tốt demo1</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"/>

    <link rel="stylesheet" href="../ds/fontawesome-free-6.1.1-web/fontawesome-free-6.1.1-web/css/all.min.css">

    <link rel="stylesheet" href="../ds/style.css">
    <link rel="stylesheet" href="../ds/admin.css">
    <link rel="stylesheet" href="../ds/user-admin.css">


</head>
<body>
<section id="header">
    <a href="#"><img class="logo" src="../ds/img/chototlogo.png" alt=""></a>
    <div>
        <ul id="navbar">
            <li><a href="index.php">Home</a></li>
            <li><a href="shop.html">Shop</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li id="lg-bag"><a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a></li>
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
            <li class="manage"><a href="statistical.php">Revenue statistics <i class="fa-solid fa-chart-line"></i></a>
            </li>
            <li class="manage"><a href="../View/logout.php">Log out <i class="fa-solid fa-right-from-bracket"></i></a></li>
        </ul>
    </div>
    <div class="main-table">
        <div class="add-new">
            <button class="btn">Add new <i class="fa-solid fa-plus"></i></button>
        </div>
        <table class="table">
            <tr>
                <th>Email</th>
                <th>Username</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
                <?php
                include_once("../Controller/Controller.php");
                $listUser = getAllUsers();
                if (isset($listUser)) {

                    foreach ($listUser as $user) {
                        ?>
            <tr>
                        <td><?php echo $user->getEmail() ?></td>
                        <td><?php echo $user->getNameUser() ?></td>
                        <td><?php echo $user->getAddress() ?></td>
                        <td><?php echo $user->getPhone() ?></td>
                        <td>
                            <span class="edit-icon"><i class="fa-solid fa-pen-to-square"></i></span>
                            <span class="delete-icon"><i class="fa-solid fa-trash-can"></i></span>
                        </td>
            </tr>
                        <?php
                    }
                }
                ?>

        </table>
        <img src="../ds/img/p7.png" alt="" class="anhmay">
    </div>
</div>
<div class="lopmo"></div>
<div class="profile">
    <div class="info">
        <p class="title">CHỈNH SỬA THÔNG TIN NGƯỜI DÙNG</p>
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
        <button class="submit">Save Changes</button>
        <button class="close">Close</button>
    </div>
</div>
<div class="add-user">
    <div class="info">
        <p class="title">THÊM MỚI NGƯỜI DÙNG</p>
        <span>Email</span>
        <input type="email" placeholder="email ...">
        <br>
        <span>Phone</span>
        <input type="text" placeholder="Phone ...">
        <br>
        <span>Address</span>
        <input type="text" placeholder="Address ...">
        <br>
        <span>Username</span>
        <input type="text" placeholder="username ...">
        <br>
        <span>Password</span>
        <input type="password" placeholder="password ...">
        <button class="submit">Save User</button>
        <button class="close-user">Close</button>
    </div>
</div>
</div>
</body>
<script src="../ds/js/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('.edit-icon').click(function (e) {
            // xử lý class
            $('.profile').addClass('noidunghienra');
            $('.lopmo').addClass('lopmohienra');
        });
        $('.close, .lopmo').click(function (e) {
            $('.profile').removeClass('noidunghienra');
            $('.lopmo').removeClass('lopmohienra');
        });
        $('.add-new').click(function (e) {
            // xử lý class
            $('.add-user').addClass('noidunghienra');
            $('.lopmo').addClass('lopmohienra');
        });
        $('.close-user, .lopmo').click(function (e) {
            $('.add-user').removeClass('noidunghienra');
            $('.lopmo').removeClass('lopmohienra');
        });

    });
</script>
</html>