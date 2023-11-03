<?php
// list bình luận phần view
function loadall_binhluan($idpro)
{
    $sql = "select * from binhluan where 1";
    if($idpro>0){
        $sql.=" AND idpro = $idpro";
    }
    $listbinhluan = pdo_query($sql);
    return $listbinhluan;
}
// thêm bình luận
function insert_binhluan($idsp, $text)
{
    $iduser = $_SESSION['tk']['id'];
    $date = date('Y-m-d');
    $sql = "insert into binhluan (noidung, iduser, idpro, ngaybinhluan) values ('$text','$iduser', '$idsp', '$date')";
    $result = pdo_execute($sql);
    return $result;
}
// danh sách bình luận phần admin 
function load_listbl()
{
    $sql = "select * from binhluan order by idpro desc";
    $listbinhluan = pdo_query($sql);
    return $listbinhluan;
}
// xoá bình luận
function delete_binhluan($id)
{
    $sql = "delete from binhluan where id =" . $_GET['id'];
    pdo_execute($sql);
}
function delete_tkbl($iduser)
{
    $sql = "delete from binhluan where iduser =" . $iduser;
    pdo_execute($sql);
}
?>