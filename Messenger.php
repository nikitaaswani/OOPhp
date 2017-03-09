<?php
include_once 'MessageManagerInterface.php';
class Messenger implements MessageManagerInterface{
  public function execute(){
    print_r("Hi...u r getting message");
  }
}
?>
