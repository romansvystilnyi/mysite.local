<?php


namespace vendor\core\base;


use vendor\core\Db;


abstract class Model
{
    /**
     * свойстово подключение
     * @var
     */
    protected $pdo;

    /**
     * имя таблици с которой работает Модель
     * @var
     */
    protected $table;

    protected $primarykey = 'id';

    /**
     * заполняет свойство PDO
     * Model constructor.
     */
    public function __construct()
    {
        $this->pdo = Db::getInstance();
    }

    /**
     * обертка над методом execute() класса Db
     */
    public function query($sql)
    {
        return $this->pdo->execute($sql);
    }

    /**
     * Возвращает все данные из таблицы с которой работает Модель
     */
    public function findAll()
    {
        $sql = "SELECT * FROM {$this->table}";
        return $this->pdo->query($sql);
    }

    /**
     * Возвращает данные по id из таблицы с которой работает Модель
     * @param $id
     * @param string $field
     * @return array|bool
     */
    public function findOne($id, $field = '')
    {
        $field = $field ?: $this->primarykey;
        $sql = "SELECT * FROM {$this->table} WHERE $field = ? LIMIT 1";
        return $this->pdo->query($sql, [$id]);
    }

    public function findBySql($sql, $params = [])
    {
        return $this->pdo->query($sql, $params);
    }

    public function findLike($str, $field, $table = '')
    {
        $table = $table ?: $this->table;
        $sql = "SELECT * FROM $table WHERE $field LIKE ?";
        return $this->pdo->query($sql, ['%' . $str . '%']);
    }
}