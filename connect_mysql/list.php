<?php
require 'connect.php';
$sql = "SELECT sv.id,sv.ten,sv.nam_sinh,sv.email,sv.image,cn.ten_chuyen_nghanh FROM sinh_vien as sv,chuyen_nghanh as 
cn WHERE sv.chuyen_nganh_id = cn.chuyen_nganh_id";
//
$result = $conn->query($sql)->fetchAll();
// chạy câu truy vấn và lấy ra tất cả dữ liệu
//echo "<pre>";
//var_dump($result); die;
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
    <a href="add.php">Thêm</a>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Tên</td>
            <td>Năm sinh</td>
            <td>Email</td>
            <td>Hình</td>
            <td>Tên chuyên nghành</td>
            <td>Hành động</td>
        </tr>
        <?php foreach ($result as $key => $value) { ?>
        <tr>
            <td><?php echo $value['id']; ?></td>
            <td><?php echo $value['ten']; ?></td>
            <td><?php echo $value['email']; ?></td>
            <td><?php echo $value['nam_sinh']; ?></td>
            <td>
                <img width="100px" src="<?php echo "img/".$value['image']; ?>"/>
            </td>
            <td>
                <?php echo $value['ten_chuyen_nghanh'] ?>
            </td>
            <td>
                <a href="edit.php?id=<?php echo $value['id']; ?>">Sửa</a>
                <a href="javascript:confirmDelete('delete.php?id=<?php echo $value['id']; ?>')">Xóa</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
<script>
    function confirmDelete(delUrl) {
        if (confirm("Bạn có muốn xóa không ? ")) {
            document.location = delUrl;
        }
    }
</script>
</html>