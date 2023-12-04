<?php
     include "../../model/pdo.php";
     include "../../model/AdminModel/hoadon.php";
     include "../../model/AdminModel/baiviet.php";
     include "../../model/AdminModel/danhmuc.php";
     include "../../model/AdminModel/binhluan.php";
     include "../../model/AdminModel/cthoadon.php";
     include "../../model/AdminModel/lienhe.php";
     include "../../model/AdminModel/khuyenmai.php";
     include "../../model/AdminModel/sanpham.php";
     include "../../model/AdminModel/user.php";
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
                        $uploadDir = "./baiviet/uploads/"; 
                        $imgPath = $uploadDir . basename($_FILES["img_thumbnail"]["name"]);
                        move_uploaded_file($_FILES["img_thumbnail"]["tmp_name"], $imgPath);
                        $id_baiviet = $_POST['id_baiviet'];
                        $img_thumbnail = $imgPath;
                        $tieude = $_POST['tieu_de'];
                        $noidung = $_POST['noi_dung'];
                        $ngaydang = $_POST['ngay_dang'];
                        $trangthai = $_POST['trang_thai'];
                        update_bai_viet($id_baiviet, $img_thumbnail, $tieude, $noidung, $ngaydang, $trangthai);
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
                            $uploadDir = "./baiviet/uploads/";
                            $imgPath = $uploadDir . basename($_FILES["img_thumbnail"]["name"]);
                            move_uploaded_file($_FILES["img_thumbnail"]["tmp_name"], $imgPath);

                            $img_thumbnail = $imgPath;
                            $tieude = $_POST["tieude"];
                            $noidung = $_POST["noidung"];
                            $ngaydang = $_POST["ngaydang"];
                            $trangthai = $_POST["trangthai"];
                            insert_bai_viet($img_thumbnail,$tieude, $noidung, $ngaydang, $trangthai);
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
                $list_km= loadAll_km();
                include "khuyenmai/khuyenmai.php";
                break;
            case 'suakm':
                    if (isset($_GET['id_km'])) {
                        $id_km = $_GET['id_km'];
                        $one_km = loadOne_km($id_km);
                    }
                    include "../../views/Admin/khuyenmai/suakm.php";
                    break;
            case 'updatekm';
                    if (isset($_POST["sua"]) && ($_POST["sua"])) {
                        $idkm = $_POST['id_km'];
                        $phantramkm = $_POST['phan_tram_km'];
                        $ngaybatdau = $_POST['ngay_bat_dau'];
                        $ngayketthuc = $_POST['ngay_ket_thuc'];
                        $trangthai = $_POST['trang_thai'];
                        update_km($idkm, $phantramkm, $ngaybatdau, $ngayketthuc, $trangthai);
                    }
                    $list_km = loadAll_km();
                    include "../../views/Admin/khuyenmai/khuyenmai.php";
                   
                    break;
            case 'xoakm':
                    if (isset($_GET['id_km']) && ($_GET['id_km'] > 0)) {
                        $id_km = $_GET['id_km'];
                        delete_km($id_km);
                    }
                    $list_km = loadAll_km();
                    include "../../views/Admin/khuyenmai/khuyenmai.php";
                    break;
            case 'formaddkm':
                        include "../../views/Admin/khuyenmai/themkm.php";
                        break;
            case 'addkm':
                        if (isset($_POST["themmoi"]) && ($_POST["themmoi"])) {
                            $phantramkm = $_POST["phantramkm"];
                            $ngaybatdau = $_POST["ngaybatdau"];
                            $ngayketthuc = $_POST["ngayketthuc"];     
                            $trangthai = $_POST["trangthai"];
                            insert_km($phantramkm, $ngaybatdau, $ngayketthuc, $trangthai);
                        }
                        $list_km = loadAll_km();
                        include "../../views/Admin/khuyenmai/khuyenmai.php";  
                        break;                

                case'cthoadon':
                    $hoadon = getall_hoadon1();
                   
                    break;
                case 'htcthoadon':
                    if (isset($_GET['id_hoadon'])) {
                        $idhd = $_GET['id_hoadon'];
                        $hoadon = getall_hoadon1($idhd);
                    }else{echo "tyhatbai";}
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
                $list_lienhe= loadAll_lienhe();
                include "lienhe/lienhe.php";
                break;
            case 'xoalh':
                    if (isset($_GET['id_lienhe']) && ($_GET['id_lienhe'] > 0)) {
                        $id_lienhe = $_GET['id_lienhe'];
                        delete_lienhe($id_lienhe);
                    }
                    $list_lienhe = loadAll_lienhe();
                    include "../../views/Admin/lienhe/lienhe.php";
            case'qlhoadon':
                $hoadon = getall_hoadon();
                include "qlhoadon/qlhoadon.php";
                break;
            case 'suahd':
                if (isset($_GET['id_hoadon'])){
                    $id_hoadon = $_GET['id_hoadon'];
                    $sua_hd = suahd($id_hoadon);
                }
                include "../../views/Admin/qlhoadon/suahd.php";
                break;
            case 'updatehd':
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
                $list_san_pham = loadAll_san_pham();
                include "sanpham/sanpham.php";
                break;
               case 'suasp':
                    if (isset($_GET['id_sanpham'])) {
                        $id_sanpham = $_GET['id_sanpham'];
                        $one_san_pham = loadOne_san_pham($id_sanpham);
                    }
                    include "../../views/Admin/sanpham/suasp.php";
                    break;
                
                    case 'updatesp':
                        if (isset($_POST["sua"]) && ($_POST["sua"])) {
                            $uploadDir = "./sanpham/uploads/"; 
                            $imgPath = $uploadDir . basename($_FILES["img_thumbnail"]["name"]);
                            move_uploaded_file($_FILES["img_thumbnail"]["tmp_name"], $imgPath);
                            $id_sanpham = $_POST['id_sanpham'];
                            $ten_sp = $_POST['ten_sp'];
                            $ngay_nhap = $_POST['ngay_nhap'];
                            $mo_ta = $_POST['mo_ta'];
                            $id_danhmuc = $_POST['id_danhmuc'];
                            $img_thumbnail = $imgPath;
                            $trang_thai = $_POST['trang_thai'];
                            $gia_sanpham = $_POST["gia_sanpham"];
                            $view = $_POST["view"];
                           
                            update_san_pham($id_sanpham, $ten_sp, $ngay_nhap, $mo_ta, $id_danhmuc, $img_thumbnail, $trang_thai, $gia_sanpham,$view);
                            // header("Location: index.php?act=sanpham");
                            echo '<script>window.location.href = "index.php?act=sanpham"</script>';
                            exit();
                        }
                        $list_san_pham = loadAll_san_pham();
                        include "../../views/Admin/sanpham/sanpham.php";
                        break;
                
                case 'xoasp':
                    if (isset($_GET['id_sanpham']) && ($_GET['id_sanpham'] > 0)) {
                        $id_sanpham = $_GET['id_sanpham'];
                        delete_san_pham($id_sanpham); // Assuming you have a function to delete a product
                    }
                    $list_san_pham = loadAll_san_pham(); // Assuming you have a function to load all products
                    include "../../views/Admin/sanpham/sanpham.php";
                    break;
                
                case 'formaddsp':
                    include "../../views/Admin/sanpham/themsp.php";
                    break;
                
                case 'addsp':
                    if (isset($_POST["themmoi"]) && ($_POST["themmoi"])) {
                        $uploadDir = "./sanpham/uploads/";
                        $imgPath = $uploadDir . basename($_FILES["img_thumbnail"]["name"]);
                        move_uploaded_file($_FILES["img_thumbnail"]["tmp_name"], $imgPath);
                        $ten_sp = $_POST["ten_sp"];
                        $ngay_nhap = $_POST["ngay_nhap"];
                        $mo_ta = $_POST["mo_ta"];
                        $id_danhmuc = $_POST["id_danhmuc"];
                        $img_thumbnail = $imgPath;
                        $trang_thai = $_POST["trang_thai"];
                        $gia_sanpham = $_POST["gia_sanpham"];
                        $view = $_POST['view'];
                        insert_san_pham($ten_sp, $ngay_nhap, $mo_ta, $id_danhmuc, $img_thumbnail, $trang_thai,$gia_sanpham, $view ); 
                    }
                    $list_san_pham = loadAll_san_pham();
                    include "../../views/Admin/sanpham/sanpham.php";
                    break;            
             
            case'user':
                $list_nguoi_dung= loadAll_nguoi_dung();
                // var_dump($list_nguoi_dung);die;
                include "user/user.php";
                break; 
                case 'xoand':
                    if (isset($_GET['id_khachhang']) && ($_GET['id_khachhang'] > 0)) {
                        $id_khachhang = $_GET['id_khachhang'];
                        delete_nguoi_dung($id_khachhang);
                    }
                    $list_nguoi_dung = loadAll_nguoi_dung();
                    // var_dump($list_nguoi_dung);die;
                    include "../../views/Admin/user/user.php";
                    break;              
        }
      
            
        }else{
            include "../../views/Admin/home.php";
        }
    
?>