<?php

/*改行*/
$br = "<br />";

/*問題*/
$a = array(
        0 => array(
                0 => 'AA',
                1 => 'AB'
        ),
        1 => array(
                0 => 'BA',
                1 => 'BB'
        ),
        2 => array(
                0 => 'CA',
                1 => 'CB',
                2 => 'CC'
        ),
);

/*表示*/
var_dump($a);

/*改行*/
echo $br . $br;

/*問題*/
foreach ($a as $key1 => $value) {
    foreach ($value as $key2 => $value2) {
        echo $key1 . " " . $key2 . " " . $value2 . $br;
    }
}

?>
