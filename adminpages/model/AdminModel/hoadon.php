
<?php
// hàm load tất cả hóa đơn
function getall_hoadon()
{
    $sql = "SELECT * FROM hoa_don order by id desc";
    $kq = pdo_query($sql);
    return $kq;
}

function suahd($id)
{
    $sql = "SELECT * FROM hoa_don where id='$id' ";
    $suahd = pdo_query_one($sql);
    return $suahd;
}
function updatehd($id, $idkh, $ngaydat, $tong, $makm, $status)
{
    $sql = "UPDATE hoa_don SET id_khachhang = '$idkh', ngay_dat = '$ngaydat', tong_hoa_don = '$tong', id_km = '$makm', trang_thai = '$status' Where id ='$id'";
    pdo_execute($sql);
}
// function delete_hoa_don($id){
//     $sql = "DELETE FROM hoa_don Where id ='$id'";
//     pdo_execute($sql);
// }

function update_hoa_don($id, $id_khachhang, $ngay_dat, $tong_hoa_don, $id_km, $trang_thai)
{
    $sql = "INSERT INTO hoa_don VALUES(NULL, '$id', '$id_khachhang', '$ngay_dat', '$tong_hoa_don', '$id_km', '$trang_thai')";
    pdo_execute($sql);
}