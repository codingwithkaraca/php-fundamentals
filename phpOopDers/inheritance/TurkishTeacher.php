<?php

require 'Teacher.php';


class TurkishTeacher extends \inheritance\Teacher {

    public $department;

    public $students;

    /**
     * @param $name
     * @param $no
     * @param $salary
     * @param $department
     * @param $students
     */
    public function __construct($name, $no, $salary, $department, $students)
    {
        parent::__construct($name,$no,$salary);
        $this->department = $department;
        $this->students = $students;

    }



    public function getInfos() {

        return parent::teacherInfos()." Öğretmen branşı :".$this->department." öğrenci sayısı güncel :".$this->students;

    }


}

$ogretmen1 = new TurkishTeacher("Ali",0551,7000,"türkçe",200);

echo $ogretmen1 -> getInfos();


?>
