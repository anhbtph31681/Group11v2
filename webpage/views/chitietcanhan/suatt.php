
<div class="page-index">
          <div class="container">
            <p>
              Thông tin cá nhân - Sửa thông tin cá nhân
            </p>
          </div>
        </div>
      </div>
      <div class="clearfix">
      </div>
      <div class="container_fullwidth">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h5 class="title contact-title">
                Sửa thông tin cá nhân
              </h5>
              <div class="clearfix">
              </div>
              <div >
              <form action="index.php?act=updatett" method="POST">
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">ID tài khoản</label>
            <input type="text" class="form-control" name="id_khachhang"  value="<?php echo $id_khachhang ?>" readonly>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Họ và tên</label>
            <input type="text" class="form-control" name="ho_ten"  value="<?php echo $ho_ten ?>" >
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Tên đăng nhập</label>
            <input type="text" class="form-control" name="ten_dang_nhap" value="<?php echo $ten_dang_nhap ?>" readonly>
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Email</label>
            <input type="text" class="form-control" name="email" value="<?php echo $email ?>">
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Địa chỉ</label>
            <input type="text" class="form-control" name="dia_chi" value="<?php echo $dia_chi ?>">
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Số điện thoại</label>
            <input type="text" class="form-control" name="sdt" value="<?php echo $sdt ?>">
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Ngày sinh</label>
            <input type="date" class="form-control" name="ngay_sinh" value="<?php echo $ngay_sinh ?>">
          </div>
          <!-- <input type="hidden" name="id_baiviet" value="<?php echo $id_baiviet ?>"> -->
        </div>
        <!-- /.card-body -->
        
        <div class="card-footer">
          <input type="submit" class="btn btn-primary" name="sua" value="Sửa">
          <a href="?act=ctcanhan"><input type="button" value="Trở về" class="btn btn-primary"></a>
          <p readonly>*Lưu ý: Sau khi bạn sửa chúng tôi sẽ đăng xuất tài khoản của bạn để cập nhật thông tin! </p>
        </div>
      </form>











                  
              </div>

              <div class="clearfix">
              </div>
              <div class="row">
               
                <div class="col-md-8">
                  
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix">
          </div>