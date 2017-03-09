<?php
include_once 'MessageManagerInterface.php';
class Mailer implements MessageManagerInterface{
  public function execute(){
    print_r("Hi...u r getting mail");
  }
}
?>
