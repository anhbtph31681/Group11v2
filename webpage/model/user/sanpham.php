<?php
// hàm load tất cả bv
function loadAll_san_pham()
{   
    $conn = pdo_get_connection();
   
        $sql = "SELECT * FROM sanpham ORDER BY id_sanpham DESC";
    
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    // $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    $list = $stmt->fetchAll();
    $conn = null; 
    
    return $list;
}?>

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
t
