
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý bình luận</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
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
              <div class="card-header">
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nội dung</th>
                    <th>ID khách hàng</th>
                    <th>ID sản phẩm</th>
                    <th>Điểm đánh giá</th>
                    <th>Ngày đánh giá</th>
                    <th>Trạng thái</th>
                    <th>
              
                    </th>
                  </tr>
                  

                  </thead>
                  <?php
                  foreach ($list_binh_luan as $list) {
                    extract($list);
                    if($trang_thai == 0){
                      $trang_thai = "Chưa duyệt";
                    }else{
                      $trang_thai = "Đã duyệt";
                    }
                    $xoabl = "index.php?act=xoabl&id_binhluan=" . $id_binhluan;
                    echo '<tr>
                    <td>' . $id_binhluan . '</td>
                    <td>' . $id_khachhang. '</td>
                    <td>' . $id_sanpham . '</td>
                    <td>' . $noi_dung . '</td>
                    <td>' . $diem. '</td>
                    <td>' . $ngay_danh_gia . '</td>
                    <td>' . $trang_thai. '</td>
                    <td>
  
                    <a href="'.$xoabl.'"><input type="button" class="button" value="Xóa"></a>
                    </td>
                </tr>';
                  }
                  ?>
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
  
