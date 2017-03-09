<?php
class Notifier
{
  protected $mailer;
  public function __construct(MessageManagerInterface $mailer)
  {
    $this->mailer=$mailer;
  }
  public function send(){
    $this->mailer->execute();
  }
}
