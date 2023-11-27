
<div class="row">
                <?php
                           foreach ($sphome1 as $sp) {
                              echo'<div class="col-md-4 col-sm-6">
                              <div class="products">
                                <div class="thumbnail">
                                  <a href="details.html">
                                    <img src="../dist/images/products/small/'.$sp['img_thumbnail'].'" alt="Product Name">
                                  </a>
                                </div>
                                <div class="productname">
                                '.$sp['ten_sp'].'
                                </div>
                                <h4 class="price">
                                '.$sp['gia_sanpham'].' VND
                                </h4>
                                <div class="button_group">
                                  <button class="button add-cart" type="button">
                                    Thêm giỏ hàng
                                  </button>
                                  <button class="button compare" type="button">
                                    <i class="fa fa-exchange">
                                    </i>
                                  </button>
                                  <button class="button wishlist" type="button">
                                    <i class="fa fa-heart-o">
                                    </i>
                                  </button>
                                </div>
                              </div>
                            </div>';
                           }
                           ?>   
                </div>