//sanpham
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid_sanpham">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Quản lý sản phẩm</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Product Management</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid_sanpham -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid_sanpham">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Product DataTable with minimal features & hover style</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id_sanpham="example2" class="table table-bordered table-hover">

                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>TÊN SẢN PHẨM</th>
                                        <th>NGÀY NHẬP</th>
                                        <th>MÔ TẢ</th>
                                        <th>DANH MỤC</th>
                                        <th>ẢNH</th>
                                        <th>GIÁ TIỀN</th>
                                        <th>TRẠNG THÁI</th>
                                        <th style="text-align:center;"><a href="index.php?act=formaddsp"><button name="add">THÊM MỚI</button></a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($list_san_pham as $product) {

                                        extract($product);
                                        $trang_thai_text = ($trang_thai == 0) ? "Chưa duyệt" : "Đã duyệt";
                                        $sua_sp = "index.php?act=suasp&id_sanpham=" . $id_sanpham;
                                        $xoa_sp = "index.php?act=xoasp&id_sanpham=" . $id_sanpham;
                                        echo '<tr>
                                            <td>' . $id_sanpham . '</td>
                                            <td>' . $ten_sp . '</td>
                                            <td>' . $ngay_nhap . '</td>
                                            <td>' . $mo_ta . '</td>
                                            <td>' . $id_danhmuc . '</td>
                                            <td><img src="' . $img_thumbnail . '" alt="Product Image" style="wid_sanphamth: 50px; height: 50px;"></td>
                                            <td>' .$gia_sanpham. '</td>
                                            
                                            <td>' . $trang_thai_text . '</td>
                                            <td style="text-align:center;">
                                                <a href="' . $sua_sp . '"><input type="button" class="button" value="Sửa"></a>
                                                <a href="' . $xoa_sp . '"><input type="button" class="button" value="Xóa"></a>
                                            </td>
                                        </tr>';
                                    }
                                    ?>
                                </tbody>

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
        <!-- /.container-fluid_sanpham -->

    </section>
    <!-- /.content -->

</div>
<!-- /.content-wrapper -->