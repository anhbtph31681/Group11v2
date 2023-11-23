<?php
     include "../../model/pdo.php";
     include "../../model/AdminModel/hoadon.php";
     include "../../model/AdminModel/baiviet.php";
     include "../../model/AdminModel/danhmuc.php";
     include "../../model/AdminModel/binhluan.php";
     include "../../model/AdminModel/cthoadon.php";
     if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act){
            case'baiviet':
                $list_bai_viet= loadAll_bai_viet();
                include "baiviet/baiviet.php";
                break;
            case 'suabv':
                    if (isset($_GET['id_baiviet'])) {
                        $id_baiviet = $_GET['id_baiviet'];
                        $one_bai_viet = loadOne_bai_viet($id_baiviet);
                    }
                    include "../../views/Admin/baiviet/suabv.php";
                    break;
            case 'updatebv';
                    if (isset($_POST["sua"]) && ($_POST["sua"])) {
                        $id_baiviet = $_POST['id_baiviet'];
                        $tieude = $_POST['tieu_de'];
                        $noidung = $_POST['noi_dung'];
                        $ngaydang = $_POST['ngay_dang'];
                        $trangthai = $_POST['trang_thai'];
                        update_bai_viet($id_baiviet, $tieude, $noidung, $ngaydang, $trangthai);
                    }
                    $list_bai_viet= loadAll_bai_viet();
                    include "../../views/Admin/baiviet/baiviet.php";
                   
                    break;
            case 'xoabv':
                    if (isset($_GET['id_baiviet']) && ($_GET['id_baiviet'] > 0)) {
                        $id_baiviet = $_GET['id_baiviet'];
                        delete_bai_viet($id_baiviet);
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
                    if (isset($_GET['id_binhluan']) && ($_GET['id_binhluan'] > 0)) {
                        $id_binhluan = $_GET['id_binhluan'];
                        delete_binh_luan($id_binhluan);
                    }
                    $list_binh_luan = loadAll_binh_luan();
                    include "../../views/Admin/binhluan/binhluan.php";
                    break;


             case'khuyenmai':
                include "khuyenmai/khuyenmai.php";
                break;

                case'cthoadon':
                    $hoadon = getall_hoadon1();
                    include "qlhoadon/qlhoadon.php";
                    break;
                case 'htcthoadon':
                    if (isset($_GET['id_hoadon'])) {
                        $id_hoadon1 = $_GET['id_hoadon'];
                        $sua_hd1 = suahd1($id_hoadon1);
                    }
                    include "../../views/Admin/cthoadon/cthoadon.php";
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
                    if (isset($_GET['id_danhmuc']) && ($_GET['id_danhmuc'] > 0)) {
                        $id_danhmuc = $_GET['id_danhmuc'];
                        delete_danh_muc($id_danhmuc);
                    }
                    $list_danh_muc = loadAll_danh_muc();
                    include "../../views/Admin/danhmuc/danhmuc.php";
                    break; 
            case 'suadm':
                    if (isset($_GET['id_danhmuc'])) {
                        $id_danhmuc = $_GET['id_danhmuc'];
                        $one_danh_muc = loadOne_danh_muc($id_danhmuc);
                    }
                    include "../../views/Admin/danhmuc/suadm.php";
                    break;
            case 'updatedm';
                    if (isset($_POST["sua"]) && ($_POST["sua"])) {
                        $id_danhmuc = $_POST['id_danhmuc'];
                        $tendanhmuc = $_POST['ten_danh_muc'];
                        $trangthai = $_POST['trang_thai'];
                        update_danh_muc($id_danhmuc, $tendanhmuc,$trangthai);
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
                if (isset($_GET['id_hoadon'])) {
                    $id_hoadon = $_GET['id_hoadon'];
                    $sua_hd = suahd($id_hoadon);
                }
                include "../../views/Admin/qlhoadon/suahd.php";
                break;
            case 'updatehd':
                if (isset($_POST["sua"]) && ($_POST["sua"])) {
                    $idkh = $_POST['id_kh'];
                    $id_sanpham = $_POST['id_sanpham'];
                    $id_hoadon = $_POST['id_hoadon'];
                    $ngaydat = $_POST['ngay_dat'];
                    $tong = $_POST['total'];
                    $soluong = $_POST['soluong'];
                    $makm = $_POST['makm'];
                    $status = $_POST['status'];
                    updatehd($id_hoadon, $idkh,$id_sanpham, $ngaydat, $tong,$soluong, $makm, $status);
               
            }
            $hoadon = getall_hoadon();
            include "../../views/Admin/qlhoadon/qlhoadon.php";
            break;
            case 'xoahd':
                if (isset($_GET['id_hoadon']) && ($_GET['id_hoadon'] > 0)) {
                    $id_hoadon = $_GET['id_hoadon'];
                    delete_hoa_don($id_hoadon);
                }
                $hoadon = getall_hoadon();
                include "../../views/Admin/qlhoadon/qlhoadon.php";
                break; 
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