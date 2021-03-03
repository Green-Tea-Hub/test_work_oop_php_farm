<?php

// Класс для коллекционирования животных
class Ambar {
    public $cawCount;
    public $henCount;

    public function __construct($cawCount, $henCount) {
        $this->cawCount = $cawCount;
        $this->henCount = $henCount;
    }
}