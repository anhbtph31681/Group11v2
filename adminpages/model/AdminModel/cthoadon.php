<?php 
function getall_hoadon1($idhd)
{
    $sql = "SELECT *
    FROM chi_tiet_hoa_don
    INNER JOIN sanpham ON chi_tiet_hoa_don.id_sanpham = sanpham.id_sanpham
    INNER JOIN hoa_don ON chi_tiet_hoa_don.id_hoadon = hoa_don.id_hoadon
    WHERE chi_tiet_hoa_don.id_hoadon ='$idhd' "; 

    $kq = pdo_query_one($sql);
    return $kq;
    
}

// function suahd1($id_hoadon1)
// {
//     $sql = "SELECT hoa_don.*, sanpham.*, khuyen_mai.*, nguoi_dung.*
//     FROM hoa_don
//     INNER JOIN sanpham ON hoa_don.id_sanpham = sanpham.id_sanpham
//     INNER JOIN khuyen_mai ON hoa_don.id_km = khuyen_mai.id_km
//     INNER JOIN nguoi_dung ON hoa_don.id_khachhang = nguoi_dung.id_khachhang
//     Where id_hoadon ='$id_hoadon1'";
//     $suahd1 = pdo_query_one($sql);
//     return $suahd1;
// }
// ?>