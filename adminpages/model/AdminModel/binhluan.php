<?php
    // include "../pdo.php";
    
 ?>
<?php
// hàm load tất cả bv
function loadAll_binh_luan()
{
    $sql = "SELECT * FROM binh_luan order by id desc";
    $list = pdo_query($sql);
    return $list;
}

function delete_binh_luan($id){
    $sql = "DELETE FROM binh_luan Where id ='$id'";
    pdo_execute($sql);
}
