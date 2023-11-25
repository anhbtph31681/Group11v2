<?php 
    include "header.php";
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
            include "home.php";
        }
    
    // include "home.php"; 
    include "brand.php"; 
    include "footer.php";
?>        