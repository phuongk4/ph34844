<!-- /.container-fluid -->
<div class="container-fluid ">
    <section class="row mx-0  ">
        <div class="col"></div>

        <button type="button" class="btn btn-secondary col-10" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
            Sửa Người Dùng
        </button>
        <div class="col"></div>



    </section>
    <section class="row mx-0 mt">

        <div class="col"></div>
        <div class="col-10">
            <form action="?url=edit-NguoiDung&id=<?= $id ?>" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">ID Người Dùng</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"
                           aria-describedby="emailHelp" disabled placeholder="<?php echo $id ?>" >

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Tên</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="ten" value="<?php echo $ten ?>">
                    <span style="color: red;"><?php echo isset($error['ten']) ? $error['ten'] : ''; ?></span>
                </div>



                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" class="form-control" id="exampleInputPassword1" name="email" value="<?php echo $email ?>">
                    <span style="color: red;"><?php echo isset($error['email']) ? $error['email'] : ''; ?></span>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="password" value="<?php echo $password ?>">
                    <span style="color: red;"><?php echo isset($error['password']) ? $error['password'] : ''; ?></span>
                </div>

                <span style="color: green;"><?php echo isset($thongbaoTC) ? $thongbaoTC : ''; ?></span> <br>

                <input type="submit" class="btn btn-primary" value="Submit" name="submit">
            </form>
        </div>
        <div class="col"></div>

    </section>


</div>
