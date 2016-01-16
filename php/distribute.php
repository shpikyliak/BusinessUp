<?php
require_once 'classes/Department.php';
require_once 'classes/Catalog.php';


$amount = 96; //готово студентов к поступлению
$percent = 0.72;//процент парней
$boy = round($amount * $percent);// готово парней к поступлению
$girl = $amount - $boy;//готово девушек к поступлению
$string = 'К зачислению готовы '.$amount.' студентов. Из них: '.$boy.' парней и '.$girl.' девушек</br>';
try {
    //создаем новые факультеты
    Catalog::push(new Department('Робототехника', 0.65, 'male'));
    Catalog::push(new Department('Нано-хирургия', 0.35, 'female'));
    Catalog::push(new Department('Инженерия', 0.5, 'male'));
    $list = Catalog::getAll(); // список всех факультетов
    foreach($list as $key=>$value)
    {
        $necessarily = $value->getNecessarily();
        $engaged[$necessarily[0]] += $necessarily[1];
        $gender = ($necessarily[0]=='male')? 'парней':'девушек';
        $string .= 'На "'.$value->getName().'" нужно зачислить '.$necessarily[1].' '.$gender.'</br>';
    }
    $string .= 'Свободны к расприделению '.($amount - ($engaged['male'] + $engaged['female'])).' студентов </br>';
    $string .= 'Из них: '.($boy - $engaged['male']).' парней, '.($girl - $engaged['female']).' девушек</br>';
    echo $string;



} catch (Exception $e) {

}

