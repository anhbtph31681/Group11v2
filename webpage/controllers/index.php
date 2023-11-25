
<?php
    include "../model/user/danhmuc.php";

    if (isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act){
            case 'giohang':
                include "giohang/giohang.php";
                break;  
            case 'dangnhap':
                include "dangnhap/dangnhap.php";
                break;    
            case 'dangky':
                include "dangky/dangky.php";
                break;       
             case 'lienhe':
                include "lienhe/lienhe.php";
                break;   
            case 'ctsanpham':
                include "ctsanpham/ctsanpham.php";
                break; 
            case 'sanpham':
                
                include "sanpham/sanpham.php";
                break; 
        }
      
            
        }else{
            $list_danh_muc = loadAll_danh_muc();
            include "home.php";
        }
?>