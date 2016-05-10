<?php

/*改行*/
$br = "<br />";

/*$aの配列*/
$a = [1, 2, 345, 789, 'Hello'];

/*$aの中身確認*/
var_dump($a);
echo $br;

/*foreach文*/
foreach ( $a as $value ) {

    echo $value . $br;

}

?>
