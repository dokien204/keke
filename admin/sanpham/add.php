<div class="row header"><h1>Thêm Mới Hàng Hoá </h1></div>
        <div class="row formct">
            <br>
            <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                Danh Mục
                <br>
                <select name="iddm" id="">
                <?php
                foreach ($listds as $danhmuc) {
                    extract($danhmuc);
                    echo '<option value="'.$id.'">'.$name.'</option>'; 
                }
                ?>
                </select>
                <br>
                <div class="row spacerow">
                    Tên Sản Phẩm
                    <br>
                    <input type="text" name="tensp" id="">
                </div>
                <div class="row spacerow">
                    Giá
                    <br>
                    <input type="text" name="giasp" id="">
                </div>
                <div class="row spacerow">
                    Image
                    <br>
                    <input type="file" name="image" id="">
                </div>
                <div class="row spacerow">
                    Mô tả
                    <br>
                    <textarea name="mota" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="row spacerow">
                    Luợt Xem
                    <br>
                    <input type="text" name="luotxem" id="" >
                </div>
                <div class="row spacerow">
                    <input type="submit" name="themsp" value="Thêm Mới">
                    <input type="reset" value="Nhập Lại">
                    <a href="index.php?act=listsp"><input type="button" value="Danh Sách"></a>    
                </div>
                <?php
                if(isset($mess)&&($mess!='')){
                    echo $mess;
                }
                    
                ?>
            </form>
        </div>
        </div>