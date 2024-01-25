<?php
// mảng tuần tự
$mang = [4,5,7,8,2,9,10,11];//cách khai báo 1 mảng
$mangChuoi = ["huy","quang","nguyễn"];
//hiển thị ra nguyễn quang huy
//echo $mang[2] + $mang[5];
//echo $mangChuoi[2]." ".$mangChuoi[1]." ".$mangChuoi[0];
//duyệt mảng lấy từng phần tử trong mảng ra để hiển thị hoặc là xử lý cái gì đó bla bla
//sử dụng foreach để  duyệt mảng
// - vòng lặp foreach sẽ lặp cho đến  phần tử cuối cùng của mảng thì dừng
//kiểm tra số chẵn
function ktraSoChan($n) {
    if ($n % 2 == 0) {
        return true;
    } else {
        return false;
    }
}
foreach ($mang as $vitri => $phantu) {
    if (ktraSoChan($phantu) == true) {
        echo $phantu;
    }
//    echo $phantu.'-';
}
//
function ktraNguyenTo($n) { // là số chỉ chia hết cho 1 và chính nó
    // nếu $n là số nguyên to -> return true;
    // neu $n khong la số nguyên tố -> return false;
}
//for ($i = 0;$i < count($mang);$i ++) {
//    if (ktraNguyenTo($mang[$i]) == true) {
//        echo $mang[$i];
//    }
//}
$tong = 0;
$dem = 0;
for ($i = 0;$i < count($mang);$i ++) {

    $tong+= $mang[$i];
    if ($mang[$i] % 2 == 0) {
        $dem ++;
//        echo $mang[$i] . "<br>";
    }
}
echo "Tổng số phần tử là số chẵn trong mảng là ".$dem;
echo $tong;

//đếm xem trong mảng có bao nhiêu phần tử là số chẵn
// hiển thị ra những phần tử là số nguyên tố trong mảng
//tính tổng các phần tử trong mảng
//echo "tổng số phần tử trong mảng là". count($mang);
//hiển thị các phần tử là số chẵn trong mảng
//echo $mang[1];
//echo $mang[2];
//echo $mang[3];
////....
//echo $mang[6];


