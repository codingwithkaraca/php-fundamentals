<?php

namespace inheritance;

class Teacher
{
    public $name;
    public $no;
    public $salary;


    public function __construct($name,$no,$salary)
    {
        $this->name=$name;
        $this->no =$no;
        $this->salary = $salary;

    }


    public function teacherInfos(){

        return "Öğretmen adı :".$this->name." no: ".$this->no." maaşı :".$this->salary;
    }

}