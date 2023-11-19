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
            <label for="exampleInputPassword1">Ngày đặt</label>
            <input type="date" class="form-control" name="ngay_dat"  value="<?php echo $ngay_dat ?>" >
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Tổng hóa đơn</label>
            <input type="text" class="form-control" name="total" value="<?php echo $tong_hoa_don ?>">
          </div>
           <div class="form-group">
            <label for="exampleInputFile">ID khuyến mãi</label>
             <input type="text" class="form-control" name="makm"  value="<?php echo $id_km ?>"> 
          </div> 
          <div class="form-group">
            <label for="exampleInputFile">Trạng thái</label>
             <input type="text" class="form-control" name="status"  placeholder="0:chưa duyệt. 1: Đã duyệt" value="<?php echo $trang_thai ?>"> 
          </div> 
          <input type="hidden" name="id" value="<?php echo $id ?>">
        </div>
        <!-- /.card-body -->
        
        <div class="card-footer">
          <input type="submit" class="btn btn-primary" name="sua" value="Sửa">
          <a href="index.php?act=qlhoadon"><input type="button" value="Trở về danh sách" class="btn btn-primary"></a>
        </div>
      </form>
    </div>