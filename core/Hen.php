<?php

// Класс кур
class Hen {
    public $eggs;
    public $id;

    public function __construct($id="", $eggs="") {
        if ($id == ""){
            // Присвоение случайного трехсимволього id
            $this->id = substr(md5(rand()), 0, 3);
        } else {
            // Или переданного значения
            $this->id = $id;
        }
        if ($eggs == ""){
            // Присвоение случайного числа в диапозоне чисел
            $this->eggs = rand(0, 1);
        } else {
            // Или переданного значения
            $this->eggs = $eggs;
        }
    }
}