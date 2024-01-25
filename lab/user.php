<?php
include "checklogin.php";
echo "ahihi đây là trang user .Xin chào ". $_SESSION['user'];
if (isset($_POST['dang_xuat'])) {
    // huy cai session nay di
    unset($_SESSION['user']);
    header("Location: login.php");
}
?>
<form action="" method="POST">
    <input type="submit" name="dang_xuat" value="Dang xuat">
</form>
