
<?php
function insert_adhoadon($id_khachhang,$ngay_dat,$tt,$id_km,$trang_thai,$id,$soluong )
{
    $sql = "INSERT INTO hoa_don VALUES(NULL, '$id_khachhang','$ngay_dat','$tt','$id_km','$trang_thai','$id','$soluong')";
    pdo_execute($sql);
}
?>

<?php
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
?>