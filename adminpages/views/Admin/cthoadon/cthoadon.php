<?php
if(is_array($sua_hd1)){
  extract($sua_hd1);
}

?>

<style>
        .card{
            width: 100%;
            margin-left:0%%;
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
              <form action="" method="">
                
        <div class="card-body">
  
          <div class="form-group">
          <div class="form-group">
            <label for="exampleInputEmail1">Id hóa đơn</label>
            <input type="text" class="form-control" name=""   value="<?php echo $id_hoadon1 ?>" readonly>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Id khách hàng</label>
            <input type="text" class="form-control" name=""  value="<?php echo $id_khachhang ?>" readonly>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Họ tên</label>
            <input type="text" class="form-control" name=""  value="<?php echo $ho_ten ?>" readonly>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Số điện thoại</label>
            <input type="number" class="form-control" name=""  value="<?php echo $sdt ?>" readonly>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="text" class="form-control" name=""  value="<?php echo $email ?>" readonly>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Địa chỉ</label>
            <input type="text" class="form-control" name=""  value="<?php echo $dia_chi ?>" readonly>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Id sản phẩm</label>
            <input type="text" class="form-control" name=""  value="<?php echo $id_sanpham ?>" readonly>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Tên sản phẩm</label>
            <input type="text" class="form-control" name=""  value="<?php echo $ten_sp ?>" readonly>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Mô tả sản phẩm</label>
            <input type="text" class="form-control" name=""  value="<?php echo $mo_ta ?>" readonly>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Giá sản phẩm</label>
            <input type="text" class="form-control" name=""  value="<?php echo $gia_sanpham ?>" readonly>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Số lượng mua</label>
            <input type="text" class="form-control" name=""  value="<?php echo $soluong ?>" readonly>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Khuyến mãi</label>
            <input type="text" class="form-control" name=""  value="<?php echo $phan_tram_km?>%" readonly>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Thanh toán</label>
            <input type="text" class="form-control" name=""  value="<?php $tientt=($gia_sanpham * ((100-$phan_tram_km)/100))*$soluong; echo $tientt?>" readonly>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Trạng thái</label>
            <input type="text" class="form-control" name=""  value="<?php 
                
                  if($trang_thai == 0){
                    $trang_thai = "Chưa thanh toán";
                  }else{
                    $trang_thai = "Đã Thanh toán";
                  }
                
                echo $trang_thai ?>" readonly>
          </div>
         
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
  
