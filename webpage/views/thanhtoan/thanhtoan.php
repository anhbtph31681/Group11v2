<style>
  .boxr{
    width:60%;
  }
  .styled-table {
  width: 100%;
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  font-family: sans-serif;
  border-radius: 5px;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.styled-table  tr th{
  background-color: #009879;
  color: #ffffff;
  text-align: left;
}

.styled-table th,
.styled-table td {
  padding: 12px 15px;
}

.styled-table  tr {
  border-bottom: 1px solid #dddddd;
}




</style>
<div class="clearfix">
    
        </div>
        <div class="page-index">
          <div class="container">
            <p>
              Trang chủ - Thanh toán
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
               Thanh toán
              </h3>
              <div class="clearfix">





              </div>
            
              <div class="clearfix">
              </div>
              <div class="row">
                <div class="col-md-4 col-sm-6">
                  <div class="shippingbox">
                    <h5>
                      Thông tin nhận hàng
                    </h5>
                   <form action="?act=thanhtoan" method="POST">
                        <div>
                        <input style="width:300px;height:30px;border-radius:5px;" type="text" placeholder="Tên người nhận hàng">
                        <input style="width:300px;height:30px;border-radius:5px;" type="text" placeholder="Số điện thoại người nhận">
                        <input style="width:300px;height:30px;border-radius:5px;" type="text" placeholder="Địa chỉ ngưới nhận">
                        <!-- <label for="giaohang">Hình thức giao hàng</label> -->
                        <!-- <select id="luachon" name="luachon">
                        <option value="slow">Giao hàng tiết kiệm</option>
                        <option value="speed">Giao hàng hỏa tốc</option> -->
                        <input style="width:300px;height:30px;border-radius:5px;" type="hidden" placeholder="" cheked>
                        <input style="width:300px;height:30px;border-radius:5px;" type="hidden" placeholder="">
                        </div>
                        <button type="submit">Thanh toán</button>
                    </form>
                  </div>
                </div>
                
                <div class="col-md-4 col-sm-6"  style="width:60%;">
                  <div class="shippingbox">
                    <div class="subtotal">
                      <table class="styled-table">
                        <tr>
                          <th>Tên sản phẩm</th>
                          <th>Gía sản phẩm</th>
                          <th>Số lượng</th>
                          <th>Tổng </th>
                        </tr>
                        
                    <?php
                    if((isset($_SESSION['giohang']))&&(count($_SESSION['giohang'])>0)){
                    $i=1;
                    $tong=0;
                    foreach($_SESSION['giohang'] as $sp){
                    $tt = $sp[4] * $sp[5];
                    $tong +=$tt;
                   
                    echo '  
                    <tr>
                    <td>'.$sp[2].' </td>
                    <td>'.$sp[4].' VND</td>
                    <td>'.$sp[5].' </td>
                    <td>'.$tt.' VND</td>
               
                
                  ';$i++;
                  }
                  echo"
                  
                  </tr>
                  <tr>
                     <td>Tổng thanh toán:</td>
                     <td></td>
                     <td></td>
                     <td>$tong VND</td>
                  </tr>
                  </table>
                  ";
                    
                 }
                 ?> 
                
                    <button>
                      <a href="?act=giohang">Xem lại giỏ hàng</a>
                    </button>

                      
                  </div>
                  
                </div>
              </div>
              
            </div>
          </div>
          <div class="clearfix">
          </div>
         