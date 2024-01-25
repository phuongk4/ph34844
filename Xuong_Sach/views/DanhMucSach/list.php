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
                    <th scope="col">ID Danh Mục</th>
                    <th scope="col">Tên Danh Mục</th>
                    <th scope="col">Thao Tác</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $stt = 0;
                foreach ($listDanhMucSach as $dm) {
                    $stt++;
                    extract($dm);

                    ?>
                    <tr>
                        <th scope="row"><?= $stt ?></th>
                        <td><?= $dm[0] ?></td>
                        <td><?= $ten_danh_muc?></td>
                        <td>
                            <button type="submit" class="btn btn-warning"><a href="?url=edit-DanhMucSach&id=<?= $dm[0] ?>">Sửa</a></button>
                            <button type="submit" class="btn btn-danger"> <a href="?url=delete-DanhMucSach&id=<?= $dm[0] ?>" onclick="return confirm('Bạn muốn xóa không ?' )">Xóa</a></button>
                            <button type="submit" class="btn btn-secondary" > <a href="?url=delete-Soft-DanhMucSach&id=<?= $dm[0]?>" onclick="return confirm('Bạn muốn ẩn không?' )">Ẩn</a></button>
                        </td>

                    </tr>

                <?php } ?>

                </tbody>
            </table>

        </div>
        <div class="col"></div>

    </section>


</div>