<?php
    include "../inc/header.php";
?>
<div id="container" class="sub">
    <section>
        <div class="title">
            <h5>
                <?php
                $name="에스아이소프트";
                echo $name;
                ?>
            </h5>
            <em>반응형 웹사이트 구축</em>
            <div class="more"><a href="http://sisoft.co.kr/" target="_blank">이동하기</a></div>
        </div><!-- .title -->
        <div class="desc">
            <div class="photo">
                <img src="../images/<?=basename($_SERVER['PHP_SELF'], '.php');?>.png" alt="<?=$name?>">
            </div><!-- .photo -->
            <div class="info">
                <dl>
                    <dt>기여도</dt>
                    <dd>퍼블리싱 100&#37;</dd>
                    <dd>디자인 100&#37;</dd>
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
            <div class="text">웹에이전시의 특성을 살려 포트폴리오가 잘 드러나도록 배치 및 제작하였으며, 민트색을 메인 색으로 사용해서 강조하고자 하는 포인트가 눈에 쉽게 띄도록 제작하였습니다.</div><!-- .text -->
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
