<?php
// mảng liên hợp danh sách sinh viên
$mangInfos = [
    [
        'ten'=>"nguyễn văn a",
        'nam_sinh'=>1990,
        'email'=>"nguyenvana@gmail.com",
        'dia_chi'=>"so 8 TVB"
    ],
    [   'ten'=>"nguyễn văn b",
        'nam_sinh'=>1991,
        'email'=>"nguyenvana@gmail.com",
        'dia_chi'=>"so 8 TVB"
    ],
    [   'ten'=>"nguyễn văn c",
        'nam_sinh'=>1997,
        'email'=>"nguyenvana@gmail.com",
        'dia_chi'=>"so 8 TVB"
    ],
    [   'ten'=>"nguyễn văn d",
        'nam_sinh'=>1997,
        'email'=>"nguyenvana@gmail.com",
        'dia_chi'=>"so 8 TVB"
    ]
];
// tạo 1 mảng liên hợp danh sách giảng viên  gồm 5 gv  thông tin sau:
// magv,tengv,namsinh,luong
$mangGV =  [
  ['magv'=>"GV001",'tengv'=>"thanghq12",'namsinh'=>1996,'luong'=>300],
  ['magv'=>"GV002",'tengv'=>"dinhtv7",'namsinh'=>1998,'luong'=>1200],
  ['magv'=>"GV003",'tengv'=>"trung",'namsinh'=>2000,'luong'=>3000],
  ['magv'=>"GV004",'tengv'=>"huy",'namsinh'=>1997,'luong'=>1900],
  ['magv'=>"GV005",'tengv'=>"ducanh",'namsinh'=>1999,'luong'=>1500],
];
//hiển thị danh sách các giảng viên ra table (Cột năm sinh hiển thị tuổi )
// bôi màu những giảng viên có lương từ 1000 -> 2000

//$mangInfos[0]['nam_sinh'];
//$mangInfos[0]['ten'];
//$mangInfos[0]['email'];
//$mangInfos[0]['dia_chi'];
//$mangInfos[1]['ten'];
//$mangInfos[1]['nam_sinh'];
$max = 0;
$min = 0;
if (isset($_POST['gui'])) {
    $max = $_POST['max'];
    $min = $_POST['min'];
}
?>
<form action="" method="POST">
    Min <input type="text" name="min" />
    Max <input type="text" name="max" />

    <input type="submit" name="gui" value="Gui">
</form>
<table border="1">
    <tr>
        <td>Mã GV</td>
        <td>Tên GV</td>
        <td>Tuổi</td>
        <td>Lương </td>
    </tr>
    <?php foreach ($mangGV as $key => $value) {
        $mau = "";
        if ($value['luong'] >= $min && $value['luong'] <=$max) {
            $mau = "red";
        }
        ?>
    <tr bgcolor="<?php echo $mau; ?>">
        <td><?php echo $value['magv']; ?></td>
        <td><?php echo $value['tengv']; ?></td>
        <td><?php echo date('Y') -  $value['namsinh']; ?></td>
        <td><?php echo $value['luong']; ?></td>
    </tr>
    <?php } ?>
</table>
