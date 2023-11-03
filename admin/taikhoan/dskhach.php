<div class="row header"><h1>Danh Sách Khách Hàng</h1></div>
        <div class="row formct">
            <br>
                <div class="row spacerow formds">
                   <table>
                    <tr>
                        <th>Mã Tài Khoản</th>
                        <th>Tài Khoản</th>
                        <th>Mật Khẩu</th>
                        <th>Email</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Quyền</th>
                        <th>OPTION</th>
                    </tr>
                    <?php
                    foreach ($listkh as $khachhang) {
                        extract($khachhang);
                        $xoatk = "index.php?act=xoatk&id=".$id;
                        echo '<tr>
                        <td>'.$id.'</td>
                        <td>'.$user.'</td>
                        <td>'.$pass.'</td>
                        <td>'.$email.'</td>
                        <td>'.$address.'</td>
                        <td>'.$tel.'</td>';
                        if ($role == 0) {
                            echo '<td>Khách</td>';
                        } elseif ($role == 1) {
                            echo '<td>Admin</td>';
                        } else {
                            echo '<td>???</td>';
                        }
                        echo '<td>
                              <a href="'.$xoatk.'"><input type="button"  value="Xoá"></a></td>
                        
                    </tr>';
                    }
                    ?>
                    
                   </table>
                </div>
        </div>