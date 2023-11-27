<?php
    include "../model/pdo.php"; 
    include "../model/user/danhmuc.php";
    include "../model/user/dangky.php";
    include "../model/user/dangnhap.php";
    session_start();
    ob_start();
    $list_danh_muc = loadAll_danh_muc();
    include "header.php";
    if (isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act){
            case 'giohang':
                include "giohang/giohang.php";
                break;         
             case 'lienhe':
                include "lienhe/lienhe.php";
                break;   
            case 'ctsanpham':
                include "ctsanpham/ctsanpham.php";
                break; 
            case 'sanpham':
                $list_danh_muc = loadAll_danh_muc();
                include "sanpham/sanpham.php";
                break; 


            case 'dangnhap':
                    if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                        $user = $_POST['ten_dang_nhap'];
                        $password = $_POST['mat_khau'];
                        $checkuser = check_user($user, $password);
                        if (is_array($checkuser)) {
                            $_SESSION['tai_khoan'] = $checkuser;
                            $thongbao = 'đăng nhập thành công';
                            header('Location:  index.php');
                        } else {
                            echo $thongbao = '<script>alert("Tài khoản không tồn tại ");</script>';
                            include "dangnhap/dangnhap.php";
                            
                        }
                    }
                    // include "dangnhap/dangnhap.php";
                    break; 
                case 'formdn':
                    include "dangnhap/dangnhap.php";
                    break;
                //  case 'lienhe':
                //     include "lienhe/lienhe.php";
                //     break;   
                // case 'ctsanpham':
                //     include "ctsanpham/ctsanpham.php";
                //     break; 
                // case 'sanpham':
                //     $list_danh_muc = loadAll_danh_muc();
                //     include "sanpham/sanpham.php";
                //     break; 
        case 'dangky':
                if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                    $ten_dang_nhap = $_POST['username'];
                    $mat_khau = $_POST['password'];
                    $ho_ten = $_POST['name'];
                    $ngay_sinh = $_POST['ngaysinh'];
                    $sdt = $_POST['sdt'];
                    $email = $_POST['email'];
                    $diachi = $_POST['diachi'];
                    insert_nguoidung($ten_dang_nhap, $mat_khau, $ho_ten, $ngay_sinh, $sdt, $email, $diachi);
                    $thongbao = '<script>alert("Đăng ký tài khoản thành công");</script>';
                }
               
                include "dangnhap/dangnhap.php";
                $thongbao = '<script>alert("Đăng ký tài khoản thành công");</script>';
                break;
        case 'formdk':
                include "dangky/dangky.php";
                break;
        case 'thoat':
            session_unset();
                header('Location: index.php');
                break;
        }
        }
      
            
        else{
            
            include "home.php";
        }
        include "brand.php"; 
        include "footer.php";
?>