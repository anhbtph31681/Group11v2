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
                  *img{width: 10px;}
                  .bodybv{
                    display:flex;
                    width:100%;
                    border:1px solid #888;
                    padding:10px; 
                    margin-top:10px;
                  }
                  .contentbody{
                    margin-left:20px;
                  }
              </style>
              <?php
                foreach ($dsbv as $bv) {
                extract($bv);
                echo '
                  <form>
                  <div class="bodybv">
                    <div class="baivietnew">
                      <a href="#"><img style="width:350px;" src="../../adminpages/views/Admin/'.$bv['img_thumbnail'].'" alt="Product Name"></a>
                    </div>
                    <div class="contentbody">
                      <h2>'.$tieu_de.'</h2>
                      <p>Ngày đăng:'.$ngay_dang.'</p>
                      <br>
                      <h4>'.$noi_dung.'</h4>
                      </div>
                  </div>
                  </form>';
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