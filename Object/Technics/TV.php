<?php
namespace Object\Technics;
class TV {
    private const MAX_CHANNEL = 350;
    public function __construct(
        public string $name,
        public int $quantityChannels,
        public string $operatingSystem,
    ) {

        if (!preg_match("/[а-яёА-ЯЁ]+/u",$name) || !preg_match("/[а-яёА-ЯЁ]+/u",$operatingSystem)) {
        
            echo "Есть недопустимые символы, проверьте вводимые данные.";
            exit;
        }if($quantityChannels > self::MAX_CHANNEL) {
            echo 'Привышение кол-во допустимых каналов';
            exit;
        }
    }
}