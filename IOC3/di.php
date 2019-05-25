<?php
class Boy
{
    protected $girl;

    public function __construct(Girl $girl) {
        $this->girl = $girl;
        // $this->girl = new Girl();
    }
}

interface Girl
{
    //
}

class LoliGirl implements Girl 
{
    //
}

class Vixen implements Girl
{
    //
}

//$boy = new Boy(); // fatal error

//$girl = new Girl();
//$boy = new Boy($girl); // class Boy强依赖Girl必须在构造时注入Girl的实例

$loliGirl = new LoliGirl();
$vixen = new Vixen();

$boy = new Boy($loliGirl);
$boy1 = new Boy($vixen);


