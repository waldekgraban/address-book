<?php

namespace Waldekgraban\AddressBook\Repository;

interface AddressBookRepositoryInterface 
{
    public function getAllEntries(): Array;
    public function find(int $id): Array;
    public function addEntry(string $firstName, string $lastName, string $phone, string $email, string $address): Void;
    public function removeEntry(int $id): Void;
    public function createTableIfNotExists(): Void;
}