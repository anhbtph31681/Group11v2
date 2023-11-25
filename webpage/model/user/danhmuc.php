
<?php
// hàm load tất cả bv
function loadAll_danh_muc()
{   
    $conn = pdo_get_connection();
    $sql = "SELECT * FROM danhmuc_sp ORDER BY id_danhmuc DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    $list = $stmt->fetchAll();
    $conn = null; 
    
    return $list;
}?>
