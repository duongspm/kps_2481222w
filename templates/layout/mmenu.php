<div class="menu-res">
    <div class="menu-bar-res">
        <a id="hamburger" href="#menu" title="Menu"><span></span></a>
        <div class="logo-mmenu">
            <a href="" title="<?=trangchu?>" class="peShiner2">
                <?=$func->getImage(['sizes' => '80x90x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $logo['photo'], 'alt' => $setting['name'.$lang]])?>
            </a>
        </div>

        <div class="search-res">
            <p class="icon-search transition"><i class="fa fa-search"></i></p>
            <div class="search-grid w-clear">
                <input type="text" name="keyword-res" id="keyword-res" placeholder="<?=nhaptukhoatimkiem?>"
                    onkeypress="doEnter(event,'keyword-res');" />
                <p onclick="onSearch('keyword-res');"><i class="fa fa-search"></i></p>
            </div>
        </div>

    </div>

    <nav id="menu">

        <ul>

            <li><a class="<?php if($com=='' || $com=='index') echo 'active'; ?> transition" href=""
                    title="<?=trangchu?>"><?=trangchu?></a></li>
            <li><a class="<?php if($com=='' || $com=='index') echo 'active'; ?> transition" href="gioi-thieu"
                    title="Giới thiệu">Giới thiệu</a></li>
            <li><a class="<?php if($com=='' || $com=='index') echo 'active'; ?> transition" title="Hồ sơ nhân lực">Hồ sơ
                    năng lực</a>
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
                <a class="has-child <?php if($com=='dich-vu') echo 'active'; ?> transition" href="dich-vu"
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
                <a class="has-child <?php if($com=='thu-vien-anh') echo 'active'; ?> transition" href="thu-vien-anh"
                    title="Album ảnh">Album ảnh</a>
            </li>
            <li>
                <a class="<?php if($com=='chung-nhan') echo 'active'; ?> transition menu-line" href="chung-nhan"
                    title="Chúng nhận">Chúng nhận</a>
            </li>
            <li>
                <a class="<?php if($com=='tin-tuc') echo 'active'; ?> transition menu-line" href="tin-tuc"
                    title="Tin tức">Tin tức</a>
            </li>
            <li>
                <a class="<?php if($com=='tuyen-dung') echo 'active'; ?> transition menu-line" href="tuyen-dung"
                    title="Tuyển dụng">Tuyển dụng</a>
            </li>
            <li><a class="<?php if($com=='lien-he') echo 'active'; ?> transition menu-line" href="lien-he"
                    title="<?=lienhe?>"><?=lienhe?></a></li>
        </ul>
    </nav>
</div>