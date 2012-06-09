<?php
class CUserController {

  public $authenticated;
  public $user;
  public $name;
  
  function __construct() {
    if(isset($_SESSION['uc'])) {
      $this->authenticated = true;
      $this->user = $_SESSION['uc']->user;
      $this->name = $_SESSION['uc']->name;
    } else {
      $this->authenticated = $this->user = $this->name = null;
    }
  }
  
  function Login($user, $pwd, $users) {
    if(isset($users[$user]) && $users[$user]['pwd'] == $pwd) {
      $this->authenticated = true;
      $this->user = $user;
      $this->name =  $users[$user]['name'];
      $_SESSION['uc'] = $this;
      return true;
    }
    return false;
  }
  
  function Logout() {
    $this->authenticated = $this->user = $this->name = null;
    unset($_SESSION['uc']);
  }
  
  function IsAuthenticated() {
    return $this->authenticated;
  }

} 	
