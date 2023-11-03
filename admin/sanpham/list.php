<div class="row header spacerow"><h1>Danh Sách Sản Phẩm</h1></div>
<br>
<form action="index.php?act=listsp" method="post">
            <input type="text" name="sreachsp" id="">
            <br>
            <select name="iddm" id="">
                <option value="0">All</option>
                <?php
                foreach ($listds as $danhmuc) {
                    extract($danhmuc);
                    echo '<option value="'.$id.'">'.$name.'</option>'; 
                }
                ?>
                </select>
                <br>
                <br>
                <input type="submit" name='listtk' value="Tìm Kiếm">
            </form>
        <div class="row formct">
            <br>
            <form action="" method="post">
                <div class="row spacerow formds">
                   <table>
                    <tr>
                        <th></th>
                        <th>Mã Sản Phẩm</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Image</th>
                        <th>Giá</th>
                        <th>Mô tả</th>
                        <th>VIEW</th>
                        <th></th>
                    </tr>
                    <?php
                    foreach ($listsp as $sanpham) {
                        extract($sanpham);
                        $suasp = "index.php?act=suasp&id=".$id;
                        $xoasp = "index.php?act=xoasp&id=".$id;
                        echo '<tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td><img style="width:200px; height:200px;" src="'.$img.'" alt=""></td>
                        <td>'.$price.'</td>
                        <td>'.$mota.'</td>
                        <td>'.$luotxem.'</td>
                        <td><a href="'.$suasp.'"><input type="button"   value="Sửa"></a>
                        <a href="'.$xoasp.'"><input type="button"  value="Xoá"></a></td>
                    </tr>';
                    }
                    ?>
                   </table>
                </div>
                <div class="row spacerow">
                    <a href="index.php?act=addsp"><input type="button" value="Nhập Thêm"></a>
                </div>
            </form>
        </div>