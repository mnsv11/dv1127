<?php


class CDice {  //classstart

//medlemsvariabel
   private $iLastThrows = Array();
    
    
    // kastar t�rningen och retunera ett v�rde.
    public function Roll() {
        return rand(1,6);
    }

    // kasta flera g�nger, retunera v�rde.
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


} // slut p� class



