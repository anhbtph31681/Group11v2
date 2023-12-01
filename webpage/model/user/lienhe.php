<?php
function update_lienhe($id_danhmuc, $tendanhmuc,$trangthai)
{
    $sql = "UPDATE danhmuc_sp SET ten_danh_muc = '$tendanhmuc', trang_thai = '$trangthai' Where id_danhmuc ='$id_danhmuc'";
    pdo_execute($sql);
}
?>


<?php
function submitcontact($id_khachhang, $noi_dung,$trang_thai)
{
    $sql = "INSERT INTO lien_he VALUES(NULL, '$id_khachhang', '$noi_dung', '$trang_thai')";
    pdo_execute($sql);
}