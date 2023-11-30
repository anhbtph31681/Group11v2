<style>
.showtt{
    display:flex;
    width:70%;
    
}

.showtt .ttleft{
    width:20%;

}

.showtt .ttright{
    width:40%;

}


.showtt .item{
    padding:6px;
    background:aqua;
    border-bottom:1px solid black;
    font-size:18px;
}
</style>

<div class="page-index">
          <div class="container">
            <p>
              Trang chủ - Thông tin cá nhân
            </p>
          </div>
        </div>
      </div>
      <div class="clearfix">
      </div>
      <div class="container_fullwidth">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h5 class="title contact-title">
                Thông tin cá nhân
              </h5>
              <div class="clearfix">
              </div>
              <div >
                  <div class="showtt">
                    <div class="ttleft">
                        <div class="item">ID Tài Khoản:</div>
                        <div class="item">Họ Và Tên:</div>
                        <div class="item">Tên Đăng Nhập:</div>
                        <div class="item">Email:</div>
                        <div class="item">Địa Chỉ:</div>
                        <div class="item">Số Điện Thoại:</div>
                        <div class="item">Ngày Sinh:</div>
                    </div>
                    <?php
                    if (isset($_SESSION['tai_khoan'])) {
                        extract($_SESSION['tai_khoan']);
                        $suatt = "index.php?act=suatt&id_khachhang=".$id_khachhang; 
                        echo ' <div class="ttright">
                        <div class="item">'.$id_khachhang.'</div>
                        <div class="item">'.$ho_ten.'</div>
                        <div class="item">'.$ten_dang_nhap.'</div>
                        <div class="item">'.$email.'</div>
                        <div class="item">'.$dia_chi.'</div>
                        <div class="item">'.$sdt.'</div>
                        <div class="item">'.$ngay_sinh.'</div>
                    </div>
                    </div>
                    <div>
                    <a href="'.$suatt.'"><input type="submit" name="sua" value="Cập nhật thông tin"></a>
                    <input type="submit" value="Đổi mật khẩu">
                  </div>
                    ';}
                     else {}?> 
                  
                  
                  
              </div>

              <div class="clearfix">
              </div>
              <div class="row">
               
                <div class="col-md-8">
                  
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix">
          </div>