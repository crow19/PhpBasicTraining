<?php

/*$x(case)の値*/
$x = 1;

/*switch文*/
switch($x){

    /*$x=1と一致しているか*/
    case 1:
    echo "値は1だね。";
    break;

    /*$x=2か3と一致しているか*/
    case 2:
    case 3:
    echo "値は2か3だね。";
    break;

    /*確認用*/
    case 4:
    echo "値4は確認用";
    break;

    /*$xが1,2,3以外*/
    default:
    echo "1でも2でも3でもないね。";
}

?>
