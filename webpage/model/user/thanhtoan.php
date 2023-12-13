
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

<?php


    function load_bill($id_khachhang) {
        $sql = "SELECT
                    hoa_don.id_hoadon as idOrder,
                    hoa_don.id_khachhang,
                    hoa_don.ma_donhang,
                    hoa_don.ten_nn,
                    hoa_don.sdt_nn,
                    hoa_don.diachi_nn,
                    hoa_don.trang_thai,
                    hoa_don.hinhthuc_tt,
                    hoa_don.ngay_tao,
                    chi_tiet_hoa_don.id_cthoadon,
                    chi_tiet_hoa_don.id_hoadon,
                    chi_tiet_hoa_don.id_sanpham,
                    chi_tiet_hoa_don.soluong,
                    chi_tiet_hoa_don.tong_hd
                FROM 
                    `hoa_don`
                JOIN
                    chi_tiet_hoa_don ON hoa_don.id_hoadon = chi_tiet_hoa_don.id_hoadon
                WHERE
                    hoa_don.id_khachhang = ?
                GROUP BY
                    hoa_don.id_hoadon
                ORDER BY hoa_don.id_hoadon DESC
                ";
        return pdo_query($sql,$id_khachhang);
    }


function load_bill_ct($id_hoadon=0){
    $sql="SELECT chi_tiet_hoa_don.*, sanpham.ten_sp , sanpham.img_thumbnail
    FROM chi_tiet_hoa_don
    INNER JOIN sanpham ON chi_tiet_hoa_don.id_sanpham = sanpham.id_sanpham
    WHERE 1"; 
    if($id_hoadon>0){
        $sql.=" and id_hoadon ='".$id_hoadon."'";
    }
    $sql.=" order by id_sanpham desc";
    $listhd=pdo_query($sql);
    return $listhd;

    }
?>