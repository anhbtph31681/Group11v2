<?php
    // include "../pdo.php";
    
 ?>
<?php
// hàm load tất cả bv
function loadAll_danh_muc()
{
    $sql = "SELECT * FROM danhmuc_sp order by id_danhmuc desc";
    $list = pdo_query($sql);
    return $list;
}
// lấy 1 hóa đơn theo id
function loadOne_danh_muc($id_danhmuc)
{
    $sql = "SELECT * FROM danhmuc_sp where id_danhmuc='$id_danhmuc' ";
    $listOne = pdo_query_one($sql);
    return $listOne;
}
function update_danh_muc($id_danhmuc, $tendanhmuc,$trangthai)
{
    $sql = "UPDATE danhmuc_sp SET ten_danh_muc = '$tendanhmuc', trang_thai = '$trangthai' Where id_danhmuc ='$id_danhmuc'";
    pdo_execute($sql);
}
function delete_danh_muc($id_danhmuc){
    $sql = "DELETE FROM danhmuc_sp Where id_danhmuc ='$id_danhmuc'";
    pdo_execute($sql);
}
// thêm bài viết
function insert_danh_muc($tendanhmuc,$trangthai)
{
    
    $sql = "INSERT INTO danhmuc_sp (ten_danh_muc, trang_thai) VALUES ( '$tendanhmuc' , '$trangthai')";
    pdo_execute($sql);
}