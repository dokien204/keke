<div class="row header"><h1>Thống kê sản phẩm</h1></div>
        <div class="row formct">
            <br>
                <div class="row spacerow formds">
                   <table>
                    <tr>
                        <th>Mã danh mục</th>
                        <th>Tên danh mục</th>
                        <th>Số lượng</th>
                        <th>Giá cao nhất</th>
                        <th>Giá thấp nhất</th>
                        <th>Giá trung bình</th>
                    </tr>
                    <?php
                    foreach ($listtk as $thongke) {
                        extract($thongke);
                        echo '<tr>
                        <td>'.$madm.'</td>
                        <td>'.$tendm.'</td>
                        <td>'.$countsp.'</td>
                        <td>'.$maxgia.'</td>
                        <td>'.$mingia.'</td>
                        <td>'.$avgsp.'</td>
                    </tr>';
                    }
                    ?>
                   </table>
                </div>
        </div>