<?php
function checkuser($ten_dang_nhap,$mat_khau)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM user WHERE ten_dang_nhap = '".$ten_dang_nhap."' AND mat_khau = '".$mat_khau."' ");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchALL();
    return $kq[0]['chuc_vu'];
}
function delete_nguoi_dung($id_khachhang){
    $sql = "DELETE FROM nguoi_dung Where id_khachhang ='$id_khachhang' AND mat_khau = ''";
    pdo_execute($sql);
}
?>