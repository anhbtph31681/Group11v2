<?php
function addbinhluan($id_khachhang,$id_sanpham, $noi_dung,$diem,$trang_thai)
{
    $sql = "INSERT INTO binh_luan VALUES(NULL, '$id_khachhang','$id_sanpham', '$noi_dung','$diem',NULL , '$trang_thai')";
    pdo_execute($sql);
}?>



<?php
function loadAll_binhluan($id_sanpham=0){
    $sql="select * from binh_luan where 1"; 
    if($id_sanpham>0){
        $sql.=" and id_sanpham ='".$id_sanpham."'";
    }
    $sql.=" order by id_binhluan desc";
    $listsp=pdo_query($sql);
    return $listsp;
}?>