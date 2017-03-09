<?php
include_once 'Notifier.php';
include_once 'Mailer.php';
include_once 'Messenger.php';
$mailer=new Mailer();
$notifier=new Notifier($mailer);
$notifier->send();
$messenger=new Messenger();
$notifier=new Notifier($messenger);
$notifier->send();
?>
