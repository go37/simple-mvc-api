<?php

namespace App\Model;

class NutManager extends AbstractManager
{
    public const TABLE = 'nut';

    public function stockList(): array
    {
        $query = "SELECT * FROM " . static::TABLE;
        return $this->pdo->query($query)->fetchAll();
    }
}
