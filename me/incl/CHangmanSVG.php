<?php
// ===========================================================================================
//
// CHangmanSVG.php
//
// Class for drawing the hangman picture. Can draw parts of it.
// The picture is drawn using SVG (http://www.w3.org/Graphics/SVG/)
//

class CHangmanSVG {

	// ------------------------------------------------------------------------------------
	//
	// Internal variables
	//


	// ------------------------------------------------------------------------------------
	//
	// Constructor
	// Automatically called when the object is created.
	// http://se2.php.net/manual/en/language.oop5.decon.php
	//
	public function __construct() {
		;
	}


	// ------------------------------------------------------------------------------------
	//
	// Destructor
	// Automatically called when the object is destroyed.
	// http://se2.php.net/manual/en/language.oop5.decon.php
	//
	public function __destruct() {
		;
	}


	// ------------------------------------------------------------------------------------
	//
	// Create the whole picture and return as string
	//
	public function DrawPicture() {

		$hogerarm 	= $this->GetHogerArm();
		$vansterarm = $this->GetVansterArm();
		$vansterben = $this->GetVansterBen();
		$hogerben		= $this->GetHogerBen();
		$kroppen 		= $this->GetKroppen();
		$huvud			= $this->GetHuvud();
		$repet 			= $this->GetRepet();
		$stolpen		= $this->GetStolpen();
		$kullen 		= $this->GetKullen();
		$header 		= $this->GetSvgHeader();

		$html = <<<EOD
{$header}
 
{$kullen}
{$stolpen}
{$kroppen} 
{$hogerarm} 
{$vansterarm} 
{$vansterben} 
{$hogerben}	
{$repet} 		
{$huvud}

</svg>
EOD;

		return $html;
	}


	// ------------------------------------------------------------------------------------
	//
	// Create the some parts of/whole picture and return as string
	//
	public function DrawPartsOfPicture($aNumberOfParts=9) {

		$i=0;
		$parts[$i++] 	= $this->GetKullen();
		$parts[$i++]	= $this->GetStolpen();
		$parts[$i++] 	= $this->GetHogerArm();
		$parts[$i++] 	= $this->GetVansterArm();
		$parts[$i++] 	= $this->GetVansterBen();
		$parts[$i++]	= $this->GetHogerBen();
		$parts[$i++] 	= $this->GetKroppen();
		$parts[$i++]	= $this->GetRepet();
		$parts[$i++]	= $this->GetHuvud();

		if($aNumberOfParts == 0) {
			return;
		}
		
		$html = $this->GetSvgHeader();
	
		for($i=0; $i<$aNumberOfParts; $i++) {
			$html .= $parts[$i];
		}
		
		$html .= "</svg>";

		return $html;
	}


	// ------------------------------------------------------------------------------------
	//
	// Create a part of the picture and return as string
	//
	public function GetSVGHeader() {
		
		$html = <<<EOD
<svg 
     baseProfile="full"
     xmlns="http://www.w3.org/2000/svg"
     xmlns:xlink="http://www.w3.org/1999/xlink"
     xmlns:ev="http://www.w3.org/2001/xml-events"
   xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
   version="1.0"
   width="400"
   height="500"
   id="svg2">
  <defs
     id="defs4">
    <filter
       id="filter12239">
      <feGaussianBlur
         id="feGaussianBlur12241"
         stdDeviation="0.84166667"
         inkscape:collect="always" />
    </filter>
    <filter
       height="1.2177229"
       y="-0.10886145"
       width="1.3752246"
       x="-0.1876123"
       id="filter12703">
      <feGaussianBlur
         id="feGaussianBlur12705"
         stdDeviation="0.91851852"
         inkscape:collect="always" />
    </filter>
    <filter
       id="filter13311">
      <feGaussianBlur
         id="feGaussianBlur13313"
         stdDeviation="0.018073074"
         inkscape:collect="always" />
    </filter>
  </defs>
EOD;

		return $html;
	}
	

