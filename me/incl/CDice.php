<?php


class CDice {  //classstart

//medlemsvariabel
   private $iLastThrows = Array();
    
    
    // kastar tärningen och retunera ett värde.
    public function Roll() {
        return rand(1,6);
    }

    // kasta flera gånger, retunera värde.
    public function RollRepeatedly($aNumber) {
        $this->iLastThrows = Array();
        for($i=1; $i<=$aNumber; $i++) {
            $this->iLastThrows[$i] = $this->Roll(); 
        }    
        return $this->iLastThrows;
    }

    
public function GetLastThrows() {
        return $this->iLastThrows;
    }


} // slut på class



