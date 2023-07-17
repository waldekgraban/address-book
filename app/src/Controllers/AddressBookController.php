<?php

namespace Waldekgraban\AddressBook\Controllers;

use Waldekgraban\AddressBook\Models\AddressBook;

class AddressBookController extends AbstractController
{
    public function index()
    {
        $addresses = $this->model->getAllEntries();

        require __DIR__.'/../Views/view_addresses.php';
    }

    public function store()
    {
        $formData = $this->getFormData();

        if (!empty($formData)) {
            $this->model->add($formData);
        }

        header('Location: /');
        exit;
    }

    public function delete()
    {
        $formData = $this->getFormDataToRemove();

        if (isset($formData['id'])) {
            $address = $this->model->find($formData['id']);

            if (!empty($address)) {
                $this->model->remove($formData['id']);
            }
        }

        header('Location: /');
        exit;
    }
}
