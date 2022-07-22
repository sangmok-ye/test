<?php
    include "../inc/header.php";
?>
<div id="container" class="sub">
    <section>
        <div class="title">
            <h5>
                <?php
                $name="푸조와곰솔 웹진";
                echo $name;
                ?>
            </h5>
            <em>웹진뷰어 웹사이트 구축</em>
            <div class="more"><a href="https://www.pujongomsol.com/html/webzine.php" target="_blank">이동하기</a></div>
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
                    <dd>php</dd>
                </dl>
            </div><!-- .info -->
            <div class="text">Swiper 라이브러리를 활용하여 슬라이드로 제작했습니다. 분기마다 업데이트되어야 하는 웹진을 매번 새로운 파일로 올리는 것이 아닌 PHP 함수를 활용하여 파일명과 폴더명을 통일시켜 올려주면 자동으로 인식이 되도록 해서 간편하게 사용하도록 제작하였습니다.</div><!-- .text -->
            <div class="sub_photo">
                <img src="../images/<?=basename($_SERVER['PHP_SELF'], '.php');?>_1.jpg" alt="<?=$name?>">
                <img src="../images/<?=basename($_SERVER['PHP_SELF'], '.php');?>_2.jpg"alt="<?=$name?>">
                <img src="../images/<?=basename($_SERVER['PHP_SELF'], '.php');?>_3.jpg"alt="<?=$name?>">
            </div><!-- .sub_photo -->
        </div><!-- .dsec -->
        <?php include "work_btn.php"; ?>
    </section>
</div><!-- #container -->
<?php
include "../inc/footer.php";
?>
