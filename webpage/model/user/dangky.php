<?php

function insert_nguoidung($ten_dang_nhap, $mat_khau, $ho_ten, $ngay_sinh, $sdt, $email, $diachi){
    $sql = "INSERT INTO nguoi_dung (id_khachhang, ten_dang_nhap, mat_khau, ho_ten, ngay_sinh, sdt, email, dia_chi)
    VALUES(NULL, '$ten_dang_nhap', '$mat_khau', '$ho_ten', '$ngay_sinh', '$sdt', '$email', '$diachi')";
pdo_execute($sql);
}

?>