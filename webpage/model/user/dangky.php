<?php

function insert_nguoidung($ten_dang_nhap, $mat_khau, $ho_ten, $ngay_sinh, $sdt, $email, $diachi){
    $sql = "INSERT INTO nguoi_dung (id_khachhang, ten_dang_nhap, mat_khau, ho_ten, ngay_sinh, sdt, email, dia_chi)
    VALUES(NULL, '$ten_dang_nhap', '$mat_khau', '$ho_ten', '$ngay_sinh', '$sdt', '$email', '$diachi')";
pdo_execute($sql);
}

?>
<?php
function check_existing_username( $username) {
    $sql = "SELECT * FROM nguoi_dung Where ten_dang_nhap='$username'  ";
    $tk = pdo_query_one($sql);
    return $tk;
}?>