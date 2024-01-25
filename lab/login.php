<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        Username <input type="text" name="username" /></br>
        Password <input type="password" name="password"></br>
        <input type="submit" name="dangnhap" value="Đăng nhập"/>
    </form>
    <?php
        if (isset($_POST['dangnhap'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            if ($username == "thanghq12" && $password == "123456") {
                $_SESSION['user'] = $username;
                header("Location: user.php");
            } else {
                echo "Lêu lêu sai rồi";
            }
        }
    ?>
</body>
</html>