
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
                    <th>ID Tài khoản đặt hàng</th>
                    <th>Mã đơn hàng</th>
                    <th>Tên người nhận</th>
                    <th>SĐT người nhận</th>
                    <th>Địa chỉ người nhận</th>
                    <th>Trạng thái</th>
                    <th>Thanh toán</th>
                    <th>Ngày đặt</th>
                    <th>
                    
                    </th>
                  </tr>
                  

                  </thead>

                  <?php
                  foreach ($hoadon as $kq) {
                    extract($kq);
                    if($trang_thai == 0){
                      $trang_thai = "Chưa thanh toán";
                    }else{
                      $trang_thai = "Đã Thanh toán";
                    }
                    $suahd = "index.php?act=suahd&id_hoadon=" . $id_hoadon;
                    $xoahd = "index.php?act=xoahd&id_hoadon=" . $id_hoadon;
                    $cthd = "index.php?act=htcthoadon&id_hoadon=" . $id_hoadon;
                    echo '<tr>
                    <td>' . $id_hoadon . '</td>
                    <td>' . $id_khachhang. '</td>  
                    <td>' . $ma_donhang. '</td>
                    <td>' . $ten_nn. '</td>
                    <td>' . $sdt_nn. '</td>
                    <td>' . $diachi_nn . '</td>
                    <td>' . $trang_thai . '</td>
                    <td>' . $hinhthuc_tt . '</td>
                    <td>' . $ngay_tao . '</td>
                    <td >
                    <div style="display:flex;">
                    <a href="'.$suahd.'"><input type="button" class="button" value="Sửa"></a>  
                    <a href="'.$xoahd.'"><input type="button" class="button" value="Xóa"></a>
                    </div>
                    <a  href="'.$cthd.'"><input type="submit"  name="sua" value="Chi tiết"></a>
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
  
