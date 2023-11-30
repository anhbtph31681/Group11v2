<?php
function check_user($user, $password){
    $sql = "SELECT * FROM nguoi_dung Where ten_dang_nhap='$user' AND mat_khau='$password' ";
    $tk = pdo_query_one($sql);
    return $tk;
}
?>

