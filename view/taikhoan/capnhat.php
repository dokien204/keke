<div class="row spacerow ">
    <div class="boxleft maright">
        <div class="row spacerow">
            <?php
            if(isset($_SESSION['tk'])&&($_SESSION['tk'])){
                extract($_SESSION['tk']);
            }
            ?>
            <div class="boxtitle">CẬP NHẬT TÀI KHOẢN</div>
            <div class="boxcontent formct">
                <form action="index.php?act=capnhattk" method="post">
                    <div class="row spacerow">
                        Tài khoản
                    <input type="text" name="user" value="<?= $user?>">
                    </div>
                    <div class="row spacerow">
                        Mật Khẩu
                    <input type="password" name="pass" value="<?= $pass?>">
                    </div>
                    <div class="row spacerow">
                        Email
                    <input type="email" name="email" value="<?= $email?>">
                    </div>
                    <div class="row spacerow">
                        Địa chỉ
                    <input type="text" name="address" value="<?= $address?>">
                    </div>
                    <div class="row spacerow">
                        Số điện thoại
                    <input type="text" name="tel" value="<?= $tel?>">
                    </div>
                    <div class="row spacerow">
                        <input type="hidden" name="id" value="<?= $id?>">
                        <input type="submit" value="Cập nhật" name="capnhat">
                        <input type="reset" value="Nhập Lại">
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