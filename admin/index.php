<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/cart.php";
include "../model/danhmuc.php";
//controller cho danhmuc
if (isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act){
        case 'adddm':
        // kiểm tra xem người dùng có click nút add
        if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
            $tenloai = $_POST['tenloai'];
            insert_danhmuc($tenloai);
            $thongbao = "Thêm thành công";
        }
            
        include "danhmuc/add.php";
            break;
        case 'listdm':
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'xoadm':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'suadm':
            if(isset($_GET['id'])&&($_GET['id']>0)){
            $dm = loadone_danhmuc($_GET['id']);
            }
            include "danhmuc/update.php";
            break;
        case 'updatedm':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_danhmuc($id,$tenloai);
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
    
            // Controller cho sản phẩm
                    case 'addsp':
                    // kiểm tra xem người dùng có click nút add
                    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                        $iddm = $_POST['iddm'];
                        $tensp = $_POST['tensp'];
                        $giasp = $_POST['giasp'];
                        $thongtin = $_POST['thongtin'];
                        $mota  = $_POST['mota'];
                        $hinh = $_FILES['hinh']['name'];
                        $target_dir = "../uploads/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        if(move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){

                        }else{

                        }
                        insert_sanpham($tensp,$giasp,$hinh,$thongtin,$mota,$hinh,$iddm);
                        $thongbao = "Thêm thành công";
                    }
                    $listdanhmuc = loadall_danhmuc();
                    include "./controller/save-add-products.php";
                        break;
                    case 'listsp':
                        if(isset($_POST['listok'])&&($_POST['listok'])){
                            $kyw = $_POST['kyw'];
                            $iddm = $_POST['iddm'];
                        }else{
                            $kyw='';
                            $iddm=0;
                        }
                        $listdanhmuc = loadall_danhmuc();
                        $listsanpham = loadall_sanpham($kyw,$iddm);
                        include "sanpham/list.php";
                        break;
                    case 'xoasp':
                        if(isset($_GET['id'])&&($_GET['id']>0)){
                            delete_sanpham($_GET['id']);
                        }
                        $listsanpham = loadall_sanpham("",0);
                        include "sanpham/list.php";
                        break;
                    case 'suasp':
                        if(isset($_GET['id'])&&($_GET['id']>0)){
                           $sanpham=loadone_sanpham($_GET['id']);
                        }
                        $listdanhmuc=loadall_danhmuc();
                        include "sanpham/update.php";
                        break;
                    case 'updatesp':
                        if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                        $id = $_POST['id'];
                        $iddm = $_POST['iddm'];
                        $tensp = $_POST['tensp'];
                        $giasp = $_POST['giasp'];
                        $thongtin = $_POST['thongtin'];
                        $mota  = $_POST['mota'];
                        $hinh = $_FILES['hinh']['name'];
                        $target_dir = "../uploads/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        if(move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){

                        }else{

                        }
                            update_sanpham($id,$iddm,$tensp,$giasp,$hinh,$thongtin,$mota);
                            $thongbao = "Cập nhật thành công";
                           }
                            $listdanhmuc=loadall_danhmuc();
                            $listsanpham=loadall_sanpham();
                            include "sanpham/list.php";
                            break;
            //Controller cho khách hàng
              
                    //  case 'signin':		
                    //             if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                    //             $user = $_POST['user'];
                    //             $pass = $_POST['pass'];
                    //             $login = dangnhap($user,$pass);
                    //             if(is_array($login)){
                    //             $_SESSION['admin']=$login;
                    //             header('Location: index.php');
                    //             }else{
                    //                 $thongbao="Tài khoản hoặc mật khẩu không đúng. Vui lòng đăng nhập lại!";
                    //             }
                    //             }
                    //             include "index.php";
                    //             break;
                    case 'signout':
                        session_unset();
			            header('Location: connect.php');
                        break;
                    
                    default: 
                    include "home.php";
                    break;
                      }
    
 }else{
 
 include "home.php";

 }
 include "footer.php";

 ?>
?>
