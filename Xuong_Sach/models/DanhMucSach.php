<?php
require_once "db.php";
function getAllDanhMucSach(){
    $sql = "SELECT * FROM  danh_muc_sach WHERE trang_thai = 1";
    return getData($sql);
}
function getOneDanhMucSach($id){
    $sql = "SELECT * FROM danh_muc_sach WHERE id = '$id'";
    return getData($sql, false);
}
function insertDanhMucSach($ten_danh_muc){
    $sql = "INSERT INTO danh_muc_sach(ten_danh_muc) VALUES ('$ten_danh_muc')";
    return getData($sql, false);
}
function updateDanhMucSach($id, $ten_danh_muc){
    $sql = "UPDATE danh_muc_sach SET ten_danh_muc ='$ten_danh_muc' WHERE id = '$id'";
    return getData($sql, false);
}
function deleteDanhMucSach($id){
    $sql = "DELETE FROM danh_muc_sach WHERE id = '$id'";
    return getData($sql, false);
}
function deleteSoftDanhMucSach($id){
    $sql = "UPDATE danh_muc_sach SET trang_thai = 0 WHERE id = '$id'";
    return getData($sql, false);
}