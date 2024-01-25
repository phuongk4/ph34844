<?php
session_start();
require_once "../../models/db.php";
include_once "../../global.php";
include_once "../../models/NguoiDung.php";


?>
<?php
$error = [];
if(isset($_POST['submit']) && $_POST['submit']){
    $ten = $_POST['ten'];
    if($_POST['ten'] == ''){
        $error['ten'] = 'Không được bỏ trống !';
    }

    // $email = strval($_POST['email']);
    // if($_POST['email'] ==''){
    //     $error['email'] = 'Không được bỏ trống !'; 
    // }else{
    //     $tk = select_taikhoan($_POST['email']," ");
    //     print_r($tk);
    //     if(strval($tk['email']) === strval($_POST['email'])){
    //         $error['email'] = 'Email đã tồn tại !';
    //     }else{
    //         // $email = $_POST['email'];
    //         $error['email'] = 'Chưa tồn tại !';
    //     }
        
    // }

    $email = strval($_POST['email']);
    if ($_POST['email'] == '') {
        $error['email'] = 'Không được bỏ trống !';
    } else {
        $tk = select_taikhoan($email, " ");
        if ($tk !== false) {
  
            if (strval($tk['email']) === strval($_POST['email'])) {
                $error['email'] = 'Email đã tồn tại !';
            }
        } 
    }
    $password = $_POST['password'];
    if($_POST['password'] ==''){
        $error['password'] = 'Không được bỏ trống !';
    }
    if(empty($error)){
        insertNguoiDung($ten, $email, $password);
            $thongbao = "Đăng ký thành công !";
            header("refresh:2; url=../../views/DangKy_DangNhap/dangnhap.php");
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
    <span style="color: green; padding-left:80px; padding-bottom:50px"><?php echo isset($thongbao) ? $thongbao : '' ?> </span>
        <h2>Đăng Ký</h2>

        <div class="form-group">
            <label for="">Tên</label>
            <input type="text" id="ten" name="ten" placeholder="<?php echo isset($error['ten']) ? $error['ten'] : 'Nhập tên đăng nhập' ?>" >
            <span id="emailerror" style="color: red;"><?php echo isset($error['ten']) ? $error['ten'] : '' ?> </span>

        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="<?php echo isset($error['email']) ? $error['email'] : 'Nhập email đăng nhập' ?>">
            <span id="emailerror" style="color: red;"><?php echo isset($error['email']) ? $error['email'] : '' ?> </span>

        </div>

        <div class="form-group">
            <label for="password">Mật khẩu</label>
            <input type="password" id="password" name="password" placeholder="Nhập mật khẩu"   >
            <span id="emailerror" style="color: red;"><?php echo isset($error['password']) ? $error['password'] : '' ?> </span>

        </div>
        <a href="?url=dangky" >Đăng ký?</a>
        <!-- <input type="submit" > -->
        <input type="submit" class="btn btn-primary mt-1" value="Đăng Ký" name="submit">

    </form>

</div>


</body>
</html>


