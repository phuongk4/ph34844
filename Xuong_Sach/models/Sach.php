<?php
require_once "db.php";
function getAllSach($keyw,$id_danh_muc){
    $sql = "SELECT * FROM sach AS s JOIN danh_muc_sach AS dm ON s.id_danh_muc = dm.id";
    if($keyw != " "){
        $sql .=  " AND s.ten_sach LIKE '%".$keyw."%'";
    }
    if($id_danh_muc > 0){
        $sql.=" AND dm.id=".$id_danh_muc;
    }
    $sql.= " AND s.trang_thai = 1 order by s.id DESC";

    return getData($sql);
}

function getOneSach($id){
    $sql = "SELECT * FROM sach WHERE id = '$id'";
    return getData($sql, false);
}
function insertSach($ten_sach, $gia, $hinh_anh, $nam_xuat_ban, $tac_gia, $id_danh_muc){
    $sql = "INSERT INTO sach ( ten_sach, gia, hinh_anh, nam_xuat_ban, tac_gia, id_danh_muc)  VALUES  ('$ten_sach', '$gia', '$hinh_anh', '$nam_xuat_ban', '$tac_gia', '$id_danh_muc')";
    return getData($sql, false);
}
function updateSach($id, $ten_sach, $gia, $hinh_anh_new, $nam_xuat_ban, $tac_gia, $id_danh_muc){
    $sql = "UPDATE sach SET ten_sach = '$ten_sach', gia = '$gia', hinh_anh = '$hinh_anh_new', nam_xuat_ban = '$nam_xuat_ban', tac_gia= '$tac_gia',id_danh_muc = '$id_danh_muc' WHERE id = '$id'";
    return getData($sql, false);
}
function deleteSach($id){
    $sql = "DELETE FROM sach WHERE id = '$id'";
    return getData($sql, false);
}
function deleteSoftSach($id){
    $sql = "UPDATE sach SET trang_thai = 0 WHERE id = '$id'";
    return getData($sql, false);
}