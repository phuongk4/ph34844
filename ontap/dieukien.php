<?php
$a = 5;
//if ($a == 1) {
//    echo "Đây là số 1";
//} elseif ($a == 2 ){
//    echo "đây là số 2";
//} elseif ($a == 3) {
//   echo "Đây là số 3";
//} elseif($a == 4) {
//    echo "Đây là số 4";
//} elseif ($a == 5) {
//    echo "Đây là số 5";
//}
switch ($a) {
    case 1:case 3: case 5:
        echo "Đây là số 1 3 5";
        break;
    default :
        echo "Số khác ";
        break;
}
// viết chương trình khai báo tháng , năm hiển thị xem tháng của năm đó có bao nhiêu ngày
//(Dùng switch case)
// ví dụ nhập vào tháng 3 năm 2023 => Tháng 3 năm 2023 có 31 ngày
// nếu là năm nhuận thì tháng 2 có 29 ngày nếu khum phải năm nhuận thì tháng 2 có 28 ngày
//biết năm nhuận là năm chia hết cho 4 và chia hết cho 100 nhưng khong chia hết cho 400
$thang = 2;
$nam  = 2024;
$ngay = "";
switch ($thang) {
    case 1:case 3:case 5:case 7:case 8:case 10:case 12:
        $ngay = "31 ngày";
        break;
    case 4:case 6:case 9:case 11:
        $ngay = "30 ngày";
        break;
    case 2:
        // khu vực kiểm tra nhuận hay là không nhuận
        if (($nam % 4 == 0 && $nam % 100 != 0) || $nam % 400 == 0) { // nhuận
            $ngay = "29 ngày";
        } else {
            $ngay = "28 ngày";
        }
        break;
}
echo "Tháng".$thang. "Năm".$nam."Có ".$ngay;
//if ($a > 15 || $a >2) {
//    echo "Đây là số lớn hơn 15";
//} elseif ($a > 4) {
//    echo "Đây là số lớn hơn 10 ";
//} elseif ($a > 7) {
//    echo "Đây là số lớn hơn 7";
//} else {
//    echo "abc";
//}
//if ($a > 2) {
//    echo "đây là số lớn hơn 2";
//    return;
//}
//if ($a > 4) {
//    echo "Đây là số lớn hơn 4";
//    return;
//}
// khai báo biến $hoten
// biến $diemToan,$diemLy,$diemHoa
// tính điểm tb = ($diemToan + $diemLy + $diemHoa)/3
// kiểm tra nếu điểm TB >= 0 và điểm TB < 4 => Xếp loại yếu
//nếu diemTB >=4 và ddieemrTB < 6 => Xếp loại trung bình
//nếu diemTB >= 6 và điểm TB < 8 => Xếp loại khá
//nếu diemTB >= 8 và điểm TB <=10 => Giỏi
// hiển thị ra Em Nguyễn Văn A có điểm trung bình là  5.6 và xếp lọa trung bình

?>
