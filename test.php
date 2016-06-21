<?php
use PHPUnit\Framework\TestCase;
require_once('add.php');

class test extends TestCase
{
    $add_2 = function ($a, $b) {
        return $a + $b;
    };
    public function testExpectFooActualFoo()
    {
        $this->assertEquals(3, $add_2(1, 2));
    }
}
?>
