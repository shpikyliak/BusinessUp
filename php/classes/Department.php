<?php

class Department
{
    protected $students = 21;
    protected $name;
    protected $male;
    protected $female;
    protected $important;
    protected $genders = ['male', 'female'];

    public function __construct($name,$manPercent, $important)
    {
        $this->name = $name;
        if (!in_array($important, $this->genders)) {
            throw new Exception('Departament must take male/female as important');
        }
        $this->important = $important;
        $this->male = round($manPercent * $this->students);
        $this->female = $this->students - $this->male;
    }

    public function getNecessarily()
    {
        $important = $this->important;
        $reserved = ($important == 'male')?'female':'male';
        return ($important == 'male') ?  [$reserved,$this->students - $this->male] :  [$reserved,$this->students -$this->female];

    }
    public function getName()
    {
        return $this->name;
    }
}