<?php
require_once("CDice.php");

class CDiceSvg extends CDice {  

    // -------------------------------------------------------------------------------------------
    //
    // Member variables
    //
    private $iScale     = 0.15;
    private $iWidth     = 100;
    private $iHeight    = 100;

    
    // -------------------------------------------------------------------------------------------
    //
    // Return a string with the Svg-representation of the dice
    //
    public function GetSvg($aDice) {

        $html = $this->GetSvgHeader();
        
        switch($aDice) {
            case '1': $html .= $this->GetDice1(); break;
            case '2': $html .= $this->GetDice2(); break;
            case '3': $html .= $this->GetDice3(); break;
            case '4': $html .= $this->GetDice4(); break;
            case '5': $html .= $this->GetDice5(); break;
            case '6': $html .= $this->GetDice6(); break;    
        }
        
        $html .= "</svg>";
                
        return $html;
    }


    // ------------------------------------------------------------------------------------
    //
    // Create the Svg header
    //
    public function GetSVGHeader() {
        
    $html = <<<EOD
<svg 
     baseProfile="full"
     xmlns="http://www.w3.org/2000/svg"
     xmlns:xlink="http://www.w3.org/1999/xlink"
     xmlns:ev="http://www.w3.org/2001/xml-events"
         width="{$this->iWidth}"
   height="{$this->iHeight}"
   id="dice">
  <defs
     id="defs1">
   </defs>
EOD;

        return $html;
    }

    
    // ------------------------------------------------------------------------------------
    //
    // Create a part of the picture and return as string
    //
    public function GetDice1() {
        
        $html = <<<EOD
  <!-- Here is dice 1 -->
  <g id="dice1">
        <g transform="scale({$this->iScale})">
            <path style="fill:none;stroke:#000000;stroke-width:7;" d="M71.4594727,553.5C34.0805664,553.5,3.5,522.9189453,3.5,485.5400391
                V71.4594727C3.5,34.0820312,34.0805664,3.5,71.4594727,3.5h414.0805664C522.9179688,3.5,553.5,34.0820312,553.5,71.4594727
                v414.0805664C553.5,522.9189453,522.9179688,553.5,485.5400391,553.5H71.4594727z"/>
            <circle style="fill:#FF724C;stroke:#740000;stroke-width:5;" cx="278.5" cy="278.5" r="57.1152344"/> 
        </g>
  </g>
EOD;

        return $html;
    }
    

        // ------------------------------------------------------------------------------------
    //
    // Create a part of the picture and return as string
    //
    public function GetDice2() {
        
        $html = <<<EOD
  <!-- Here is dice 2 -->
  <g id="dice2">
        <g transform="scale({$this->iScale})">
             <circle style="fill:#FF724C;stroke:#740000;stroke-width:5;" cx="439.9746094" cy="439.9736328" r="57.1152344"/> 
            <circle style="fill:#FF724C;stroke:#740000;stroke-width:5;" cx="117.0258789" cy="117.0263672" r="57.1147461"/> 
            <path style="fill:none;stroke:#000000;stroke-width:7;" d="M553.5,485.5400391
                C553.5,522.9189453,522.9179688,553.5,485.5390625,553.5H71.4589844C34.0820312,553.5,3.5,522.9199219,3.5,485.5410156
                V71.4599609C3.5,34.0820312,34.0820312,3.5,71.4589844,3.5h414.0800781C522.9179688,3.5,553.5,34.0820312,553.5,71.4599609
                V485.5400391z"/>
        </g>
  </g>
EOD;

        return $html;
    }
    
    // ------------------------------------------------------------------------------------
    //
    // Create a part of the picture and return as string
    //
    public function GetDice3() {
        
        $html = <<<EOD
  <!-- Here is dice 3 -->
  <g id="dice3">
        <g transform="scale({$this->iScale})">
            <circle style="fill:#FF724C;stroke:#740000;stroke-width:5;" cx="439.9746094" cy="439.9736328" r="57.1152344"/> 
            <circle style="fill:#FF724C;stroke:#740000;stroke-width:5;" cx="117.0258789" cy="117.0263672" r="57.1147461"/> 
            <path style="fill:none;stroke:#000000;stroke-width:7;" d="M553.5,485.5400391
                C553.5,522.9189453,522.9179688,553.5,485.5390625,553.5H71.4589844C34.0820312,553.5,3.5,522.9199219,3.5,485.5410156
                V71.4599609C3.5,34.0820312,34.0820312,3.5,71.4589844,3.5h414.0800781C522.9179688,3.5,553.5,34.0820312,553.5,71.4599609
                V485.5400391z"/>
            <circle style="fill:#FF724C;stroke:#740000;stroke-width:5;" cx="278.5" cy="278.5" r="57.1152344"/> 
        </g>
  </g>
EOD;

        return $html;
    }
    
