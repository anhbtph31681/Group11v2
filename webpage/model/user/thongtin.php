<?php
 function loadOne_tt($id_khachhang)
 {
     $sql = "SELECT * FROM nguoi_dung where id_khachhang ='$id_khachhang' ";
     $listOne = pdo_query_one($sql);
     return $listOne;
 }
?>

<?php
    function  update_tt($id_khachhang,$ten_dang_nhap, $ho_ten,$ngay_sinh,$sdt, $email, $dia_chi  )
    {
        $sql = "UPDATE nguoi_dung SET id_khachhang = '$id_khachhang',ten_dang_nhap = '$ten_dang_nhap', ho_ten = '$ho_ten',ngay_sinh = '$ngay_sinh',sdt = '$sdt',  email = '$email',dia_chi = '$dia_chi'    Where id_khachhang ='$id_khachhang'";
        pdo_execute($sql);
    }
?>

<?php 
    function loadAll_tt()
    {
        $sql = "SELECT * FROM nguoi_dung order by id_khachhang desc";
        $list = pdo_query($sql);
        return $list;
    }
?>