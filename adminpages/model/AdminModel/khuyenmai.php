<?php
    // include "../pdo.php";
    
 ?>
<?php
// hàm load tất cả bv
function loadAll_km()
{
    $sql = "SELECT * FROM khuyen_mai order by id_km desc";
    $list = pdo_query($sql);
    return $list;
}
// lấy 1 hóa đơn theo id
function loadOne_km($id_km)
{
    $sql = "SELECT * FROM khuyen_mai where id_km ='$id_km' ";
    $listOne = pdo_query_one($sql);
    return $listOne;
}
function  update_km($idkm, $phantramkm, $ngaybatdau, $ngayketthuc, $trangthai)
{
    $sql = "UPDATE khuyen_mai SET phan_tram_km = '$phantramkm', ngay_bat_dau = '$ngaybatdau', ngay_ket_thuc = '$ngayketthuc', trang_thai = '$trangthai' Where id_km ='$idkm'";
    pdo_execute($sql);
}
function delete_km($id_km){
    $sql = "DELETE FROM khuyen_mai Where id_km ='$id_km'";
    pdo_execute($sql);
}
// // thêm bài viết
function insert_km($phantramkm, $ngaybatdau, $ngayketthuc, $trangthai)
{
    $sql = "INSERT INTO khuyen_mai VALUES(NULL, '$phantramkm', '$ngaybatdau', '$ngayketthuc', '$trangthai')";
    pdo_execute($sql);
}