	// ------------------------------------------------------------------------------------
	//
	// Create a part of the picture and return as string
	//
	public function GetKullen() {
		
		$html = <<<EOD
  <!-- KULLEN -->
  <g
     id="kullen">
    <path
       d="M 400,360 A 200,140 0 1 1 2.2737368e-13,359.99999"
       transform="matrix(1,0,0,-1,0,860)"
       id="kulle"
       style="fill:#2de621;fill-opacity:1;fill-rule:evenodd;stroke:#35ab23;stroke-width:3;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
    <g
       transform="translate(-168,27)"
       id="g14323">
      <path
         d="M 237,423 C 237,385 253,378 253,378"
         id="path14285"
         style="fill:none;fill-rule:evenodd;stroke:#116216;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         d="M 230.28571,429.64286 C 230.28571,391.64286 245.28571,372.64286 245.28571,372.64286"
         id="path14287"
         style="fill:none;fill-rule:evenodd;stroke:#116216;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         d="M 232.78571,429.35714 C 232.78571,391.35714 255.78571,384.35714 255.78571,384.35714"
         id="path14289"
         style="fill:none;fill-rule:evenodd;stroke:#116216;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         d="M 234.67857,430.42857 C 234.67857,392.42857 218.67857,385.42857 218.67857,385.42857"
         id="path14293"
         style="fill:none;fill-rule:evenodd;stroke:#116216;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         d="M 241.39286,437.07143 C 241.39286,399.07143 226.39286,380.07143 226.39286,380.07143"
         id="path14295"
         style="fill:none;fill-rule:evenodd;stroke:#116216;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         d="M 238.89286,436.78571 C 238.89286,398.78571 215.89286,391.78571 215.89286,391.78571"
         id="path14297"
         style="fill:none;fill-rule:evenodd;stroke:#116216;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <g
         transform="translate(0,2)"
         id="g14319">
        <path
           d="M 239.78571,425.64286 C 239.78571,387.64286 270.78571,374.64286 270.78571,374.64286"
           id="path14291"
           style="fill:none;fill-rule:evenodd;stroke:#116216;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
        <path
           d="M 231.89286,433.07143 C 231.89286,395.07143 200.89286,382.07143 200.89286,382.07143"
           id="path14299"
           style="fill:none;fill-rule:evenodd;stroke:#116216;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      </g>
    </g>
    
    <g
       transform="translate(11.16072,-36.857145)"
       id="g14334">
      <path
         d="M 237,423 C 237,385 253,378 253,378"
         id="path14336"
         style="fill:none;fill-rule:evenodd;stroke:#116216;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         d="M 230.28571,429.64286 C 230.28571,391.64286 245.28571,372.64286 245.28571,372.64286"
         id="path14338"
         style="fill:none;fill-rule:evenodd;stroke:#116216;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         d="M 232.78571,429.35714 C 232.78571,391.35714 255.78571,384.35714 255.78571,384.35714"
         id="path14340"
         style="fill:none;fill-rule:evenodd;stroke:#116216;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         d="M 234.67857,430.42857 C 234.67857,392.42857 218.67857,385.42857 218.67857,385.42857"
         id="path14342"
         style="fill:none;fill-rule:evenodd;stroke:#116216;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         d="M 241.39286,437.07143 C 241.39286,399.07143 226.39286,380.07143 226.39286,380.07143"
         id="path14344"
         style="fill:none;fill-rule:evenodd;stroke:#116216;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         d="M 238.89286,436.78571 C 238.89286,398.78571 215.89286,391.78571 215.89286,391.78571"
         id="path14346"
         style="fill:none;fill-rule:evenodd;stroke:#116216;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <g
         transform="translate(0,2)"
         id="g14348">
        <path
           d="M 239.78571,425.64286 C 239.78571,387.64286 270.78571,374.64286 270.78571,374.64286"
           id="path14350"
           style="fill:none;fill-rule:evenodd;stroke:#116216;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
        <path
           d="M 231.89286,433.07143 C 231.89286,395.07143 200.89286,382.07143 200.89286,382.07143"
           id="path14352"
           style="fill:none;fill-rule:evenodd;stroke:#116216;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      </g>
    </g>
    <g
       transform="translate(77.160715,40.142855)"
       id="g14354">
      <path
         d="M 237,423 C 237,385 253,378 253,378"
         id="path14356"
         style="fill:none;fill-rule:evenodd;stroke:#116216;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         d="M 230.28571,429.64286 C 230.28571,391.64286 245.28571,372.64286 245.28571,372.64286"
         id="path14358"
         style="fill:none;fill-rule:evenodd;stroke:#116216;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         d="M 232.78571,429.35714 C 232.78571,391.35714 255.78571,384.35714 255.78571,384.35714"
         id="path14360"
         style="fill:none;fill-rule:evenodd;stroke:#116216;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         d="M 234.67857,430.42857 C 234.67857,392.42857 218.67857,385.42857 218.67857,385.42857"
         id="path14362"
         style="fill:none;fill-rule:evenodd;stroke:#116216;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         d="M 241.39286,437.07143 C 241.39286,399.07143 226.39286,380.07143 226.39286,380.07143"
         id="path14364"
         style="fill:none;fill-rule:evenodd;stroke:#116216;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         d="M 238.89286,436.78571 C 238.89286,398.78571 215.89286,391.78571 215.89286,391.78571"
         id="path14366"
         style="fill:none;fill-rule:evenodd;stroke:#116216;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <g
         transform="translate(0,2)"
         id="g14368">
        <path
           d="M 239.78571,425.64286 C 239.78571,387.64286 270.78571,374.64286 270.78571,374.64286"
           id="path14370"
           style="fill:none;fill-rule:evenodd;stroke:#116216;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
        <path
           d="M 231.89286,433.07143 C 231.89286,395.07143 200.89286,382.07143 200.89286,382.07143"
           id="path14372"
           style="fill:none;fill-rule:evenodd;stroke:#116216;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      </g>
    </g>

    <g
       transform="translate(-51.839285,32.142855)"
       id="g14374">
      <path
         d="M 237,423 C 237,385 253,378 253,378"
         id="path14376"
         style="fill:none;fill-rule:evenodd;stroke:#116216;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         d="M 230.28571,429.64286 C 230.28571,391.64286 245.28571,372.64286 245.28571,372.64286"
         id="path14378"
         style="fill:none;fill-rule:evenodd;stroke:#116216;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         d="M 232.78571,429.35714 C 232.78571,391.35714 255.78571,384.35714 255.78571,384.35714"
         id="path14380"
         style="fill:none;fill-rule:evenodd;stroke:#116216;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         d="M 234.67857,430.42857 C 234.67857,392.42857 218.67857,385.42857 218.67857,385.42857"
         id="path14382"
         style="fill:none;fill-rule:evenodd;stroke:#116216;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         d="M 241.39286,437.07143 C 241.39286,399.07143 226.39286,380.07143 226.39286,380.07143"
         id="path14384"
         style="fill:none;fill-rule:evenodd;stroke:#116216;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         d="M 238.89286,436.78571 C 238.89286,398.78571 215.89286,391.78571 215.89286,391.78571"
         id="path14386"
         style="fill:none;fill-rule:evenodd;stroke:#116216;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <g
         transform="translate(0,2)"
         id="g14388">
        <path
           d="M 239.78571,425.64286 C 239.78571,387.64286 270.78571,374.64286 270.78571,374.64286"
           id="path14390"
           style="fill:none;fill-rule:evenodd;stroke:#116216;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
        <path
           d="M 231.89286,433.07143 C 231.89286,395.07143 200.89286,382.07143 200.89286,382.07143"
           id="path14392"
           style="fill:none;fill-rule:evenodd;stroke:#116216;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      </g>
    </g>
  </g>
EOD;

		return $html;
	}
	

