<?php
/**
 * Created by PhpStorm.
 * User: test
 * Date: 16/01/2019
 * Time: 21:34
 */

require __DIR__ . '/vendor/autoload.php';
require_once 'MyClass.php';

//$my_str = new MyClass('Привет! Как, твои. дела?');
//echo $my_str->revertPunctuationMarks(); // Привет? Как. твои, дела!
$my_str = new MyClass('Привет! Как, твои. дела?');
echo $my_str->revertPunctuationMarks(); // Привет? Как. твои, дела!