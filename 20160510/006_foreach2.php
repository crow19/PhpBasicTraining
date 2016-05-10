<?php

/*改行*/
$br = "<br />";

/*$aの配列*/
$a = ['A'=>1, 3=>2, 1=>'C', 5=>4, 'Z'=>'Hello'];

/*$aの中身確認*/
var_dump($a);
echo $br . $br;

/*foreach文*/
foreach ( $a as $key => $value) {

    /*表示*/
    echo $key .",". $value . $br;

}

?>