	// ------------------------------------------------------------------------------------
	//
	// Create a part of the picture and return as string
	//
	public function GetStolpen() {
		
		$html = <<<EOD
  <!-- STOLPEN -->
  <g
     id="stolpen">
    <g
       transform="translate(-5.1922,31.4)"
       id="stolpenf">
      <g
         transform="translate(-30,-20)"
         id="stolpen">
        <g
           id="g9981">
          <path
             d="M 150,380 L 150,20 L 310,20 L 310,40 L 250,40 L 170,90 L 170,380 L 150,380 z"
             id="path9977"
             style="fill:none;fill-rule:evenodd;stroke:#000000;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
        </g>
        <path
           d="M 169.95696,70.043043 L 169.95696,40.001544 L 220.00203,40.001544 L 169.95696,70.043043 z"
           id="path9979"
           style="fill:none;fill-rule:evenodd;stroke:#000000;stroke-width:0.91391373px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      </g>
      <path
         d="M 121.1922,179.6 L 121.1922,0.6 L 200.1922,0.6 L 279.1922,0.6 L 279.1922,9.6 L 279.1922,18.6 L 249.78693,18.6 L 220.38159,18.6 L 179.82959,43.85 L 139.27759,69.1 L 139.23489,213.85 L 139.1922,358.6 L 130.1922,358.6 L 121.1922,358.6 L 121.1922,179.6 z M 167.4422,34.62463 C 180.5047,26.73469 191.1922,19.90145 191.1922,19.43964 C 191.1922,18.97783 179.4922,18.6 165.1922,18.6 L 139.1922,18.6 L 139.1922,35.21501 L 139.1922,51.83003 L 141.4422,50.4 C 142.6797,49.61348 154.3797,42.51457 167.4422,34.62463 z"
         id="path9996"
         style="fill:#e38a13;fill-opacity:1;stroke:#b17903;stroke-width:1;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
    </g>
    <path
       d="M 138.66522,383.23855 C 136.57333,386.11766 131.01663,388.2073 124.44647,388.2073 C 118.20522,388.20729 112.85471,386.33035 110.54022,383.67605 L 110.54022,401.61355 L 138.82147,401.61355 L 138.82147,383.23855 L 138.66522,383.23855 z"
       id="rect13376"
       style="opacity:1;fill:#2de621;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:0.30000001;stroke-linecap:butt;stroke-linejoin:miter;marker:none;marker-start:none;marker-mid:none;marker-end:none;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:0.99607843;visibility:visible;display:inline;overflow:visible;enable-background:accumulate" />
  </g>
EOD;

		return $html;
	}
	

	// ------------------------------------------------------------------------------------
	//
	// Create a part of the picture and return as string
	//
	public function GetRepet() {
		
		$html = <<<EOD
  <!-- The ROPE -->  
  <g
     id="repet"
     style="display:inline">
    <g
       transform="translate(-8,0)"
       id="rep">
      <path
         d="M 372,314.5 A 30.5,35.5 0 1 1 311,314.5 A 30.5,35.5 0 1 1 372,314.5 z"
         transform="matrix(0.5929062,0,0,0.7065814,60.52253,-105.21984)"
         id="path10043"
         style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#a77516;stroke-width:6.14400005;stroke-linecap:butt;stroke-linejoin:miter;marker:none;marker-start:none;marker-mid:none;marker-end:none;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;visibility:visible;display:inline;overflow:visible;enable-background:accumulate" />
      <path
         d="M 263.19045,93.190479 L 262.8095,28.809521"
         id="path11715"
         style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#a77516;stroke-width:3.97672272;stroke-linecap:butt;stroke-linejoin:miter;marker:none;marker-start:none;marker-mid:none;marker-end:none;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;visibility:visible;display:inline;overflow:visible;enable-background:accumulate" />
    </g>
   </g>
EOD;

		return $html;
	}
	

