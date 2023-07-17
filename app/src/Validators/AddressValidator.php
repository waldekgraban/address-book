<?php

namespace Waldekgraban\AddressBook\Validators;

class AddressValidator implements ValidatorInterface
{
    public function validate(Array $data): Array
    {
        $errors = [];

        if (empty($data['first_name'])) {
            $errors[] = 'Imię jest wymagane.';
        }

        if (empty($data['last_name'])) {
            $errors[] = 'Nazwisko jest wymagane.';
        }

        if (empty($data['phone'])) {
            $errors[] = 'Numer telefonu jest wymagany.';
        }

        if (empty($data['email'])) {
            $errors[] = 'Adres email jest wymagany.';
        } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Nieprawidłowy format adresu email.';
        }

        if (empty($data['address'])) {
            $errors[] = 'Adres jest wymagany.';
        }

        return $errors;
    }

    public function validateRemove(Array $data): Array
    {
        $errors = [];

        if (empty($data['id'])) {
            $errors[] = 'Id jest wymagane.';
        }

        return $errors;
    }
}
