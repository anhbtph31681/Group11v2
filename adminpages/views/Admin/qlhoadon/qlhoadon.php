
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
                    <th>ID Hóa Đơn</th>
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
                    $suahd = "index.php?act=suahd&id_hoadon=" . $id_hoadon;
                    $xoahd = "index.php?act=xoahd&id_hoadon=" . $id_hoadon;
                    $cthd = "index.php?act=htcthoadon&id_hoadon=" . $id_hoadon;
                    echo '<tr>
                    <td>' . $id_hoadon . '</td>
                    <td>' . $id_khachhang. '</td>  
                    <td>' . $ma_donhang. '</td>
                    <td>' . $ten_nn. '</td>
                    <td>' . $sdt_nn. '</td>
                    <td>' . $diachi_nn . '</td>';
                    if($trang_thai==0){
                      echo'<td>';?>
                      <form action="index.php?act=updatehd" method="POST">
                      <input type="hidden" name="id_hoadon" value="<?php echo $id_hoadon ?>">
                      <input type="hidden" name="id_kh" value="<?php echo $id_khachhang ?>">
                      <input type="hidden" name="ma_donhang" value="<?php echo $ma_donhang ?>">
                      <input type="hidden" name="ten_nn" value="<?php echo $ten_nn ?>">
                      <input type="hidden" name="sdt_nn" value="<?php echo $sdt_nn ?>">
                      <input type="hidden" name="diachi_nn" value="<?php echo $diachi_nn ?>">
                      <input type="hidden" name="status" value="1">
                      <input type="hidden" name="hinhthuc_tt" value="<?php echo $hinhthuc_tt ?>">
                      <input type="hidden" name="ngay_tao" value="<?php echo $ngay_tao ?>">
                      <input type="submit"  name="sua" value="Xác nhận">
                      </form>
                     <?php echo'</td>';
                    }else if($trang_thai==1){ 
                      echo'<td>';?>
                      <form action="index.php?act=updatehd" method="POST">
                      <input type="hidden" name="id_hoadon" value="<?php echo $id_hoadon ?>">
                      <input type="hidden" name="id_kh" value="<?php echo $id_khachhang ?>">
                      <input type="hidden" name="ma_donhang" value="<?php echo $ma_donhang ?>">
                      <input type="hidden" name="ten_nn" value="<?php echo $ten_nn ?>">
                      <input type="hidden" name="sdt_nn" value="<?php echo $sdt_nn ?>">
                      <input type="hidden" name="diachi_nn" value="<?php echo $diachi_nn ?>">
                      <input type="hidden" name="status" value="2">
                      <input type="hidden" name="hinhthuc_tt" value="<?php echo $hinhthuc_tt ?>">
                      <input type="hidden" name="ngay_tao" value="<?php echo $ngay_tao ?>">
                      <input type="submit"  name="sua" value="Gói hàng xong">
                      </form>
                    <?php echo'</td>'; 
                    }else if($trang_thai==2){ 
                      echo'<td>';?>
                      <form action="index.php?act=updatehd" method="POST">
                      <input type="hidden" name="id_hoadon" value="<?php echo $id_hoadon ?>">
                      <input type="hidden" name="id_kh" value="<?php echo $id_khachhang ?>">
                      <input type="hidden" name="ma_donhang" value="<?php echo $ma_donhang ?>">
                      <input type="hidden" name="ten_nn" value="<?php echo $ten_nn ?>">
                      <input type="hidden" name="sdt_nn" value="<?php echo $sdt_nn ?>">
                      <input type="hidden" name="diachi_nn" value="<?php echo $diachi_nn ?>">
                      <input type="hidden" name="status" value="3">
                      <input type="hidden" name="hinhthuc_tt" value="<?php echo $hinhthuc_tt ?>">
                      <input type="hidden" name="ngay_tao" value="<?php echo $ngay_tao ?>">
                      <input type="submit"  name="sua" value="Đơn hàng đã nhập kho">
                      </form>
                    <?php echo'</td>'; 
                    }else if($trang_thai==3){ 
                      echo'<td>';?>
                      <form action="index.php?act=updatehd" method="POST">
                      <input type="hidden" name="id_hoadon" value="<?php echo $id_hoadon ?>">
                      <input type="hidden" name="id_kh" value="<?php echo $id_khachhang ?>">
                      <input type="hidden" name="ma_donhang" value="<?php echo $ma_donhang ?>">
                      <input type="hidden" name="ten_nn" value="<?php echo $ten_nn ?>">
                      <input type="hidden" name="sdt_nn" value="<?php echo $sdt_nn ?>">
                      <input type="hidden" name="diachi_nn" value="<?php echo $diachi_nn ?>">
                      <input type="hidden" name="status" value="4">
                      <input type="hidden" name="hinhthuc_tt" value="<?php echo $hinhthuc_tt ?>">
                      <input type="hidden" name="ngay_tao" value="<?php echo $ngay_tao ?>">
                      <input type="submit"  name="sua" value="Đơn hàng đang giao">
                      </form>
                    <?php echo'</td>'; 
                    }else if($trang_thai==4){ 
                      echo'<td>';?>
                      <form action="index.php?act=updatehd" method="POST">
                      <input type="hidden" name="id_hoadon" value="<?php echo $id_hoadon ?>">
                      <input type="hidden" name="id_kh" value="<?php echo $id_khachhang ?>">
                      <input type="hidden" name="ma_donhang" value="<?php echo $ma_donhang ?>">
                      <input type="hidden" name="ten_nn" value="<?php echo $ten_nn ?>">
                      <input type="hidden" name="sdt_nn" value="<?php echo $sdt_nn ?>">
                      <input type="hidden" name="diachi_nn" value="<?php echo $diachi_nn ?>">
                      <input type="hidden" name="status" value="5">
                      <input type="hidden" name="hinhthuc_tt" value="<?php echo $hinhthuc_tt ?>">
                      <input type="hidden" name="ngay_tao" value="<?php echo $ngay_tao ?>">
                      <input type="submit"  name="sua" value="Đơn hàng đã giao đến nơi">
                      </form>
                    <?php echo'</td>'; 
                    }else if($trang_thai==5){ 
                      echo'<td>Đang chờ nhận hàng</td>';
                    }else if($trang_thai==6){ 
                      echo'<td>Giao hàng thành công</td>';
                    }
                    echo'<td>' . $hinhthuc_tt . '</td>
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
  
