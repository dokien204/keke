<?php
// view giỏ hàng
function giohang($ban)
{
    global $upload;
    $tong = 0;
    $chay = 0;
    if ($ban == 1) {
        $xoaspgio_th = '<th>Thao tác</th>';
        $td = '<td></td>';
    } else {
        $xoaspgio_th = '';
        $td = '';
    }
    echo '<tr>
                <th>Hình</th>
                <th>Sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                ' . $xoaspgio_th . '
            </tr>';
    foreach ($_SESSION['giohang'] as $addgio) {
        $hinh = $upload . $addgio[2];
        $ttien = $addgio[3] * $addgio[4];
        $tong += $ttien;
        if ($ban == 1) {
            $xoaspgio_td = '<td><a href ="index.php?act=delgio&idgio=' . $chay . '"><input type="button" value="Xoá"></a></td>';
        } else {
            $xoaspgio_td = '';
        }
        echo '<tr>
                    
                    <td><img src="' . $hinh . '" alt="" height="80px"></td>
                    <td>' . $addgio[1] . '</td>
                    <td>' . $addgio[3] . '</td>
                    <td>' . $addgio[4] . '</td>
                    <td>' . $ttien . '</td>
                    ' . $xoaspgio_td . '
                </tr>';
        $chay += 1;
    }
    echo '<tr>
                    <td colspan="4">Tổng Đơn Hàng</td>
                    <td>' . $tong . '</td>
                </tr>';
}
// thống kê sản phẩm
function loadall_thongkesp()
{
    $sql = "select danhmuc.id as madm, danhmuc.name as tendm, count(sanpham.id) as countsp, 
    min(sanpham.price) as mingia, max(sanpham.price) as maxgia , avg(sanpham.price) as avgsp
    from sanpham left join danhmuc on danhmuc.id=sanpham.iddm group by danhmuc.id order by danhmuc.id desc";
    $listtk = pdo_query($sql);
    return $listtk;
}
