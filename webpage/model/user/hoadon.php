
<?php
// hàm load tất cả hóa đơn
// function getall_hoadon1()
// {
//     $sql = "SELECT * FROM hoa_don order by id_hoadon desc";
//     $kq = pdo_query($sql);
//     return $kq;
// }

function suahd($id_hoadon)
{
    $sql = "SELECT * FROM hoa_don where id_hoadon ='$id_hoadon' ";
    $suahd = pdo_query_one($sql);
    return $suahd;
}
function  updatehd($id_hoadon, $idkh, $ma_donhang, $ten_nn, $sdt_nn,$diachi_nn, $trang_thai, $hinhthuc_tt,$ngay_tao)
{
    $sql = "UPDATE hoa_don SET id_khachhang = '$idkh', ma_donhang = '$ma_donhang', ten_nn = ' $ten_nn', sdt_nn = '$sdt_nn',diachi_nn = '$diachi_nn' ,trang_thai = '$trang_thai', hinhthuc_tt = '$hinhthuc_tt',ngay_tao = '$ngay_tao' Where id_hoadon ='$id_hoadon'";
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