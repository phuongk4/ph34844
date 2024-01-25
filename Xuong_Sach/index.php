<?php
ob_start();
session_start();
if(!isset($_SESSION['admin'])) {
    header("Location: views/DangKy_DangNhap/dangnhap.php");
    exit;
}
require_once "models/DanhMucSach.php";
require_once "models/Sach.php";
require_once "models/NguoiDung.php";
require_once "global.php";


$checkName = "/^[a-zA-Z\sáàảãạắằẳẵặấầẩẫậéèẻẽẹếềểễệíìỉĩịóòỏõọốồổỗộớờởỡợúùủũụứừửữựýỳỷỹỵđÁÀẢÃẠẮẰẲẴẶẤẦẨẪẬÉÈẺẼẸẾỀỂỄỆÍÌỈĨỊÓÒỎÕỌỐỒỔỖỘỚỜỞỠỢÚÙỦŨỤỨỪỬỮỰÝỲỶỸỴĐ ]+[0-9]*$/";
$checkTen = "/^[a-zA-Z\sáàảãạắằẳẵặấầẩẫậéèẻẽẹếềểễệíìỉĩịóòỏõọốồổỗộớờởỡợúùủũụứừửữựýỳỷỹỵđÁÀẢÃẠẮẰẲẴẶẤẦẨẪẬÉÈẺẼẸẾỀỂỄỆÍÌỈĨỊÓÒỎÕỌỐỒỔỖỘỚỜỞỠỢÚÙỦŨỤỨỪỬỮỰÝỲỶỸỴĐ ]+$/";
$checkEmail = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

include_once "views/header.php";

