<?php
function __autoload($class_name) {
    include $class_name . '.php';
}


session_start();


$users = array(
  'adm' => array('pwd' => 'adm', 'name' => 'The Great Administrator'),
  'doe' => array('pwd' => 'doe', 'name' => 'John/Jane Doe'),
); 
