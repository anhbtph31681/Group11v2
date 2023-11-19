<?php
if(is_array($one_bai_viet)){
  extract($one_bai_viet);
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
      <form action="index.php?act=updatebv" method="POST">
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Tiêu đề</label>
            <input type="text" class="form-control" name="tieu_de"  value="<?php echo $tieu_de ?>">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Nội dung</label>
            <input type="text" class="form-control" name="noi_dung"  value="<?php echo $noi_dung ?>" >
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Ngày đăng</label>
            <input type="text" class="form-control" name="ngay_dang" value="<?php echo $ngay_dang ?>">
          </div>
           <div class="form-group">
            <label for="exampleInputFile">Trạng thái</label>
             <input type="text" class="form-control" name="trang_thai"  placeholder="0:chưa duyệt. 1: Đã duyệt" value="<?php echo $trang_thai ?>"> 
          </div> 
          <input type="hidden" name="id" value="<?php echo $id ?>">
        </div>
        <!-- /.card-body -->
        
        <div class="card-footer">
          <input type="submit" class="btn btn-primary" name="sua" value="Sửa">
          <a href="index.php?act=baiviet"><input type="button" value="Trở về danh sách" class="btn btn-primary"></a>
        </div>
      </form>
    </div>