
<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="images/favicon.png">images
      <title>Welcome to FlatShop</title>
      <link href="../dist/css/bootstrap.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
      <link href="../dist/css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen"/>
      <link href="../dist/css/sequence-looptheme.css" rel="stylesheet" media="all"/>
      <link href="../dist/css/style.css" rel="stylesheet">
      <link href="../dist/css/danhmuc.css" rel="stylesheet">
      <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->
   </head>
   <body id="home">
      <div class="wrapper">
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-md-2 col-sm-2">
                     <div class="logo"><a href="index.php"><img src="../dist/images/logo.png" alt="FlatShop"></a></div>
                  </div>
                  <div class="col-md-10 col-sm-10">
                     <div class="header_top">
                        <div class="row">
                           <div class="col-md-3">
                              <ul class="option_nav">
                                 <li class="dorpdown">
                                    <a href="#">Tiếng việt</a>
                                    <ul class="subnav">
                                       <li><a href="#">English</a></li>
                                    </ul>
                                 </li>
                              </ul>
                           </div>
                           <div class="col-md-6">
                              <ul class="topmenu">
                                 <li><a href="#">Về chúng tôi</a></li>
                                 <li><a href="#">Tin tức</a></li>
                                 <li><a href="#">Dịch vụ</a></li>
                                 <li><a href="#">Tuyển dụng</a></li>
                                 <li><a href="#">Media</a></li>
                                 <li><a href="#">Phương tiện truyền thông</a></li>
                              </ul>
                           </div>
                           <div class="col-md-3">
                              <ul class="usermenu">
                                 <li><a href="?act=dangnhap" class="log">Đăng nhập</a></li>
                                 <li><a href="checkout2.html" class="reg"></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="header_bottom">
                        <ul class="option">
                           <li id="search" class="search">
                              <form><input class="search-submit" type="submit" value=""><input class="search-input" placeholder="Tìm kiếm" type="text" value="" name="search"></form>
                           </li>
                           <li class="option-cart">
                              <a href="?act=giohang" class="cart-icon">cart <span class="cart_no">02</span></a>
                              <ul class="option-cart-item">
                                 <li>
                                    <div class="cart-item">
                                       <div class="image"><img src="../dist/images/products/thum/products-01.png" alt=""></div>
                                       <div class="item-description">
                                          <p class="name">Lincoln chair</p>
                                          <p>Size: <span class="light-red">One size</span><br>Quantity: <span class="light-red">01</span></p>
                                       </div>
                                       <div class="right">
                                          <p class="price">$30.00</p>
                                          <a href="#" class="remove"><img src="../dist/images/remove.png" alt="remove"></a>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="cart-item">
                                       <div class="image"><img src="../dist/images/products/thum/products-02.png" alt=""></div>
                                       <div class="item-description">
                                          <p class="name">Lincoln chair</p>
                                          <p>Size: <span class="light-red">One size</span><br>Quantity: <span class="light-red">01</span></p>
                                       </div>
                                       <div class="right">
                                          <p class="price">$30.00</p>
                                          <a href="#" class="remove"><img src="../dist/images/remove.png" alt="remove"></a>
                                       </div>
                                    </div>
                                 </li>
                                 <li><span class="total">Total <strong>$60.00</strong></span><button class="checkout" onClick="location.href='checkout.html'">CheckOut</button></li>
                              </ul>
                           </li>
                        </ul>
                        <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
                        <div class="navbar-collapse collapse">
                           <ul class="nav navbar-nav">
                              <li class="active dropdown">
                                 <a href="#" style="border:none;" class="dropdown-toggle" data-toggle="dropdown">Trang chủ</a>
                                 <div class="dropdown-menu">
                                    <ul class="mega-menu-links">
                                       <li><a href="index.php">Trang chủ</a></li>
                                       <li><a href="home2.html">home2</a></li>
                                       <li><a href="home3.html">home3</a></li>
                                       <li><a href="productlitst.html">Productlitst</a></li>
                                       <li><a href="productgird.html">Productgird</a></li>
                                       <li><a href="#">Danh mục sản phẩm</a></li>
                                       <li><a href="?act=giohang  ">Giỏ hàng</a></li>
                                       <li><a href="checkout.html">CheckOut</a></li>
                                       <li><a href="checkout2.html">CheckOut2</a></li>
                                       <li><a href="?act=lienhe">Liên hệ</a></li>
                                    </ul>
                                 </div>
                              </li>
                              <li><a href="productgird.html">Khuyến mãi</a></li>
                              <li><a href="productlitst.html">women</a></li>
                              <li class="dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Danh mục</a>
                                 <div class="dropdown-menu mega-menu">
                                    <div class="row">
                                       <div class="col-md-6 col-sm-6">
                                          <ul class="mega-menu-links">
                                          <?php
                                          foreach ($list_danh_muc as $list) {
                                                extract($list);
                                                 echo '<li><a href="?act=sanpham">'. $ten_danh_muc .'</a></li>';
                                          }
                                          ?>
                                          </ul>
                                       </div>
                                       <!-- <div class="col-md-6 col-sm-6">
                                          <ul class="mega-menu-links">
                                             <li><a href="productgird.html">New Collection</a></li>
                                             <li><a href="productgird.html">Shirts & tops</a></li>
                                             <li><a href="productgird.html">Laptop & Brie</a></li>
                                             <li><a href="productgird.html">Dresses</a></li>
                                             <li><a href="productgird.html">Blazers & Jackets</a></li>
                                             <li><a href="productgird.html">Shoulder Bags</a></li>
                                          </ul>
                                       </div> -->
                                    </div>
                                 </div>
                              </li>
                              <li><a href="productgird.html">gift</a></li>
                              <li><a href="productgird.html">kids</a></li>
                              <li><a href="productgird.html">blog</a></li>
                              <li><a href="productgird.html">jewelry</a></li>
                              <li><a href="?act=lienhe">Liên hệ</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="clearfix"></div>
