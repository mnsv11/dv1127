<?php

// -------------------------------------------------------------------------------------------
//
// Throw a dice, return the value.
//
function diceThrow() {
    return rand(1,6);
}


// -------------------------------------------------------------------------------------------
//
// Throw a dice repeatedly, return the value(s).
//
function diceThrowRepeatedly($aNumber) {
    $throws = Array();
    for($i=1; $i<=$aNumber; $i++) {
        $throws[$i] = diceThrow(); 
    }    
    return $throws;
}


?>
