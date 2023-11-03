<div class="row spacerow ">
        <div class="boxleft maright">
        <form action="" method="post">
        <div class="row spacerow">
            <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div>
            <div class="boxcontent">
            <table>
                <?php
                if(isset($_SESSION['tk'])){
                    $name = $_SESSION['tk']['user'];
                    $address = $_SESSION['tk']['address'];
                    $email = $_SESSION['tk']['email'];
                    $tel = $_SESSION['tk']['tel'];
                }
                else{
                    $name='';
                    $address='';
                    $email='';
                    $tel='';
                }
                ?>
                <tr>
                    <td>Người đặt hàng</td>
                    <td><input type="text" name="name" value="<?php echo $name?>"></td>
                </tr>
                <tr>
                    <td>Địa chỉ</td>
                    <td><input type="text" name="address" value="<?php echo $address?>"></td>
                </tr>
                <tr>
                    <td> Email</td>
                    <td><input type="text" name="email" value="<?php echo $email?>"></td>
                </tr>
                <tr>
                    <td> Số Điện thoại</td>
                    <td><input type="text" name="tel" value="<?php echo $tel?>"></td>
                </tr>
            </table>
            </div>
        </div>
        <div class="row spacerow">
            <div class="boxtitle">PHƯƠNG THỨC THANH TOÁN</div>
            <div class="boxcontent">
                <table>
                    <tr>
                        <td><input type="radio" name="pttt" checked id="">TRẢ TIỀN KHI NHẬN HÀNG</td>
                        <td><input type="radio" name="pttt"  id="">CHUYỂN KHOẢN NGÂN HÀNG</td>
                        <td><input type="radio" name="pttt"  id="">THANH TOÁN ONLINE</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row spacerow">
            <div class="boxtitle">THÔNG TIN GIỎ HÀNG</div>
            <div class="boxcontent">
                <table>
                    <?php giohang(0) ?>
                </table>
            </div>
        </div>
        <div class="row spracerow">
            <input id="bam" type="submit" onclick="return confirm('Đặt Hàng Thành Công!')" value="ĐỒNG Ý ĐẶT HÀNG">
        </div>
        </form>
    </div>
    <div class="boxright ">
        <?php
        include "boxright.php";
        ?>
    </div>
</div>
