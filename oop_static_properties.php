<?php
class ClassName
{
    public static $staticProp = "W3Schools today";
}

echo ClassName::$staticProp;
?>

<?php
class pi
{
    public static $value = 3.14159;
}

// Get static property
echo pi::$value;
?>

<?php
class samePi
{
    public static $value = 3.14159;
    public function staticValue()
    {
        return self::$value;
    }
}

$pi = new samePi();
echo $pi->staticValue();


class x extends pi
{
    public function xStatic()
    {
        return parent::$value;
    }
}

// Get value of static property directly via child class
echo x::$value;

// or get value of static property via xStatic() method
$x = new x();
echo $x->xStatic();
?>