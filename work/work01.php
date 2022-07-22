<?php
    include "../inc/header.php";
?>
<div id="container" class="sub work">
    <section>
        <div class="title">
            <h5>
                <?php
                $name="인섹트이노텍";
                echo $name;
                ?>
            </h5>
            <em>모바일 전용 웹사이트 구축</em>
            <div class="more mobile" data-link="http://insectit.co.kr"><a>이동하기</a></div><!-- .more -->
        </div><!-- .title -->
        <div class="desc">
            <div class="photo">
                <img src="../images/<?=basename($_SERVER['PHP_SELF'], '.php');?>.png" alt="<?=$name?>">
            </div><!-- .photo -->
            <div class="info">
                <dl>
                    <dt>기여도</dt>
                    <dd>퍼블리싱 100&#37;</dd>
                    <dd>디자인 50&#37;</dd>
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
                    <dd>php</dd>
                </dl>
            </div><!-- .info -->
            <div class="text">회사로 컨택이 가능하게끔 되어야 하는 유통회사의 특성 상 기업으로의 연결 버튼 생성 및 기능을 구현 하였으며, 더욱 많은 제품을 볼 수 있도록 헤더를 손의 움직임에 따라 숨김처리를 하였습니다.</div><!-- .text -->
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
