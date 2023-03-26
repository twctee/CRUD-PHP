<?php 
class DatabaseConnection {
    private $host = 'db';
    private $dbname = 'test';
    private $username = 't';
    private $password = 'b';

    protected $pdo;

    public function __construct() {
        $dsn = "mysql:host=$this->host;dbname=$this->dbname;charset=utf8mb4";

        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        try {
            $this->pdo = new PDO($dsn, $this->username, $this->password, $options);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    }

    public function getPdo() {
        $this->pdo='test'; 
        return $this->pdo;
    }
}
