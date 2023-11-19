<?php
    // include "../pdo.php";
    
 ?>
<?php
// hàm load tất cả bv
function loadAll_bai_viet()
{
    $sql = "SELECT * FROM bai_viet order by id desc";
    $list = pdo_query($sql);
    return $list;
}
// lấy 1 hóa đơn theo id
function loadOne_bai_viet($id)
{
    $sql = "SELECT * FROM bai_viet where id='$id' ";
    $listOne = pdo_query_one($sql);
    return $listOne;
}
function update_bai_viet($id, $tieude,$noidung, $ngaydang, $trangthai)
{
    $sql = "UPDATE bai_viet SET tieu_de = '$tieude', noi_dung = '$noidung', ngay_dang = '$ngaydang', trang_thai = '$trangthai' Where id ='$id'";
    pdo_execute($sql);
}
function delete_bai_viet($id){
    $sql = "DELETE FROM bai_viet Where id ='$id'";
    pdo_execute($sql);
}
// thêm bài viết
function insert_bai_viet($tieude, $noidung, $ngaydang, $trangthai)
{
    $sql = "INSERT INTO bai_viet VALUES(NULL, '$tieude', '$noidung', '$ngaydang', '$trangthai')";
    pdo_execute($sql);
}