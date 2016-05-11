<?php

/*改行*/
$br = "<br />";

/*$aにHelloは入らない*/
/*デフォルト値が必ず入ってくるのは前に書く*/
function hoge( $a = "Hello"){

    /*連結*/
    $a .= ", World";

    /*リターン*/
    return $a;

}

/*表示*/
echo hoge('yamamoto');

?>
