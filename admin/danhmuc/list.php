<div class="row header"><h1>Danh Sách Loại Hàng</h1></div>
        <div class="row formct">
            <br>
            <form action="" method="post">
                <div class="row spacerow formds">
                   <table>
                    <tr>
                        <th></th>
                        <th>Mã Loại</th>
                        <th>Tên Loại</th>
                        <th></th>
                    </tr>
                    <?php
                    foreach ($listds as $danhmuc) {
                        extract($danhmuc);
                        $sua = "index.php?act=sua&id=".$id;
                        $xoa = "index.php?act=xoa&id=".$id;
                        echo '<tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td><a href="'.$sua.'"><input type="button"  value="Sửa"></a>
                        <a href="'.$xoa.'"><input type="button"  value="Xoá"></a></td>
                    </tr>';
                    }
                    ?>
                    
                   </table>
                </div>
                <div class="row spacerow">
                    <a href="index.php?act=adddm"><input type="button" value="Nhập Thêm"></a>
                </div>
            </form>
        </div>