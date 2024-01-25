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
<!-- nếu action bỏ trống nó sẽ thực hiện logic gửi đi ở ngay
file hiện tại-->
    <form action="action.php" method="GET">
        Số 1<input type="text" name="so_thu_nhat"/>
        Số 2<input type="text" name="so_thu_hai"/>
        <input type="submit" name="nut" value="Nút">
    </form>
    <?php
        // khi mà người dùng ấn nút thì tôi sẽ gửi dữ liệu đi
//        echo 1234;
//        if (isset($_GET['nut'])) {
//           $so1 = $_GET['so_thu_nhat'];
//           $so2 = $_GET['so_thu_hai'];
//           echo " Tổng là ".($so1+ $so2);
//        }
//        if (isset($_POST['nut'])) {
//            $so1 = $_POST['so_thu_nhat'];
//            $so2 = $_POST['so_thu_hai'];
//            echo "Tổng là ".($so1 + $so2);
//        }

        //tạo 2 input chiều dài chiều rộng tính  và hiển thị ra
    //chu vi và diện tích của hình chữ nhật

    ?>
</body>
</html>