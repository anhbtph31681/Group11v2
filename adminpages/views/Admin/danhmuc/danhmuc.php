
 
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý danh mục</h1>
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
                   <th>TÊN DANH MỤC</th>
                   <th>Trạng thái</th>
                   <th style="text-align:center;"><a href="index.php?act=formadddm"><button name="add">THÊM MỚI</button></a></th>
                 </thead>
                 <?php
                  foreach ($list_danh_muc as $list) {
                    extract($list);
                    if($trang_thai == 0){
                      $trang_thai = "Chưa duyệt";
                    }else{
                      $trang_thai = "Đã duyệt";
                    }
                    $suabv = "index.php?act=suadm&id_danhmuc=" . $id_danhmuc;
                    $xoabv = "index.php?act=xoadm&id_danhmuc=" . $id_danhmuc;
                    echo '<tr>
                    <td>' . $id_danhmuc . '</td>
                    <td>' . $ten_danh_muc. '</td>
                    <td>' . $trang_thai . '</td>
                    <td style="text-align:center;">
                    <a href="'.$suabv.'"><input type="button" class="button" value="Sửa"></a>  
                    <a href="'.$xoabv.'"><input type="button" class="button" value="Xóa"></a>
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
  
