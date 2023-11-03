<?php
session_start();
    include "../model/pdo.php";
    include "../model/sanpham.php";
    include "../model/danhmuc.php";
    include "../model/taikhoan.php";
    include "../model/giohang.php";
    include "../model/binhluan.php";
    include "header.php";
if(!isset($_SESSION['giohang'])){
    $_SESSION['giohang']=[];
}

    $spnew = listsp_container();
    $dsdm = listds();
    $list10 = listsp_like();
    if(isset($_GET['act'])&&($_GET['act'])!=''){
        $act = $_GET['act'];
        switch ($act) {
            // danh sách sản phẩm của từng danh mục
            case 'sanpham':
                if(isset($_POST['search'])&&($_POST['search'])!=''){
                    $search = $_POST['search'];
                }
                else{
                    $search =''; 
                }
                if(isset($_GET['iddm'])&&($_GET['iddm'])>0){
                    $iddm = $_GET['iddm'];
                }
                else{
                    $iddm=0;
                }
                $dssp = listsp($search,$iddm);
                    $listnamedm = listnamedm($iddm);
                    include "sanphamdm.php";
                break;
                // sản phẩm chi tiết
            case 'sanphamct':
                if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
                    extract($_POST);
                    insert_binhluan($idpro,$noidung);
                }
                if(isset($_GET['idsp'])&&($_GET['idsp'])>0){
                    $loadsp=listsuasp($_GET['idsp']);
                    extract($loadsp);
                    $idpro = $_GET['idsp'];
                    $listspcl= listonesp_cungloai($_GET['idsp'],$iddm);
                    // lấy bình luận của từng sản phẩm
                    $dsbl = loadall_binhluan($idpro);
                    include "sanphamct.php";
                }
                break;
                //đăng kí
                case 'dangky':
                    if(isset($_POST['dangky'])&&($_POST['dangky'])){
                        $user = $_POST['user'];
                        $pass = $_POST['pass'];
                        $email = $_POST['email'];
                        $addtv = addtv($user,$pass,$email);
                        $messdk= 'Đăng ký thành công';
                    }
                    include "taikhoan/dangky.php";
                    break;
                    //đăng nhập
                    case 'dangnhap':
                        if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                            $user = $_POST['user'];
                            $pass = $_POST['pass'];
                            $checklogin = checklogin($user,$pass);
                            if(is_array($checklogin)){
                                $_SESSION['tk']=$checklogin;
                                header('location: index.php');
                            }
                            else{
                                $messdn ="Không tồn tại tài khoản";
                            }
                            
                        }
                        include "taikhoan/dangky.php";
                        break;
                        // update tài khoản
                        case 'capnhattk':
                            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                                $user = $_POST['user'];
                                $pass = $_POST['pass'];
                                $email = $_POST['email'];
                                $address = $_POST['address'];
                                $tel = $_POST['tel'];
                                $id = $_POST['id'];
                                updatetk($id,$user,$pass,$email,$address,$tel);
                                $checklogin = checklogin($user,$pass);
                                $_SESSION['tk']= checklogin($user,$pass);
                                header('location: index.php');
                            }
                            include "taikhoan/capnhat.php";
                            break;
                            // logout tài khoản
                            case 'logout':
                                session_destroy();
                                header('location: index.php');
                                break;
                                // quên mk
                            case 'quenmk':
                                if(isset($_POST['quenmk'])&&($_POST['quenmk'])){
                                    $user = $_POST['user'];
                                    $email = $_POST['email'];
                                    $tel = $_POST['tel'];
                                    $checktk=checktk($user,$email,$tel);
                                    if(is_array($checktk)){
                                        $messmk ='Mật khẩu tài khoản này là:'.$checktk['pass'];
                                    }
                                    else{
                                        $messmk ='Tài khoản không tồn tại!';
                                    } 
                                }
                                include "taikhoan/quenmk.php";
                                break;
                                // vào trang admin
                             case 'admin':
                                header('location: ../admin/index.php');
                                break;  
                            // giỏ hàng
                            case 'addgiohang':
                                if(isset($_POST['addgio'])&&($_POST['addgio'])){
                                    $id = $_POST['id'];
                                    $name = $_POST['name'];
                                    $img = $_POST['img'];
                                    $price = $_POST['price'];
                                    $soluong= 1;
                                    $ttien = $soluong * $price;
                                    $spadd = [$id,$name,$img,$price,$soluong,$ttien];
                                    array_push($_SESSION['giohang'], $spadd);
                                    
                                }
                                include "giohang/viewgio.php";
                                break;
                                // xoá giỏ hàng
                            case 'delgio':
                                if(isset($_GET['idgio'])){
                                    $idgio = $_GET['idgio'];
                                    if (isset($_SESSION['giohang'][$idgio])) {
                                        // Xóa phần tử tại vị trí $idgio
                                        unset($_SESSION['giohang'][$idgio]);
                                    }
                                }
                                else{
                                    $_SESSION['giohang']= [];
                                }
                               header('location: index.php?act=viewgio');
                                break;
                            case 'viewgio':
                                include "giohang/viewgio.php";
                                break;
                            case 'bill':
                                include "giohang/bill.php";
                                break;
            case 'lienhe':
                include "lienhe.php";
                break;
            case 'gioithieu':
                include "gioithieu.php";
                break;    
            default:
                # code...
                break;
        }
    }
    else{
        include "container.php";
    }
    
    include "footer.php";
?>