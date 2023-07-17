<?php

namespace Waldekgraban\AddressBook\Routing;

use Waldekgraban\AddressBook\Controllers\AddressBookController;

/**
 * If something is stupid but... 
 * Besides, it's only for a while...
 * Don't let this sh*t see the light of day.
 */
class MyTooSimpleRouter
{

    public function init()
    {
        $controller = new AddressBookController();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->store();
        } elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $controller->index();
        }
    }
}