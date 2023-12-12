

<style>
.card{
    width: 100%;
     margin-left:0%%;
}
        
table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #f5f5f5;
}

</style>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Chi tiết hóa đơn</h1>
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
              <form >
                
        <div class="card-body">
        <?php 
    $firstIdHoadon = isset($listhd[0]['id_hoadon']) ? $listhd[0]['id_hoadon'] : null;
    $isIdHoadonDisplayed = false;
    $tong = 0; // Khởi tạo biến tổng thanh toán

    // Hiển thị cột <th> ngoài vòng lặp
    echo '<table>
            <tr>
              <th>ID sản phẩm</th>
              <th>Tên sản phẩm</th>
              <th>Số lượng</th>
              <th>Tổng</th>
            </tr>';

    foreach ($listhd as $hd) {
        extract($hd);
        $tonghdsp = $tong_hd * $soluong;
        $tong += $tonghdsp;

        echo '<div class="form-group">
                <input type="hidden" class="form-control" name="id_cthoadon" value="'.$id_cthoadon.'" readonly>
              </div>';

        if (!$isIdHoadonDisplayed || $id_hoadon != $firstIdHoadon) {
            echo '<div class="form-group">
                    <label for="exampleInputEmail1">Id Hoá đơn</label>
                    <input type="text" class="form-control" name=""  value="'.$id_hoadon.'" readonly>
                  </div>';
            $isIdHoadonDisplayed = true;
        }

        echo '<tr>
                <td>'.$id_sanpham.'</td>
                <td>'.$ten_sp.'</td>
                <td>'.$soluong.'</td>
                <td>'.$tonghdsp.'</td>
              </tr>';
    }

    // Hiển thị tổng thanh toán sau khi vòng lặp kết thúc
    echo '<tr>
            <td colspan="3">Tổng thanh toán:</td>
            <td>'.$tong.' VND</td>
          </tr>';

    // Đóng bảng table
    echo '</table>';
?>



          
          
          
        </div>
        <!-- /.card-body -->
        
        <div class="">
        <a href="index.php?act=qlhoadon"><input type="button" value="Trở về danh sách" class="btn btn-primary"></a>
          
        </div>
      </form>
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
  
