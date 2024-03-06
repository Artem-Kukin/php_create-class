<?php

namespace Object\Human;

echo 'Здравствуйте, пройдите регистрацию для получения доступа к парковке на территории учебного заведения.' . PHP_EOL;

class Student
{
    private const MIN_AGE = 18;
    private static $maxAge = 120;
    public function __construct(
        public string $surName,
        public string $name,
        public int $age,
    ) {

        if (!preg_match("/[а-яёА-ЯЁ]+/u", $name) || !preg_match("/[а-яёА-ЯЁ]+/u", $surName)) {
            echo "Есть недопустимые символы, проверьте вводимые данные.";
            exit;
        }

        if ($age < self::MIN_AGE || $age >= self::$maxAge) {
            echo 'Возраст не корректен';
            exit;
        }
        echo Student::parkingProcessing($name, $surName) . PHP_EOL;
    }

 
    public static function parkingProcessing(
        string $name,
        string $surName,
    ): string {
        if ($name === 'Андрей' && $surName === 'Захаров' || $name === 'Александр' && $surName === 'Дудинский' || $name === 'Виктория' && $surName === 'Прохорова') {
            return $name . ' для вашего автомобиля подобрано специальное -' . "\033[32m бесплатное место в секторе А. \033[0m";
        } else {
            return $name . ' для вашего автомобиля определено' . "\033[32m место в секторе В. \033[0m";
        }
    }
}
