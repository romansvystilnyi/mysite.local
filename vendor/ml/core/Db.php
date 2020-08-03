<?php


namespace ml\core;


class Db
{
    /**
     * connectivity
     * @var \PDO
     */
    protected $pdo;

    protected static $instance;

    /**
     * the number of executed Sql queries
     * @var int
     */
    public static $countSql = 0;

    /**
     * saves all Sql queries
     * @var array
     */
    public static $queries = [];

    private function __construct()
    {
        $db = require 'config/config_db.php';
        $this->pdo = new \PDO($db['dsn'], $db['user'], $db['pass']);
    }

    /**
     * singleton
     * database connection
     */
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    /**
     * @param $sql
     * @return bool
     */
    public function execute($sql, $params = [])
    {
        self::$countSql++;
        self::$queries[] = $sql;
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute($params);
    }

    /**
     * @param $sql
     * @return bool
     */
    public function query($sql, $params = [], $className = 'stdClass')
    {
        self::$countSql++;
        self::$queries[] = $sql;
        $stmt = $this->pdo->prepare($sql);
        $res = $stmt->execute($params);
        if ($res !== false) {
            return $stmt->fetchAll(\PDO::FETCH_CLASS, $className);
        }
        return [];
    }
}