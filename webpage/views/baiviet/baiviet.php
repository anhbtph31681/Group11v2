  <div class="page-index">
          <div class="container">
            <p>
              Trang chủ - Bài viết
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
                Bài viết
              </h5>
              <div class="clearfix">
              </div>
             
                      
              <style>
                    *img{width: 30%;}
                </style>
                <?php
                            foreach ($dsbv as $bv) {
                                extract($bv);
                                echo '
                                <form style="margin-left: 200px;color:black;">
                                <div ><a href="#"><img style="width:343px;height:316px;" src="../../adminpages/views/Admin/'.$bv['img_thumbnail'].'" alt="Product Name"></a></div>
                                    <h2>'.$tieu_de.'</h2>
                                        
                                            <p>Ngày đăng:'.$ngay_dang.'</p>
                                            <br>
                                            <h4>Nội dung:</h4>
                                            <h4>'.$noi_dung.'</h4>
                                            </form>
                                ';
                            }
                            ?>


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