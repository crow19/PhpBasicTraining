<?php

/*改行*/
$br = "<br />";

/*関数宣言*/
/*M_PI=円周率(3.14159265358979323846)*/
function circle($r) {

    return $r * $r * M_PI;

}

/*変数*/
$r = 3;

/*関数の呼び出し*/
$area = circle($r);

/*表示*/
echo $area;


?>
