<?php
// thêm sp
    function addsp($tensp,$giasp,$imgall,$mota,$luotxem,$iddm){
        $sql = "insert into sanpham (name,price,img,mota,luotxem,iddm) 
        values ('$tensp','$giasp','$imgall','$mota','$luotxem','$iddm')";
        pdo_execute($sql);
    }
    //xoá sp
    function xoasp($id){
        $id = $_GET['id'];
        $sql = "delete from sanpham where id =".$id;
        pdo_execute($sql);
    }   
    //ds sp
    function listsp($sreachsp,$iddm=0){
        $sql = "select * from sanpham where 1";
        if($sreachsp!=""){
            $sql.= " and name like '%".$sreachsp."%'";
        }
        if($iddm>0){
            $sql .=" and iddm = '".$iddm."'";
        }
        $sql .= " order by id desc";
        $listsp =pdo_query($sql); 
        return $listsp;
    }
    // ds sửa sp
    function listsuasp($id){
        $sql = "select * from sanpham where id=".$id;
        $listsuasp = pdo_query_one($sql);
        return $listsuasp;
    }
    // ds cùng loại
    function listonesp_cungloai($id,$iddm){
        $sql = "select * from sanpham where iddm='$iddm' AND id <>".$id;
        $listsp =pdo_query($sql); 
        return $listsp;
    }
    //update sp
    function updatesp($id,$tensp,$giasp,$image,$mota,$iddm){
        if($image!=''){
            $sql = "update  sanpham set name='".$tensp."',price='".$giasp."', img='".$image."' ,mota='".$mota."', iddm='".$iddm."' where id=".$id;
        }
        else{
            $sql = "update  sanpham set  name='".$tensp."',price='".$giasp."',mota='".$mota."',
            iddm='".$iddm."' where id=".$id ;
        }
        pdo_execute($sql);
    }
    // ds sp container(trang chủ)
    function listsp_container(){
        $sql = "select * from sanpham where 1 order by id desc limit 9";
        $listsp_container =pdo_query($sql); 
        return $listsp_container;
    }
    // top 10
    function listsp_like(){
        $sql = "select * from sanpham where 1 order by luotxem desc limit 10";
        $listsp_container =pdo_query($sql); 
        return $listsp_container;
    }
    //lấy tên dm
    function listnamedm($iddm){
        if($iddm>0){
            $sql = "select * from danhmuc where id=".$iddm;
            $listnamedm = pdo_query_one($sql);
            extract($listnamedm);
            return $name;
        }
        else{
            return '';
        }
        
    }
?>