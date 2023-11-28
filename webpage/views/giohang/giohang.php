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
              <table class="shop-table">
              
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

                  // echo var_dump($_SESSION['giohang']);
                  if((isset($_SESSION['giohang']))&&(count($_SESSION['giohang'])>0)){
                    $i=1;
                    $tong=0;
                  foreach($_SESSION['giohang'] as $sp){
                    $tt = $sp[4] * $sp[5];
                    $tong +=$tt;
                   
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
                      <a href="">
                        <img src="../dist/images/remove.png" alt="">
                      </a>
                    </td>
                    
                  </tr>
                <tr>
                </tr>
                  ';$i++;
                  
                  }
                  }
                ?>
                   <div >
                  <h6>Tổng đơn hàng:</h6>
                  <p style="font-size:20px;margin-top:5px;"><strong><?php echo "$tong" ?>VND</strong></p>
                </div>
                  <tr>
                    <td colspan="6">
                    <button class="pull-left">
                        <a href="index.php" >Tiếp tục mua hàng</a>
                      </button>
                      <button>
                      <a href="?act=thanhtoan" class=" pull-right">Thanh toán</a>
                      </button>
                      <button class="pull-right">
                        <a href="?act=delcart" >Xóa giỏ hàng</a>
                      </button>
                    </td>
                  </tr>
              </table>
              
              <div class="clearfix">
              </div>
           
            </div>
          </div>
          <div class="clearfix">
          </div>
         