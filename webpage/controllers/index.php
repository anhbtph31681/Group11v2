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
    include "../model/user/baiviet.php";
    include "../model/user/lienhe.php";
    include "../model/user/binhluan.php";
    include "../model/user/hoadon.php";
    $list_danh_muc = loadAll_danh_muc();
    $sphome1=loadAll_san_pham();
    $sphot=loadAll_hot();
    $all_tt = loadAll_tt();
    $list_binhluan= loadAll_binhluan();
    
    // $userID = $_SESSION['tai_khoan'] ?? 0;
    // $user = loadOne_tt($userID);
   
    include "header.php";
    if (isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act){
            case 'updatehd1':
                if (isset($_POST["sua"]) && ($_POST["sua"])) {
                   
                    $id_hoadon = $_POST['id_hoadon'];
                    $idkh = $_POST['id_kh'];
                    $ma_donhang = $_POST['ma_donhang'];
                    $ten_nn = $_POST['ten_nn'];
                    $sdt_nn = $_POST['sdt_nn'];
                    $diachi_nn = $_POST['diachi_nn'];
                    $trang_thai = $_POST['status'];
                    $hinhthuc_tt = $_POST['hinhthuc_tt'];
                    $ngay_tao = $_POST['ngay_tao'];
                    updatehd($id_hoadon, $idkh, $ma_donhang, $ten_nn, $sdt_nn,$diachi_nn, $trang_thai, $hinhthuc_tt,$ngay_tao);
               
            }$list_hoadon = load_bill($id_khachhang);
            include "lichsudathang/lichsudathang.php";
            break;
            case 'binhluan': 
                if (isset($_POST["addbinhluan"]) && ($_POST["addbinhluan"])) {
                    $id_khachhang = $_POST["id_khachhang1"];
                    $id_sanpham = $_POST["id_sanpham1"];
                    $noi_dung = $_POST["noi_dung1"];
                    $diem = $_POST["diem"];
                    $trang_thai = $_POST["trang_thai1"];
                    addbinhluan($id_khachhang,$id_sanpham, $noi_dung,$diem,$trang_thai);
                }
                $list_binhluan= loadAll_binhluan();
                $onesp=loadone_sanpham($id_sanpham);
                include "ctsanpham/ctsanpham.php";
                break;
            case 'formbaiviet': 
                $dsbv = loadAll_bai_viet();
                include "baiviet/baiviet.php";
                break;
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
                if (isset($_POST["submitcontact"]) && ($_POST["submitcontact"])) {
                    $id_khachhang = $_POST["id_khachhang"];
                    $noi_dung = $_POST["noi_dung"];
                    $trang_thai = $_POST["trang_thai"];
                    submitcontact($id_khachhang, $noi_dung,$trang_thai);
                    echo $thongbao = '<script>alert("Gửi thành công!");</script>';
                }
               
                include "lienhe/lienhe.php";
                break;   
            case 'ctsanpham':
                if(isset($_GET['id_sanpham'])){
                    $id_sanpham =$_GET['id_sanpham'];
                    $onesp=loadone_sanpham($id_sanpham);
                }
                if (isset($_GET['id_sanpham']) && $_GET['id_sanpham'] > 0) {
                    $idsp = $_GET['id_sanpham'];
                } else {
                    $idsp = 0;
                }
                $list_binhluan= loadAll_binhluan($idsp);
                include "ctsanpham/ctsanpham.php";
                break;  
            case 'sanpham':
               
                if (isset($_POST['kyw']) && $_POST['kyw'] != '') {
                    $kyw = $_POST['kyw'];
                } else {
                    $kyw = '';
                }
                if (isset($_GET['id_danhmuc']) && $_GET['id_danhmuc'] > 0) {
                    $iddm = $_GET['id_danhmuc'];
                } else {
                    $iddm = 0;
                }
                $listsp = loadAll_san_pham($kyw, $iddm);
                $tendm = load_ten_danhmuc($iddm);
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

            case 'thanhtoan':
                // echo "<pre>";
                // print_r($_SESSION['giohang']);
                // echo "</pre>";
            
                include "../views/thanhtoan/thanhtoan.php";
                break;
            case 'addttadmin':
                if (isset($_SESSION['tai_khoan'])) {
                    extract($_SESSION['tai_khoan']);
                $hinhthuc_tt = "Nhận hàng thanh toán";
                $ma_donhang = rand(1, 9999);
            
            
                $id_bil = insert_bill($id_khachhang,$ma_donhang,$_POST["ten_nn"],$_POST["sdt_nn"],$_POST["diachi_nn"],$hinhthuc_tt);
            
                $i = 0;
                foreach($_SESSION['giohang'] as $key =>  $order) {
                    insert_bill_detail($id_bil,$order[0],$order[5],$order[4]);
                    $i++;
                }
                unset($_SESSION['giohang']);
                echo "<script>alert('Thanh toán thành công')</script>";
                echo "<script>window.location.href = 'index.php?act=giohang'</script>";}
                // getall_hoadon();
                include "../views/thanhtoan/thanhtoan.php";
                break;

            case 'dangnhap':
                    if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                        
                        $user = $_POST['ten_dang_nhap'];
                        $password = $_POST['mat_khau'];
                        
                        $checkuser = check_user($user, $password);
                        if (is_array($checkuser)) {
                            $_SESSION['tai_khoan'] = $checkuser;
                            echo $thongbao = '<script>alert(" Đăng nhập thành công! ");</script>';
                            
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
            
                // Kiểm tra xem tên người dùng đã tồn tại hay chưa
                if (check_existing_username($ten_dang_nhap)) {
                    echo '<script>alert("Tên đăng nhập đã tồn tại. Vui lòng chọn tên đăng nhập khác.");</script>';
                } else {
                    // Nếu tên người dùng chưa tồn tại, thêm vào cơ sở dữ liệu
                    insert_nguoidung($ten_dang_nhap, $mat_khau, $ho_ten, $ngay_sinh, $sdt, $email, $diachi);
                    echo '<script>alert("Đăng ký tài khoản thành công");</script>';
                }
            }
            
            include "dangnhap/dangnhap.php";
        case 'formdk':
                include "dangky/dangky.php";
                break;
        case 'lichsudathang':
            if(isset($_SESSION['tai_khoan'])){
                extract($_SESSION['tai_khoan']);
            $list_hoadon = load_bill($id_khachhang);
        }
                include "lichsudathang/lichsudathang.php";
                break;
        case 'hoadonct':
            if (isset($_GET['id_hoadon']) && $_GET['id_hoadon'] > 0) {
                $idhdd = $_GET['id_hoadon'];
            } else {
                $idhdd = 0;
            }
            $list_hoadon_ct = load_bill_ct( $idhdd);
            include "lichsudathang/hoadonct.php";
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