	// ------------------------------------------------------------------------------------
	//
	// Create a part of the picture and return as string
	//
	public function GetHogerArm() {
		
		$html = <<<EOD
  <!-- RIGHT ARM -->
  <g
     id="hoger_arm">
    <path
       d="M 215.46048,193.41291 C 215.40947,192.57926 215.36773,191.33104 215.36773,190.63909 L 215.36773,189.38099 L 214.80746,189.38099 L 214.24718,189.38099 L 214.15616,190.05666 C 214.01759,191.08523 213.9688,191.10261 213.95649,190.12779 L 213.94526,189.23874 L 213.38616,189.23874 C 212.91945,189.23874 212.81688,189.29163 212.76542,189.5588 C 212.73151,189.73483 212.69506,189.05453 212.6844,188.04702 L 212.66503,186.21518 L 213.19846,186.29348 C 213.49184,186.33655 214.80655,186.48415 216.12004,186.62147 C 217.67088,186.78362 218.48768,186.92463 218.44969,187.02366 C 218.41753,187.10753 218.31106,187.53431 218.21311,187.97205 C 218.05695,188.66994 218.06413,188.81239 218.27143,189.12876 C 218.50712,189.48846 218.50631,189.48986 218.00963,189.58304 C 217.73562,189.63444 217.47929,189.7285 217.44001,189.79205 C 217.40073,189.85561 217.48344,190.88037 217.62382,192.0693 C 217.76419,193.25823 217.83625,194.25743 217.78395,194.28975 C 217.73166,194.32208 217.6129,193.6309 217.52005,192.7538 C 217.1818,189.55862 217.25556,189.80773 216.6478,189.80773 L 216.1153,189.80773 L 216.01174,192.36818 C 215.93507,194.2639 215.86211,194.92864 215.7307,194.92864 C 215.60579,194.92864 215.52574,194.47964 215.46047,193.41291 L 215.46048,193.41291 z"
       id="path12915"
       style="opacity:1;fill:#a8c1b5;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:4;stroke-linecap:butt;stroke-linejoin:miter;marker:none;marker-start:none;marker-mid:none;marker-end:none;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;visibility:visible;display:inline;overflow:visible;enable-background:accumulate" />
    <g
       id="g13315">
      <path
         d="M 236.31291,130.28561 C 232.17648,128.77897 226.6456,133.29577 223.26073,136.2652 C 222.04374,137.33283 221.61721,137.89888 217.74341,145.09348 C 213.86961,152.28807 217.21312,143.96193 214.3303,154.08835 C 211.44747,164.21476 211.5286,185.49939 211.5286,185.49939 C 211.5286,185.49939 219.78972,188.24698 220.63413,185.49939 C 222.87161,178.21889 224.48648,159.38234 224.48648,159.38234 C 224.48648,159.38234 233.93379,151.33562 236.0435,147.38261 C 238.30067,143.15329 240.44933,131.79225 236.31291,130.28561 z"
         id="path12911"
         style="fill:#a8c1b5;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         d="M 212.09104,185.633 L 212.09104,190.04267 L 211.6643,193.88336 L 212.66003,193.88336 L 213.37127,189.33144 L 213.22902,194.59459 L 214.0825,194.73684 L 214.79374,189.47368 L 214.93599,195.44808 L 216.50071,195.44808 L 216.64296,189.90043 L 217.21195,195.16358 L 218.49218,194.59459 L 217.92319,189.75818 L 219.63016,193.17212 L 220.76814,192.17639 L 218.63442,188.6202 L 219.20341,186.34424 L 212.09104,185.633 z"
         id="path12913"
         style="fill:#ecdab6;fill-opacity:0.99607843;fill-rule:evenodd;stroke:#ecdab6;stroke-width:0.30000001;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:0.99607843;filter:url(#filter13311)" />
      <path
         d="M 215.615,194.07515 C 215.56126,193.64486 215.47708,192.41264 215.42794,191.33689 L 215.33859,189.38099 L 214.79376,189.38099 C 214.37467,189.38099 214.22818,189.44635 214.15903,189.66421 C 214.10959,189.81998 214.10906,190.01202 214.15784,190.09095 C 214.20663,190.16989 214.17875,190.23447 214.0959,190.23447 C 214.01305,190.23447 213.94526,190.01043 213.94526,189.73661 C 213.94526,189.25366 213.92882,189.23874 213.39653,189.23874 L 212.84781,189.23874 L 212.75642,188.36439 C 212.70616,187.88349 212.66503,187.21594 212.66503,186.88094 L 212.66503,186.27184 L 213.34071,186.33824 C 214.58693,186.46071 215.14593,186.52798 216.71908,186.74478 C 217.57968,186.86337 218.30693,186.96095 218.3352,186.9616 C 218.36346,186.96225 218.33936,187.20282 218.28163,187.49621 C 218.08706,188.48499 218.07259,188.83473 218.21521,189.10122 C 218.33426,189.32367 218.28115,189.40265 217.88657,189.58989 C 217.41948,189.81154 217.41658,189.8191 217.50175,190.59284 C 217.54894,191.02163 217.53618,191.37245 217.47338,191.37245 C 217.36441,191.37245 217.30336,191.05899 217.34491,190.71277 C 217.35558,190.62378 217.2992,190.37968 217.2196,190.17033 C 217.09759,189.8494 217.00235,189.79668 216.61249,189.83427 C 216.15177,189.87869 216.14968,189.88247 216.03503,190.87459 C 215.97174,191.42224 215.93994,192.36042 215.96436,192.95943 C 215.98877,193.55844 215.96468,194.02131 215.91083,193.98803 C 215.85697,193.95474 215.79036,194.13676 215.76281,194.39251 C 215.72213,194.77013 215.69436,194.7105 215.615,194.07515 z"
         id="path12919"
         style="opacity:1;fill:#ecdbb6;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:0.56899005;stroke-linecap:butt;stroke-linejoin:miter;marker:none;marker-start:none;marker-mid:none;marker-end:none;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;visibility:visible;display:inline;overflow:visible;enable-background:accumulate" />
    </g>
  </g>
EOD;

		return $html;
	}
	

