<?php
    // include "../pdo.php";
    
 ?>
<?php
// hàm load tất cả bv
function loadAll_binh_luan()
{
    $sql = "SELECT * FROM binh_luan order by id_binhluan desc";
    $list = pdo_query($sql);
    return $list;
}

function delete_binh_luan($id_binhluan){
    $sql = "DELETE FROM binh_luan Where id_binhluan ='$id_binhluan'";
    pdo_execute($sql);
}
