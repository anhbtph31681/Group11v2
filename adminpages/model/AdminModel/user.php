<?php
function loadAll_nguoi_dung()
{
    $sql = "SELECT * FROM nguoi_dung order by id_khachhang desc";
    $list = pdo_query($sql);
    return $list;
}
function delete_nguoi_dung($id_khachhang){
    $sql = "DELETE FROM nguoi_dung Where id_khachhang ='$id_khachhang'";
    pdo_execute($sql);
}
?>