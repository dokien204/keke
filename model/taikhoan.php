<?php
// thêm tài khoản(đăng kí)
function addtv($user,$pass,$email){
    $sql = "insert into taikhoan (user,pass,email) 
    values ('$user','$pass','$email')";
    pdo_execute($sql);
}
// đăng nhập
function checklogin($user,$pass){
    $sql = "select * from taikhoan where user='".$user."' AND pass='".$pass."'";
    $checklogin = pdo_query_one($sql);
    return $checklogin;
}
// update tài khoản
function updatetk($id,$user,$pass,$email,$address,$tel){
        $sql = "update  taikhoan set  user='".$user."',pass='".$pass."',email='".$email."',
        address='".$address."',tel='".$tel."' where id=".$id ;
    pdo_execute($sql);
}
// danh sách khách hàng
function listkh(){
    $sql = "select * from taikhoan order by id desc";
    $listkh =pdo_query($sql); 
    return $listkh;
}
// xoá khách hàng
function xoatk($id){
    $id = $_GET['id'];
    $sql = "delete from taikhoan where id =".$id;
    pdo_execute($sql);
}
// quên mật khẩu
function checktk($user,$email,$tel){
    $sql = "select * from taikhoan where user='".$user."' AND email='".$email."'AND tel='".$tel."'";
    $checktk = pdo_query_one($sql);
    return $checktk;
}
?>