	// ------------------------------------------------------------------------------------
	//
	// Create a part of the picture and return as string
	//
	public function GetVansterArm() {
		
		$html = <<<EOD
  <!-- LEFT ARM -->  
  <g
     id="vanster_arm">
    <g
       transform="matrix(-1,0,0,1,505.25961,0.5005987)"
       id="g13321">
      <path
         d="M 236.31291,130.28561 C 232.17648,128.77897 226.6456,133.29577 223.26073,136.2652 C 222.04374,137.33283 221.61721,137.89888 217.74341,145.09348 C 213.86961,152.28807 217.21312,143.96193 214.3303,154.08835 C 211.44747,164.21476 211.5286,185.49939 211.5286,185.49939 C 211.5286,185.49939 219.78972,188.24698 220.63413,185.49939 C 222.87161,178.21889 224.48648,159.38234 224.48648,159.38234 C 224.48648,159.38234 233.93379,151.33562 236.0435,147.38261 C 238.30067,143.15329 240.44933,131.79225 236.31291,130.28561 z"
         id="path13323"
         style="fill:#a8c1b5;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         d="M 212.09104,185.633 L 212.09104,190.04267 L 211.6643,193.88336 L 212.66003,193.88336 L 213.37127,189.33144 L 213.22902,194.59459 L 214.0825,194.73684 L 214.79374,189.47368 L 214.93599,195.44808 L 216.50071,195.44808 L 216.64296,189.90043 L 217.21195,195.16358 L 218.49218,194.59459 L 217.92319,189.75818 L 219.63016,193.17212 L 220.76814,192.17639 L 218.63442,188.6202 L 219.20341,186.34424 L 212.09104,185.633 z"
         id="path13325"
         style="fill:#ecdab6;fill-opacity:0.99607843;fill-rule:evenodd;stroke:#ecdab6;stroke-width:0.30000001;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:0.99607843;filter:url(#filter13311)" />
      <path
         d="M 215.615,194.07515 C 215.56126,193.64486 215.47708,192.41264 215.42794,191.33689 L 215.33859,189.38099 L 214.79376,189.38099 C 214.37467,189.38099 214.22818,189.44635 214.15903,189.66421 C 214.10959,189.81998 214.10906,190.01202 214.15784,190.09095 C 214.20663,190.16989 214.17875,190.23447 214.0959,190.23447 C 214.01305,190.23447 213.94526,190.01043 213.94526,189.73661 C 213.94526,189.25366 213.92882,189.23874 213.39653,189.23874 L 212.84781,189.23874 L 212.75642,188.36439 C 212.70616,187.88349 212.66503,187.21594 212.66503,186.88094 L 212.66503,186.27184 L 213.34071,186.33824 C 214.58693,186.46071 215.14593,186.52798 216.71908,186.74478 C 217.57968,186.86337 218.30693,186.96095 218.3352,186.9616 C 218.36346,186.96225 218.33936,187.20282 218.28163,187.49621 C 218.08706,188.48499 218.07259,188.83473 218.21521,189.10122 C 218.33426,189.32367 218.28115,189.40265 217.88657,189.58989 C 217.41948,189.81154 217.41658,189.8191 217.50175,190.59284 C 217.54894,191.02163 217.53618,191.37245 217.47338,191.37245 C 217.36441,191.37245 217.30336,191.05899 217.34491,190.71277 C 217.35558,190.62378 217.2992,190.37968 217.2196,190.17033 C 217.09759,189.8494 217.00235,189.79668 216.61249,189.83427 C 216.15177,189.87869 216.14968,189.88247 216.03503,190.87459 C 215.97174,191.42224 215.93994,192.36042 215.96436,192.95943 C 215.98877,193.55844 215.96468,194.02131 215.91083,193.98803 C 215.85697,193.95474 215.79036,194.13676 215.76281,194.39251 C 215.72213,194.77013 215.69436,194.7105 215.615,194.07515 z"
         id="path13327"
         style="opacity:1;fill:#ecdbb6;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:0.56899005;stroke-linecap:butt;stroke-linejoin:miter;marker:none;marker-start:none;marker-mid:none;marker-end:none;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;visibility:visible;display:inline;overflow:visible;enable-background:accumulate" />
    </g>
    <path
       d="M 224.20783,203.37078 L 221.38993,227.71535 L 222.32923,243.07116 L 222.32923,247.19101 L 226.55609,270.41198 L 212.46655,271.16105 L 208.2397,273.40824 L 208.2397,277.52809 L 229.37399,275.65543 L 229.37399,276.40449 L 235.47945,276.40449 L 235.94911,269.28839 L 235.94911,256.92884 L 233.60086,243.07116 L 233.60086,239.70037 L 236.88841,225.84269 L 237.82771,211.98502 L 224.20783,203.37078 z"
       id="path13329"
       style="fill:none;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
  </g>
EOD;

		return $html;
	}


	// ------------------------------------------------------------------------------------
	//
	// Create a part of the picture and return as string
	//
	public function GetHogerBen() {
		
		$html = <<<EOD
  <!-- RIGHT LEG -->  
  <g
     id="hoger_ben">
    <g
       transform="translate(-0.3317709,1.0130308)"
       id="g13337">
      <path
         d="M 214.40371,272.23979 C 214.40946,270.90609 213.06471,271.36048 214.79951,270.54306 C 216.55078,269.71786 218.20114,266.94624 225.34042,266.58422 C 229.76283,266.35997 228.00041,266.5815 229.50467,264.84638 C 232.01612,261.94952 229.67494,263.02322 228.41101,256.85135 C 226.45881,247.31852 223.90691,243.64884 223.36973,234.58107 C 222.77747,224.58381 224.39074,226.39128 225.42765,218.83114 C 226.03655,214.39153 231.29474,207.43461 231.30758,207.03339 C 231.32342,206.53798 231.68744,206.78407 232.44212,207.80039 C 234.34491,210.3629 237.3756,213.01577 241.31633,215.56836 L 245.10744,218.02403 L 246.1678,220.96548 C 245.88024,222.78926 243.27166,227.65618 242.30593,231.32309 L 240.3191,237.49715 L 238.38629,242.95257 C 238.12597,243.68731 238.41729,244.63527 239.59573,256.11793 C 240.82109,268.05777 238.8707,262.71785 239.69212,264.81236 L 242.81816,272.78332 L 240.52537,272.78332 C 239.26209,272.78332 238.14143,272.58927 238.02959,272.35116 C 237.88065,272.03402 234.70856,272.16349 226.11191,272.83759 L 214.39718,273.75618 L 214.40371,272.23979 z"
         id="path13331"
         style="opacity:1;fill:#0036d6;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:0.11235955;stroke-linecap:butt;stroke-linejoin:miter;marker:none;marker-start:none;marker-mid:none;marker-end:none;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:0.99607843;visibility:visible;display:inline;overflow:visible;enable-background:accumulate" />
      <path
         d="M 214.48079,272.68539 C 214.42523,272.13466 214.31089,271.52817 214.22672,271.33764 C 214.11769,271.09085 214.38869,270.80967 215.16897,270.36 C 215.77138,270.01282 216.93775,269.30823 217.76089,268.79424 C 219.96598,267.41732 221.88203,266.93948 226.57365,266.59641 L 228.56887,266.45052 L 229.44232,265.1823 C 230.14224,264.16605 230.41115,263.93971 230.79585,264.04301 C 231.0599,264.11391 233.09466,264.17411 235.31754,264.17677 L 239.35914,264.18161 L 241.00093,268.39474 L 242.64273,272.60786 L 241.34736,272.68076 C 240.6349,272.72086 239.34245,272.58212 238.47523,272.37246 C 237.09462,272.03868 236.43386,272.02319 233.16341,272.24798 C 227.09743,272.66492 217.28995,273.40447 215.88494,273.5509 L 214.58181,273.68673 L 214.48079,272.68539 z"
         id="path13335"
         style="opacity:1;fill:#002121;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:0.30000001;stroke-linecap:butt;stroke-linejoin:miter;marker:none;marker-start:none;marker-mid:none;marker-end:none;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:0.99607843;visibility:visible;display:inline;overflow:visible;enable-background:accumulate" />
    </g>
  </g>
EOD;

		return $html;
	}


