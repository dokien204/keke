<div class="row header"><h1>Danh Sách Bình Luận</h1></div>
        <div class="row formct">
            <br>
                <div class="row spacerow formds">
                   <table>
                    <tr>
                        <th>ID</th>
                        <th>Nội dung bình luận</th>
                        <th>Tài khoản</th>
                        <th>Sản phẩm bình luận</th>
                        <th>Ngày bình luận</th>
                        <th>OPTION</th>
                    </tr>
                    <?php
                    foreach ($listbl as $binhluan) {
                        extract($binhluan);
                        $xoabl = "index.php?act=xoabl&id=".$id;
                        echo '<tr>
                        <td>'.$id.'</td>
                        <td>'.$noidung.'</td>
                        <td>'.$iduser.'</td>
                        <td>'.$idpro.'</td>
                        <td>'.$ngaybinhluan.'</td>
                        <td>
                        <a href="'.$xoabl.'"><input type="button"  value="Xoá"></a>
                        </td>
                    </tr>';
                    }
                    ?>
                   </table>
                </div>
        </div>