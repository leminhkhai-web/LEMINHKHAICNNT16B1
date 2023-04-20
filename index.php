<?php
session_start();

if (!isset($_SESSION['USER']) and !isset($_SESSION['ADMIN'])) {
    // header('location: administrator/userlogin.php');
    // header('location: administrator/userlogin.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="./public_file/pmycss.css">
</head>
<body>
    <div id="wrapper">
        

        <div class="header">
            <a style="text-decoration: none"  class="login-header"  href="administrator/userLogin.php"> Đăng nhập ngay </a>
            <a  style="text-decoration: none" class="register" href="./administrator/register.php"> Đăng ký</a>
        </div>
        
        <div class="wrapper-ui-product ">

            <div class="lvTwo">
                <?php
                require './apart/menuLoaihang.php';
                ?>
            </div>
        
            <div class="lvThree">
                <?php
                if (!isset($_REQUEST['reqHanghoa'])) {
                    require './apart/viewListLoaiHang.php';
                }
                else {
                    require './apart/viewHangHoa.php';
                }
                ?>
            </div>
        </div>
        
    </div>

</body>
</html>