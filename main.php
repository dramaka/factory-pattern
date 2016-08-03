<?php
include('drinkfactory.class.php');

$drink = simpledrinkfactory::drinkcreater('GreenTea');
$drink->AddMaterial();
$drink->Brew();
$drink->PouredCup();