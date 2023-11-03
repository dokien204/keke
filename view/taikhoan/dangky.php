<div class="row spacerow ">
    <div class="boxleft maright">
        <div class="row spacerow">
            <div class="boxtitle">ĐĂNG KÝ</div>
            <div class="boxcontent formct">
                <form action="index.php?act=dangky" method="post">
                    <div class="row spacerow">
                        Tài khoản
                    <input type="text" name="user" id="">
                    </div>
                    <div class="row spacerow">
                        Mật Khẩu
                    <input type="password" name="pass" id="">
                    </div>
                    <div class="row spacerow">
                        Email
                    <input type="email" name="email" id="">
                    </div>
                    <div class="row spacerow">
                        <input type="submit" value="Đăng Ký" name="dangky">
                        <input type="reset" value="Nhập Lại">
                    </div>
                    <div class="messdk">
                <?php
                if(isset($messdk)&& $messdk !=''){
                    echo $messdk;
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