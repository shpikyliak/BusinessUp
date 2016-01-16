<?php

require_once 'classes/Teacher.php';
require_once 'classes/Catalog.php';
$week = array('пн', 'вт', 'ср', 'чт', 'пт');
$departments = array('Робототехника', 'Инженерия', 'Нано-хирургия');
$timeTable = array('пн' => array(), 'вт' => array(), 'ср' => array(), 'чт' => array(), 'пт' => array());
try {
    Catalog::push(new Teacher('Валерий Николаевич'));
    Catalog::push(new Teacher('Антон Иванович'));
    Catalog::push(new Teacher('Юрий Василиевич'));
    Catalog::push(new Teacher('Артур Араратович'));
    $teachers = Catalog::getAll();

    foreach ($teachers as $name => $object) {
        while ($object->getFull() == false) {
            $day = $week[mt_rand(0, 4)];//случайный день
            $depart = $departments[mt_rand(0, 2)];//случайный факультет
            $add = $object->putLesson($depart);
            if ($add) {
                array_push($timeTable[$day], array($name, $depart));
            }
        }
    }
    $html = '';
    foreach ($timeTable as $key=>$value)
    {
        $html .= '<table class="table"><caption>'.$key.'</caption>';
        for($i=0;$i<count($value);$i++)
        {
            $html.='<tr><td>'.$value[$i][0].'</td><td>'.$value[$i][1].'</td></tr>';
        }
        $html .= '</table>';
    }

    echo $html;
} catch (Exception $e) {
    echo "<h2 align='center'>" . $e->getMessage() . "</h2>";
}