<?php
    // include "../pdo.php";
    
 ?>
<?php
// hàm load tất cả bv
function loadAll_lienhe()
{
    $sql = "SELECT nguoi_dung.*, lien_he.*
    FROM nguoi_dung
    INNER JOIN lien_he ON nguoi_dung.id_khachhang = lien_he.id_khachhang
    order by id_lienhe desc";
    $list = pdo_query($sql);
    return $list;
}
function delete_lienhe($id_lienhe){
    $sql = "DELETE FROM lien_he Where id_lienhe ='$id_lienhe'";
    pdo_execute($sql);
}