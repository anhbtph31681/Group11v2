<style>
    input {
        width: 100%;
        padding: 20px;
    }
</style> 

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thêm khuyến mãi</h1>
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
                                    <form action="index.php?act=addkm" method="POST">
                                        Phần trăm khuyến mãi <br>
                                        <input type="text" name="phantramkm"><br><br>
                                        Ngày bắt đầu<br>
                                        <input type="date" name="ngaybatdau"><br><br>
                                        Ngày kết thúc<br>
                                        <input type="date" name="ngayketthuc"><br><br>
                                        Trạng thái
                                        <input type="nuimber" name="trangthai" placeholder="0: Ch Duyệt. 1:Duyệt"><br><br>
                                        <input type="submit" name="themmoi" value="Thêm bài viết" class="btn btn-primary"><br><br>
                                    </form>
                                    <a href="index.php?act=khuyenmai"><input type="button" value="Trở về danh sách" class="btn btn-primary"></a>
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