<?php
include('drinkinterface.class.php');
include('greentea.class.php');
include('milktea.class.php');
class simpledrinkfactory
{
    public static function drinkcreater($sDrinkName) {
        switch ($sDrinkName) {
            case 'GreenTea':
                $drink = new GreenTea();
                break;
            case 'MilkTea':
                $drink = new MilkTea();
                break;
        }
        return $drink;
    }
}
