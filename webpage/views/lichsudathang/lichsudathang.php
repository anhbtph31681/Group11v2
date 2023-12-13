<!-- <script>
    document.addEventListener('DOMContentLoaded', function() {
    // Tìm form theo ID
    var form = document.getElementById('loadsub');

    // Tự động submit form khi trang được load
    form.submit();
});
</script> -->
<div class="clearfix">
</div>
<div class="page-index">
    <div class="container">
        <p>
            Trang chủ - Hóa đơn
        </p>
    </div>
</div>
</div>
<div class="clearfix">
</div>
<div class="container_fullwidth">
    <div class="container shopping-cart">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title">
                    Hóa đơn
                </h3>
                <div class="clearfix">
                </div>
                
                    <table class="shop-table">
                        <tr>
                            <th>
                                STT
                            </th>
                            <th style="width:150px">
                                Mã đơn
                            </th>
                            <th style="width:170px;">
                                Tên người nhận
                            </th>
                            <th>
                                Số điện thoại
                            </th>
                            <th>
                                Địa chỉ nhận 
                            </th>
                            <th>
                                Thanh toán
                            </th>
                            <th>
                                Trạng thái
                            </th>
                            <th>
                                Ngày mua
                            </th>
                            <th>
                                Thao tác
                            </th>
                        </tr>
                        
                       
                            <?php
                                foreach($list_hoadon as $key => $hoadon) {
                                    ?>
                                        <tr>
                                            <td><?= $key + 1 ?></td>
                                            <td style="width:150px"><?= $hoadon['ma_donhang'] ?></td>
                                            <td style="width:170px;"><?= $hoadon['ten_nn'] ?></td>
                                            <td><?= $hoadon['sdt_nn'] ?></td>
                                            <td><?= $hoadon['diachi_nn'] ?></td>
                                            <td><?= $hoadon['hinhthuc_tt'] ?></td>
                                            <td>
                                                <?php
                                                    if($hoadon['trang_thai'] == 0) {
                                                        echo "Chờ xác nhận";
                                                      } else if ($hoadon['trang_thai'] == 1) {
                                                        echo "Đang gói hàng";
                                                    } else if ($hoadon["trang_thai"] == 2) {
                                                        echo "Đơn hàng đang nhập kho";
                                                    } else if ($hoadon["trang_thai"] == 3) {
                                                      echo "Đơn hàng đến đã đến kho";
                                                    }else if ($hoadon["trang_thai"] == 4) {
                                                      echo "Đơn hàng đang giao đến bạn";
                                                    }else if($hoadon["trang_thai"] == 5){ 
                                                      echo'<td>';?>
                                                      <form action="index.php?act=updatehd1" method="POST">
                                                      <input type="hidden" name="id_hoadon" value="<?php echo $hoadon['id_hoadon'] ?>">
                                                      <input type="hidden" name="id_kh" value="<?php echo $hoadon['id_khachhang'] ?>">
                                                      <input type="hidden" name="ma_donhang" value="<?php echo $hoadon['ma_donhang'] ?>">
                                                      <input type="hidden" name="ten_nn" value="<?php echo $hoadon['ten_nn'] ?>">
                                                      <input type="hidden" name="sdt_nn" value="<?php echo $hoadon['sdt_nn'] ?>">
                                                      <input type="hidden" name="diachi_nn" value="<?php echo $hoadon['diachi_nn'] ?>">
                                                      <input type="hidden" name="status" value="6">
                                                      <input type="hidden" name="hinhthuc_tt" value="<?php echo $hoadon['hinhthuc_tt'] ?>">
                                                      <input type="hidden" name="ngay_tao" value="<?php echo $hoadon['ngay_tao'] ?>">
                                                      <input type="submit"  name="sua" value="Đã nhận hàng">
                                                      </form>
                                                    <?php echo'</td>'; 
                                                    }else {
                                                        echo "Hoàn thành";
                                                    }
                                                ?>

                                            </td>
                                            <td style="width:160px;"><?= date('d-m-Y H:i:s', strtotime($hoadon['ngay_tao'])) ?></td>
                                            <td>
                                                <a href="index.php?act=hoadonct&id_hoadon=<?= $hoadon['idOrder'] ?>">Xem</a>
                                            </td>
                                        </tr>
                                    <?php
                                }
                            ?>
                        
            </div>
                <!-- <tr>
                    <td colspan="6">
                        <div style="float:right;background: #fff;padding: 10px 20px; border: 1px solid #cccccc;font-size: 14px;-webkit-border-radius: 10px;border-radius: 10px;outline: none;" class="pull-left">
                            <a href="index.php">Tiếp tục mua hàng</a>
                        </div>


                        <button>
                            <input class=" pull-right" style="border:none;background:#fff;" type="submit" name="themmoi" value="Thanh toán">

                        </button>
                        <button class="pull-right">
                            <a href="?act=delcart">Xóa giỏ hàng</a>
                        </button>
                    </td>
                </tr> -->
            </table>
            
            <div class="clearfix">
            </div>

        </div>
    </div>
    <div class="clearfix">
    </div>