<?php
$manglh = ['a'=>3,'b'=>3,'c'=>4,'d'=>5,'e'=>6];
//echo $manglh['d'];
// duyệt mảng
foreach ($manglh as $vitri => $phantu) {
    echo $vitri."=>".$phantu."<br>";
}
// mảng liên hợp 2 chiều
$mangInfos = [
                ['ten'=>"nguyễn văn a",
                'nam_sinh'=>1990,
                'email'=>"nguyenvana@gmail.com",
                'dia_chi'=>"so 8 TVB"
                ],
                [   'ten'=>"nguyễn văn b",
                    'nam_sinh'=>1991,
                    'email'=>"nguyenvana@gmail.com",
                    'dia_chi'=>"so 8 TVB"
                ]
             ];
for ($i = 0;$i < count($mangInfos);$i ++) {
    echo $mangInfos[$i]['nam_sinh'];
//    echo $mangInfos[1]['nam_sinh'];
}
//hiển thị ra năm sinh của ông nguyễn văn a



//foreach ($mangInfo as $vitri=> $phantu) {
//    //lần lặp 1:  $vitri = 'ten' $phantu = 'nguyen văn a';
//    //lần lặp 2: $vitri = 'nam_sinh' $phantu = 1990
//    //lần lặp 3 : $vitri = 'email' $phantu = "nguyenvana@gmail.com";
//    if ($vitri == 'nam_sinh') {
//        echo date('Y') - $phantu . " ";
//    } else {
//        echo $phantu." ";
//    }
//}
// dùng foreach duyệt hiển thị ra tên , tuổi = data('Y') - nam_sinh ,email
$mangColor = ['red'=>"mau do",
             'green'=>"xanh la cay",
             'blue'=>"xanh nuoc bien"
            ]
//đổ mảng màu này ra table với cột bên trái là tên màu bằng tiếng anh
//cột bên phải tên màu bằng tiếng việt
//dòng nào của màu nào thì sẽ hiển thị màu của dòng đó
?>
<table border="1">
    <?php foreach ($mangInfo as $vitri=>$phantu) { ?>
    <tr>
        <td><?php echo $vitri; ?></td>
        <td><?php echo $phantu; ?></td>
    </tr>
    <?php } ?>

</table>
<table border="1">
    <?php foreach ($mangColor as $key => $value) { ?>
    <tr bgcolor="<?php  echo $key; ?>">
        <td><?php echo $key; ?></td>
        <td><?php echo $value; ?></td>
    </tr>
    <?php  }?>
</table>
