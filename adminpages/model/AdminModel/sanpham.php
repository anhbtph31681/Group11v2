<?php
// Include your PDO functions or database connection file if not included
// include "../pdo.php";

// Function to load all products
function loadAll_san_pham()
{
    $sql = "SELECT * FROM sanpham ORDER BY id_sanpham DESC";
    $list = pdo_query($sql);
    return $list;
}

// Function to load a single product by IDid_danh_muc
function loadOne_san_pham($id_sanpham)
{
    $sql = "SELECT * FROM sanpham WHERE id_sanpham='$id_sanpham'";
    $listOne = pdo_query_one($sql);
    return $listOne;
}

// Function to update a product
function update_san_pham($id_sanpham, $ten_sp, $ngay_nhap, $mo_ta, $id_danhmuc, $img_thumbnail, $gia_sanpham, $trang_thai,$view)
{
    $sql = "UPDATE sanpham SET ten_sp = '$ten_sp', ngay_nhap = '$ngay_nhap', mo_ta = '$mo_ta', id_danhmuc = '$id_danhmuc', img_thumbnail = '$img_thumbnail',trang_thai = '$trang_thai', gia_sanpham = '$gia_sanpham',view = '$view'  WHERE id_sanpham ='$id_sanpham'";
    pdo_execute($sql);
}

// Function to delete a product
function delete_san_pham($id_sanpham)
{
    $sql = "DELETE FROM sanpham WHERE id_sanpham ='$id_sanpham'";
    pdo_execute($sql);
}

// Function to insert a new product
function insert_san_pham($ten_sp, $ngay_nhap, $mo_ta, $id_danhmuc, $img_thumbnail, $trang_thai, $gia_sanpham,$view)
{
 

    // Now, you can insert $imgPath into your database along with other data
    $sql = "INSERT INTO sanpham VALUES(NULL, '$ten_sp', '$ngay_nhap', '$mo_ta', '$id_danhmuc', '$img_thumbnail', '$trang_thai', '$gia_sanpham','$view')";

    pdo_execute($sql);
    
}