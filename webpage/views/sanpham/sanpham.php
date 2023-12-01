

        <div class="page-index">
          <div class="container">
            <p>
              Trang chủ - Tất cả sản phẩm
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
              <div class="category leftbar">
                <h3 class="title">
                  Danh mục
                </h3>
                <ul>
                <?php
                  foreach ($list_danh_muc as $list) {
                    extract($list);
                    echo '<li>
                    <a style="font-weight:bold;" href="?act=sanpham&id_danhmuc='.$id_danhmuc.'">
                        '. $ten_danh_muc .'
                    </a>
                  </li>';
                  }
                  ?>
                </ul>
              </div>
             

              <div class="fbl-box leftbar">
                <h3 class="title">
                  Facebook
                </h3>
                <span class="likebutton">
                  <a href="#">
                    <img src="../dist/images/fblike.png" alt="">
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
                      <img src="../dist/images/fbicon.png" alt="">
                    </span>
                    Facebook social plugin
                  </a>
                </div>
              </div>
              <div class="leftbanner">
                <img src="../dist/images/banner-small-01.png" alt="">
              </div>
            </div>
            <div class="col-md-9">
              <div class="banner">
                <div class="bannerslide" id="bannerslide">
                  <ul class="slides">
                    <li>
                      <a href="#">
                        <img src="../dist/images/banner-01.jpg" alt=""/>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="../dist/images/banner-02.jpg" alt=""/>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="clearfix">
              </div>
              <div class="products-list">
                <div class="toolbar">
                  <div class="sorter">
                    <div class="view-mode">
                      <a href="?act=sanpham
                      " class="list active">
                        List
                      </a>
                      
                    </div>
                    <div class="sort-by">
                      Sort by : 
                      <select name="" >
                        <option value="Default" selected >
                          Default
                        </option>
                        <option value="Name">
                          Name
                        </option>
                        <option value="Price">
                          Price
                        </option>
                      </select>
                    </div>
                    <div class="limiter">
                      Show : 
                      <select name="">
                        <option value="3" selected>
                          3
                        </option>
                        <option value="6">
                          6
                        </option>
                        <option value="9">
                          9
                        </option>
                      </select>
                    </div>
                  </div>
                  <div class="pager">
                    <a href="#" class="prev-page">
                      <i class="fa fa-angle-left">
                      </i>
                    </a>
                    <a href="#" class="active">
                      1
                    </a>
                    <a href="#">
                      2
                    </a>
                    <a href="#">
                      3
                    </a>
                    <a href="#" class="next-page">
                      <i class="fa fa-angle-right">
                      </i>
                    </a>
                  </div>
                </div>
                 



                <?php 
                if (isset($_GET['actt'])){
                  $actt = $_GET['actt'];
                  switch ($actt){
                      case 'girdsanpham':
                          include "girdsanpham.php";
                          break;  
                  }
                
                      
                  }else{
                      include "listsanpham.php";
                  }
                
                ?>


   
                <div class="toolbar">
                  <div class="sorter bottom">
                    <div class="view-mode">
                      <a href="#" class="list active">
                        List
                      </a>
                      
                    
                    </div>
                    <div class="sort-by">
                      Sort by : 
                      <select name="" >
                        <option value="Default" selected>
                          Default
                        </option>
                        <option value="Name">
                          Name
                        </option>
                        <option value="Price">
                          Price
                        </option>
                      </select>
                    </div>
                    <div class="limiter">
                      Show : 
                      <select name="" >
                        <option value="3" selected>
                          3
                        </option>
                        <option value="6">
                          6
                        </option>
                        <option value="9">
                          9
                        </option>
                      </select>
                    </div>
                  </div>
                  <div class="pager">
                    <a href="#" class="prev-page">
                      <i class="fa fa-angle-left">
                      </i>
                    </a>
                    <a href="#" class="active">
                      1
                    </a>
                    <a href="#">
                      2
                    </a>
                    <a href="#">
                      3
                    </a>
                    <a href="#" class="next-page">
                      <i class="fa fa-angle-right">
                      </i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix">
          </div>