	// ------------------------------------------------------------------------------------
	//
	// Create a part of the picture and return as string
	//
	public function GetVansterBen() {
		
		$html = <<<EOD
  <!-- LEFT LEG -->  
  <g
     id="vanster_ben">
    <g
       transform="matrix(-1,0,0,1,504.86902,1.5280928)"
       id="g13346">
      <path
         d="M 214.40371,272.23979 C 214.40946,270.90609 213.06471,271.36048 214.79951,270.54306 C 216.55078,269.71786 218.20114,266.94624 225.34042,266.58422 C 229.76283,266.35997 228.00041,266.5815 229.50467,264.84638 C 232.01612,261.94952 229.67494,263.02322 228.41101,256.85135 C 226.45881,247.31852 223.90691,243.64884 223.36973,234.58107 C 222.77747,224.58381 224.39074,226.39128 225.42765,218.83114 C 226.03655,214.39153 231.29474,207.43461 231.30758,207.03339 C 231.32342,206.53798 231.68744,206.78407 232.44212,207.80039 C 234.34491,210.3629 237.3756,213.01577 241.31633,215.56836 L 245.10744,218.02403 L 246.1678,220.96548 C 245.88024,222.78926 243.27166,227.65618 242.30593,231.32309 L 240.3191,237.49715 L 238.38629,242.95257 C 238.12597,243.68731 238.41729,244.63527 239.59573,256.11793 C 240.82109,268.05777 238.8707,262.71785 239.69212,264.81236 L 242.81816,272.78332 L 240.52537,272.78332 C 239.26209,272.78332 238.14143,272.58927 238.02959,272.35116 C 237.88065,272.03402 234.70856,272.16349 226.11191,272.83759 L 214.39718,273.75618 L 214.40371,272.23979 z"
         id="path13348"
         style="opacity:1;fill:#0036d6;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:0.11235955;stroke-linecap:butt;stroke-linejoin:miter;marker:none;marker-start:none;marker-mid:none;marker-end:none;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:0.99607843;visibility:visible;display:inline;overflow:visible;enable-background:accumulate" />
      <path
         d="M 214.48079,272.68539 C 214.42523,272.13466 214.31089,271.52817 214.22672,271.33764 C 214.11769,271.09085 214.38869,270.80967 215.16897,270.36 C 215.77138,270.01282 216.93775,269.30823 217.76089,268.79424 C 219.96598,267.41732 221.88203,266.93948 226.57365,266.59641 L 228.56887,266.45052 L 229.44232,265.1823 C 230.14224,264.16605 230.41115,263.93971 230.79585,264.04301 C 231.0599,264.11391 233.09466,264.17411 235.31754,264.17677 L 239.35914,264.18161 L 241.00093,268.39474 L 242.64273,272.60786 L 241.34736,272.68076 C 240.6349,272.72086 239.34245,272.58212 238.47523,272.37246 C 237.09462,272.03868 236.43386,272.02319 233.16341,272.24798 C 227.09743,272.66492 217.28995,273.40447 215.88494,273.5509 L 214.58181,273.68673 L 214.48079,272.68539 z"
         id="path13350"
         style="opacity:1;fill:#002121;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:0.30000001;stroke-linecap:butt;stroke-linejoin:miter;marker:none;marker-start:none;marker-mid:none;marker-end:none;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:0.99607843;visibility:visible;display:inline;overflow:visible;enable-background:accumulate" />
    </g>
  </g>
EOD;

		return $html;
	}


	// ------------------------------------------------------------------------------------
	//
	// Create a part of the picture and return as string
	//
	public function GetKroppen() {
		
		$html = <<<EOD
  <!-- BODY -->
  <g
     id="kroppen">
    <rect
       width="56.5"
       height="102.5"
       rx="30"
       ry="30"
       x="224"
       y="123"
       id="rect12878"
       style="opacity:1;fill:#a8c1b5;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:0.58005786px;stroke-linecap:butt;stroke-linejoin:miter;marker:none;marker-start:none;marker-mid:none;marker-end:none;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;visibility:visible;display:inline;overflow:visible;enable-background:accumulate" />
    <path
       d="M 224.51038,195.59231 L 281.55808,195.59231 L 281.55808,195.59231"
       id="path12880"
       style="fill:none;fill-rule:evenodd;stroke:#4f0053;stroke-width:4.09754658;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
    <path
       d="M 229.41176,175.14232 C 228.85265,175.60825 227.40711,172.32306 226.68994,172.44701 C 225.97277,172.57096 225.71371,176.15075 225.03065,175.89951 C 224.34759,175.64827 226.46987,172.7538 226.00395,172.19469 C 225.53802,171.63558 222.3083,173.20112 222.18435,172.48395 C 222.0604,171.76678 225.62822,172.1575 225.87946,171.47444 C 226.13071,170.79138 223.16005,168.77713 223.71916,168.3112 C 224.27827,167.84527 225.72381,171.13046 226.44098,171.00651 C 227.15815,170.88256 227.41721,167.30277 228.10027,167.55401 C 228.78333,167.80526 226.66105,170.69972 227.12697,171.25883 C 227.5929,171.81794 230.82262,170.2524 230.94657,170.96957 C 231.07052,171.68674 227.5027,171.29602 227.25146,171.97908 C 227.00021,172.66214 229.97087,174.67639 229.41176,175.14232 z"
       transform="translate(26.375712,23.529412)"
       id="path12894"
       style="opacity:1;fill:#a8c1b5;fill-opacity:1;fill-rule:evenodd;stroke:#4f0053;stroke-width:4;stroke-linecap:butt;stroke-linejoin:miter;marker:none;marker-start:none;marker-mid:none;marker-end:none;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;visibility:visible;display:inline;overflow:visible;enable-background:accumulate" />
    <path
       d="M 246.62642,224.7481 C 235.10036,222.11887 226.52063,212.53654 224.55413,200.09654 L 224.19921,197.85136 L 235.28597,197.85136 C 246.72076,197.85136 249.35152,198.06078 249.24468,198.96252 C 249.13822,199.8611 249.30143,200.39304 249.94287,201.23798 C 250.46458,201.9252 250.79523,201.97346 252.03082,201.54274 C 252.83826,201.26127 253.49889,200.8308 253.49889,200.58616 C 253.49889,200.3213 253.79235,200.3056 254.22434,200.54735 C 254.62333,200.77065 255.55775,200.8641 256.30081,200.75504 C 257.34088,200.6024 257.72022,200.24541 257.94894,199.20406 L 258.24604,197.85136 L 269.25042,197.85136 L 280.25481,197.85136 L 279.93119,200.29094 C 278.49391,211.12563 270.77882,220.4056 260.17558,224.05365 C 256.61239,225.27958 250.36088,225.59998 246.62641,224.7481 L 246.62642,224.7481 z"
       id="path12908"
       style="opacity:1;fill:#0036d6;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1.86915886;stroke-linecap:butt;stroke-linejoin:miter;marker:none;marker-start:none;marker-mid:none;marker-end:none;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;visibility:visible;display:inline;overflow:visible;enable-background:accumulate" />
  </g>
EOD;

		return $html;
	}


