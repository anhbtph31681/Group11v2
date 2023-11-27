<ul class="products-listItem">
<?php
                           foreach ($sphome1 as $sp) {
                              echo'<li class="products">
                              <div class="offer">
                                New
                              </div>
                              <div class="thumbnail">
                                <img src="../dist/images/products/small/'.$sp['img_thumbnail'].'" alt="Product Name">
                              </div>
                              <div class="product-list-description">
                                <div class="productname">
                                '.$sp['ten_sp'].'
                                </div>
                                <p>
                                '.$sp['mo_ta'].'
                                </p>
                                <div class="list_bottom">
                                  <div class="price">
                                    <span class="new_price">
                                    '.$sp['gia_sanpham'].'
                                      <sup>
                                        VND
                                      </sup>
                                    </span>
                                  </div>
                                  <div class="button_group">
                                    <button class="button">
                                      Thêm giỏ hàng
                                    </button>
                                    <button class="button compare">
                                      <i class="fa fa-exchange">
                                      </i>
                                    </button>
                                    <button class="button favorite">
                                      <i class="fa fa-heart-o">
                                      </i>
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </li>';
                           }
                           ?>
                  <!-- <li class="products">
                    <div class="offer">
                      New
                    </div>
                    <div class="thumbnail">
                      <img src="../dist/images/products/small/products-05.png" alt="Product Name">
                    </div>
                    <div class="product-list-description">
                      <div class="productname">
                        Lincoln Corner Unit Products
                      </div>
                      <p>
                        <img src="../dist/images/star.png" alt="">
                        <a href="#" class="review_num">
                          02 Review(s)
                        </a>
                      </p>
                      <p>