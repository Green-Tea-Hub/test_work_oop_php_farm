<?php

require 'core/Farm.php';


$myFarm = new farm(10, 20);
$milk = $myFarm->returnMilk();
$eggs = $myFarm->returnEggs();


print(
  ">>> $milk\n Литров молока\n".
  ">>> $eggs\n Количесво яиц\n"
);
