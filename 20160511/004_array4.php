<?php

/*改行*/
$br = "<br />";

/*多次元配列*/
/*変数に対してarray作成*/
$a = array(
        0 => array(
                0 => 'AA',
                1 => 'AB'
        ),
        1 => array(
                0 => 'BA',
                1 => 'BB'
        ),

);

/*表示*/
var_dump($a);

/*改行*/
echo $br . $br;

/*arrayからBAだけを表示*/
echo '$a[1][0] = ', $a[1][0];

?>
