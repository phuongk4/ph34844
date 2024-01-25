<?php
include "connect.php";
$sqlChuyenNghanh  =  "SELECT * FROM chuyen_nghanh";
$resultCN =  $conn->query($sqlChuyenNghanh)->fetchAll();
$error = [];
if (isset($_POST['them'])) {
    $ten = $_POST['ten'];
    $email = $_POST['email'];
    $nam_sinh = $_POST['nam_sinh'];
    $chuyen_nganh_id = $_POST['chuyen_nganh_id'];
    // validate 1 điểm
    if (empty($email)) { // email trống
        $error['email_emp'] = "Bạn không được để trống email";
    }
    if (empty($nam_sinh)) {
        $error['nam_sinh_emp'] = "Bạn không được để trống năm sinh";
    }
    if ($nam_sinh < 0) {
        $error['nam_sinh_am'] = "Năm sinh không được phép nhỏ hơn 0 ";
    }
    //xử lý thêm ảnh
    if (isset($_FILES['image'])) {
        //thư mục sẽ lưu ảnh
        $target_dir = "img/";
        // lấy tên của hình ảnh
        $name_img = $_FILES["image"]["name"];
        // tạo ra 1 biến ghép đường dẫn của thư mục với tên hình ảnh
        $target_file = $target_dir.$name_img;
        //di chuyển hình ảnh vào thư mục
        move_uploaded_file($_FILES["image"]['tmp_name'],$target_file);
    }
    //nếu như không có lỗi gì thì sẽ thêm vào db
    if (!$error) {

        $sql = "INSERT INTO sinh_vien VALUES (null,'$ten','$email','$nam_sinh','$name_img','$chuyen_nganh_id')";

        $conn->exec($sql);
        echo "Thêm sinh viên thanh công";
    }


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
        Tên <input type="text" name="ten"/></br>
        Email <input type="email" name="email"/>
        <?php echo  isset( $error['email_emp']) ?  $error['email_emp'] : "" ?>
        </br>
        Năm sinh <input type="text" name="nam_sinh"/>
        <?php echo  isset( $error['nam_sinh_emp']) ?  $error['nam_sinh_emp'] : "" ?>
        <?php echo isset( $error['nam_sinh_am']) ?  $error['nam_sinh_am'] : "" ?>
        </br>
        Hình ảnh
        <input type="file" name="image"></br>
        Chuyên nghành
        <select name="chuyen_nganh_id">
            <?php foreach ($resultCN as $key => $value) { ?>
            <option value="<?php echo $value['chuyen_nganh_id']; ?>"><?php echo $value['ten_chuyen_nghanh']; ?></option>
           <?php } ?>
        </select>
        <input type="submit" name="them" value="Thêm">

    </form>
</body>
</html>
