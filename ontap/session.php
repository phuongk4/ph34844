<?php
session_start();
//$ten = "Nguyễn Văn A";
//echo $ten;
// cách lưu biến session
//$_SESSION['ten'] = "nguyễn văn a";
//$_SESSION['tuoi'] = 18;
//$_COOKIE['ten'] = "âbccc";
//cách lưu trữ cookiee
setcookie('ten','tài',time()-300); // nếu trừ thời gian đi thì giống như unset session
setcookie('tuoi',18,time()+500);
?>