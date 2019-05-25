<?php
namespace Imooc;

/*
__set() 当变量没有设置时会触发
__get() 当没有该变量你还获取时
__toString() 当你试图输出一个对象时,必须有返回值
__call() 当调用一个不存在的方法
__callStatic() 当调用一个不存在的静态方法
__invoke() 把一个对象当做函数执行
*/

class Object {
	protected $arr = [];
	function __set($key, $value) {
		//var_dump(__METHOD__);
		$this->arr[$key] = $value;
	}

	function __get($key) {
		//var_dump(__METHOD__);
		return $this->arr[$key];
	}

	function __call($func, $param) {
	    //var_dump($func, $param);
	    return "magic function\n";
    }

    static function __callStatic($func, $param) {
	    //var_dump($func, $param);
	    return "static magic\n";
    }

    function __toString() {
	    //echo一个对象时,因对象不能直接被echo,会调用toString()
	    return "son of bitch.";//__CLASS__;
    }

    function __invoke($param)
    {
        // TODO: Implement __invoke() method.
        //var_dump($param);
        return "this is invoke";
    }
}