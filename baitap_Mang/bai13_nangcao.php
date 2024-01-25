<!--Bài 13:-->
<!--Khai báo 1 mảng có N phần từ-->
<!--Nhập dự liệu từ bàn phím cho các phần tử có trong mảng-->
<!--Sắp xếp mảng theo thứ tự tăng dần-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài 13 nâng cao</title>
</head>
<body>
<form action="" method="post">
    <label for="">Số phần tử của mảng: </label><br>
    <input type="number" name="N">
    <input type="submit" value="Nhập" name="nhap"><br><br>
</form>
<?php
if(isset($_POST['nhap']) && $_POST['nhap']){
    $N = $_POST['N'];
    echo '<form action="" method="post">';
    for ($i = 0; $i < $N; $i++){
        echo 'Nhập phần tử thứ'.($i + 1).' <input type="number" name="number[]">'.'<br>';
        echo '<br>';
    }
    echo '<input type="submit" name="sapxep" value="Sắp xếp">';
    echo '</form>';
}
?>
<?php
if(isset($_POST['sapxep']) && $_POST['sapxep']){
    $arr = $_POST['number'];
    sort($arr);

    echo '<h2>Các phần tử của mảng theo thứ tự tăng dần: </h2>';
    foreach ($arr as $value){
        echo $value. ', ';
    }
}
?>
</body>
</html>