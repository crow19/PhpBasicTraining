<?php

/*改行*/
$br = "<br />";

/*$aを値定義*/
$arr = array( 0=>"PHP", 1=>"JAVA", 2=>"LINUX", 3=>"あいうえお", 4=>"aaaaa");

/*配列を表示*/
foreach ($arr as $value) {

    echo $value . $br;

}

/*改行*/
echo $br . $br;

/*$arr[5]に研修を代入*/
$arr[5] = "研修";

/*$keyと$arrを全て表示*/
foreach ($arr as $key => $value) {

    echo $key . "&nbsp;" . $value . $br;

}

?>
