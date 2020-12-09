<?
class A {

    public static $me = "A";

    public static function who() {
        return self::$me;
    }
}

class B extends A {
    public static $me = "B";

    public static function who() {
        return self::$me;
    }

    public function test() {
        return self::$me;
    }
}
$newObject = new B;
var_dump($newObject->test());
?>