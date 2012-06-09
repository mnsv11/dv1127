<?php
class CHistogram { // Start of class

// Returns a printable string, containing the key-value-pairs.
//
public function ShowValues($anArray) {
    $s = "";
    foreach($anArray as $key => $value) {
        $s .= $value;
    }
    return $s;
}

// Calculate and return the average of the values.
//
public function Average($anArray) {
    return array_sum($anArray) / count($anArray);
}


public function PrintGraf($anArray) {
    
    $res = Array();
    
    // Calculate occurences for each key
    foreach($anArray as $key => $value) {
        @$res[$value] .= '*';
    }
    
    ksort($res);
    return $this->ShowValues($res);

}

} // End of class


