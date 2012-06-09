<?php

class CCard {  

	// Member variables
	//
	private $iCardPattern;	// S (Spade), H (Hearts), C (Club), D (Diamond), X (special card)
	private $iCardValue;		// 1-13
	private $iFaceUpOrDown; // 0 down, 1 up


	// Constructor
	// Always start with face down if not stated elsewise
	//
	function __construct($aCardPattern='H', $aCardValue=1, $aFaceUpOrDown=0) {
		$this->iCardPattern	 	= $aCardPattern; 
		$this->iCardValue 		= $aCardValue; 
		$this->iFaceUpOrDown 	= $aFaceUpOrDown;
	}


	// Destructor
	function __destruct() {
	}

	// Flip the cards up/down/inverse.
	public function FlipCard($aAction = 'inverse') {
		switch($aAction) {
			case 'up': 			{ $this->iFaceUpOrDown = 1;	}	break;
			case 'down': 		{ $this->iFaceUpOrDown = 0;	}	break;
			case 'inverse': 
			default: 				{ $this->iFaceUpOrDown = ($this->iFaceUpOrDown == 1) ? 0 : 1;	}	break;
		}
	}

	// Show the id of the card.
	public function GetCardAsId() {
		return "{$this->iCardPattern}{$this->iCardValue} ({$this->iFaceUpOrDown})";
	}



	// Show the card as text (but only if faced up).
	// Use html special chars to make it look nicer.
	// Google for "html special chars"
	// Example on sprintf for formatting numbers in text
	// http://php.net/manual/en/function.sprintf.php
	//
	public function GetCardAsText() {
		
		$token = Array(
			'H' => '&hearts;',
			'S' => '&spades;',
			'D' => '&diams;',
			'C' => '&clubs;',
			'X' => '&Theta;',
			);
		
			if($this->iFaceUpOrDown == 1) {
				return sprintf("%s%2d", $token[$this->iCardPattern], $this->iCardValue);	
			} else {
				return "XXX";
			}
	}


	// Show the card as text and some easy css for style.
	public function GetCardAsBox() {
		$text = $this->GetCardAsText();
		$style = <<<EOD
float: 			left; 
margin:			5px 5px 5px 5px;
padding: 		20px 0px 20px 0px; 
text-align: center;
background:	white;
width: 			40px; 
border: 		solid gray 1px;
EOD;

		if($this->iFaceUpOrDown == 0) {
			$text 	 = "&nbsp;";
			$style	.= "background: white url(http://www.student.bth.se/~mos/oophp/mom05/img/cardback.png) repeat;"; 
		}
		
		if($this->iCardPattern == 'H' ||
			 $this->iCardPattern == 'D') {
			$style .= "color: red;";
		}

		return "<div style='{$style}'>{$text}</div>";
	}


	// Return the value of a card.
	public function GetValue() {

		if($this->iCardPattern == 'X') 
			return 0;
		
		if($this->iCardValue == 1) 
			return 14;
			
		return $this->iCardValue;
	}


} // End of class

?>
