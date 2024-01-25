<!--Bài 12-->
<!--tạo 1 mảng liên hợp danh sách giảng viên  gồm 5 gv  thông tin sau:-->
<!--magv,tengv,namsinh,luong-->
<!--hiển thị danh sách các giảng viên ra table (Cột năm sinh hiển thị tuổi )-->
<!--bôi màu những giảng viên có lương từ 1000 -> 2000-->

<?php
$gv = array(
    array(
        'maGV' => '001',
        'tenGV' => 'Nguyễn Văn Hoàng',
        'namSinh' => 2003,
        'luong'=> 1700
    ),
    array(
        'maGV' => '002',
        'tenGV' => 'Trần Văn Bình',
        'namSinh' => 1993,
        'luong'=> 1500
    ),
    array(
        'maGV' => '003',
        'tenGV' => 'Trần Ngọc Minh',
        'namSinh' => 1997,
        'luong'=> 300
    ),
    array(
        'maGV' => '004',
        'tenGV' => 'Phạm Hoàng Liên',
        'namSinh' => 1998,
        'luong'=> 800
    ),
    array(
        'maGV' => '005',
        'tenGV' => 'Nguyễn Thị Linh',
        'namSinh' => 1997,
        'luong'=> 2300
    ),
);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài 12</title>
    <style>
        .hightlight{
            background-color: yellow;
        }
    </style>
</head>
<body>
<table border="1">
    <tr>
        <th>Mã GV</th>
        <th>Tên GV</th>
        <th>Tuổi</th>
        <th>Lương</th>
    </tr>

    <?php foreach ($gv as $value ) {
        $maGV = $value['maGV'];
        $tenGV = $value['tenGV'];
        $tuoi = date('Y') - $value['namSinh'];
        $luong = $value['luong'];
        $hightlight = ($luong >=1000 && $luong <= 2000) ? 'hightlight' : '';
      ?>
    <tr class="<?php echo $hightlight ?>" >
        <td><?php echo $maGV ?></td>
        <td><?php echo $tenGV ?></td>
        <td><?php echo $tuoi ?></td>
        <td><?php echo $luong ?></td>
    </tr>
    <?php } ?>
</table>
</body>
</html>

<?php

?>
