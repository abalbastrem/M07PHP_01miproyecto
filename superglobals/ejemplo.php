<?php
 $a = 1;
 $b = 10;
 
 function test() {
//      global $a; // Es declara després d'existir
    $GLOBALS['c']=$GLOBALS['a']+$GLOBALS['b']; // Es un array
     
 }
 
test();

echo $c . "  " . count($GLOBALS) . " "; // Dóna 8. Hi ha 6 variables predefinides a $GLOBALS
print_r($GLOBALS);

?>