<div class="row spacerow">
            <div class="boxtitle">Tài Khoản</div>
            <div class="boxcontent formlogin">
                <?php
                if(isset($_SESSION['tk'])){
                    extract($_SESSION['tk']);
                    ?>
                    <div class="row spacerow">
                        HELLO <strong><?=$user ?></strong>
                    </div>
                    <div class="row spacerow">
                    <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                    <li><a href="index.php?act=capnhattk">Chỉnh sửa tài khoản</a></li>
                    <?php if($role==1){ ?>
                    <li><a href="index.php?act=admin">Đăng nhập admin</a></li>
                    <?php }?>
                    <li><a href="index.php?act=logout">Thoát</a></li>
                    </div>

                    <?php 
                }else{
                ?>
                <form action="index.php?act=dangnhap" method="post">
                    <div class="row spacerow">
                        Tên đăng nhập
                        <br>
                        <input type="text" name="user" id="">
                    </div>
                    <div class="row spacerow">
                        Mật khẩu
                        <br>
                        <input type="password" name="pass" id="">
                    </div>
                    <div class="row spacerow">
                        <input type="checkbox" name="" id="">Ghi nhớ tài khoản ?
                    </div>
                    <div class="row spacerow ">
                        <input type="submit" value="Đăng nhập" name="dangnhap">
                    </div>
                </form>
                <li><a href="#">Quên mật khẩu</a></li>
                <li><a href="index.php?act=dangky">Đăng kí</a></li>
                <?php }?>
            </div>
        </div>
        <div class="row spacerow">
            <div class="boxtitle">Danh Mục</div>
            <div class="boxcontent2 danhmuc">
                <ul>
                    <?php
                    foreach ($dsdm as $dm) {
                        extract($dm);
                        $link = 'index.php?act=sanpham&iddm='.$id; 
                      echo  '<li><a href="'.$link.'">'.$name.'</a></li>';
                    }
                    ?>
                </ul>
            </div>
            <div class="boxfooter searchsp">
                <form action="index.php?act=sanpham" method="post">
                    <input type="text" name="search" id="" placeholder="Từ khoá tìm kiếm">
                    <input type="submit" name="tim" value="Tìm Kiếm">
                </form>
            </div>
        </div>
        <div class="row spacerow">
            <div class="boxtitle">Top 10 yêu thích</div>
            <div class="boxcontent spc ">
                <?php
                foreach ($list10 as $like) {
                    extract($like);
                    $linksp = "index.php?act=sanphamct&idsp=".$id;
                    $upload = '../imagephp/'.$img;
                    echo '<div class="row top10">
                    <a href="'.$linksp.'">  <img src="'.$upload.'" alt=""></a>
                    <a href="'.$linksp.'">'.$name.'</a>
                </div>';
                }
                ?>
            </div>
        </div>