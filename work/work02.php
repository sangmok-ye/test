<?php
    include "../inc/header.php";
?>
<div id="container" class="sub">
    <section>
        <div class="title">
            <h5>
                <?php
                $name="더샤인팩토리";
                echo $name;
                ?>
            </h5>
            <em>반응형 웹사이트 리뉴얼</em>
            <div class="more"><a href="https://www.theshinef.com" target="_blank">이동하기</a></div>
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
            <div class="text">기존의 어두운 홈페이지를 밝고 화사함을 느낄 수 있도록 디자인하였으며, 큰 사진을 활용하여 교육 관련 상품의 대상인 어린이의 눈에 잘 보이도록 제작하였습니다.<br><br>그리고 AOS 라이브러리를 사용하여 서브 페이지로 이동하면 헤더는 하단으로, 컨테이너는 상단으로 움직이도록 제작하였습니다.
            </div><!-- .text -->
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
