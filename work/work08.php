<?php
    include "../inc/header.php";
?>
<div id="container" class="sub">
    <section>
        <div class="title">
            <h5>
                <?php
                $name="제이라로비 상세페이지";
                echo $name;
                ?>
            </h5>
            <em>제품 상세페이지 디자인</em>
            <div class="more mobile" data-link="/work/work08/?id=work08_01"><a>이동하기</a></div>
        </div><!-- .title -->
        <div class="desc">
            <div class="photo">
                <img src="/images/<?=basename($_SERVER['PHP_SELF'], '.php');?>.png" alt="<?=$name?>">
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
            <div class="text">신뢰와 안전을 강조하고 싶었던 브랜드 이념에 맞게 부드러운 색상을 사용하여 사용자가 봤을 때 편안한 느낌을 받도록 하고, 라인을 사용하여 자연스럽게 시선이 흘러갈 수 있도록 디자인하였습니다.</div><!-- .text -->
            <div class="sub_photo">
                <img src="../images/<?=basename($_SERVER['PHP_SELF'], '.php');?>_01.jpeg" alt="<?=$name?>">
            </div><!-- .sub_photo -->
        </div><!-- .dsec -->
        <?php include "work_btn.php"; ?>
    </section>
</div><!-- #container -->
<?php
include "../inc/footer.php";
?>
