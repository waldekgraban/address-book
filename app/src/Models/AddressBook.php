<?php

namespace Waldekgraban\AddressBook\Models;

class AddressBook extends AddressBookAbstract
{
    public function getAll()
    {
        return $this->repository->getAllEntries();
    }

    public function add(Array $formData): Void
    {
        $errors = $this->validator->validate($formData);

        if (!empty($errors)) {
            //Tu dodam obsługę błędów walidacji
        }

        $this->repository->addEntry($firstName, $lastName, $phone, $email, $address);
    }

    public function remove(int $id): Void
    {
        $data = [
            'id' => $id,
        ];

        $errors = $this->validator->validateRemove($data);

        if (!empty($errors)) {
            //Tu też
        }

        $this->repository->removeEntry($id);
    }

    public function createTableIfNotExists(): Void
    {
        $this->repository->createTableIfNotExists();
    }
}
