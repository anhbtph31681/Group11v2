
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý liên hệ</h1>
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
                    <th>Số điện thoại khách hàng</th>
                    <th>Email khách hàng</th>
                    <th>Địa chỉ khách hàng</th>
                    <th>Nội dung liên hệ</th>
                    <th>
                      
                    </th>
                  </tr>
                  

                  </thead>
                  <?php
                  foreach ($list_lienhe as $list) {
                    extract($list);

                    $xoalh = "index.php?act=xoalh&id_lienhe=" . $id_lienhe;
                    echo '<tr>
                    <td>' . $id_lienhe . '</td>
                    <td>' . $id_khachhang .'</td>
                    <td>' . $sdt . '</td>
                    <td>' . $email . '</td>
                    <td>' . $dia_chi . '</td>
                    <td>' . $noi_dung . '</td>
                    <td>

                    <a href="'.$xoalh.'"><input type="button" class="button" value="Xóa"></a>
                    </td>
                </tr>';
                  }
                  ?>
                    </tr>
                  </tbody>
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
  
