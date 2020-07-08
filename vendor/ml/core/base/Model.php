<?php


namespace ml\core\base;


use ml\core\Db;
use Valitron\Validator;
use R;


abstract class Model
{
    /**
     * connectivity
     * @var
     */
    protected $pdo;

    /**
     * the name of the table the Model is working with
     * @var
     */
    protected $table;

    protected $primarykey = 'id';
    public $attribute = [];

    /**
     * records validation errors
     * @var array
     */
    public $errors = [];

    public $rules = [];

    /**
     * populates the PDO property
     * Model constructor.
     */
    public function __construct()
    {
        $this->pdo = Db::getInstance();
    }

    public function load($data)
    {
        foreach ($this->attribute as $name => $value) {
            if (isset($data[$name])) {
                $this->attribute[$name] = $data[$name];
            }
        }
    }

    public function validate($data)
    {
        Validator::langDir(WWW . '/valitron/lang');
        Validator::lang('ru');
        $v = new Validator($data);
        $v->rules($this->rules);
        if ($v->validate()) {
            return true;
        }
        $this->errors = $v->errors();
        return false;
    }

    public function save($table)
    {
        $tbl = \R::dispense($table);
        foreach ($this->attribute as $name => $value) {
            $tbl->$name = $value;
        }
        return \R::store($tbl);
    }

    public function update($table, $id)
    {
        $tbl = R::load($table, $id);
        foreach ($this->attribute as $name => $value) {
            $tbl->$name = $value;
            echo $tbl;
        }
        return \R::store($tbl);
    }

    public function getErrors()
    {
        $errors = '<ul>';
        foreach ($this->errors as $error) {
            foreach ($error as $item) {
                $errors .= "<li>$item</li>";
            }
        }
        $errors .= '</ul>';
        $_SESSION['error'] = $errors;
    }

    /**
     * a wrapper over the execute() method of the Db class
     */
    public function query($sql)
    {
        return $this->pdo->execute($sql);
    }

    /**
     * Returns all data from the table with which the model works
     */
    public function findAll()
    {
        $sql = "SELECT * FROM {$this->table}";
        return $this->pdo->query($sql);
    }

    /**
     * Returns data by id from the table with which the model works
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