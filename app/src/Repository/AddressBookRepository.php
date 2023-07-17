<?php

namespace Waldekgraban\AddressBook\Repository;

class AddressBookRepository implements AddressBookRepositoryInterface
{

    private $table = 'address_book';
    public $pdo;

    public function __construct(SQLiteConnection $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAllEntries(): Array
    {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->pdo->query($query);
        return $stmt->fetchAll($this->pdo::FETCH_ASSOC);
    }

    public function find(int $id): Array
    {
        $query = "SELECT * FROM " . $this->table . " WHERE `id` = ?";
        $stmt = $this->pdo->query($query);
        $stmt->execute([$id]);
    }

    public function addEntry(string $firstName, string $lastName, string $phone, string $email, string $address): Void
    {
        $query = "INSERT INTO " . $this->table . " (first_name, last_name, phone, email, address) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([$firstName, $lastName, $phone, $email, $address]);
    }

    public function removeEntry(int $id): Void
    {
        $query = "DELETE FROM address_book WHERE id = ?";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([$id]);
    }

    protected function createTableIfNotExists(): Void
    {
        $query = "
            CREATE TABLE IF NOT EXISTS " . $this->table . " (
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
