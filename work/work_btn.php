<?php
    $file_name = basename($_SERVER['PHP_SELF']);
    // 파일명 읽기 - work1.php 추출
    $file_num = substr($file_name,5,2);
    // 문자열 자르기 - 1 추출
    $prev_num = $file_num - 1;
    $next_num = $file_num + 1;
    $prev_link =  "work".$prev_num.".php";
    $next_link =  "work".$next_num.".php";

    $dir = $_SERVER['DOCUMENT_ROOT']."/work";
    $scandir = scandir($dir);
    $count = count($scandir);
    $result = strval($count) - 5;
    // 기본은 2
?>
<div class="btn">
        <div class="btn_prev"><a href="<?php if($prev_num<10){
            echo "work0".$prev_num.".php";
        }else{echo $prev_link;}
            ?>" style="<?php if($prev_num == "0"){
            echo "display:none";} ?>">이전</a></div><!-- .btn_prev -->
        <div class="btn_next"><a href="<?php if($next_num<10){
            echo "work0".$next_num.".php";
        }else{echo $next_link;}?>" style="<?php if($next_num == $result){
            echo "display:none";} ?>">다음</a></div><!-- .btn_next -->
</div><!-- .btn -->
