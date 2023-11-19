<?php
if(is_array($one_danh_muc)){
  extract($one_danh_muc);
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
        <h3 class="card-title">Sửa danh mục</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="index.php?act=updatedm" method="POST">
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Tên danh mục</label>
            <input type="text" class="form-control" name="ten_danh_muc"  value="<?php echo $ten_danh_muc ?>">
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
          <a href="index.php?act=danhmuc"><input type="button" value="Trở về danh sách" class="btn btn-primary"></a>
        </div>
      </form>
    </div>