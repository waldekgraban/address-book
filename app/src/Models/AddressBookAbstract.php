<?php

namespace Waldekgraban\AddressBook\Models;

use Waldekgraban\AddressBook\Repository\AddressBookRepository;
use Waldekgraban\AddressBook\Validators\AddressValidator;

abstract class AddressBookAbstract
{
    protected $pdo;
    protected $repository;
    protected $validator;

    public function __construct(AddressValidator $validator)
    {
        $this->repository = $this->setRepository();
        $this->pdo = $this->setPdoConnection();
        $this->dbConnectInfo = $this->dbConnectionDebugInfo();
        $this->validator = $validator;
    }

    private function setPdoConnection(): SQLiteConnection
    {
        return (new SQLiteConnection())->connect();
    }

    private function setRepository(): AddressBookRepository
    {
        return (new AddressBookRepository($this->pdo));
    }

    private function dbConnectionDebugInfo(): string
    {
        return ($this->pdo != null)
            ? 'Connected to the SQLite database successfully!'
            : 'Whoops, could not connect to the SQLite database!';
    }
}