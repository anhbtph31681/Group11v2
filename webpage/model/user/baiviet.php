<?php
function loadAll_bai_viet()
{
    $sql = "SELECT * FROM bai_viet order by id_baiviet desc";
    $list = pdo_query($sql);
    return $list;
}
?>