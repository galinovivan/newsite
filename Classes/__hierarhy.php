<?php
/**
 * Created by PhpStorm.
 * User: 91178
 * Date: 24.11.2016
 * Time: 0:11
 */

namespace __hierarhy;


abstract class __hierarhy
{
    private $db = null;
    private $objectArray = array();
    public $objectName;

    public function __construct($objectName) {
        $this->objectName = $objectName;
//        $this->db = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);
    }

    /**
     * Метод читает из таблицы category все сточки, и
     * возвращает двумерный массив, в котором первый ключ - id - родителя
     * категории (parent_id)
     * @return Array
     */
    public function getObjectList() {
        $query = $this->db->prepare("SELECT * FROM ' . $this->objectName . '");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_OBJ);

        $return = array();
        foreach($result as $value) {
            $return[$value->parent_id][] = $value;
        }
        return $return;
    }

    private function getTableName($objectName) {

    }
}