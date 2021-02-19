<?php

use Component\Cpu;
use Component\GraphicCard;
use Component\MotherBoard;
use Component\Ram;
use Computer\Desktop;
use Computer\Laptop;
use Computer\Tablet;
use Device\Keyboard;
use Device\Mouse;
use Device\Speaker;
use Validator\AbstractComputerValidator;
include 'includes/autoload.php';



$desktop0 = new Computer\Desktop;
$desktop0->setName('mac');
var_dump($desktop0);

$laptop0 = new Computer\Laptop;
$laptop0->setName('dell');
var_dump($laptop0);

$tablet0 = new Computer\Tablet;
$tablet0->setName('ipad');
var_dump($tablet0);


echo'_____________________________________________________';
$ram0 = new Ram;
$ram0->setName('ddr4');
$ram0->setBrand('Corsair');
$ram0->setCompatibility([Desktop::class, Laptop::class]);


$cpu0 = new Cpu;
$cpu0->setName('h100 elite');
$cpu0->setBrand('Corsair');


$graphicCard0 = new GraphicCard;
$graphicCard0->setName('3080');
$graphicCard0->setBrand('Nvdia');

$motherBoard0 = new MotherBoard;
$motherBoard0->setName('z490-a');
$motherBoard0->setBrand('Asus');

$keyboard0 = new Keyboard;
$keyboard0->setName('toto');
$keyboard0->setBrand('Hyper-x');

$mouse0 = new Mouse;
$mouse0->setName('tutu');
$mouse0->setBrand('Hyper-x');

$speaker0 = new Speaker;
$speaker0->setName('boom');
$speaker0->setBrand('Trust');


$laptop0->setComponents([$ram0,$cpu0,$graphicCard0,$motherBoard0]);
$laptop0->setDevices([$keyboard0,$mouse0,$speaker0]);



$validator = new AbstractComputerValidator();
$isValid = $validator->validate($laptop0);
var_dump($isValid);



if (isset($_GET['api'])) {
    header('Content-type: application/json');

    echo json_encode($laptop0);
    exit();
}

echo json_encode($laptop0);

var_dump($ram0->isCompatibleWith(Laptop::class));

