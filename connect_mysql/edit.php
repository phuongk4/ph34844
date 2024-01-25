<?php
include "connect.php";
$sqlChuyenNghanh  =  "SELECT * FROM chuyen_nghanh";
$resultCN =  $conn->query($sqlChuyenNghanh)->fetchAll(); // fetchAll dùng nhiều bản ghi
$id = $_GET['id']; // hứng giá trị id từ url đổ xuống
$sqlDetailSinhVien = "SELECT * FROM sinh_vien WHERE id = '$id'";
$resultDetail = $conn->query($sqlDetailSinhVien)->fetch(); //fetch dùng cho 1 bản ghi
$error = [];
if (isset($_POST['sua'])) {
    $ten = $_POST['ten'];
    $email = $_POST['email'];
    $nam_sinh = $_POST['nam_sinh'];
    $chuyen_nganh_id = $_POST['chuyen_nganh_id'];
   $sql ="UPDATE sinh_vien SET ten='$ten',email = '$email',nam_sinh = '$nam_sinh',chuyen_nganh_id = '$chuyen_nganh_id' WHERE id = '$id'";
   $conn->exec($sql);
   echo "sửa sinh viên thành công";
   //back về trang list
    header("location: list.php");



}
?>

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
<form action="" method="POST" enctype="multipart/form-data">
    Tên <input type="text" name="ten" value="<?php echo $resultDetail['ten'] ?>"/></br>
    Email <input type="email" name="email" value="<?php echo $resultDetail['email'] ?>"/>
    </br>
    Năm sinh <input type="text" name="nam_sinh" value="<?php echo $resultDetail['nam_sinh'] ?>"/>
    </br>
    Chuyên nghành
    <select name="chuyen_nganh_id">
        <?php foreach ($resultCN as $key => $value) {
                $sl = "";
                if ($value['chuyen_nganh_id'] == $resultDetail['chuyen_nganh_id']) {
                    $sl = "selected";
                }
            ?>
            <option value="<?php echo $value['chuyen_nganh_id']; ?>" <?php echo $sl; ?>><?php echo $value['ten_chuyen_nghanh']; ?></option>
        <?php } ?>
    </select>
    <input type="submit" name="sua" value="Sửa">

</form>
</body>
</html>
