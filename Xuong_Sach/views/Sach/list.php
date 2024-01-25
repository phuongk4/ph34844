<!-- /.container-fluid -->
<div class="container-fluid ">
    <section class="row mx-0  ">
        <div class="col"></div>

        <button type="button" class="btn btn-secondary col-10" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
            Danh Sách Danh Mục
        </button>
        <div class="col"></div>
    </section>
    <section class="row mx-0  ">
        <div class="col"></div>

        <span style="color: greenyellow;"><?php  echo isset($thongbaoTC)? $thongbaoTC : "";?></span>

        <div class="col"></div>
    </section>
    <section class="row mx-0 mt">

        <div class="col"></div>
        <div class="col-10">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">ID Sách</th>
                    <th scope="col">Tên Sách</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Hình Ảnh</th>
                    <th scope="col">Năm Sản Xuất </th>
                    <th scope="col">Tác Giả </th>
                    <th scope="col">Danh Mục </th>
                    <th scope="col">Thao Tác</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $stt = 0;
                foreach ($listSach as $sach) {
                    $stt++;
                    extract($sach);

                    ?>
                    <tr>
                        <th scope="row"><?= $stt ?></th>
                        <td><?= $sach[0] ?></td>
                        <td><?= $ten_sach ?></td>
                        <td><?= $gia ?></td>
                        <td><img src="<?= $hinh_anh ?>" alt="" style="height: 70px;"></td>
                        <td><?= $nam_xuat_ban  ?></td>
                        <td><?= $tac_gia ?></td>
                        <td><?= $ten_danh_muc ?></td>

                        <td style="width: 230px;">
                            <button type="submit" class="btn btn-warning"><a href="?url=edit-Sach&id=<?= $sach[0]?>">Sửa</a></button>
                            <button type="submit" class="btn btn-danger" > <a href="?url=delete-Sach&id=<?= $sach[0]?>" onclick="return confirm('Bạn muốn xóa không ?' )">Xóa</a></button>
                            <button type="submit" class="btn btn-secondary  " > <a href="?url=delete-Soft-Sach&id=<?= $sach[0]?>" onclick="return confirm('Bạn muốn ẩn không ?' )">Ẩn</a></button>
                        </td>

                    </tr>

                <?php } ?>

                </tbody>
            </table>

        </div>
        <div class="col"></div>

    </section>


</div>
