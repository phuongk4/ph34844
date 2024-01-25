<!--Bài 15:-->
<!--Khai báo 1 mảng có N phần từ-->
<!--Nhập dự liệu từ bàn phím cho các phần tử có trong mảng-->
<!--Nhập vào phần tự cần tìm và xóa phần tử đó khỏi mảng-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài 14 nâng cao</title>
</head>
<body>
<form action="" method="post">
    <label for="">Số phần tử của mảng: </label><br>
    <input type="number" name="N">
    <input type="submit" value="Nhập" name="nhap"><br><br>
</form>

<?php
if(isset($_POST['nhap']) && $_POST['nhap']) {
    $N = $_POST['N'];
    echo '<form action="" method="post">';
    for ($i = 0; $i < $N; $i++) {
        echo 'Nhập phần tử thứ ' . ($i + 1) . ' <input type="text" name="pt[]">' . '<br>';
        echo '<br>';
    }
    echo 'Nhập phần tử cần tìm và xóa: ' . '<input type="text" name="ptTim"> ';
    echo '<input type="submit" name="xoa" value="Xóa">';
    echo '</form>';
}
if (isset($_POST['xoa']) && $_POST['xoa']) {
    $arr = $_POST['pt'];
    $ptTim = $_POST['ptTim'];
    $ptXoa = array_search($ptTim, $arr);

    if($ptXoa !== false){
        array_splice($arr, $ptXoa, 1);
        echo "Phần tử '$ptTim' đã được xóa khỏi mảng ! <br>";
        echo "Mảng sau khi xóa: ";
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
    }else{
        echo "Phần tử '$ptTim' không có trong mảng !";
    }

}

?>

</body>
</html>