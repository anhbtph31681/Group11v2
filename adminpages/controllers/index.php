<?php
     include "../../model/pdo.php";
     include "../../model/AdminModel/hoadon.php";
     include "../../model/AdminModel/baiviet.php";
     include "../../model/AdminModel/danhmuc.php";
     include "../../model/AdminModel/binhluan.php";
     if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act){
            case'baiviet':
                $list_bai_viet= loadAll_bai_viet();
                include "baiviet/baiviet.php";
                break;
            case 'suabv':
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $one_bai_viet = loadOne_bai_viet($id);
                    }
                    include "../../views/Admin/baiviet/suabv.php";
                    break;
            case 'updatebv';
                    if (isset($_POST["sua"]) && ($_POST["sua"])) {
                        $id = $_POST['id'];
                        $tieude = $_POST['tieu_de'];
                        $noidung = $_POST['noi_dung'];
                        $ngaydang = $_POST['ngay_dang'];
                        $trangthai = $_POST['trang_thai'];
                        update_bai_viet($id, $tieude, $noidung, $ngaydang, $trangthai);
                    }
                    $list_bai_viet= loadAll_bai_viet();
                    include "../../views/Admin/baiviet/baiviet.php";
                   
                    break;
            case 'xoabv':
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                        $id = $_GET['id'];
                        delete_bai_viet($id);
                    }
                    $list_bai_viet = loadAll_bai_viet();
                    include "../../views/Admin/baiviet/baiviet.php";
                    break;
            case 'formaddbv':
                        include "../../views/Admin/baiviet/thembv.php";
                        break;
            case 'addbv':
                        if (isset($_POST["themmoi"]) && ($_POST["themmoi"])) {
                            $tieude = $_POST["tieude"];
                            $noidung = $_POST["noidung"];
                            $ngaydang = $_POST["ngaydang"];
                            $trangthai = $_POST["trangthai"];
                            insert_bai_viet($tieude, $noidung, $ngaydang, $trangthai);
                        }
                        $list_bai_viet = loadAll_bai_viet();
                        include "../../views/Admin/baiviet/baiviet.php";  
                        break;    
                        
                        

            case'binhluan':
                $list_binh_luan = loadAll_binh_luan();
                include "binhluan/binhluan.php";
                break;
             case 'xoabl':
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                        $id = $_GET['id'];
                        delete_binh_luan($id);
                    }
                    $list_binh_luan = loadAll_binh_luan();
                    include "../../views/Admin/binhluan/binhluan.php";
                    break;


             case'khuyenmai':
                include "khuyenmai/khuyenmai.php";
                break;
            case'cthoadon':
                include "cthoadon/cthoadon.php";
                break;


            case'danhmuc':
                $list_danh_muc = loadAll_danh_muc();
                include "danhmuc/danhmuc.php";
                break;
             case 'formadddm':
                        include "../../views/Admin/danhmuc/themdm.php";
                        break;
             case 'adddm':
                        if (isset($_POST["themmoidm"]) && ($_POST["themmoidm"])) {
                            $tendanhmuc = $_POST["tendanhmuc"];
                            $trangthai = $_POST["trangthai"];
                            insert_danh_muc($tendanhmuc,$trangthai);
                        }
                        $list_danh_muc = loadAll_danh_muc();
                        include "../../views/Admin/danhmuc/danhmuc.php";  
                        break; 
             case 'xoadm':
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                        $id = $_GET['id'];
                        delete_danh_muc($id);
                    }
                    $list_danh_muc = loadAll_danh_muc();
                    include "../../views/Admin/danhmuc/danhmuc.php";
                    break; 
            case 'suadm':
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $one_danh_muc = loadOne_danh_muc($id);
                    }
                    include "../../views/Admin/danhmuc/suadm.php";
                    break;
            case 'updatedm';
                    if (isset($_POST["sua"]) && ($_POST["sua"])) {
                        $id = $_POST['id'];
                        $tendanhmuc = $_POST['ten_danh_muc'];
                        $trangthai = $_POST['trang_thai'];
                        update_danh_muc($id, $tendanhmuc,$trangthai);
                    }
                    $list_danh_muc= loadAll_danh_muc();
                    include "../../views/Admin/danhmuc/danhmuc.php";
                   
                    break;



            case'lienhe':
                include "lienhe/lienhe.php";
                break;
            case'qlhoadon':
                $hoadon = getall_hoadon();
                include "qlhoadon/qlhoadon.php";
                break;
            case 'suahd':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $sua_hd = suahd($id);
                }
                include "../../views/Admin/qlhoadon/suahd.php";
                break;
            case 'updatehd':
                if (isset($_POST["sua"]) && ($_POST["sua"])) {
                    $idkh = $_POST['id_kh'];
                    $id = $_POST['id'];
                    $ngaydat = $_POST['ngay_dat'];
                    $tong = $_POST['total'];
                    $makm = $_POST['makm'];
                    $status = $_POST['status'];
                    updatehd($id, $idkh, $ngaydat, $tong, $makm, $status);
               
            }
            $hoadon = getall_hoadon();
            include "../../views/Admin/qlhoadon/qlhoadon.php";
            // $list_bai_viet = loadAll_bai_viet();
            // include "admin/qlbaiviet";
            // break;
            // case 'addhd':
            //     if (isset($_POST["themmoi"]) && ($_POST["themmoi"])) {
            //         $id_khachang = $_POST['idkhachhang'];
            //         $id = $_POST['id'];
            //         $ngay_dat = $_POST['ngaydat'];
            //         $tong_hoa_don = $_POST['tonghoadon'];
            //         $id_km = $_POST['idkm'];
            //         $trang_thai = $_POST['trangthai'];
            //     update_hoa_don($id, $id_khachhang, $ngay_dat, $tong_hoa_don, $id_km, $trang_thai);
            // }
            //     $list_bai_viet = loadAll_bai_viet();
            //     include "../../views/Admin/qlhoadon/qlhoadon.php";  
            //     break; 
            case'sanpham':
                include "sanpham/sanpham.php";
                break;
            case'user':
                include "user/user.php";
                break;                
        }
      
            
        }else{
            include "../../views/Admin/home.php";
        }
    
?>