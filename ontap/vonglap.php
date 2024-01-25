<?php
// vòng lặp (for,while,do while)
// Vòng lặp áp dụng cho mảng  foreach ( Giới thiệu sau )

//vòng lặp for
//hiển thị 10 lần dòng text "hello wolrd"
//for ($i = 0;$i <10;$i ++) {
//    echo "hello wolrd".$i."</br>";
//}

//hiển thị tất cà các sô chẵn từ 0 -> 50
for ($i = 0 ; $i <=50 ; $i++) {
    if ($i % 2 == 0) {
        echo $i . "</br>";
    }
}
// khai báo 1 biến $n = 50
// tính tổng các số từ 1 -> $n
//ví dụ $n = 5
// tổng = 1+ 2 + 3 + 4 + 5
$n = 5;
$sum= 0;
for($i = 1 ; $i <=$n;$i ++) {
    if ($i % 2 != 0) {
        $sum += $i;
    }
    //$sum = $sum + $i
    //$sum = 0 + 1 = 1
    //$sum = 1 + 2 = 3
    //$sum = 3 + 3 = 6
    //$sum = 6 + 4 = 10
    //$sum = 10 + 5 = 15
}
//echo "Tổng là ".$sum; // 15


// khai báo 1 biến $n bất kỳ
// tính tổng các số lẻ từ 1 -> $n
//ví dụ $n = 5
// tổng = 1 + 3  + 5 = ...
//tính giai thừa của n đó ví dụ 5! = 1*2*3*4*5
// khai báo $a và $n tính lũy thừa $a^$n
// ví dụ $a = 2 $n = 3 => 2 ^ 3 = 8
//$a = 2 ;
//$n = 3;
//$kq = 1;
//for($i = 1;$i <=$n ;$i ++) {
//    $kq *= $a;
//    //kq = kq * a
//    //kq = 1 * 2 = 2
//    //kq = 2 * 2  = 4;
//    //kq = 4 * 2 = 8;
//}
//echo "Kết quả là".$kq;
//$i = 0 ;
//while($i <20) {
//    echo "123";
//    $i++;
//}
do {
    echo "HLL WƯ";
} while (4>5)
?>