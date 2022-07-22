<?php
    include "../inc/header.php";
?>
<div id="container" class="sub">
    <section>
        <div class="title">
            <h5>
                <?php
                $name="더샤인팩토리 e카탈로그";
                echo $name;
                ?>
            </h5>
            <em>e카탈로그 디자인</em>
            <div class="more mobile" data-link="/work/work07/?id=work07_01"><a>이동하기</a></div>
        </div><!-- .title -->
        <div class="desc">
            <div class="photo">
                <img src="../images/<?=basename($_SERVER['PHP_SELF'], '.php');?>.png" alt="<?=$name?>">
            </div><!-- .photo -->
            <div class="info">
                <dl>
                    <dt>기여도</dt>
                    <dd>디자인 100&#37;</dd>
                </dl>
                <dl>
                    <dt>사용 프로그램</dt>
                    <dd>어도비 포토샵</dd>
                </dl>
            </div><!-- .info -->
            <div class="text">기존 카탈로그를 재제작하면서 교육에 치중되어 있던 내용을 회사가 하는 다양한 일의 홍보 위주로 기획 및 제작하였습니다.</div><!-- .text -->
            <div class="sub_photo">
                <img src="../images/<?=basename($_SERVER['PHP_SELF'], '.php');?>_01.jpg" alt="<?=$name?>">
                <img src="../images/<?=basename($_SERVER['PHP_SELF'], '.php');?>_02.jpg"alt="<?=$name?>">
            </div><!-- .sub_photo -->
        </div><!-- .dsec -->
        <?php include "work_btn.php"; ?>
    </section>
</div><!-- #container -->
<?php
include "../inc/footer.php";
?>
