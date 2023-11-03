<div class="row spacerow ">
    <div class="boxleft maright">
        <div class="row spacerow ">
            <div class="banner">
                <div class="slideshow-container">
                    <div class="slide">
                        <img src="./image/anh0.jpg">
                    </div>
                    <div class="slide">
                        <img src="./image/anh1.jpg">
                    </div>
                    <div class="slide">
                        <img src="./image/anh2.jpg">
                    </div>
                    <div class="slide">
                        <img src="./image/anh3.jpg">
                    </div>
                    <div class="click">
                        <input class="prev" type="button" onclick="prevSlide()" value="&#10094;">
                        <input class="next" type="button" onclick="nextSlide()" value="&#10095;">
                        <input class="pause" type="button" onclick="pauseSlide()" value="&#10074;&#10074;">
                    </div>
                </div>
            </div>
        </div>
         <div class="sp row spacerow">
            <div class="row sp">
                <?php
                $i=0;
                foreach ($spnew as $sp) {
                    extract($sp);
                    $linksp = "index.php?act=sanphamct&idsp=".$id;
                    $upload = '../imagephp/'.$img;
                    echo '<div class="boxsp">
                    <a href="'.$linksp.'"> <img  src="'.$upload.'" alt=""></a>
                    <span>'.$price." $".'</span>
                    <br>
                    <a href="'.$linksp.'">'.$name.'</a>
                    <div class="row banggiohang">
                    <form action="index.php?act=addgiohang" method="post">
                    <input type="hidden" name="id" value="'.$id.'">
                    <input type="hidden" name="name" value="'.$name.'">
                    <input type="hidden" name="img" value="'.$img.'">
                    <input type="hidden" name="price" value="'.$price.'">
                    <input type="submit" name="addgio" value="Thêm vào giỏ hàng">
                </form>
                </div>   
                </div>';
                
                $i+=1;
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