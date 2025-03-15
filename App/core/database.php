<?php

declare(strict_types=1);

namespace App\Core;

use PDO;
use PDOException;

class Database {
    
    private static ?PDO $pdo = null;
    private string $dsn = "mysql:host=" . HOST . ";dbname=" . DB_NAME . ";charset=utf8";

    public function connection(): PDO
    {
        if (self::$pdo === null) {
            try {
                self::$pdo = new PDO($this->dsn, USER, PASSWORD, [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ]);
            } catch(PDOException $e) {
                die("CONNECTION FAILED: " . $e->getMessage());
            }
        }

        return self::$pdo;
    }

    public function query(string $query, array $data = [], string $data_type = "object") 
    {
        
        $connection = $this->connection();
        $statement = $connection->prepare($query);

        if($statement) {

            $check_execution = $statement->execute($data);

            if($check_execution) {

                if($data_type  == "object") {

                    $data = $statement->fetchAll(PDO::FETCH_OBJ);
                }else {

                    $data = $statement->fetchAll(PDO::FETCH_ASSOC);
                }

                if(is_array($data) && count($data) > 0) {
                    return $data;
                }
            }
        }

        return false;
    }

    public function beginTransaction(): void
    {
        $this->connection()->beginTransaction();
    }

    public function commit(): void
    {
        $this->connection()->commit();
    }

    public function rollBack(): void
    {
        $this->connection()->rollBack();
    }

    public function lastInsertId(): string
    {
        return $this->connection()->lastInsertId();
    }
}