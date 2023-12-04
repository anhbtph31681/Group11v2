
<?php
    // function insert_adhoadon($id_khachhang,$ngay_dat,$tt,$id_km,$trang_thai,$id,$soluong )
    // {
    //     $sql = "INSERT INTO hoa_don VALUES(NULL, '$id_khachhang','$ngay_dat','$tt','$id_km','$trang_thai','$id','$soluong')";
    //     pdo_execute($sql);
    // }

    function getall_hoadon()
    {
        $sql = "SELECT hoa_don.*, nguoi_dung.*, sanpham.*
        FROM hoa_don
        JOIN nguoi_dung ON hoa_don.id_khachhang = nguoi_dung.id_khachhang
        JOIN sanpham ON hoa_don.id_sanpham = sanpham.id_sanpham
         order by id_hoadon desc";
        $kq = pdo_query($sql);
        return $kq;
    }

    function insert_bill($id_khachhang,$ma_donhang,$ten_nn,$sdt_nn,$diachi_nn,$hinhthuc_tt) {
        $sql = "INSERT INTO `hoa_don`(`id_khachhang`, `ma_donhang`, `ten_nn`, `sdt_nn`, `diachi_nn`,`hinhthuc_tt`) 
                VALUES 
                (?,?,?,?,?,?)";
        return pdo_execute_return_lastInsertID($sql,$id_khachhang,$ma_donhang,$ten_nn,$sdt_nn,$diachi_nn,$hinhthuc_tt);
    }

    function insert_bill_detail($id_hoadon,$id_sanpham,$soluong,$tong_hd) {
        $sql = "INSERT INTO `chi_tiet_hoa_don`(`id_hoadon`, `id_sanpham`, `soluong`, `tong_hd`) 
                VALUES 
                (?,?,?,?)";
        pdo_execute($sql,$id_hoadon,$id_sanpham,$soluong,$tong_hd);
    }
?>

