<?php

class GreenTea implements drinkInterface
{
    public function AddMaterial() {
        echo "加綠茶茶包<br>";
    }
    public function Brew() {
        echo "沖泡綠茶<br>";
    }
    public function PouredCup() {
        echo "綠茶裝杯<br>";
    }
}