<?php
    include "../inc/header.php";
?>
<div id="container" class="sub">
    <section>
        <div class="title">
            <h5>
                <?php
                $name="인섹트랑";
                echo $name;
                ?>
            </h5>
            <em>모바일 전용 웹사이트 구축</em>
            <div class="more mobile" data-link="http://insectrang.com"><a>이동하기</a></div>
        </div><!-- .title -->
        <div class="desc">
            <div class="photo">
                <img src="../images/<?=basename($_SERVER['PHP_SELF'], '.php');?>.png" alt="<?=$name?>">
            </div><!-- .photo -->
            <div class="info">
                <dl>
                    <dt>기여도</dt>
                    <dd>퍼블리싱 30&#37;</dd>
                    <dd>디자인 40&#37;</dd>
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
            <div class="text">박람회용으로 제작된 페이지입니다.<br>제품 상세 설명이 들어갈 이미지 구역과 다른 제품으로 이동할 수 있는 버튼으로 구성되어있습니다.</div><!-- .text -->
            <div class="sub_photo">
                <img src="../images/<?=basename($_SERVER['PHP_SELF'], '.php');?>_1.jpg" alt="<?=$name?>">
            </div><!-- .sub_photo -->
        </div><!-- .dsec -->
        <?php include "work_btn.php"; ?>
    </section>
</div><!-- #container -->
<?php
include "../inc/footer.php";
?>
