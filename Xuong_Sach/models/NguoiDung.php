<?php
require_once "db.php";
function getAllNguoiDung(){
    $sql = "SELECT * FROM  nguoi_dung WHERE trang_thai = 1";
    return getData($sql);
}
function getOneNguoiDung($id){
    $sql = "SELECT * FROM nguoi_dung WHERE id = '$id'";
    return getData($sql, false);
}
function insertNguoiDung($ten, $email, $password){
    $sql = "INSERT INTO nguoi_dung (ten, email, password) VALUES ('$ten', '$email', '$password')";
    return getData($sql, false);
}
function updateNguoiDung($id, $ten, $email, $password){
    $sql = "UPDATE nguoi_dung SET ten ='$ten', email = '$email', password = '$password' WHERE id = '$id'";
    return getData($sql, false);
}
function  deleteNguoiDung($id){
    $sql = "DELETE FROM nguoi_dung WHERE id = '$id'";
    return getData($sql, false);
}
function deleteSoftNguoiDung($id){
    $sql = "UPDATE nguoi_dung SET trang_thai = 0 WHERE id = '$id'";
    return getData($sql, false);
}
function select_taikhoan($email, $password){

    $sql = "SELECT * FROM nguoi_dung  WHERE email = '$email'";
    if($password != " "){
        $sql.= " AND password = '$password'";
    }
    $tk = getData($sql, false);
    if($tk){
        $_SESSION['user'] = $email;
        $_SESSION['admin'] = $tk;
    }

    else{
        $thongbao = "Tên tài khoản hoặc mật khẩu không chính xác!";
    }
    return $tk;

}