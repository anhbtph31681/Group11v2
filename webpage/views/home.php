
<div class="clearfix"></div>
         <div class="hom-slider">
            <div class="container">
               <div id="sequence">
                  <div class="sequence-prev"><i class="fa fa-angle-left"></i></div>
                  <div class="sequence-next"><i class="fa fa-angle-right"></i></div>
                  <ul class="sequence-canvas">
                     <li class="animate-in">
                        <div class="flat-caption caption1 formLeft delay300 text-center"><span class="suphead">Hội nhập phong cách quốc tế</span></div>
                        <div class="flat-caption caption2 formLeft delay400 text-center">
                           <h1>BỘ SƯU THỜI TRANG Á ÂU</h1>
                        </div>
                        <div class="flat-caption caption3 formLeft delay500 text-center">
                           <p><br></p>
                        </div>
                        <div class="flat-button caption4 formLeft delay600 text-center"><a class="more" href="?act=sanpham">More Details</a></div>
                        <div class="flat-image formBottom delay200" data-duration="5" data-bottom="true"><img src="../dist/images/nen1.png" alt=""></div>
                     </li>
                     <li>
                        <div class="flat-caption caption2 formLeft delay400">
                           <h1>BỘ SƯU TẬP CHO MÙA ĐÔNG</h1>
                        </div>
                        <div class="flat-caption caption3 formLeft delay500">
                           <h2><br></h2>
                        </div>
                        <div class="flat-button caption5 formLeft delay600"><a class="more" href="?act=sanpham">More Details</a></div>
                        <div class="flat-image formBottom delay200" data-bottom="true"><img src="../dist/images/nen2.png" alt=""></div>
                     </li>
                     <li>
                        <div class="flat-caption caption2 formLeft delay400 text-center">
                           <h1>Thời trang mới 2023</h1>
                        </div>
                        <div class="flat-caption caption3 formLeft delay500 text-center">
                           <p><br></p>
                        </div>
                        <div class="flat-button caption4 formLeft delay600 text-center"><a class="more" href="?act=sanpham">More Details</a></div>
                        <div class="flat-image formBottom delay200" data-bottom="true"><img src="../dist/images/nen3.png" alt=""></div>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="promotion-banner">
               <div class="container">
                  <div class="row">
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="promo-box"><img src="../dist/images/banner1.jpg" alt=""></div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="promo-box"><img src="../dist/images/banner2.jpg" alt=""></div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="promo-box"><img src="../dist/images/banner3.jpg" alt=""></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="clearfix"></div>
         
         <div class="container_fullwidth">
            <div class="container">
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
                                    <div class="button_group"><input class="button add-cart" type="submit" name="addtocart" value="Thêm giỏ hàng"><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                                    
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
                           <!-- <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="offer">- %20</div>
                                 <div class="thumbnail"><a href="details.html"><img src="../dist/images/products/small/products-01.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">$451.00</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div> -->
                          
                        </div>
                     </li>
                     <li>
                        <!-- <div class="row">
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="offer">- %20</div>
                                 <div class="thumbnail"><a href="details.html"><img src="../dist/images/products/small/products-01.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">$451.00</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="details.html"><img src="../dist/images/products/small/products-02.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">$451.00</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="offer">New</div>
                                 <div class="thumbnail"><a href="details.html"><img src="../dist/images/products/small/products-03.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">$451.00</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="details.html"><img src="../dist/images/products/small/products-04.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">$451.00</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                        </div> -->
                     </li>
                  </ul>
               </div>
               <div class="clearfix"></div>
               <div class="featured-products">
                  <h3 class="title">Sản phẩm <strong>Mới</strong></h3>
                  <div class="control"><a id="prev_featured" class="prev" href="#">&lt;</a><a id="next_featured" class="next" href="#">&gt;</a></div>
                  <ul id="featured">
                     <li>
                        <div class="row">
                          <?php 
                                 foreach ($sphome1 as $sp) {
                                    extract($sp);
                                    echo '
                                    <form action="?act=addcart" method="POST">
                                    <div class="col-md-3 col-sm-6">
                                    <div class="products">
                                    
                                       <div class="offer">NEW</div>
                                       <div ><a href="?act=ctsanpham&id_sanpham='.$id_sanpham.'"><img style="width:343px;height:316px;" src="../../adminpages/views/Admin/'.$sp['img_thumbnail'].'" alt="Product Name"></a></div>
                                       <div class="productname">'.$sp['ten_sp'].'</div>
                                       <h4 class="price">'.$sp['gia_sanpham'].' VND</h4>
                                       <div class="button_group"><input class="button add-cart" type="submit" name="addtocart" value="Thêm giỏ hàng"><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                                       
                                    </div>
                                 </div>
                                 <input class="button" type="hidden" name="id_sanpham" value="'.$sp['id_sanpham'].'">
                               <input class="button" type="hidden" name="img_thumbnail" value="'.$sp['img_thumbnail'].'">
                               <input class="button" type="hidden" name="ten_sp" value=" '.$sp['ten_sp'].'">
                               <input class="button" type="hidden" name="mo_ta" value="'.$sp['mo_ta'].'">
                               <input class="button" type="hidden" name="gia_sanpham" value="'.$sp['gia_sanpham'].'">
                                 </form>';
                                  }
                          ?>
                           
                           
                        </div>
                     </li>
                     <li>
                        <!-- <div class="row">
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="details.html"><img src="../dist/images/products/small/products-01.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">$451.00</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Thêm giỏ hàng</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="details.html"><img src="../dist/images/products/small/products-02.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">$451.00</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Thêm giỏ hàng</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="details.html"><img src="../dist/images/products/small/products-03.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">$451.00</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Thêm giỏ hàng</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="details.html"><img src="../dist/images/products/small/products-04.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">$451.00</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Thêm giỏ hàng</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                        </div> -->
                     </li>
                  </ul>
               </div>
               <div class="clearfix"></div>