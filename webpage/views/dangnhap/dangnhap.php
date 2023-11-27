<?php
    session_start();
    ob_start();
    include "../../model/pdo.php";
    include "../../model/user/user.php";
    if((isset($_POST['dangnhap']))&&($_POST['dangnhap'])){
      $ten_dang_nhap = $_POST['ten_dang_nhap'];
      $mat_khau = $_POST['mat_khau'];
      $chuc_vu = checkuser($ten_dang_nhap,$mat_khau);
      $_SESSION['chuc_vu'] = $chuc_vu;
      if($chuc_vu == 1) header('location: index.php');
      else header('location: dangnhap.php'); 
    }
?>
<div class="page-index">
          <div class="container">
            <p>
              Home - CheckOut
            </p>
          </div>
        </div>
      </div>
      <div class="clearfix">
      </div>
      <div class="container_fullwidth">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
       
              <div class="product-tag leftbar">
                <h3 class="title">
                  <strong>Hướng dẫn </strong>
                  <div style="margin-top:25px;">
                  <div style="margin-top:0px;">
                    <a href=""><p>Hướng dẫn đăng ký</p></a>
                  </div>
                  <div style="margin-top:0px;">
                    <a href=""><p>Hướng dẫn lấy lại mật khẩu</p></a>
                  </div>
                  <div style="margin-top:0px;">
                    <a href=""><p>Hướng dẫn đổi mật khẩu</p></a>
                  </div>
                  <div style="margin-top:0px;">
                    <a href=""><p>Hướng dẫn cập nhập tài khoản</p></a>
                  </div>
                  <div style="margin-top:0px;">
                    <a href="?act=lienhe"><p>Liên hệ với chúng tôi</p></a>
                  </div>
                  </div>

              </div>
              <div class="get-newsletter leftbar">
                <h3 class="title">
                  
                  <strong>
                    Để lại email của bạn
                  </strong>
                </h3>
                <p>
                  Chúng tôi sẽ hỗ trợ bạn thông qua email bạn để lại.
                </p>
                <form>
                  <input class="email" type="text" name="" placeholder="Email">
                  <input class="submit" type="submit" value="Gửi">
                </form>
              </div>

            </div>
            <div class="col-md-9">
              <div class="checkout-page">
                <ol class="checkout-steps">
                  <li class="steps active">
                    <a href="checkout.html" class="step-title">
                      Đăng nhập
                    </a>
                    <div class="step-description">
                      <div class="row">
     
                        <div class="col-md-6 col-sm-6">
                          <div class="run-customer">
                            <h5>
                              Thông tin đăng nhập
                            </h5>
                            <form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                <input style="width:360px; " type="text" class="input namefild" name="ten_dang_nhap" placeholder="Tài khoản">
                                <input style="width:360px; margin-top:10px;"  type="text" class="input namefild" name="mat_khau" placeholder="Mật khẩu">
                              <div style="width:100%; margin-top:10px;display:flex;margin-left:70px;" >
                              <button type="submit" name="dangnhap">
                                Đăng nhập
                              </button>
                              <p style=" margin-left:40px;margin-top:10px;">
                                <a href="?act=dangky">
                                  Đăng ký 
                                </a> 
                                <span style="color:#959898;">hoặc</span>
                                <br>
                                <a>lấy lại mật khẩu</a>
                              </p>
                              </div>
                           </form>
                          </div>
                        </div>

                        <div class="col-md-6 col-sm-6">
                          <div class="new-customer">
                            <h5>
                              Thông báo
                            </h5>
                            <label>
                              <span class="input-radio">
                                <input type="radio" name="user" checked>
                              </span>
                              <span class="text">
                              Mở
                              </span>
                            </label>
                            <label>
                              <span class="input-radio">
                                <input type="radio" name="user">
                              </span>
                              <span class="text">
                              Tắt
                              </span>
                            </label>
                            <p >
                            Mở thông báo để bạn có thể nhận được những thông báo mới từ chúng tôi.
                            </p>
                           
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  
                </ol>
              </div>
            </div>
          </div>
          <div class="clearfix">
          </div>
          