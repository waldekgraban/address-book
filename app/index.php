<?php

require __DIR__.'/vendor/autoload.php';


use Waldekgraban\AddressBook\Routing\MyTooSimpleRouter;

$router = new MyTooSimpleRouter();
$router->init();

include 'View/address-book.php';
