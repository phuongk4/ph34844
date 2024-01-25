<?php
session_start();
require_once "../../models/db.php";
include_once "../../global.php";
include_once "../../models/NguoiDung.php";


?>
<?php
$error = [];
if(isset($_POST['submit']) && $_POST['submit']){
    $email = $_POST['email'];
    if($email==''){
        $error['email'] = 'Không được bỏ trống !';
    }
    if($_POST['password']==''){
        $error['password'] = 'Không được bỏ trống !';
    }
    if(empty($error)){
        $admin =  select_taikhoan($_POST['email'],$_POST['password']);
        if(is_array($admin)){
            header("Location: ../../index.php");

        } else {
            $error['password'] = "Sai tài khoản hoặc mật khẩu !";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .container{
            padding-top: 90px;
        }
        .login-form {
            width: 400px;
            margin: 0 auto;
            padding: 50px;
            background: #f7f7f7;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .login-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            width: 100%;
            padding: 8px;
            background: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        a{
            margin-left: 230px ;

        }

        /* .signup-link {
        text-align: center;
        } */
    </style>
    <title>ADMIN</title>
</head>
<body>
<div class="container">
    <form class="login-form" action="" method="post">
        <h2>Đăng Nhập</h2>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="<?php echo isset($error['email']) ? $error['email'] : 'Nhập email đăng nhập' ?>" require onchange="check_email()">
            <span id="emailerror" style="color: red;"><?php echo isset($error['email']) ? $error['email'] : '' ?> </span>

        </div>

        <div class="form-group">
            <label for="password">Mật khẩu</label>
            <input type="password" id="password" name="password" placeholder="Nhập mật khẩu"   onchange="check_password()">
            <span id="emailerror" style="color: red;"><?php echo isset($error['password']) ? $error['password'] : '' ?> </span>

        </div>
        <a href="../../views/DangKy_DangNhap/dangky.php">Đăng ký?</a>
        <!-- <input type="submit" > -->
        <input type="submit" class="btn btn-primary mt-1" value="Đăng Nhập" name="submit">

    </form>

</div>


</body>
</html>


