<style>
.ihihi{
  color: black;
  background-color: pink;
  border-radius: 3px;
  border:1px solid hotpink;
}
.ihihi:hover{
  transition: all 0,5s;
}
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý người dùng</h1>
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
                <h3 class="card-title">Danh sách người dùng</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Họ tên </th>
                    <th>Tên đăng nhập</th>
                    <th>Mật khẩu</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>Số điện thoại</th>
                    <th>Ngày sinh</th>
                    <th>Chức vụ</th>
                    <th>
                      
                    </th>
                  </tr>
                  </thead>
                  <?php
                  foreach ($list_nguoi_dung as $list) {
                    // var_dump($list);die;
                    extract($list);
                    if($chuc_vu == 0){
                      $chuc_vu = "Clients";
                    }else{
                      $chuc_vu = "Admins";
                    }
                    // $suabv = "index.php?act=suabv&id_khachhang=" . $id_khachhang; //tu sua cai duong dan theo y minh nhe
                    $xoand = "index.php?act=xoand&id_khachhang=" . $id_khachhang;
                    echo '<tr>
                    <td>' . $id_khachhang . '</td>
                    <td>' . $ho_ten . '</td>
                    <td>' . $ten_dang_nhap. '</td>
                    <td>' . $mat_khau . '</td>
                    <td>' . $email . '</td>
                    <td>' . $dia_chi . '</td>
                    <td>' . $sdt . '</td>
                    <td>' . $ngay_sinh . '</td>
                    <td>' . $chuc_vu . '</td>
                    <td>
                    <a href="' . $xoand . '" ><input type="button" class="ihihi" value="Xóa"></a>
                    </td>
                </tr>';
                  }
                  // sua noi dung xoa noi dung la gi day ?sua nguoi dung ma
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
  


