
<style>
    input {
        width: 100%;
        padding: 10px; /* Adjusted padding for better appearance */
        margin-bottom: 10px; /* Added margin for spacing between inputs */
    }
</style> 

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Quản lý sản phẩm</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <form action="index.php?act=addsp" enctype="multipart/form-data" method="POST">
                                        Tên sản phẩm <br>
                                        <input type="text" name="ten_sp"><br><br>
                                        Ngày nhập <br>
                                        <input type="date" name="ngay_nhap"><br><br>
                                        Mô tả <br>
                                        <input type="text" name="mo_ta"><br><br >
                                        ID Danh mục <br>
                                        <input type="number" name="id_danhmuc" placeholder="ID của danh mục" ><br><br>
                                        Giá tiền <br>
                                          
                                        <input type="text" name="gia_sanpham" placeholder="Nhập giá tiền" ><br><br>
                                        Ảnh <br>
                                        <input type="file" name="img_thumbnail" placeholder="Ảnh"><br><br>
                                        Trạng thái
                                        <input type="number" name="trang_thai" min="0" max="1" placeholder="0: Chưa duyệt. 1:Đã duyệt" ><br><br>
                                        <input type="hidden" name="view" placeholder="View" ><br><br>
                                        <input type="submit" name="themmoi" value="Thêm sản phẩm" class="btn btn-primary"><br><br>
                                    </form>
                                    <a href="index.php?act=sanpham"><input type="button" value="Trở về danh sách" class="btn btn-primary"></a>
                                </thead>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->