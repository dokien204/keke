<?php
    if(is_array($listsuasp)){
        extract($listsuasp);
    }
?>
<div class="row header">
    <h1>Cập Nhật Hàng Hoá </h1>
</div>
<div class="row formct">
    <br>
    <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?=$id?>">
        <div class="row spacerow">
            <select name="iddm" id="">
                <?php
                foreach ($listds as $danhmuc) {
                    //extract($danhmuc);
                    if($iddm == $danhmuc['id']){
                        echo '<option value="'.$danhmuc['id'].'" selected>'.$danhmuc['name'].'</option>';
                    }
                     else{
                        echo '<option value="'.$danhmuc['id'].'">'.$danhmuc['name'].'</option>';
                     }
                }
                ?>
            </select>
            <br>
            Mã Sản Phẩm
            <br>
            <input type="text" name="masp" id="" disabled>
        </div>
        <div class="row spacerow">
            Tên Sản Phẩm
            <br>
            <input type="text" name="tensp" id="" value="<?php if(isset($name)&&($name!='')) echo $name ?>">
        </div>
        <div class="row spacerow">
            Giá
            <br>
            <input type="text" name="giasp" id="" value="<?php if(isset($price)&&($price!='')) echo $price ?>">
        </div>
        <div class="row spacerow">
            <input type="hidden" name="imagepast" value="<?= $img?>" >
            Image
            <br>
            <input type="file" name="image" id="">
            <br>
            <?php echo '<img style="width:200px; height:200px;" src="'.$img.'"'; ?>
        </div>
        <div class="row spacerow">
            Mô tả
            <br>
            <textarea name="mota" id="" cols="30" rows="10"><?php if(isset($mota)&&($mota!='')) echo $mota ?></textarea>      
        </div>
        <div class="row spacerow">
            <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>">
            <input type="submit" name="suasp" value="Cập Nhật">
            <input type="reset" value="Nhập Lại">
            <a href="index.php?act=listsp"><input type="button" value="Danh Sách"></a>
        </div>
        <?php
                if(isset($messupdate)&&($messupdate!='')){
                    echo $messupdate;
                }
                    
                ?>
    </form>
</div>
</div>