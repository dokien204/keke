<div class="row spacerow ">
    <div class="boxleft maright">
        <div class="row spacerow">
            <div class="boxtitle">Quên mật khẩu</div>
            <div class="boxcontent formct">
                <form action="index.php?act=quenmk" method="post">
                    <div class="row spacerow">
                        Tài khoản
                    <input type="text" name="user" id="">
                    </div>
                    <div class="row spacerow">
                        Số điện thoại
                    <input type="text" name="tel" id="">
                    </div>
                    <div class="row spacerow">
                        Email
                    <input type="email" name="email" id="">
                    </div>
                    <div class="row spacerow">
                        <input type="submit" value="Tìm lại mật khẩu" name="quenmk">
                        <input type="reset" value="Nhập Lại">
                    </div>
                    <div class="messdk">
                <?php
                if(isset($messmk)&& $messmk !=''){
                    echo $messmk;
                }
                else{
                    echo '';
                }
                ?>
            </div>
                </form>
            </div>
            
        </div>
    </div>
    <div class="boxright ">
        <?php
        include "./boxright.php";
        ?>
    </div>

</div>