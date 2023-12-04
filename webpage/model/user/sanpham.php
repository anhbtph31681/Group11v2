<!-- <?php
// hàm load tất cả bv
// function loadAll_san_pham()
// {   
//     $conn = pdo_get_connection();
   
//         $sql = "SELECT * FROM sanpham ORDER BY id_sanpham DESC";
    
    
//     $stmt = $conn->prepare($sql);
//     $stmt->execute();
//     // $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
//     $list = $stmt->fetchAll();
//     $conn = null; 
    
//     return $list;
// }?> -->

<?php
// hàm load tất cả bv
function loadAll_hot()
{   
    $conn = pdo_get_connection();
    $sql = "SELECT * FROM sanpham ORDER BY view DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    // $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    $list = $stmt->fetchAll();
    $conn = null; 
    
    return $list;
}?>




<?php
function loadone_sanpham($id_sanpham)
{
    $sql = "SELECT * FROM sanpham WHERE id_sanpham='$id_sanpham'";
    $listOne = pdo_query_one($sql);
    return $listOne;
}?>

<?php
// hàm load tất cả bv
function loadAll_san_pham($kyw="",$id_danhmuc=0){
    $sql="select * from sanpham where 1"; 
    if($kyw!=""){
        $sql.=" and ten_sp like '%".$kyw."%'";
    }
    if($id_danhmuc>0){
        $sql.=" and id_danhmuc ='".$id_danhmuc."'";
    }
    $sql.=" order by id_sanpham desc";
    $listsp=pdo_query($sql);
    return $listsp;
}?>
