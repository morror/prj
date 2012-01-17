<?php
require_once(dirname(__FILE__) . "/../src/MyClass.php");
class MyClassTest extends PHPUnit_Framework_TestCase {
   public function testDemo() {
       $x = new MyClass();
       $this->assertEquals(1, $x->demo(1));
   }
}
?>
