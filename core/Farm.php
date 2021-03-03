<?php

require 'Ambar.php';
require 'Caw.php';
require 'Hen.php';


class Farm {
    public $StorageEggs;
    public $StorageMilk;
    public $ambar;

    // Получаю количесво коров и кур, создаю обьект класса амбара с этим количесвом животных и присваиваю переменной
    public function __construct($cow=10, $hen=20) {
        $this->ambar = new Ambar($cow, $hen);
    }

    // Возвращаю количесво яиц возвращаемое от каждого обьекта курицы 
    public function returnEggs() {
        for ($i = 0; $i < $this->ambar->henCount; $i++) {
            $henNew = new Hen;
            $this->StorageEggs += $henNew->eggs;
        }

        return $this->StorageEggs;
    }

    // Возвращаю количесво литров молока возврааемое каждым обьектом коровы
    public function returnMilk() {
        for ($i = 0; $i < $this->ambar->cawCount; $i++) {
            $cawNew = new Caw;
            $this->StorageMilk += $cawNew->milk;
        }

        return $this->StorageMilk;
    }
}