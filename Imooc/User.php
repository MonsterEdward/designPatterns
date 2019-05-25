<?php
/**
 * Created by PhpStorm.
 * User: Lucifer
 * Date: 2018/4/9
 * Time: 22:10
 */

namespace Imooc;

class User {
    public $id;
    public $name;
    public $sex;
    public $age;
    public $created_at;
    public $db;

    public function __construct($id) {
        $this->db = new Database\Mysqli();//对命名空间理解不到位,之前错用相对命名空间
        $this->db->connect("127.0.0.1", "root", "root", "test");
        $res = $this->db->query("SELECT * FROM `user` WHERE id = $id LIMIT 1");
        $data = $res->fetch_assoc();

        $this->id = $data["id"];
        $this->name = $data["name"];
        $this->sex = $data["sex"];
        $this->age = $data["age"];
        $this->created_at = $data["created_at"];
        //$this->db->close();
    }

    public function __destruct() {//为什么update操作要写在__destruct()中?
        $this->db->query("UPDATE `user` SET name = '{$this->name}', sex = '{$this->sex}', age = '{$this->age}', created_at = '{$this->created_at}' WHERE id = {$this->id} LIMIT 1");
    }
}