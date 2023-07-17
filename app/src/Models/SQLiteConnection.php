<?php

namespace Waldekgraban\AddressBook\Models;

use Waldekgraban\AddressBook\Config\Config;
use PDO;

/**
 * SQLite connnection
 */
class SQLiteConnection {
    
    private $pdo;

    /**
     * @return \PDO
     */
    public function connect() {
        if ($this->pdo == null) {
            $this->pdo = new PDO("sqlite:" . Config::PATH_TO_SQLITE_FILE);
            $this->createTableIfNotExists();
        }
        return $this->pdo;
    }

    //Metodę przenieść do repository i usunąć
    protected function createTableIfNotExists()
    {
        $query = "
            CREATE TABLE IF NOT EXISTS address_book (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                first_name TEXT NOT NULL,
                last_name TEXT NOT NULL,
                phone TEXT NOT NULL,
                email TEXT NOT NULL,
                address TEXT NOT NULL
            )
        ";
        $this->pdo->exec($query);
    }
}