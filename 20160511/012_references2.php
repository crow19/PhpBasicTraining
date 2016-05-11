<?php

/*改行*/
$br = "<br />";

/*function*/
function piyo(&$a) {
    return ++$a;
}

/*$bに1代入*/
$b = 1;

/*表示*/
echo piyo($b) . $br;
echo $b . $br;

?>
