<?php

/*改行*/
$br = "<br />";

/*$x=数値*/
$x = 6;
/*$y=文字列*/
$y = "6";

/*条件分岐1*/
/*左辺と右辺の値が等しくない場合はTRUE*/
if( $x!=$y ){

    echo "TRUE" . $br;

} else {

    echo "FALSE" . $br;

}

/*条件分岐2*/
/*左辺と右辺の値が等しくない、あるいは型式が等しくない場合はTRUE*/
if( $x!==$y ){

    echo "TRUE" . $br;

} else {

    echo "FALSE" . $br;

}


?>