$url = isset($_GET['url']) ? $_GET['url'] : '/';
switch ($url) {
    case '/':

        include_once "views/home.php";
        break;

    case 'dangxuat':
        header("Location: http://localhost/Xuong_Sach/views/DangKy_DangNhap/dangnhap.php");

        unset($_SESSION['admin']);

        break;    

    // Case Danh Mục Sách
    case 'list-DanhMucSach':
        $listDanhMucSach = getAllDanhMucSach();
        include_once "views/DanhMucSach/list.php";
        break;

    case 'add-DanhMucSach':
        if (isset($_POST['submit']) && $_POST['submit']) {
            if (!empty($_POST['ten_danh_muc'])) {
                $ten_danh_muc = $_POST['ten_danh_muc'];
                insertDanhMucSach($ten_danh_muc);
                $thongbaoTC = "Đã thêm thành công !";
            } else {
                $thongbao = "Tên danh mục không được bỏ trống !";
            }
        }
        include_once "views/DanhMucSach/add.php";
        break;

    case 'edit-DanhMucSach':
        if (isset($_GET['id']) && $_GET['id']) {
            $id = $_GET['id'];
            $dm = getOneDanhMucSach($id);
            extract($dm);

            if (isset($_POST['submit']) && $_POST['submit']) {
                if (!empty($_POST['ten_danh_muc'])) {
                    $ten_danh_muc = $_POST['ten_danh_muc'];
                    updateDanhMucSach($id, $ten_danh_muc);
                    $thongbaoTC = "Đã sửa thành công !";
                } else {
                    $thongbao = "Tên danh mục không được bỏ trống !";
                }
            }
        }
        include_once "views/DanhMucSach/edit.php";
        break;

    case 'delete-DanhMucSach':
        if (isset($_GET['id']) && $_GET['id']) {
            $id = $_GET['id'];

            deleteDanhMucSach($id);
            $thongbaoTC = "Đã xóa thành công !";
        }
        $listDanhMucSach = getAllDanhMucSach();
        include_once "views/DanhMucSach/list.php";
        break;

    case 'delete-Soft-DanhMucSach':
        if (isset($_GET['id']) && $_GET['id']) {
            $id = $_GET['id'];

            deleteSoftDanhMucSach($id);
            $thongbaoTC = "Đã ẩn thành công !";
        }
        $listDanhMucSach = getAllDanhMucSach();
        include_once "views/DanhMucSach/list.php";
        break;


    // Case Sách
    case 'list-Sach':
        $listSach = getAllSach('',0);
        include_once "views/Sach/list.php";
        break;

    case 'add-Sach':
        $error = [];
        $listDanhMucSach = getAllDanhMucSach();
        if (isset($_POST['submit']) && $_POST['submit']) {
            if (isset($_POST['ten_sach']) && $_POST['ten_sach']) {
                $ten_sach = $_POST['ten_sach'];
            } else {
                $error['ten_sach'] = "Tên sách không được bỏ trống !";
            }

            if (isset($_POST['gia']) && $_POST['gia']) {
                if (is_int((int)$_POST['gia'])) {
                    $gia = $_POST['gia'];
                } else {
                    $error['gia'] = "Giá sản phẩm không hợp lệ!";
                }
            } else {
                $error['gia'] = "Giá không được bỏ trống !";
            }

            if (!empty($_FILES['hinh_anh']['name'])) {
                $hinh_anh = $img_path . $_FILES['hinh_anh']['name'];
                move_uploaded_file($_FILES['hinh_anh']['tmp_name'], $hinh_anh);
            } else {
                $error['hinh_anh'] = "Hãy tải hình ảnh !";
            }

            if (isset($_POST['nam_xuat_ban']) && $_POST['nam_xuat_ban']) {
                if (is_int((int)$_POST['nam_xuat_ban'])) {
                    $nam_xuat_ban = $_POST['nam_xuat_ban'];
                } else {
                    $error['nam_xuat_ban'] = "Năm xuất bản không hợp lệ !";
                }
            } else {
                $error['nam_xuat_ban'] = "Năm xuất bản không được bỏ trống !";
            }

            if (isset($_POST['tac_gia']) && $_POST['tac_gia']) {
                if (preg_match($checkName, $_POST['tac_gia'])) {
                    $tac_gia = $_POST['tac_gia'];
                } else {
                    $error['tac_gia'] = "Tên tác giả không hợp lệ !";
                }
            } else {
                $error['tac_gia'] = "Tên tác giả không được bỏ trống !";
            }

            if (isset($_POST['id_danh_muc']) && $_POST['id_danh_muc']) {
                $id_danh_muc = $_POST['id_danh_muc'];
            } else {
                $error['danh_muc'] = "Không được bỏ trống !";

            }

            if (empty($error)) {
                insertSach($ten_sach, $gia, $hinh_anh, $nam_xuat_ban, $tac_gia, $id_danh_muc);
                $thongbaoTC = "Đã thêm sách thành công !";
            }
        }
        include_once "views/Sach/add.php";
        break;

    case 'edit-Sach':
        $listDanhMucSach = getAllDanhMucSach();
        if (isset($_GET['id']) && $_GET['id']) {
            $id = $_GET['id'];
            $sach = getOneSach($id);
            extract($sach);

            $error = [];
            if (isset($_POST['submit']) && $_POST['submit']) {
                if (isset($_POST['ten_sach']) && $_POST['ten_sach']) {
                    $ten_sach = $_POST['ten_sach'];
                } else {
                    $error['ten_sach'] = "Tên sách không được bỏ trống !";
                }

                if (isset($_POST['gia']) && $_POST['gia']) {
                    if (is_int((int)$_POST['gia'])) {
                        $gia = $_POST['gia'];
                    } else {
                        $error['gia'] = "Giá không hợp lệ!";
                    }
                } else {
                    $error['gia'] = "Giá không được bỏ trống !";
                }

                if (!empty($_FILES['hinh_anh']['name'])) {
                    $hinh_anh_new = $img_path . $_FILES['hinh_anh']['name'];
                    move_uploaded_file($_FILES['hinh_anh']['tmp_name'], $hinh_anh_new);
                } else {
                    $hinh_anh_new = $hinh_anh;
                }

                if (isset($_POST['nam_xuat_ban']) && $_POST['nam_xuat_ban']) {
                    if (is_int((int)$_POST['nam_xuat_ban'])) {
                        $nam_xuat_ban = $_POST['nam_xuat_ban'];
                    } else {
                        $error['nam_xuat_ban'] = "Năm xuất bản không hợp lệ !";
                    }
                } else {
                    $error['nam_xuat_ban'] = "Năm xuất bản không được bỏ trống !";
                }

                if (isset($_POST['tac_gia']) && $_POST['tac_gia']) {
                    if (preg_match($checkName, $_POST['tac_gia'])) {
                        $tac_gia = $_POST['tac_gia'];
                    } else {
                        $error['tac_gia'] = "Tên tác giả không hợp lệ !";
                    }
                } else {
                    $error['tac_gia'] = "Tên tác giả không được bỏ trống !";
                }

                if (isset($_POST['id_danh_muc']) && $_POST['id_danh_muc']) {
                    $id_danh_muc = $_POST['id_danh_muc'];
                } else {
                    $error['danh_muc'] = "Không được bỏ trống !";

                }

                if (empty($error)) {
                    updateSach($id, $ten_sach, $gia, $hinh_anh_new, $nam_xuat_ban, $tac_gia, $id_danh_muc);
                    $thongbaoTC = "Đã cập nhật sách thành công !";
                }
            }
        }
        include_once "views/Sach/edit.php";
        break;

    case 'delete-Sach':
        if (isset($_GET['id']) && $_GET['id']) {
            $id = $_GET['id'];
            deleteSach($id);

            $thongbaoTC = "Đã xóa thành công !";
        }
        $listSach = getAllSach('',0);
        include_once "views/Sach/list.php";
        break;

    case 'delete-Soft-Sach':
        if (isset($_GET['id']) && $_GET['id']) {
            $id = $_GET['id'];
            deleteSoftSach($id);

            $thongbaoTC = "Đã ẩn thành công !";
        }
        $listSach = getAllSach('',0);
        include_once "views/Sach/list.php";
        break;


    // Case Người Dùng
    case 'list-NguoiDung':
        $listNguoiDung = getAllNguoiDung();
        include_once "views/NguoiDung/list.php";
        break;

    case 'add-NguoiDung':
        $error = [];
        if (isset($_POST['submit']) && $_POST['submit']) {
            if (isset($_POST['ten']) && $_POST['ten']) {
                if (preg_match($checkName, $_POST['ten'])) {
                    $ten = $_POST['ten'];
                } else {
                    $error['ten'] = "Tên không đúng định dạng !";
                }
            } else {
                $error['ten'] = "Tên không được bỏ trống !";
            }

            if (isset($_POST['email']) && $_POST['email']) {
                if (preg_match($checkEmail, $_POST['email'])) {
                    $email = $_POST['email'];
                } else {
                    $error['email'] = "Email không đúng định dạng!";
                }
            } else {
                $error['email'] = "Email không được bỏ trống !";
            }

            if (isset($_POST['password']) && $_POST['password']) {

                $password = $_POST['password'];
            } else {
                $error['password'] = "Password không được bỏ trống !";
            }

            if (empty($error)) {
                insertNguoiDung($ten, $email, $password);
                $thongbaoTC = "Đã thêm người dùng thành công !";
            }
        }
        include_once "views/NguoiDung/add.php";
        break;

    case 'edit-NguoiDung':
        if (isset($_GET['id']) && $_GET['id']) {
            $id = $_GET['id'];

            $nguoidung = getOneNguoiDung($id);
            extract($nguoidung);

            $error = [];
            if (isset($_POST['submit']) && $_POST['submit']) {
                if (isset($_POST['ten']) && $_POST['ten']) {
                    if (preg_match($checkName, $_POST['ten'])) {
                        $ten = $_POST['ten'];
                    } else {
                        $error['ten'] = "Tên không đúng định dạng !";
                    }
                } else {
                    $error['ten'] = "Tên không được bỏ trống !";
                }

                if (isset($_POST['email']) && $_POST['email']) {
                    if (preg_match($checkEmail, $_POST['email'])) {
                        $email = $_POST['email'];
                    } else {
                        $error['email'] = "Email không đúng định dạng!";
                    }
                } else {
                    $error['email'] = "Email không được bỏ trống !";
                }

                if (isset($_POST['password']) && $_POST['password']) {

                    $password = $_POST['password'];
                } else {
                    $error['password'] = "Password không được bỏ trống !";
                }

                if (empty($error)) {
                    updateNguoiDung($id, $ten, $email, $password);
                    $thongbaoTC = "Đã cập nhật thành công !";
                }
            }
        }
            include_once "views/NguoiDung/edit.php";
            break;

    case 'delete-NguoiDung':
        if(isset($_GET['id']) && $_GET['id']){
            $id = $_GET['id'];
            deleteNguoiDung($id);

            $thongbaoTC = "Đã xóa thành công !";
        }
        $listNguoiDung = getAllNguoiDung();
        include_once "views/NguoiDung/list.php";
        break;

    case 'delete-Soft-NguoiDung':
        if(isset($_GET['id']) && $_GET['id']){
            $id = $_GET['id'];
            deleteSoftNguoiDung($id);

            $thongbaoTC = "Đã ẩn thành công !";
        }
        $listNguoiDung = getAllNguoiDung();
        include_once "views/NguoiDung/list.php";
        break;
}

include_once "views/footer.php";
ob_flush();
