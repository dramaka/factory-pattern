<?php
// include('drinkinterface.class.php');
class MilkTea implements drinkInterface
{
    public function AddMaterial() {
        echo "加奶茶茶包<br>";
    }
    public function Brew() {
        echo "沖泡奶茶<br>";
    }
    public function PouredCup() {
        echo "奶茶裝杯<br>";
    }
}