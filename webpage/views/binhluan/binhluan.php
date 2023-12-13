<div class="tab-box">
                <div id="tabnav">
                  <ul>
                    <li>
                      <a href="#">
                        Bình luận
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="tab-content-wrap">
                  <div style="width:100%;border:1px solid #55CBCD;border-radius:5px;" >
                    <div style="margin:20px 50px;height:70%;" >
                    <?php 
                    foreach ($list_binhluan as $listbl) {
                        extract($listbl);
                        // echo var_dump($listbl);
                        echo'
                        <div style="display:flex;border-bottom:1px solid #FF968A;width:100%;margin-top:10px;">
                        <img style="height:70px;" src="../dist/images/pngtree-user-cartoon-avatar-pattern-flat-avatar-png-image_4492883.jpg" alt="none">
                        <div style="margin:10px 20px;">
                          <p style="font-size:18px;font-weight:bold;">'.$ho_ten.'</p>
                          <p style="font-size:9px;color:#55CBCD;">'.$ngay_danh_gia.'</p>
                          <input type="hidden" value="'.$diem.'">
                        </div>
                        <div>
                          <div style="margin:0px 20px;">';
                          if($diem == 1){
                            echo'<p class="rating">
                            <i class="fa fa-star light-red">
                            </i>
                            </p>';
                          }else if($diem == 2){
                            echo'<p class="rating">
                            <i class="fa fa-star light-red">
                            </i>
                            <i class="fa fa-star light-red">
                            </i>
                            </p>';
                          }else if($diem == 3){
                            echo'<p class="rating">
                            <i class="fa fa-star light-red">
                            </i>
                            <i class="fa fa-star light-red">
                            </i>
                            <i class="fa fa-star light-red">
                            </i>
                            </p>';
                          }else if($diem == 4){
                            echo'<p class="rating">
                            <i class="fa fa-star light-red">
                            </i>
                            <i class="fa fa-star light-red">
                            </i>
                            <i class="fa fa-star light-red">
                            </i>
                            <i class="fa fa-star light-red">
                            </i>
                            </p>';
                          }else{
                            echo'<p class="rating">
                            <i class="fa fa-star light-red">
                            </i>
                            <i class="fa fa-star light-red">
                            </i>
                            <i class="fa fa-star light-red">
                            </i>
                            <i class="fa fa-star light-red">
                            </i>
                            <i class="fa fa-star light-red">
                            </i>
                            </p>';
                          }
                        echo '   <p>'.$noi_dung.'</p>
                          </div>
                        </div>
                      </div>
                        ';
                    }
                    ?>
                    </div>
                    
                    <?php
                    if (isset($_SESSION['tai_khoan'])) {
                          extract($_SESSION['tai_khoan']);
                          // echo var_dump($_SESSION['tai_khoan']);
                          $trang_thai = 1;
                          echo'<form action="?act=binhluan" method="POST">
                          <input type="hidden" name="id_khachhang1" value="'.$id_khachhang.'">
                          <input type="hidden" name="trang_thai1" value="'.$trang_thai.'">
                          <input type="hidden" name="id_sanpham1" value="'.$id_sanpham.'">
                          <div class="hoverrr" style="display:flex;height:30%;margin:20px 50px;">
                            <img style="height:50px;" src="../dist/images/pngtree-user-cartoon-avatar-pattern-flat-avatar-png-image_4492883.jpg" alt="none">
                            <div>
                            <select style="height:50px;width:100px;"  name="diem">
                              <option value="1">★</option>
                              <option value="2">★★</option>
                              <option value="3">★★★</option>
                              <option value="4">★★★★</option>
                              <option value="5" selected>★★★★★</option>
                            </select>
                            <input type="text" name="noi_dung1" placeholder="  Nội dung bình luận ...." style="height:50px;width:500px;border-radius:none;">
                            </div>
                            <input type="submit" name="addbinhluan" value="Nhập" style="width:70px;border-radius:5px;border:none;background:#3498db;color:white;margin-left:10px;">
                          </div>
                          </form>';
                    }
                    ?>
                    
                  </div>
                </div>
              </div>