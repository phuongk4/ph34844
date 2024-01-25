<?php
//cú pháp đầu tiên của php
//echo "hello world"; // hiển thị lên trên web
$a = 5; // khai báo biến a có giá trị là 5 và kiểu dữ liệu là kiểu số nguyên
$b = 6;
$tong = $a + $b;
echo "tổng là ".$tong."</br>";
// khai báo chiều dài chiều rộng tính chu vi và diện tích hcn hiển
//thị ra mh
if($a > 0) {
    echo "Đây là số dương";
} else {
    echo "Đây là số âm";
}
// viết chương trình kiểm tra xem $b là số chẵn hay số lẻ
if ($b % 2 == 0 || ($b < 0)) {
    echo "đây là số chẵn";
} else {
    echo "Đây là số lẻ";
}
// khai báo 1 biến $hoten , $namsinh,$gioitinh(1,0)
$hoten = "Hoàng quang thắng";
$namsinh = 1996;
$gioitinh = 1 ;// 1 là nam 0 là nữ
// hiển thị lên web thông tin sau
//ông/bà Hoàng quang thắng tuổi 28 không đủ tuổi đi nvqs
// biết ông/bà phụ thuộc vào giowis tính
// tuổi năm hiện tại - năm sinh
// năm hiện tại : date('Y')
// biết độ tuổi đi NVQS nằm trong độ tuổi từ 18 - 27
$checkGT = "";
if($gioitinh == 1) {
    $checkGT = "Ông";
} else {
    $checkGT = "Bà";
}
$tuoi = date('Y') - $namsinh;
if ($tuoi >=18 && $tuoi <=27) {
    echo $checkGT." ".$hoten." Tuổi".$tuoi."Đủ dk đi NVQS";
} else {
    echo $checkGT." ".$hoten." Tuổi".$tuoi."Khum Đủ dk đi NVQS";
}

?>
