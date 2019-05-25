<?php
//Apr 1st,2018
namespace Imooc;

class Loader {
	/*根本还是不求甚解,假如第一遍就让你抄正确了,是不是就束之高阁了?隔了一个月了,把源码下下来才发现把require搞成return了,甚至连目录都拼错了.就这样还去面试高级开发?*/
	static function autoload($class) {
		/*return*/require BASEDIR . "/" . str_replace('\\', '/', $class).'.php';
	}
}

/*
namespace IMooc;

class Loader
{
    static function autoload($class)
    {
        require BASEDIR.'/'.str_replace('\\', '/', $class).'.php';
    }
}
*/