<div class="row spacerow ">
    <div class="boxleft maright">
    <div class="row spacerow">
            <div class="boxtitle"><h2><?=$listnamedm?></h2>Sản Phẩm </div>
            <div class="boxcontent spdm spacerow">
            <?php
            foreach ($dssp as $sp) {
                extract($sp);
                $linksp = "index.php?act=sanphamct&idsp=".$id;
                $upload = '../imagephp/'.$img;
                echo '<div class="boxsp">
                <a href="'.$linksp.'"> <img  src="'.$upload.'" alt=""></a>
                <span>'.$price." $".'</span>
                <br>
                <a href="'.$linksp.'">'.$name.'</a>
            </div>';
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