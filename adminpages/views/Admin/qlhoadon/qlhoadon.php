
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý hóa đơn</h1>
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
                    <th>ID khách hàng</th>
                    <th>Ngày đặt</th>
                    <th>Tổng hóa đơn</th>
                    <th>ID khuyến mãi</th>
                    <th>Trạng thái</th>
                    <th>
                    <a href="index.php?act=addhd"><button name="add">THÊM MỚI</button></a>
                    </th>
                  </tr>
                  

                  </thead>

                  <?php
                  foreach ($hoadon as $kq) {
                    extract($kq);
                    if($trang_thai == 0){
                      $trang_thai = "Chưa duyệt";
                    }else{
                      $trang_thai = "Đã duyệt";
                    }
                    $suahd = "index.php?act=suahd&id=" . $id;
                    $xoahd = "index.php?act=xoahd&id=" . $id;
                    echo '<tr>
                    <td>' . $id . '</td>
                    <td>' . $id_khachhang. '</td>
                    <td>' . $ngay_dat. '</td>
                    <td>' . $tong_hoa_don . '</td>
                    <td>' . $id_km . '</td>
                    <td>' . $trang_thai . '</td>
                    <td>
                    <a href="'.$suahd.'"><input type="button" class="button" value="Sửa"></a>  
                    <a href=""><input type="button" class="button" value="Xóa"></a>
                    </td>
                </tr>';
                  }
                  ?>

              
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
  
