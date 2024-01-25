<!-- /.container-fluid -->
<div class="container-fluid ">
    <section class="row mx-0  ">
        <div class="col"></div>

        <button type="button" class="btn btn-secondary col-10" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
            Danh Sách Người Dùng
        </button>
        <div class="col"></div>
    </section>
    <section class="row mx-0  ">
        <div class="col"></div>

        <span style="color: greenyellow;"><?php  echo isset($thongbaoTC)? $thongbaoTC : "";?></span>

        <div class="col"></div>
    </section>
    <section class="row mx-0 mt">

        <div class="col-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">ID</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Email</th>
                    <th scope="col">Thao Tác</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $stt = 0;
                foreach ($listNguoiDung as $nguoidung) {
                    $stt++;
                    extract($nguoidung);

                    ?>
                    <tr>
                        <th scope="row"><?= $stt ?></th>
                        <td><?= $nguoidung[0] ?></td>
                        <td><?= $ten ?></td>
                        <td><?= $email ?></td>

                        <td>
                            <button type="submit" class="btn btn-warning"><a href="?url=edit-NguoiDung&id=<?= $nguoidung[0] ?>">Sửa</a></button>
                            <button type="submit" class="btn btn-danger" > <a href="?url=delete-NguoiDung&id=<?= $nguoidung[0] ?>" onclick="return confirm('Bạn muốn xóa không ?' )">Xóa</a></button>
                            <button type="submit" class="btn btn-secondary" > <a href="?url=delete-Soft-NguoiDung&id=<?= $nguoidung[0] ?>" onclick="return confirm('Bạn muốn ẩn không ?' )">Ẩn</a></button>
                        </td>

                    </tr>

                <?php } ?>

                </tbody>
            </table>

        </div>
        <!-- <div class="col"></div> -->

    </section>


</div>


