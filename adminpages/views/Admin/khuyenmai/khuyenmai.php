
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý khuyến mãi</h1>
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
                    <th>% giảm giá</th>
                    <th>Ngày bắt đầu</th>
                    <th>Ngày kết thúc</th>
                    <th>Trạng thái</th>
                    <th style="text-align:center;">
                    <a href="index.php?act=formaddkm"> <button type="submit" name="add">Thêm </button> </a>
                    </th>
                  </tr>
                  

                  </thead>
                  <?php
                  foreach ($list_km as $list) {
                    extract($list);
                    if($trang_thai == 0){
                      $trang_thai = "offline";
                    }else{
                      $trang_thai = "online";
                    }
                    $suakm = "index.php?act=suakm&id_km=" . $id_km;
                    $xoakm = "index.php?act=xoakm&id_km=" . $id_km;
                    echo '<tr>
                    <td>' . $id_km . '</td>
                    <td>' . $phan_tram_km. '</td>
                    <td>' . $ngay_bat_dau . '</td>
                    <td>' . $ngay_ket_thuc . '</td>
                    <td>' . $trang_thai . '</td>
                    <td style="text-align:center;">
                    <a href="'.$suakm.'"><input type="button" class="button" value="Sửa"></a>  
                    <a href="' .$xoakm .'"><input type="button" class="button" value="Xóa"></a>
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
  
