<?php
if(is_array($onesp)){
  extract($onesp);
}?>
<div class="page-index">
          <div class="container">
            <p>
              
            </p>
          </div>
        </div>
      </div>
      <div class="clearfix">
      </div>
      <div class="container_fullwidth">
        <div class="container">
          <div class="row">
            <div class="col-md-9">
            <?php
              echo '                         
                <div class="products-details">
                  <form action="?act=addcart" method="POST">
                    <div class="preview_image">
                      <div class="preview-small">
                        <img id="zoom_03" src="../../adminpages/views/Admin/'.$img_thumbnail  .'" data-zoom-image="images/products/Large/products-01.jpg" alt="">
                        </div>
                    </div>
                    <div class="products-description">
                      <h5 class="name">
                        '.$ten_sp.'
                      </h5>
                      <p>
                        <img alt="" src="images/star.png">
                        <a class="review_num" href="#">
                          '.$view.' Lượt xem
                        </a>
                      </p>
                      <p>
                        '.$mo_ta.'
                      </p>
                      <hr class="border">
                      <div class="price">
                        Giá :
                      <span class="new_price">
                        '.$gia_sanpham.'
                        <sup>VND</sup>
                      </span>
                    </div>
                      <hr class="border">
                    <div class="wided">
                      <input class="button" type="hidden" name="id_sanpham" value="'.$id_sanpham.'">
                      <input class="button" type="hidden" name="img_thumbnail" value="'.$img_thumbnail.'">
                      <input class="button" type="hidden" name="ten_sp" value=" '.$ten_sp.'">
                      <input class="button" type="hidden" name="mo_ta" value="'.$mo_ta.'">
                      <input class="button" type="hidden" name="gia_sanpham" value="'.$gia_sanpham.'">
                    <div class="button_group">
                      <input class="button add-cart" type="submit" name="addtocart" value="Thêm giỏ hàng">
                        <button class="button compare">
                          <i class="fa fa-exchange">
                          </i>
                        </button>
                        <button class="button favorite">
                          <i class="fa fa-heart-o">
                          </i>
                        </button>
                          <a href="?act=lienhe" style=""  class="button favorite"> 
                          <i class="fa fa-envelope-o">
                          </i>              
                          </a>
                    </div>
                  </div>
                    <div class="clearfix">
                    </div>
                    <hr class="border">
                    <img src="images/share.png" alt="" class="pull-right">
                  </div>
                  </form>
                </div>';?>
              <div class="clearfix">
              </div>
              <?php include "binhluan/binhluan.php"?>
              <div class="clearfix">
              </div>
              <div class="hot-products">
                  <h3 class="title">Sản phẩm <strong>Hot</strong></h3>
                  <div class="control"><a id="prev_hot" class="prev" href="#">&lt;</a><a id="next_hot" class="next" href="#">&gt;</a></div>
                  <ul id="hot">
                     <li>  
                        <div class="row">
                           <?php 
                               foreach ($sphot as $sph) {
                                 extract($sph);
                                 echo '
                                 <form action="?act=addcart" method="POST">
                                 <div class="col-md-3 col-sm-6">
                                 <div class="products">
                                    <div class="offer">'.$sph['view'].'</div>
                                    <div ><a href="?act=ctsanpham&id_sanpham='.$id_sanpham.'"><img style="width:343px;height:316px;" src="../../adminpages/views/Admin/'.$sph['img_thumbnail'].'" alt="Product Name"></a></div>
                                    <div class="productname">'.$sph['ten_sp'].'</div>
                                    <h4 class="price">'.$sph['gia_sanpham'].' VND</h4>
                                    <div class="button_group"><input class="button add-cart" type="submit" name="addtocart" value="Thêm giỏ hàng"><button class="button compare" ><i class="fa fa-exchange"></i></button><button class="button wishlist" ><i class="fa fa-heart-o"></i></button></div>
                                 </div>
                              </div>
                              <input class="button" type="hidden" name="id_sanpham" value="'.$sph['id_sanpham'].'">
                              <input class="button" type="hidden" name="img_thumbnail" value="'.$sph['img_thumbnail'].'">
                              <input class="button" type="hidden" name="ten_sp" value=" '.$sph['ten_sp'].'">
                              <input class="button" type="hidden" name="mo_ta" value="'.$sph['mo_ta'].'">
                              <input class="button" type="hidden" name="gia_sanpham" value="'.$sph['gia_sanpham'].'">
                              </form>';
                               }
                           ?>  
                        </div>
                     </li>
                     <li>
                     </li>
                  </ul>
               </div>
              <div class="clearfix">
              </div>
            </div>
            <div class="col-md-3">
             
              <div class="clearfix">
              </div>
            
              <div class="clearfix">
              </div>
              <div class="get-newsletter leftbar">
                <h3 class="title">
                  Để lại
                  <strong>
                    Email
                  </strong>
                </h3>
                <p>
                  Chúng tôi sẽ tư vấn cho bạn.
                </p>
                <form>
                  <input class="email" type="text" name="" placeholder="Email của bạn...">
                  <input class="submit" type="submit" value="Submit">
                </form>
              </div>
              <div class="clearfix">
              </div>
              <div class="fbl-box leftbar">
                <h3 class="title">
                  Facebook
                </h3>
                <span class="likebutton">
                  <a href="#">
                    <img src="images/fblike.png" alt="">
                  </a>
                </span>
                <p>
                  12k người thích Flat Shop.
                </p>
                <ul>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                </ul>
                <div class="fbplug">
                  <a href="#">
                    <span>
                      <img src="images/fbicon.png" alt="">
                    </span>
                    Facebook social plugin
                  </a>
                </div>
              </div>
              <div class="clearfix">
              </div>
            </div>
          </div>
          <div class="clearfix">
          </div>
