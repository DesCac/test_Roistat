<?php
/**
 * Created by PhpStorm.
 * User: test
 * Date: 16/01/2019
 * Time: 21:38
 */

require __DIR__ . '/vendor/autoload.php';
require_once 'MyClass.php';

use PHPUnit\Framework\TestCase;

class MyClassTest extends TestCase {

    /**
     * @dataProvider providerPower
     */
    public function testRevertPunctuationMarks($a, $b) {
        $my = new MyClass($a);
        $this->assertEquals($b, $my->RevertPunctuationMarks());
    }

    public function providerPower ()
    {
        return array (
            array ('Привет! Как, твои. дела?', 'Привет? Как. твои, дела!'),
            array ('Привет! Как твои дела?', 'Привет? Как твои дела!'),
            array ('Привет!?', 'Привет?!'),
            array ('Привет !?', 'Привет?! '),
            array ('!? Привет', ' ?!Привет'),
            array ('!? Привет123', ' ?!Привет123'),
            array (', 123kos#$', '$#123kos ,'),
            array (', 12*3k;o:s#$', '$#12:3k;o*s ,'),
        );
    }
}