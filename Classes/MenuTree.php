<?php
/**
 * Created by PhpStorm.
 * User: 91178
 * Date: 23.11.2016
 * Time: 23:37
 */

namespace MenuTree;


class MenuTree
{
    private $database = null;
    private $menuObjects = array();

    public function __construct($menuObject) {
        $this->database = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);
    }

    /**
     * Метод читает из таблицы category все сточки, и
     * возвращает двумерный массив, в котором первый ключ - id - родителя
     * категории (parent_id)
     * @return Array
     */


}