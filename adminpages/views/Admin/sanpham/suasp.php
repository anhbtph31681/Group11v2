
<?php
if(is_array($one_san_pham)){
  extract($one_san_pham);
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
        <h3 class="card-title">Sửa sản phẩm</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="index.php?act=updatesp" enctype="multipart/form-data" method="POST">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Tên sản phẩm</label>
                <input type="text" class="form-control" name="ten_sp" value="<?php echo $ten_sp ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Ngày nhập</label>
                <input type="date" class="form-control" name="ngay_nhap" value="<?php echo $ngay_nhap ?>" >
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Mô tả</label>
                <input type="text" class="form-control" name="mo_ta" value="<?php echo $mo_ta ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">ID Danh mục</label>
                <input type="text" class="form-control" name="id_danhmuc" value="<?php echo $id_danhmuc ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Ảnh</label>
                <input style="border:none;" type="file" class="form-control" name="img_thumbnail" value="<?php echo $img_thumbnail ?>">
                
            </div>
            <div class="form-group">
                 <label for="exampleInputFile">Giá tiền</label>
                 <input type="number" class="form-control" name="gia_sanpham" value="<?php echo $gia_sanpham ?>">
              </div>

            <div class="form-group">
                <label for="exampleInputFile">Trạng thái</label>
                <input type="text" class="form-control" name="trang_thai" placeholder="0: Chưa duyệt. 1: Đã duyệt" value="<?php echo $trang_thai ?>"> 
            </div> 
            <input type="hidden" name="id_sanpham" value="<?php echo $id_sanpham ?>">
        </div>
        <!-- /.card-body -->
        
        <div class="card-footer">
            <input type="submit" class="btn btn-primary" name="sua" value="Sửa">
            <a href="index.php?act=sanpham"><input type="button" value="Trở về danh sách" class="btn btn-primary"></a>
        </div>
    </form>
</div>
