<!--Bài 10:-->
<!--Khai báo 1 mảng có 10 phần từ-->
<!--Nhập dự liệu từ bàn phím cho các phần tử có trong mảng-->
<!--In ra phần tử có giá trị lớn nhất trong mảng-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài 10</title>
</head>
<body>
<h1>Nhập phần tử cho mảng</h1>
<form action="" method="post">
    <?php for($i=0; $i<10; $i++){?>
        <input type="text" name="arr[]" placeholder="Nhập phần tử thứ <?php echo ($i +1); ?>">
        <br><br>
    <?php } ?>
    <input type="submit" value="Gửi" name="submit">
</form>
</body>
</html>
<?php
if (isset($_POST['submit']) && $_POST['submit']){
    $arr = $_POST['arr'];
    echo '<h1>Phần tử có giá trị lớn nhất trong mảng là: </h1>';
    $lonNhat = max($arr);
    echo $lonNhat;
}


?>