<?php
    include "../inc/header.php";
?>
<div id="container" class="sub">
    <section>
        <div class="title">
            <h5>
                <?php
                $name="제이라로비";
                echo $name;
                ?>
            </h5>
            <em>반응형 웹사이트 구축</em>
            <div class="more"><a href="https://jlarovie.com/" target="_blank">이동하기</a></div>
        </div><!-- .title -->
        <div class="desc">
            <div class="photo">
                <img src="../images/<?=basename($_SERVER['PHP_SELF'], '.php');?>.png" alt="<?=$name?>">
            </div><!-- .photo -->
            <div class="info">
                <dl>
                    <dt>기여도</dt>
                    <dd>퍼블리싱 40&#37;</dd>
                    <dd>디자인 40&#37;</dd>
                    <dd>유지보수</dd>
                </dl>
                <dl>
                    <dt>사용 프로그램</dt>
                    <dd>비쥬얼 스튜디오 코드</dd>
                    <dd>어도비 포토샵</dd>
                </dl>
                <dl>
                    <dt>사용 언어</dt>
                    <dd>html5</dd>
                    <dd>css3</dd>
                    <dd>jquery</dd>
                </dl>
            </div><!-- .info -->
            <div class="text">기존에 제작되어 있던 틀에서 메인 페이지의 디자인을 수정하여 퍼블리싱하였고, 브랜드 페이지(서브 페이지)의 전체 디자인 및 퍼블리싱을 맡아 진행했습니다. </div><!-- .text -->
            <div class="sub_photo">
                <img src="../images/<?=basename($_SERVER['PHP_SELF'], '.php');?>_1.jpg" alt="<?=$name?>">
                <img src="../images/<?=basename($_SERVER['PHP_SELF'], '.php');?>_2.jpg"alt="<?=$name?>">
            </div><!-- .sub_photo -->
        </div><!-- .dsec -->
        <?php include "work_btn.php"; ?>
    </section>
</div><!-- #container -->
<?php
include "../inc/footer.php";
?>
