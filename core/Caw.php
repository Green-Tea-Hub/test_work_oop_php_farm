<?php

// Класс коров
class Caw {
    public $milk;
    public $id;

    public function __construct($id="", $milk="") {
        if ($id == ""){
            // Присвоение случайного трехсимволього id
            $this->id = substr(md5(rand()), 0, 3);
        } else {
            // Или переданного значения
            $this->id = $id;
        }
        if ($milk == ""){
            // Присвоение случайного числа в диапозоне чисел
            $this->milk = rand(8, 12);
        } else {
            // Или переданного значения
            $this->milk = $milk;
        }
    }
}