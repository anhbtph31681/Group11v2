
<?php
// hàm load tất cả hóa đơn
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

function suahd($id_hoadon)
{
    $sql = "SELECT * FROM hoa_don where id_hoadon ='$id_hoadon' ";
    $suahd = pdo_query_one($sql);
    return $suahd;
}
function updatehd($id_hoadon, $idkh, $id_sanpham , $ngaydat, $tong, $soluong , $makm, $status)
{
    $sql = "UPDATE hoa_don SET id_khachhang = '$idkh', id_sanpham = '$id_sanpham', ngay_dat = '$ngaydat', gia_sanpham = '$tong',soluong = '$soluong' ,id_km = '$makm', trang_thai = '$status' Where id_hoadon ='$id_hoadon'";
    pdo_execute($sql);
}
function delete_hoa_don($id_hoadon){
    $sql = "DELETE FROM hoa_don Where id_hoadon ='$id_hoadon'";
    pdo_execute($sql);
}

function update_hoa_don($id_hoadon, $id_khachhang,$id_sanpham, $ngay_dat, $gia_sanpham,$soluong, $id_km, $trang_thai)
{
    $sql = "INSERT INTO hoa_don VALUES(NULL, '$id_hoadon', '$id_khachhang','$id_sanpham', '$ngay_dat', '$gi_sanpham','$soluong', '$id_km', '$trang_thai')";
    pdo_execute($sql);
}