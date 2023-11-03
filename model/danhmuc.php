<?php
// thêm danh mục
    function add($tenloai){
        $sql = "insert into danhmuc(name) values('$tenloai')";
        pdo_execute($sql);
    }
    //xoá danh mục
    function xoa($id){
        $id = $_GET['id'];
        $sql = "delete from danhmuc where id =".$id;
        pdo_execute($sql);
    }
    // danh sách danh mục
    function listds(){
        $sql = "select * from danhmuc order by id desc";
        $listds =pdo_query($sql); 
        return $listds;
    }
    //sửa danh mục
    function listsua(){
        $id = $_GET['id'];
        $sql = "select * from danhmuc where id=".$id;
        $listsua = pdo_query_one($sql);
        return $listsua;
    }
    // update danh mục
    function updatedm($id){
        $tenloai = $_POST['tenloai'];
        $id = $_POST['id'];
        $sql = "update  danhmuc set name='$tenloai' where id=".$id;
        pdo_execute($sql);
    }
?>