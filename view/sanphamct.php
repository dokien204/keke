<style>
    .boxcontent2.binhluan table td {
        width: 200px; /* Điều chỉnh giá trị width theo nhu cầu  */
        word-break: break-all;
    }
</style>

<div class="row spacerow ">
    <div class="boxleft maright">
    <div class="row spacerow">
        <?php
        extract($loadsp);
        ?>
            <div class="boxtitle"><?php echo $name?></div>
            <div class="boxcontent">
            <?php
            $uploadsp= $upload.$img;
                echo '<div class="row spacerow ctsp"><img src="'.$uploadsp.'" alt=""></div>';
                echo $mota;
            ?>
            </div>
        </div>
        <div class="row spacerow">
            <div class="boxtitle">BÌNH LUẬN</div>
            <div class="boxcontent2 binhluan">
            <table>
                <?php
                foreach ($dsbl as $bl) {
                    extract($bl);
                    echo '<tr><td>'.$noidung.'</td>';
                    echo '<td>'.$iduser.'</td>';
                    echo '<td>'.$ngaybinhluan.'</td></tr>';
                }
                ?>
            </table>
        </div>
            <div class="boxfooter">
            <form action="" method="post">
            <input type="hidden" name="iduser" value="<?php echo isset($_SESSION['tk']['id'])?$_SESSION['tk']['id']:''?>">
            <input type="hidden" name="idpro" value="<?= $idpro?>">
            <input type="text" name="noidung" id="">
            <input type="submit" name="guibinhluan" value="Gửi bình luận">
        </form>
            </div>
        </div>
        <div class="row spacerow">
            <div class="boxtitle">SẢN PHẨM LIÊN QUAN</div>
            <div class="boxcontent">
                <?php
                foreach ($listspcl as $listspcl) {
                    extract($listspcl);
                    $linksp = 'index.php?actsanphamct&idsp='.$id;
                    echo '<li><a href="'.$linksp.'">'.$name.'</a></li>';
                    
                }
                ?>
            </div>
        </div>
    </div>
    <div class="boxright ">
        <?php
        include "boxright.php";
        ?>
    </div>

</div>