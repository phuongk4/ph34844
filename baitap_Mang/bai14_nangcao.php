<!--Bài 14:-->
<!--Khai báo 1 mảng có N phần từ-->
<!--Nhập dự liệu từ bàn phím cho các phần tử có trong mảng-->
<!--Nhập vào phần tử cần tìm và in ra vị trí của phần tử đó-->

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
    echo 'Nhập phần tử cần tìm vị trí: ' . '<input type="text" name="ptTim"> ';
    echo '<input type="submit" name="tim" value="Tìm">';
    echo '</form>';
}
    if (isset($_POST['tim']) && $_POST['tim']) {
        $arr = $_POST['pt'];
        $ptTim = $_POST['ptTim'];
        $viTri = array_keys($arr, $ptTim);


        if (count($viTri) > 0) {
            echo "<p>Vị trí của phần tử '$ptTim' trong mảng là:</p>";
            foreach ($viTri as $vt) {
                echo $vt.', ';

            }
        } else {
            echo "<p>Không tìm thấy phần tử '$ptTim' trong mảng.</p>";
        }


    }

?>


</body>
</html>
