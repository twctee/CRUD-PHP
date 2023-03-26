<?php
class DatabaseConnection
{
    private $host = 'db';
    private $dbname = 'test';
    private $username = 't';
    private $password = 'b';

    protected $pdo;

    public function __construct()
    {
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

    public function getPdo()
    {
        return $this->pdo;
    }

    public function query($sql, $param)
    {
        try {
            $stmt = $this->pdo->prepare($sql);
            return  $stmt->execute($param);
        } catch (PDOException $e) {
            // Handle any errors that occur
            return $e->getMessage();
        }
    }

    public function fetch($sql)
    {
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $data = array();
            foreach ($results as $result) {
                $data[] = $result;
            }
            return $data;
        } catch (PDOException $e) {
            // Handle any errors that occur
            return $e->getMessage();
        }
    }
}
