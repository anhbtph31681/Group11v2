<?php
if(is_array($sua_hd)){
  extract($sua_hd);
}

?>
    <style>
        .card{
            width: 80%;
            margin-left: 17%;
        }
    </style>
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Sửa bài viết</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="index.php?act=updatehd" method="POST">
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">ID khách hàng</label>
            <input type="text" class="form-control" name="id_kh"  value="<?php echo $id_khachhang ?>" readonly>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Mã đơn hàng</label>
            <input type="text" class="form-control" name="ma_donhang"  value="<?php echo $ma_donhang ?>" readonly>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Tên người nhận</label>
            <input type="text" class="form-control" name="ten_nn"  value="<?php echo $ten_nn ?>" >
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">SĐT người nhận</label>
            <input type="text" class="form-control" name="sdt_nn"  value="<?php echo $sdt_nn ?>" >
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Địa chỉ người nhận</label>
            <input type="text" class="form-control" name="diachi_nn"  value="<?php echo $diachi_nn ?>" >
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Trạng thái</label>
             <input type="text" class="form-control" name="status"  placeholder="0:chưa duyệt. 1: Đã duyệt" value="<?php echo $trang_thai ?>"> 
          </div> 
          <div class="form-group">
            <label for="exampleInputEmail1">Hình thức thanh toán</label>
            <input type="text" class="form-control" name="hinhthuc_tt"  value="<?php echo $hinhthuc_tt ?>">
          </div><div class="form-group">
            <label for="exampleInputEmail1">Ngày tạo đơn</label>
            <input type="text" class="form-control" name="ngay_tao"  value="<?php echo $ngay_tao ?>" readonly>
          </div>
          <input type="hidden" name="id_hoadon" value="<?php echo $id_hoadon ?>">
        </div>
        <!-- /.card-body -->
        
        <div class="card-footer">
          <input type="submit" class="btn btn-primary" name="sua" value="Sửa">
          <a href="index.php?act=qlhoadon"><input type="button" value="Trở về danh sách" class="btn btn-primary"></a>
        </div>
      </form>
    </div>