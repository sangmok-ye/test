<?php
    include "../../inc/header.php";
?>
<div id="container" class="sub work_gallery">
    <section>
        <?php
        $src = $_GET["id"];
        $file_name = basename($_SERVER['PHP_SELF']);
        // 파일명 읽기 - work1.php 추출
        $file_num = substr($src,7,2);
        // 문자열 자르기 - 1 추출

        $prev_num = $file_num - 1;
        $next_num = $file_num + 1;
        $prev_link =  "work07_".$prev_num;
        $next_link =  "work07_".$next_num;

        $dir = $_SERVER['DOCUMENT_ROOT']."/work/work07/images";
        $scandir = scandir($dir);
        $count = count($scandir);
        $result = strval($count) - 2;
        ?>
        <div class="photo">
            <img src="images/<?=$src?>.jpg" alt="더샤인팩토리 e카달로그">
        </div><!-- .photo -->
            <div class="btn_prev"><a href="./?id=<?php if($prev_num<10){
                echo "work07_0".$prev_num;
            }else{echo $prev_link;}
                ?>" style="<?php if($prev_num == "0"){
                echo "display:none";} ?>">이전</a></div><!-- .btn_prev -->
            <div class="btn_next"><a href="./?id=<?php if($next_num<10){
                echo "work07_0".$next_num;
            }else{echo $next_link;}?>" style="<?php if($next_num == $result){
                echo "display:none";} ?>">다음</a></div><!-- .btn_next -->
    </section>
</div><!-- #container -->
<?php
include "../../inc/footer.php";
?>
