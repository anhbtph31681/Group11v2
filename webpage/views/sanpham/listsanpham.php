<ul class="products-listItem">
<?php 
    $sphome1=loadAll_san_pham();
    foreach ($listsp as $sp) {
      extract($sp);
      echo'
        <form action="?act=addcart" method="POST">
          <li class="products">
            <div class="offer">
               New
            </div>
            <div class="thumbnail">
              <a href="?act=ctsanpham&id_sanpham='.$id_sanpham.'"><img src="../../adminpages/views/Admin/'.$sp['img_thumbnail'].'" alt="Product Name"></a>
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
                  <input class="button" type="submit" name="addtocart" value="Thêm giỏ hàng">
                    <button class="button compare">
                      <i class="fa fa-exchange"></i>
                    </button>
                    <button class="button favorite">
                      <i class="fa fa-heart-o"></i>
                    </button>
                </div>
              </div>
            </div>
          </li>
          <input class="button" type="hidden" name="id_sanpham" value="'.$sp['id_sanpham'].'">
          <input class="button" type="hidden" name="img_thumbnail" value="'.$sp['img_thumbnail'].'">
          <input class="button" type="hidden" name="ten_sp" value=" '.$sp['ten_sp'].'">
          <input class="button" type="hidden" name="mo_ta" value="'.$sp['mo_ta'].'">
          <input class="button" type="hidden" name="gia_sanpham" value="'.$sp['gia_sanpham'].'">
        </form>';
}?>
                 