    // ------------------------------------------------------------------------------------
    //
    // Create a part of the picture and return as string
    //
    public function GetDice4() {
        
        $html = <<<EOD
  <!-- Here is dice 4 -->
  <g id="dice4">
        <g transform="scale({$this->iScale})">
            <circle style="fill:#FF724C;stroke:#740000;stroke-width:5;" cx="117.0263672" cy="439.9746094" r="57.1152344"/> 
            <circle style="fill:#FF724C;stroke:#740000;stroke-width:5;" cx="439.9746094" cy="439.9746094" r="57.1152344"/> 
            <circle style="fill:#FF724C;stroke:#740000;stroke-width:5;" cx="439.9736328" cy="117.0258789" r="57.1147461"/> 
            <path style="fill:none;stroke:#000000;stroke-width:7;" d="M71.4594727,553.5C34.0805664,553.5,3.5,522.9179688,3.5,485.5390625
                V71.4589844C3.5,34.0820312,34.0805664,3.5,71.4594727,3.5h414.0805664C522.9179688,3.5,553.5,34.0820312,553.5,71.4589844
                v414.0800781C553.5,522.9179688,522.9179688,553.5,485.5400391,553.5H71.4594727z"/>
            <circle style="fill:#FF724C;stroke:#740000;stroke-width:5;" cx="117.0258789" cy="117.0253906" r="57.1152344"/> 
        </g>
  </g>
EOD;

        return $html;
    }
    
    // ------------------------------------------------------------------------------------
    //
    // Create a part of the picture and return as string
    //
    public function GetDice5() {
        
        $html = <<<EOD
  <!-- Here is dice 5 -->
  <g id="dice5">
        <g transform="scale({$this->iScale})">
            <circle style="fill:#FF724C;stroke:#740000;stroke-width:5;" cx="117.0263672" cy="439.9746094" r="57.1152344"/> 
            <circle style="fill:#FF724C;stroke:#740000;stroke-width:5;" cx="439.9746094" cy="439.9746094" r="57.1152344"/> 
            <circle style="fill:#FF724C;stroke:#740000;stroke-width:5;" cx="439.9731445" cy="117.0258789" r="57.1147461"/> 
            <path style="fill:none;stroke:#000000;stroke-width:7;" d="M71.4594727,553.5C34.0805664,553.5,3.5,522.9189453,3.5,485.5400391
                V71.4594727C3.5,34.0820312,34.0805664,3.5,71.4594727,3.5h414.0805664C522.9179688,3.5,553.5,34.0820312,553.5,71.4594727
                v414.0805664C553.5,522.9189453,522.9179688,553.5,485.5400391,553.5H71.4594727z"/>
            <circle style="fill:#FF724C;stroke:#740000;stroke-width:5;" cx="278.5" cy="278.5" r="57.1152344"/> 
            <circle style="fill:#FF724C;stroke:#740000;stroke-width:5;" cx="117.0258789" cy="117.0256348" r="57.1154785"/> 
        </g>
  </g>
EOD;

        return $html;
    }
    
    // ------------------------------------------------------------------------------------
    //
    // Create a part of the picture and return as string
    //
    public function GetDice6() {
        
        $html = <<<EOD
  <!-- Here is dice 6 -->
  <g id="dice6">
        <g transform="scale({$this->iScale})">
            <circle style="fill:#FF724C;stroke:#740000;stroke-width:5;" cx="117.0263672" cy="439.9746094" r="57.1152344"/> 
            <circle style="fill:#FF724C;stroke:#740000;stroke-width:5;" cx="439.9746094" cy="439.9746094" r="57.1152344"/> 
            <circle style="fill:#FF724C;stroke:#740000;stroke-width:5;" cx="439.9736328" cy="117.0258789" r="57.1147461"/> 
            <path style="fill:none;stroke:#000000;stroke-width:7;" d="M71.4594727,553.5C34.0805664,553.5,3.5,522.9179688,3.5,485.5390625
                V71.4589844C3.5,34.0820312,34.0805664,3.5,71.4594727,3.5h414.0805664C522.9179688,3.5,553.5,34.0820312,553.5,71.4589844
                v414.0800781C553.5,522.9179688,522.9179688,553.5,485.5400391,553.5H71.4594727z"/>
            <circle style="fill:#FF724C;stroke:#740000;stroke-width:5;" cx="117.0263672" cy="117.0253906" r="57.1152344"/> 
            <circle style="fill:#FF724C;stroke:#740000;stroke-width:5;" cx="439.9736328" cy="278.5004883" r="57.1147461"/> 
            <circle style="fill:#FF724C;stroke:#740000;stroke-width:5;" cx="117.0258789" cy="278.5" r="57.1152344"/> 
        </g>
  </g>
EOD;

        return $html;
    }
    

} // End of class


?>
