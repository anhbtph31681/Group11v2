
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý bài viết</h1>
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
               
                <tr>
                  <thead>
                    <th>ID</th>
                    <th>TIÊU ĐỀ</th>
                    <th>NỘI DUNG</th>
                    <th>NGÀY ĐĂNG</th>
                    <th>TRẠNG THÁI</th>
                    <th><a href="index.php?act=formaddbv"><button name="add">THÊM MỚI</button></a></th>
                  </thead>
                  <?php
                  foreach ($list_bai_viet as $list) {
                    extract($list);
                    if($trang_thai == 0){
                      $trang_thai = "Chưa duyệt";
                    }else{
                      $trang_thai = "Đã duyệt";
                    }
                    $suabv = "index.php?act=suabv&id_baiviet=" . $id_baiviet;
                    $xoabv = "index.php?act=xoabv&id_baiviet=" . $id_baiviet;
                    echo '<tr>
                    <td>' . $id_baiviet . '</td>
                    <td>' . $tieu_de. '</td>
                    <td>' . $noi_dung . '</td>
                    <td>' . $ngay_dang . '</td>
                    <td>' . $trang_thai . '</td>
                    <td>
                    <a href="' . $suabv . '"><input type="button" class="button" value="Sửa"></a>  
                    <a href="' . $xoabv . '"><input type="button" class="button" value="Xóa"></a>
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
  
