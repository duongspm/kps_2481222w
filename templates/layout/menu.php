<div class="menu">
    <div class="wrap-content menuuu">
        <div class="menu__icon">
            <a class="<?php if($com=='' || $com=='index') echo 'active'; ?> transition" href="" title="<?=trangchu?>">
                <img src="assets/images/images/icon-home.png" alt="">
            </a>
        </div>
        <ul class="menu-list">
            <li>
                <a class="<?php if($com=='gioi-thieu') echo 'active'; ?> transition menu--line " href="gioi-thieu"
                    title="Giới thiệu">Giới thiệu</a>
            </li>
            <li>
                <a class="has-child transition  menu--line" title="Hồ sơ nhân lực">Hồ sơ năng lực</a>
                <?php if(count($hoso)) { ?>
                <ul>
                    <?php foreach($hoso as $klist => $vlist) { ?>
                    <li>
                        <?php if(!empty($vlist['file_attach'])){?>
                        <a class="has-child" target="_blank" title="<?=$vlist['name'.$lang]?>"
                            href="<?=UPLOAD_FILE_L.$vlist['file_attach']?>"><?=$vlist['name'.$lang]?></a>
                        <?php }?>
                    </li>
                    <?php } ?>
                </ul>
                <?php } ?>
            </li>
            <li>
                <a class="has-child <?php if($com=='dich-vu') echo 'active'; ?> transition  menu--line" href="dich-vu"
                    title="Dịch vụ">Dịch vụ</a>
                <?php if(count($dichvulist)) { ?>
                <ul>
                    <?php foreach($dichvulist as $klist => $vlist) { ?>
                    <li>
                        <a class="has-child " title="<?=$vlist['name'.$lang]?>"
                            href="<?=$vlist[$sluglang]?>"><?=$vlist['name'.$lang]?></a>
                    </li>
                    <?php } ?>
                </ul>
                <?php } ?>
            </li>

            <li>
                <a class="<?php if($com=='thu-vien-anh') echo 'active'; ?> transition menu--line " href="thu-vien-anh"
                    title="Album ảnh">Album ảnh</a>
            </li>
            <li>
                <a class="<?php if($com=='chung-nhan') echo 'active'; ?> transition menu--line " href="chung-nhan"
                    title="Chứng nhận">Chứng nhận</a>
            </li>
            <li>
                <a class="<?php if($com=='tin-tuc') echo 'active'; ?> transition menu--line " href="tin-tuc"
                    title="Tin tức">Tin
                    tức</a>
            </li>

            <li>
                <a class="<?php if($com=='tuyen-dung') echo 'active'; ?> transition menu--line " href="tuyen-dung"
                    title="Tuyển dụng">Tuyển dụng</a>
            </li>

            <li><a class="<?php if($com=='lien-he') echo 'active'; ?> transition menu--line" href="lien-he"
                    title="Liên hệ">Liên
                    hệ</a></li>
        </ul>
        <div class="menu__search">
            <div class="search w-clear">
                <input type="text" id="keyword" placeholder="Nhập từ khóa ..." onkeypress="doEnter(event,'keyword');" />
                <p onclick="onSearch('keyword');"><i class="fas fa-search"></i></p>
            </div>
        </div>
    </div>
</div>