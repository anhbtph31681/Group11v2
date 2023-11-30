<!-- <script>
    document.addEventListener('DOMContentLoaded', function() {
    // Tìm form theo ID
    var form = document.getElementById('loadsub');

    // Tự động submit form khi trang được load
    form.submit();
});
</script> -->
<div class="clearfix">
        </div>
        <div class="page-index">
          <div class="container">
            <p>
              Trang chủ - Giỏ hàng
            </p>
          </div>
        </div>
      </div>
      <div class="clearfix">
      </div>
      <div class="container_fullwidth">
        <div class="container shopping-cart">
          <div class="row">
            <div class="col-md-12">     
              <h3 class="title">
               Giỏ hàng
              </h3>
              <div class="clearfix">





              </div>
              <form id="loadsub" action="?act=addttadmin" method="POST">
              <table  class="shop-table">
                  <tr>
                  <th>
                      STT
                    </th>
                    <th>
                    Tên - Mô tả
                    </th>
                    <th>
                      Ảnh
                    </th>
                    <th>
                      Price
                    </th>
                    <th>
                      số lượng
                    </th>
                    
                    <th>
                      Delete
                    </th>
                  </tr>
               
                <?php
                  
                  if((isset($_SESSION['giohang']))&&(count($_SESSION['giohang'])>0)){
                    $i=1;
                    $t=0;
                    $tong=0;
                    if (isset($_SESSION['tai_khoan'])) {
                      extract($_SESSION['tai_khoan']);
                  foreach($_SESSION['giohang'] as $sp){
                    $tt = $sp[4] * $sp[5];
                    $tong +=$tt;
                    $ngay_dat = date("Y-m-d H:i:s");
                    $id_km = 1;
                    $trang_thai = 0;
                    
                    echo '  
                    <tr>
                    <td>
                      '.$i.'
                    </td>
                    <td>
                        <div class="shop-details">
                        <div style="font-size:20px;font-weight:bold;" class="productname">
                              '. $sp[2].'
                        </div>
                        <p>
                            '. $sp[3].'
                        </p>
            
                        </div>
                    </td>
                    <td>
                   
                      <img src="../../adminpages/views/Admin/'.$sp[1].'" alt="">
                    </td>
                    <td>
                      
                        '.$sp[4].'
                      
                    </td>
                    <td>
                        '.$sp[5].'
                    </td>
                  
                    <td>
                      <a href="?act=xoaspgh&idsp='.$t.'">
                        <img src="../dist/images/remove.png" alt="">
                      </a>
                    </td>
                    
                  </tr>
                <tr>
                </tr>
                   <input class="button" type="hidden" name="id_khachhang" value="'.$id_khachhang.'">
                   <input class="button" type="hidden" name="id_sanpham" value="'.$sp[0].'">
                   <input class="button" type="hidden" name="ngay_dat" value="'.$ngay_dat.'">
                   <input class="button" type="hidden" name="gia_sanpham" value="'.$sp[4].'">
                   <input class="button" type="hidden" name="tong_hoa_don" value="'.$tt.'">
                   <input class="button" type="hidden" name="soluong" value="'.$sp[5].'">
                   <input class="button" type="hidden" name="id_km" value="'.$id_km.'">
                   <input class="button" type="hidden" name="trang_thai" value="'.$trang_thai.'">
                   <br>
                   
                  ';
                  
                  $i++;
                  
                  }
               
                }else{}
                  echo '<p style="font-size:20px;margin-top:5px;">Tổng đơn hàng:<strong> '. $tong .' VND</strong> </p>';
                  }
                  
                ?>
              
                </div>
                  <tr>
                    <td colspan="6">
                    <button class="pull-left">
                        <a href="index.php" >Tiếp tục mua hàng</a>
                      </button>

                    
                      <button>
                      <input class=" pull-right" style="border:none;background:#fff;" type="submit" name="themmoi" value="Thanh toán">
                    
                      </button>
                      <button class="pull-right">
                        <a href="?act=delcart" >Xóa giỏ hàng</a>
                      </button>
                    </td>
                  </tr>
              </table>
              </form>
              <div class="clearfix">
              </div>
           
            </div>
          </div>
          <div class="clearfix">
          </div>