<!--Bài 5:-->
<!--Khai báo 1 mảng có 10 phần từ-->
<!--Nhập dự liệu từ bàn phím cho các phần tử có trong mảng-->
<!--In ra tất cả những phần tử có giá trị là số chia hết cho 3 và 5-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài 5</title>
</head>
<body>
<h1>Nhập phần tử cho mảng</h1>
<form action="" method="post">
    <?php for ($i=0; $i<10; $i++){?>
        <input type="text" name="arr[]" placeholder="Nhập phần tử thứ <?php echo ($i + 1); ?>">
        <br><br>
    <?php } ?>
    <input type="submit" value="Gửi" name="submit">
</form>
</body>
</html>
<?php
if(isset($_POST['submit']) && $_POST['submit']){
    $arr = $_POST['arr'];

    echo '<h1>Những phần tử có giá trị là số chia hết cho 3 và 5 trong mảng là: </h1>';
    foreach ($arr as $value){
        if($value % 3 == 0 && $value % 5 == 0){
            echo $value.', ';
        }
    }
}
?>