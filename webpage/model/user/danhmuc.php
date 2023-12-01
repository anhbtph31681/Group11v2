
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

<?php
function load_ten_danhmuc($id_danhmuc)
{
    if ($id_danhmuc > 0) {
        $sql = "SELECT * FROM danhmuc_sp where id_danhmuc = ".$id_danhmuc;
        $list_danh_muc = pdo_query_one($sql);
        extract($list_danh_muc);
        return $ten_danh_muc;
    } else {
        return '';
    }
}
?>