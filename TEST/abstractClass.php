<?php
/*
定义为抽象的类不能被实例化。任何一个类，如果它里面至少有一个方法是被声明为抽象的，那么这个类就必须被声明为抽象的。被定义为抽象的方法只是声明了其调用方式（参数），不能定义其具体的功能实现。
继承一个抽象类的时候，子类必须定义父类中的所有抽象方法；另外，这些方法的访问控制必须和父类中一样（或者更为宽松）。例如某个抽象方法被声明为受保护的，那么子类中实现的方法就应该声明为受保护的或者公有的，而不能定义为私有的。此外方法的调用方式必须匹配，即类型和所需参数数量必须一致。例如，子类定义了一个可选参数，而父类抽象方法的声明里没有，则两者的声明并无冲突。
*/
abstract class abstractClass {
    abstract protected function getValue();
    abstract protected function prefixValue();
}

/*
使用接口（interface），可以指定某个类必须实现哪些方法，但不需要定义这些方法的具体内容。接口是通过 interface 关键字来定义的，就像定义一个标准的类一样，但其中定义所有的方法都是空的。接口中定义的所有方法都必须是公有，这是接口的特性。要实现一个接口，使用 implements 操作符。类中必须实现接口中定义的所有方法，否则会报一个致命错误。类可以实现多个接口，用逗号来分隔多个接口的名称。实现多个接口时，接口中的方法不能有重名。接口也可以继承，通过使用 extends 操作符。类要实现接口，必须使用和接口中所定义的方法完全一致的方式。
*/
interface iTemplate {
    public function setVariable($name, $var);
    public function getHtml($template);
}

class testInterface implements iTemplate {
    private $vars = [];
    public function setVariable($name, $var) {
        $this->vars[$name] = $var;
    }
    public function getHtml($template) {
        foreach($this->vars as $k => $v) {
            $template = str_replace('{' . $k . '}', $v, $template);
        }
        return $template;
    }
}