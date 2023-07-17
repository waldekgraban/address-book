<?php

namespace Waldekgraban\AddressBook\Validators;

interface ValidatorInterface 
{
    public function validate(Array $data): Array;
    public function validateRemove(Array $data): Array;
}