<?php

class Teacher
{
    private $name;
    private $busy = array('Робототехника' => false, 'Инженерия' => false, 'Нано-хирургия' => false);
    private $full = false;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getFull()
    {
        return $this->full;
    }

    public function putLesson($depart)
    {
        if ($this->busy[$depart] == true) return false;

        $this->busy[$depart] = true;
        $check = true;
        foreach ($this->busy as $key => $value) {
            if ($value == false) $check = false;
        }
        if ($check) $this->full = true;
        return true;

    }
}