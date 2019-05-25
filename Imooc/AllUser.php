<?php
/**
 * Created by PhpStorm.
 * User: Lucifer
 * Date: 2018/4/12
 * Time: 20:30
 */
namespace Imooc;

class AllUser implements \Iterator {//继承spl,php标准库
    protected $ids;
    public $index;
    public $data = [];

    public function __construct() {
        $db = Factory::getDatabase();
        $result = $db->query("SELECT id FROM `user`");
        $this->ids = $result->fetch_all(MYSQLI_ASSOC);
    }

    //3
    public function current() {
        $id = $this->ids[$this->index]['id'];
        return Factory::getUser($id);
    }

    //4
    public function next() {
        $this->index ++;
    }

    //2
    public function valid() {
        return $this->index < count($this->ids);
    }

    //1
    public function rewind() {
        $this->index = 0;
    }

    //5
    public function key() {
        return $this->index;
    }
}