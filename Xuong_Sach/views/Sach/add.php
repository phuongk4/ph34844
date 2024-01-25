<!-- /.container-fluid -->
<div class="container-fluid ">
    <section class="row mx-0  ">
        <div class="col"></div>

        <button type="button" class="btn btn-secondary col-10" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
            Thêm Sách
        </button>
        <div class="col"></div>



    </section>
    <section class="row mx-0 mt">

        <div class="col"></div>
        <div class="col-10">
            <form action="?url=add-Sach" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">ID Sách</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"
                           aria-describedby="emailHelp" disabled placeholder="Tăng tự động" >

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Tên Sách</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="ten_sach" >
                    <span style="color: red;"><?php echo isset($error['ten_sach']) ? $error['ten_sach'] : ''; ?></span>
                </div>



                <div class="form-group">
                    <label for="exampleInputPassword1">Giá</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" name="gia" >
                    <span style="color: red;"><?php echo isset($error['gia']) ? $error['gia'] : ''; ?></span>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Hình Ảnh</label>
                    <input type="file" class="form-control" id="exampleInputPassword1" name="hinh_anh" >
                    <span style="color: red;"><?php echo isset($error['hinh_anh']) ? $error['hinh_anh'] : ''; ?></span>
                </div>


                <div class="form-group">
                    <label for="exampleInputPassword1">Năm Xuất Bản</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" name="nam_xuat_ban" >
                    <span style="color: red;"><?php echo isset($error['nam_xuat_ban']) ? $error['nam_xuat_ban'] : ''; ?></span>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Tác Giả</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="tac_gia" >
                    <span style="color: red;"><?php echo isset($error['tac_gia']) ? $error['tac_gia'] : ''; ?></span>
                </div>

                <div class="form-group">

                    <label for="exampleInputPassword1">Danh Mục</label>
                    <select name="id_danh_muc" id="" class="form-control" id="exampleInputPassword1">
                        <option value="" >-- Chọn --</option>
                        <?php foreach ($listDanhMucSach as $dm){
                            extract($dm);
                            ?>

                            <option value="<?= $id ?>"  ><?= $ten_danh_muc ?></option>
                        <?php }?>
                    </select>
                    <span style="color: red;"><?php echo isset($error['danh_muc']) ? $error['danh_muc'] : ''; ?></span>
                </div>



                <span style="color: green;"><?php echo isset($thongbaoTC) ? $thongbaoTC : ''; ?></span> <br>

                <input type="submit" class="btn btn-primary" value="Submit" name="submit">
            </form>
        </div>
        <div class="col"></div>

    </section>


</div>
