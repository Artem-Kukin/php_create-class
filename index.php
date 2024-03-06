<?php

declare(strict_types=1);

require_once('autoload.php');

use Object\Human\Student;

use Object\Technics\Car;

use Object\Technics\TV;

$student = new Student('Кириллова', 'Надежда', 27);
print_r($student);

$studentCar = new Car('Шкода', 163, 'Белый');
print_r($studentCar);

$samsung = new TV('Самсунг', 120, 'Андройд');

print_r($samsung);
