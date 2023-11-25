<?php 
    include "header.php";
    if (isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act){
            case 'giohang':
                include "giohang/giohang.php";
                break;        
        }
      
            
        }else{
            include "home.php";
        }
    
    // include "home.php"; 
    include "brand.php"; 
    include "footer.php";
?>        