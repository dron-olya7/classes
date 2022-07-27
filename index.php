<?php

use classes\Teacher;
use classes\Methodist;
use classes\Manager;
use classes\Programmer;
use classes\Designer;

include 'autoload.php';

$teacher = new Teacher('A', 'B', 1, 'Teacher');
var_dump($teacher);

$methodist = new Methodist('N', 'M', 1, 'Methodist');
var_dump($methodist);

$manager = new Manager('V', 'K', 1, 'Methodist');
var_dump($manager);


$prog = new Programmer('O', 'P', 2, 'Programmer');
var_dump($prog);

$des = new Designer('I', 'A', 2, 'Designer');
var_dump($des);