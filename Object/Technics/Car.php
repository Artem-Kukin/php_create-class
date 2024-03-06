<?php

namespace Object\Technics;


echo PHP_EOL .' укажите необходимые данные вашего автомобиля.' . PHP_EOL;


class Car {
  public const MIN_NUMBER = 000;

public function __construct(
  public string $carBrand,
  public int $carNumber,
  public string $carColor,
  
  ) {


    if (!preg_match("/[а-яёА-ЯЁ]+/u",$carBrand) || !preg_match("/[а-яёА-ЯЁ]+/u",$carColor)) {
        
        echo "Есть недопустимые символы, проверьте вводимые данные.";
        exit;
    }if($carNumber <= self::MIN_NUMBER || $carNumber > 999) {
        echo 'Номерной знак не корректен';
        exit;
    }
    
}
}; 


echo PHP_EOL . ' ВЫ успешно зарегистрировались!' .  "\033[32m Номер вашего парковочного талона вы получите на вьезде \033[0m" ;

