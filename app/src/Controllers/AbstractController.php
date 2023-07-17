<?php 

namespace Waldekgraban\AddressBook\Controllers;

use Waldekgraban\AddressBook\Models\AddressBook;

abstract class AbstractController
{
    protected $model;

    public function __construct()
    {
        $this->model = new AddressBook();
    }

    protected function getFormData(): Array
    {
        $formData = [];

        if (
            isset($_POST['first_name']) &&
            isset($_POST['last_name']) &&
            isset($_POST['phone_number']) &&
            isset($_POST['email']) &&
            isset($_POST['address'])
        ) {
            $formData['first_name'] = $_POST['first_name'];
            $formData['last_name'] = $_POST['last_name'];
            $formData['phone_number'] = $_POST['phone_number'];
            $formData['email'] = $_POST['email'];
            $formData['address'] = $_POST['address'];
        }

        return $formData;
    }

    protected function getFormDataToRemove(): Array
    {
        $formData = [];

        if (isset($_POST['id'])) {
            $formData['id'] = $_POST['id'];
        }

        return $formData;
    }
}
