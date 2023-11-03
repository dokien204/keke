<?php
    if(is_array($listsua)){
        extract($listsua);
    }
?>
<div class="row header"><h1>Cập Nhật Hàng Hoá </h1></div>
        <div class="row formct">
            <br>
            <form action="index.php?act=updatedm" method="post">
                <div class="row spacerow">
                    Mã loại
                    <br>
                    <input type="text" name="maloai" id="" value="<?php if(isset($id)&&($id!='')) echo $id ?>">
                </div>
                <div class="row spacerow">
                    Tên loại
                    <br>
                    <input type="text" name="tenloai" id="" value="<?php if(isset($name)&&($name!='')) echo $name ?>">
                </div>
                <div class="row spacerow">
                    <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>">
                    <input type="submit" name="sua" value="Cập Nhật">
                    <input type="reset" value="Nhập Lại">
                    <a href="index.php?act=listds"><input type="button" value="Danh Sách"></a>    
                </div>
                <?php
                if(isset($messupdate)&&($messupdate!='')){
                    echo $messupdate;
                }
                    
                ?>
            </form>
        </div>
        </div>