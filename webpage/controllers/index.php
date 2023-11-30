<?php
    session_start();
    ob_start();
    // if(!isset($_SESSION['giohang']$_SESSION['giohang'])) $_SESSION['giohang']=[];
    include "../model/pdo.php"; 
    include "../model/user/danhmuc.php";
    include "../model/user/dangky.php";
    include "../model/user/dangnhap.php";
    include "../model/user/sanpham.php";
    include "../model/user/thongtin.php";
    include "../model/user/thanhtoan.php";
    $list_danh_muc = loadAll_danh_muc();
    $sphome1=loadAll_san_pham();
    $sphot=loadAll_hot();
    $all_tt = loadAll_tt();
   
    include "header.php";
    if (isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act){
            case 'giohang':
                include "giohang/giohang.php";
                break;    
            case 'xoaspgh':
                if(isset($_GET['idsp']) && ($_GET['idsp']>=0)) {
                    array_splice($_SESSION['giohang'],$_GET['idsp'],1);
                }
                include "giohang/giohang.php";
                break;       
             case 'lienhe':
                include "lienhe/lienhe.php";
                break;   
            case 'ctsanpham':
                if(isset($_GET['id_sanpham'])){
                    $id_sanpham =$_GET['id_sanpham'];
                    $onesp=loadone_sanpham($id_sanpham);// load one thoi k can load all
                }
                
                include "ctsanpham/ctsanpham.php";
                break;  
            case 'sanpham':
                $list_danh_muc = loadAll_danh_muc();
                if(!isset($_GET['id_danhmuc'])){
                    $iddm = 0;
                   
                }else{
                    $iddm = $_GET['id_danhmuc'];
                }
                
                include "sanpham/sanpham.php";
                break;
            case 'ctcanhan':
                include "chitietcanhan/ctcanhan.php";
                break;
            case 'suatt':
                    if (isset($_GET['id_baiviet'])) {
                        $id_khachhang = $_GET['id_khachhang'];
                        $one_tt = loadOne_tt($id_khachhang);
                    }
                include "chitietcanhan/suatt.php";
                break;
            case 'updatett';
                    if (isset($_POST["sua"]) && ($_POST["sua"])) {
                        $id_khachhang = $_POST['id_khachhang'];
                        $ten_dang_nhap = $_POST['ten_dang_nhap'];
                        $ho_ten = $_POST['ho_ten'];
                        $ngay_sinh = $_POST['ngay_sinh'];
                        $sdt = $_POST['sdt'];
                        $email = $_POST['email'];
                        $dia_chi = $_POST['dia_chi'];
                       
                        
                        update_tt($id_khachhang, $ten_dang_nhap, $ho_ten,$ngay_sinh , $sdt, $email, $dia_chi );
                    }
                    $all_tt = loadAll_tt();
                    
                    header('location: index.php?act=thoat');
                   
                    break;
            case 'addcart':
                if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                    $id = $_POST['id_sanpham'];
                    $img = $_POST['img_thumbnail'];
                    $tensp = $_POST['ten_sp'];
                    $mota = $_POST['mo_ta'];
                    $giasp = $_POST['gia_sanpham'];
                    $soluong = 1 ;
                    $fg = 0;
                    $i=0;
                    foreach ($_SESSION['giohang'] as $sp) {
                        if( $sp[2]== $tensp){
                            $slnew = $soluong + $sp[5];
                            $_SESSION['giohang'][$i][5] =$slnew;
                            $fg = 1;
                            break;
                        }
                        $i++;
                    }
                    if($fg==0){
                    $sp = array($id,$img,$tensp,$mota,$giasp,$soluong);
                    $_SESSION['giohang'][]=$sp;
                }
                    header('location: index.php?act=giohang');
                }
                include "giohang/giohang.php";
                break;
            case 'delcart':
                if(isset($_SESSION['giohang'])) unset($_SESSION['giohang']);
                    header('location: index.php');
                    break; 

            case'thanhtoan':
                include "thanhtoan/thanhtoan.php";
                break;
            case 'addttadmin':
                        if (isset($_POST["themmoi"]) && ($_POST["themmoi"])) {

                            $id_khachhang = $_POST["id_khachhang"];
                            $id = $_POST["id_sanpham"];
                            $ngay_dat = $_POST["ngay_dat"];
                            $tt = $_POST["tong_hoa_don"];
                            $soluong = 1;
                            $id_km = $_POST["id_km"];
                            $trang_thai = $_POST["trang_thai"];
                            
                            insert_adhoadon($id_khachhang,$ngay_dat,$tt,$id_km,$trang_thai,$id,$soluong );
                        }
                        getall_hoadon();
                        include "../views/thanhtoan/thanhtoan.php";  
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
                            echo $thongbao = '<script>alert("Tài khoản hoặc mật khẩu không đúng! ");</script>';
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