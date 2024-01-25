<!-- /.container-fluid -->
<div class="container-fluid ">
    <section class="row mx-0  ">
        <div class="col"></div>

        <button type="button" class="btn btn-secondary col-10" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
            Thêm Danh Mục Sách
        </button>
        <div class="col"></div>



    </section>
    <section class="row mx-0 mt">

        <div class="col"></div>
        <div class="col-10">
            <form action="?url=add-DanhMucSach" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">ID Danh Mục</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"
                           aria-describedby="emailHelp" disabled placeholder="Tăng tự động" >

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Tên Danh Mục</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="ten_danh_muc">
                    <span style="color: red;"><?php echo isset($thongbao)? $thongbao : ''; ?></span>
                    <span style="color: green;"><?php echo isset($thongbaoTC)? $thongbaoTC : ''; ?></span>
                </div>

                <input type="submit" class="btn btn-primary" value="Thêm" name="submit">
            </form>
        </div>
        <div class="col"></div>
    </section>
</div>
