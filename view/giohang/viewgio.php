<div class="row spacerow ">
    <div class="boxleft maright">
    <div class="row spacerow">
            <div class="boxtitle">GIỎ HÀNG</div>
            <div class="boxcontent">
            <table>
                
                <?php
                giohang(1);
                ?>
                
            </table>
            </div>
        </div>
        
       <div class="row spacerow formct">
            <a href="index.php?act=bill"><input type="button" value="Đồng ý đặt hàng"></a>
            <a href="index.php?act=delgio"><input type="button" value="Xoá giỏ hàng"></a>
       </div>
    </div>
    <div class="boxright ">
        <?php
        include "boxright.php";
        ?>
    </div>

</div>