	// ------------------------------------------------------------------------------------
	//
	// Create a part of the picture and return as string
	//
	public function GetHuvud() {
		
		$html = <<<EOD
  <!-- HEAD -->  
  <g
     id="huvudet"
     style="display:inline">
    <g
       transform="translate(-55,-6)"
       id="g12841">
      <path
         d="M 523,141.5 A 19,31.5 0 1 1 485,141.5 A 19,31.5 0 1 1 523,141.5 z"
         transform="matrix(0.7654772,0.6434629,-0.6434629,0.7654772,43.306057,-333.87322)"
         id="path11721"
         style="fill:#ecdbb6;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:3.97672272;stroke-linecap:butt;stroke-linejoin:miter;marker:none;marker-start:none;marker-mid:none;marker-end:none;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;visibility:visible;display:inline;overflow:visible;filter:url(#filter12239);enable-background:accumulate" />
      <g
         transform="matrix(0.4044031,0.3399427,-0.4098114,0.4875203,247.15511,-208.99517)"
         id="g11729"
         style="fill:none;stroke:#693b4d;stroke-opacity:1">
        <path
           d="M 502,257 L 490,261 L 490,261"
           id="path11725"
           style="fill:none;fill-rule:evenodd;stroke:#693b4d;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
        <path
           d="M 502.25,261 L 490.25,257 L 490.25,257"
           id="path11727"
           style="fill:none;fill-rule:evenodd;stroke:#693b4d;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1;display:inline" />
      </g>
      <g
         transform="matrix(0.4044031,0.3399427,-0.4098114,0.4875203,255.87766,-201.49967)"
         id="g11733"
         style="fill:none;stroke:#693b4d;stroke-opacity:1;display:inline">
        <path
           d="M 502,257 L 490,261 L 490,261"
           id="path11735"
           style="fill:none;fill-rule:evenodd;stroke:#693b4d;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
        <path
           d="M 502.25,261 L 490.25,257 L 490.25,257"
           id="path11737"
           style="fill:none;fill-rule:evenodd;stroke:#693b4d;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1;display:inline" />
      </g>
      <path
         d="M 339.28248,96.511681 L 333.63838,98.952283"
         id="path11741"
         style="fill:none;fill-opacity:1;fill-rule:evenodd;stroke:#693b4d;stroke-width:0.5800578px;stroke-linecap:butt;stroke-linejoin:miter;marker:none;marker-start:none;marker-mid:none;marker-end:none;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;visibility:visible;display:inline;overflow:visible;enable-background:accumulate" />
      <path
         d="M 340.52638,97.557308 L 339.0924,103.53696"
         id="path11743"
         style="fill:none;fill-opacity:1;fill-rule:evenodd;stroke:#693b4d;stroke-width:0.5800578px;stroke-linecap:butt;stroke-linejoin:miter;marker:none;marker-start:none;marker-mid:none;marker-end:none;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;visibility:visible;display:inline;overflow:visible;enable-background:accumulate" />
      <path
         d="M 337.34632,115.13294 L 324.11133,103.68097"
         id="path11745"
         style="fill:none;fill-opacity:1;fill-rule:evenodd;stroke:#693b4d;stroke-width:0.5800578px;stroke-linecap:butt;stroke-linejoin:miter;marker:none;marker-start:none;marker-mid:none;marker-end:none;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;visibility:visible;display:inline;overflow:visible;enable-background:accumulate" />
      <path
         d="M 354.58431,66.264096 L 350.69849,76.714592"
         id="path11747"
         style="fill:none;fill-rule:evenodd;stroke:#ac2900;stroke-width:0.99999994px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         d="M 362.3611,74.107665 C 360.83314,75.462671 357.16757,76.012249 355.2692,78.27059 C 354.03548,79.738247 353.66165,79.954603 354.90862,80.253638"
         id="path11749"
         style="fill:none;fill-rule:evenodd;stroke:#ac2900;stroke-width:0.99999994px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         d="M 359.37112,84.65802 C 358.16612,86.091514 362.56138,82.669456 364.28025,81.926191 C 365.75076,81.290321 366.9867,82.203246 368.09383,80.886181"
         id="path11751"
         style="fill:none;fill-rule:evenodd;stroke:#ac2900;stroke-width:0.99999994px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         d="M 359.74839,78.769883 C 360.39517,78.000471 362.12794,75.939126 363.28744,74.559759 C 363.77301,73.982114 364.21289,73.354726 364.54386,72.676569"
         id="path11753"
         style="fill:none;fill-rule:evenodd;stroke:#ac2900;stroke-width:0.99999994px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         d="M 355.3774,75.422207 C 356.09682,74.56638 354.48991,73.369804 354.04617,72.343602 C 353.53759,71.167472 351.1898,69.615934 350.18828,68.774052 C 349.44096,68.145853 349.08506,66.279559 349.01791,65.504079"
         id="path11755"
         style="fill:none;fill-rule:evenodd;stroke:#ac2900;stroke-width:0.99999994px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         d="M 347.26219,71.866465 C 346.1099,70.897841 347.54528,69.310969 348.33559,67.869865"
         id="path11757"
         style="fill:none;fill-rule:evenodd;stroke:#ac2900;stroke-width:0.99999994px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         d="M 347.34535,74.875714 C 345.86576,73.631965 350.36391,71.921546 350.47116,69.991623"
         id="path11759"
         style="fill:none;fill-rule:evenodd;stroke:#ac2900;stroke-width:0.99999994px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         d="M 356.62259,83.653974 C 356.00244,83.132673 359.43786,81.689935 359.80105,81.426898 C 360.00353,81.280252 360.12279,81.044159 360.28365,80.85279"
         id="path11761"
         style="fill:none;fill-rule:evenodd;stroke:#ac2900;stroke-width:0.99999994px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         d="M 358.91356,79.374495 C 360.23521,78.417314 363.66059,79.119143 365.40631,80.586605 C 366.25378,81.29899 365.8206,81.272618 365.88056,81.965042"
         id="path11763"
         style="fill:none;fill-rule:evenodd;stroke:#ac2900;stroke-width:0.99999994px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         d="M 359.87587,86.388692 C 360.63463,87.026511 362.82542,88.21491 364.21636,89.384133 C 365.05191,90.086505 365.65668,89.613305 366.29926,88.848877"
         id="path11765"
         style="fill:none;fill-rule:evenodd;stroke:#ac2900;stroke-width:0.99999994px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         d="M 354.7394,82.397552 C 354.81286,82.459299 356.35615,76.160122 356.75584,74.947957 C 357.23525,73.494017 356.31694,72.463262 356.61167,71.234238 C 356.65513,71.053036 356.69857,70.871835 356.74203,70.690633"
         id="path11767"
         style="fill:none;fill-rule:evenodd;stroke:#ac2900;stroke-width:0.99999994px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         d="M 342.70529,74.567791 C 343.14729,72.724682 344.02711,70.453415 341.8345,68.610299"
         id="path11769"
         style="fill:none;fill-rule:evenodd;stroke:#ac2900;stroke-width:0.99999994px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         d="M 348.68494,76.001774 C 349.50937,72.563898 355.52263,68.903563 358.77228,67.498362"
         id="path11771"
         style="fill:none;fill-rule:evenodd;stroke:#ac2900;stroke-width:0.99999994px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         d="M 350.84266,80.428312 C 351.4281,77.987064 356.59774,74.747516 358.65573,72.299291 C 359.43454,71.372795 359.52033,71.692101 360.19503,71.633672"
         id="path11773"
         style="fill:none;fill-rule:evenodd;stroke:#ac2900;stroke-width:0.99999994px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         d="M 356.32302,86.341492 C 360.02927,81.932451 363.76883,77.75282 368.05787,74.324078 C 368.20341,74.207722 367.97096,74.68648 367.9275,74.867682"
         id="path11775"
         style="fill:none;fill-rule:evenodd;stroke:#ac2900;stroke-width:0.99999994px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         d="M 359.31557,90.163418 C 360.21334,89.445715 362.91078,88.12156 364.06384,87.622958 C 365.34688,87.068152 365.60955,86.420715 366.85121,87.026694"
         id="path11777"
         style="fill:none;fill-rule:evenodd;stroke:#ac2900;stroke-width:0.99999994px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         d="M 360.89918,94.107359 C 361.01925,94.05544 362.32673,94.4497 363.0736,94.628807"
         id="path11779"
         style="fill:none;fill-rule:evenodd;stroke:#ac2900;stroke-width:0.99999994px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         d="M 345.16259,76.30681 C 346.52443,75.717925 344.38095,73.427803 344.25294,71.949628 C 344.07719,69.920176 344.51144,65.223395 344.34734,64.84392"
         id="path11781"
         style="fill:none;fill-rule:evenodd;stroke:#ac2900;stroke-width:0.99999994px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         d="M 347.7724,79.807005 C 347.50566,76.726794 353.21983,67.00768 352.60961,63.950969"
         id="path11783"
         style="fill:none;fill-rule:evenodd;stroke:#ac2900;stroke-width:0.99999994px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         d="M 353.42197,83.576271 C 353.23336,81.398304 366.78317,81.915046 369.08118,82.042745 C 369.93779,82.090342 371.4363,81.661353 372.41216,81.576843"
         id="path11785"
         style="fill:none;fill-rule:evenodd;stroke:#ac2900;stroke-width:0.99999994px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <path
         d="M 350.58194,81.515521 C 352.37472,81.615145 359.52045,71.080453 360.20338,69.681128"
         id="path11787"
         style="fill:none;fill-rule:evenodd;stroke:#ac2900;stroke-width:0.99999994px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <rect
         width="11.75"
         height="20.25"
         x="498.25"
         y="171.25"
         transform="matrix(0.7654772,0.6434629,-0.6434629,0.7654772,43.306057,-333.87322)"
         id="rect11789"
         style="fill:#ecdbb6;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:0.58005786px;stroke-linecap:butt;stroke-linejoin:miter;marker:none;marker-start:none;marker-mid:none;marker-end:none;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;visibility:visible;display:inline;overflow:visible;filter:url(#filter12703);enable-background:accumulate" />
    </g>
  </g>
EOD;

		return $html;
	}



	
} // End of class


?>
