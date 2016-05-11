<?php

/*改行*/
$br = "<br />";


function hoge( $a = "Hello"){

    /*$aと連結*/
    $a .= ", World";

    return $a;

}

/*表示*/
echo hoge();

?>
