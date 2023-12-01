<div class="page-index">
          <div class="container">
            <p>
              Trang chủ - Liên hệ
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
                Liên hệ
              </h5>
              <div class="clearfix">
              </div>
              <div class="map">
                <iframe width="600" height="350" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Vietnam&amp;aq=&amp;sll=14.058324,108.277199&amp;sspn=21.827722,43.286133&amp;ie=UTF8&amp;hq=&amp;hnear=Vietnam&amp;ll=14.058324,108.277199&amp;spn=8.883583,21.643066&amp;t=m&amp;z=6&amp;output=embed">
                </iframe>
              </div>
              <div class="clearfix">
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="contact-infoormation">
                    <h5>
                      Thông tin liên hệ
                    </h5>
                    <p>
                    Bản thân khách hàng là rất quan trọng, anh ta sẽ được theo dõi bởi nhà phát triển ips cing. Điện thoại thông minh dành cho nam giới. Khách hàng rất quan trọng, anh ấy sẽ theo đuổi mình với tư cách là khách hàng. Nhưng sự lên men, sự khôn ngoan của sự mạo hiểm mạo hiểm vào thời điểm đó, hồ là một khối của các thành viên, một nỗi đau hendrerit slase turpi không mi.
                    </p>
                    <ul>
                      <li>
                        <span class="icon">
                          <img src="images/message.png" alt="">
                        </span>
                        <p>
                          contact.flatshop@gmail.com
                          <br>
                          support.flatshop@gmail.com
                        </p>
                      </li>
                      <li>
                        <span class="icon">
                          <img src="images/phone.png" alt="">
                        </span>
                        <p>
                          084. 93 668 2236
                          <br>
                          084. 93 668 6789
                        </p>
                      </li>
                      <li>
                        <span class="icon">
                          <img src="images/address.png" alt="">
                        </span>
                        <p>
                          Cao đẳng FPT POLYTECHNIC
                          <br>
                          Hanoi, Vietnam
                        </p>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="ContactForm">
                    <h5>
                      Để lại lời nhắn cho chúng tôi
                    </h5>
                    <form action="?act=lienhe" method="POST">
                     <?php 
                         if (isset($_SESSION['tai_khoan'])) {
                          extract($_SESSION['tai_khoan']);
                          $trang_thai = 1;
                          echo '   <div class="row">
                          <div class="col-md-12">
                            <label>
                              Lời nhắn của bạn 
                              <strong class="red">
                                *
                              </strong>
                              <input type="hidden" name="trang_thai" value="'.$trang_thai.'">
                              <input type="hidden" name="id_khachhang" value="'.$id_khachhang.'">
                            </label>
                            <textarea class="inputfild" name="noi_dung" rows="8" >
                            </textarea>
                          </div>
                        </div>

                          <input  class="button add-cart" type="submit" name="submitcontact" value="Gửi">
';
                         }
                     ?>
                   
                      
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix">
          </div>
