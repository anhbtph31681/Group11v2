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
            Trang chủ - Hóa đơn chi tiết
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
                    Hóa đơn chi tiết
                </h3>
                <div class="clearfix">
                </div>
                <form id="loadsub" action="index.php?act=thanhtoan" method="POST">
                    
                        

                        <?php 
    $firstIdHoadon = isset($list_hoadon_ct[0]['id_hoadon']) ? $list_hoadon_ct[0]['id_hoadon'] : null;
    $isIdHoadonDisplayed = false;
    $tong = 0; // Khởi tạo biến tổng thanh toán

    // Hiển thị cột <th> ngoài vòng lặp
    echo '<table>
            <tr>
              <th>ID sản phẩm</th>
              <th>Ảnh</th>
              <th>Tên sản phẩm</th>
              <th>Số lượng</th>
              <th>Tổng</th>
            </tr>';

    foreach ($list_hoadon_ct as $hd) {
        extract($hd);
        $tonghdsp = $tong_hd * $soluong;
        $tong += $tonghdsp;
        
        echo '<div class="form-group">
                <input type="hidden" class="form-control" name="id_cthoadon" value="'.$id_cthoadon.'" readonly>
              </div>';

        if (!$isIdHoadonDisplayed || $id_hoadon != $firstIdHoadon) {
            echo '<div class="form-group">
                    <label for="exampleInputEmail1">ID Hoá đơn</label>
                    <input type="text" class="form-control" name=""  value="'.$id_hoadon.'" readonly>
                  </div>';
            $isIdHoadonDisplayed = true;
        }

        echo '<tr>
                <td>'.$id_sanpham.'</td>
                <td><img style="width:70px;" src="../../adminpages/views/Admin/'.$img_thumbnail.'"></td>
                <td>'.$ten_sp.'</td>
                <td>'.$soluong.'</td>
                <td>'.$tonghdsp.'</td>
              </tr>';
    }

    // Hiển thị tổng thanh toán sau khi vòng lặp kết thúc
    echo '<tr>
            <td colspan="4">Tổng thanh toán:</td>
            <td>'.$tong.' VND</td>
          </tr>';

    // Đóng bảng table
    echo '</table>';
?>
                        
           
            </form>
            <div class="clearfix">
            </div>

        </div>
    </div>
    <div class="clearfix">
    </div>



    <style>

        
table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

th, td {

    justify-content:center;
    align-items:center;
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #f5f5f5;
}

</style>