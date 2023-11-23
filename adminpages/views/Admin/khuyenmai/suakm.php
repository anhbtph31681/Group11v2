<?php
if(is_array($one_km)){
  extract($one_km);
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
        <h3 class="card-title">Sửa khuyến mãi</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="index.php?act=updatekm" method="POST">
        <div class="card-body">
        <div class="form-group">
            <label for="exampleInputPassword1">Phần trăm khuyến mãi</label>
            <input type="text" class="form-control" name="phan_tram_km"  value="<?php echo $phan_tram_km?>" >
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Ngày bắt đầu</label>
            <input type="date" class="form-control" name="ngay_bat_dau"  value="<?php echo $ngay_bat_dau ?>" >
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Ngày kết thúc</label>
            <input type="date" class="form-control" name="ngay_ket_thuc" value="<?php echo $ngay_ket_thuc ?>">
          </div>
           <div class="form-group">
            <label for="exampleInputFile">Trạng thái</label>
             <input type="text" class="form-control" name="trang_thai"  placeholder="0:chưa duyệt. 1: Đã duyệt" value="<?php echo $trang_thai ?>"> 
          </div> 
          <input type="hidden" name="id_km" value="<?php echo $id_km ?>">
        </div>
        <!-- /.card-body -->
        
        <div class="card-footer">
          <input type="submit" class="btn btn-primary" name="sua" value="Sửa">
          <a href="index.php?act=baiviet"><input type="button" value="Trở về danh sách" class="btn btn-primary"></a>
        </div>
      </form>
    </div>