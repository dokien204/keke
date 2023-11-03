<?php
        include "../model/pdo.php";
        include "header.php";
        include "../model/danhmuc.php";
        include "../model/sanpham.php";
        include "../model/taikhoan.php";
        include "../model/binhluan.php";
        include "../model/giohang.php";
        if(isset($_GET['act'])){
            $act = $_GET['act'];
            switch ($act) {
                // thêm danh mục
                case 'adddm':
                    //ktra xem có click vào submit chưa 
                    if(isset($_POST['them'])&&($_POST['them'])){
                        $tenloai = $_POST['tenloai'];
                        add($tenloai);
                        $mess = 'Add thành công';
                    }
                    include "danhmuc/add.php";
                    break;
                    // danh sách danh mục
                    case 'listds':
                        $listds = listds();
                        include "danhmuc/list.php";
                        break;
                        // xoá danh mục
                    case 'xoa':
                        if(isset($_GET['id']) && $_GET['id']>0){
                            xoa($_GET['id']);
                        }
                        $listds = listds();
                        include "danhmuc/list.php";
                        break;
                        //sửa danh mục
                    case 'sua':
                        if(isset($_GET['id']) && $_GET['id']>0){
                            $listsua = listsua();
                        }
                        include "danhmuc/update.php";
                        break;
                        // update danh mục
                    case 'updatedm':
                        if(isset($_POST['sua'])&&($_POST['sua'])){
                            updatedm($_POST['id']);
                            $messupdate = 'Sửa thành công';
                        }
                        $listds = listds();
                        include "danhmuc/list.php";
                        break;

                     // Phần sản phẩm   
                    // thêm sản phẩm
                        case 'addsp':
                            //ktra xem có click vào submit chưa 
                            if(isset($_POST['themsp'])&&($_POST['themsp'])){
                                $iddm = $_POST['iddm'];
                                $tensp = $_POST['tensp'];
                                $giasp = $_POST['giasp'];
                                $mota = $_POST['mota'];
                                $luotxem = $_POST['luotxem'];
                                $image = $_FILES['image'];
                                
                                $fileimg = '../imagephp/';
                                $rand = rand(1,100000);
                                $imgname = $image['name'];
                                if($image['size']>0){
                                    $imgall = $fileimg.''.$rand.''.$imgname;
                                    move_uploaded_file($image['tmp_name'],$imgall);
                                }
                                else{
                                    $imgall = $_POST['image'];
                                }
                                addsp($tensp,$giasp,$imgall,$mota,$luotxem,$iddm);
                            }
                            $listds = listds();
                            include "sanpham/add.php";
                            break;
                            // danh sách sản phẩm
                            case 'listsp':
                                if(isset($_POST['listtk'])&&($_POST['listtk'])){
                                    $sreachsp = $_POST['sreachsp'];
                                    $iddm = $_POST['iddm'];
                                }
                                else{
                                    $sreachsp ='';
                                    $iddm = 0;
                                }
                                $listds = listds();
                                $listsp = listsp($sreachsp,$iddm);
                                include "sanpham/list.php";
                                break;
                                //xoá sản phẩm
                            case 'xoasp':
                                if(isset($_GET['id']) && $_GET['id']>0){
                                    xoasp($_GET['id']);
                                }
                                $listsp = listsp("",0);
                                include "sanpham/list.php";
                                break;
                                //sửa sản phẩm
                            case 'suasp':
                                if(isset($_GET['id']) && $_GET['id']>0){
                                    $listsuasp = listsuasp($_GET['id']);
                                }
                                $listds = listds();
                                include "sanpham/update.php";
                                break;
                                // update sản phẩm
                            case 'updatesp':
                                if(isset($_POST['suasp'])&&($_POST['suasp'])){
                                    $id =$_POST['id'];
                                    $iddm = $_POST['iddm'];
                                    $tensp = $_POST['tensp'];
                                    $giasp = $_POST['giasp'];
                                    $mota = $_POST['mota'];
                                    $image = $_FILES['image'];
                                    $fileimg = '../imagephp/';
                                    $rand = rand(1,100000);
                                    $imgname = $image['name'];
                                    if($image['size']>0){
                                        $imgall = $fileimg.''.$rand.''.$imgname;
                                        move_uploaded_file($image['tmp_name'],$imgall);
                                    }
                                    else{
                                        $imgall = $_POST['imagepast'];
                                    }
                                    updatesp($id,$tensp,$giasp,$imgall,$mota,$iddm);
                                    $listds = listds();
                                $listsp = listsp("",0);
                                include "sanpham/list.php";
                                break;
                                }
                                // quản lí khách hàng
                                case 'dskh':
                                    $listkh = listkh();
                                    include "taikhoan/dskhach.php";
                                    break;
                                    // xoá tài khoản 
                                case 'xoatk':
                                    $iduser = $_GET['id'];
                                    $xoatkbl =delete_tkbl($iduser);
                                    $xoatk = xoatk($_GET['id']);
                                    $listkh = listkh();
                                    include "taikhoan/dskhach.php";
                                    break;
                                    // về trang chủ
                                case 'view':
                                    header('location:../view/index.php');
                                    break; 
                                // quản lí bình luận
                                // danh sách bình luận
                                case 'dsbl':
                                    $listbl = loadall_binhluan(0);
                                    include "binhluan/dsbinhluan.php";
                                    break; 
                                    //xoá bình luận
                                case 'xoabl':
                                    $xoabl = delete_binhluan($_GET['id']);
                                    $listbl = loadall_binhluan(0);
                                    include "binhluan/dsbinhluan.php";
                                    break;
                                    //danh sách thống kê
                                case 'dstk':
                                    $listtk = loadall_thongkesp();
                                    
                                    include "thongke/dsthongke.php";
                                    break; 
                                    // biểu đồ thống kê
                                case 'bieudo':
                                    $listtk = loadall_thongkesp();
                                    include "thongke/bieudo.php";
                                    break;          
            default:
                include "content.php";
                    break;
        }
        }
        else{
            include "content.php";
        }
        include "footer.php";
?>