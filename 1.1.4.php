<?php
namespace ChapterOne;
class person{
    public $name;
    public $gender;
    public function say(){
        echo $this->name," \tis ",$this->gender,"<br>";
    }
}

class family{
    public $people;
    public $location;
    public function __construct($p, $loc){
        $this->people = $p;
        $this->location = $loc;
    }
}

$student = new person();
$student->name = 'Tom';
$student->gender = 'male';
$student->say();

$tom = new family($student, 'peking');
echo serialize($student);
$student_arr = array('name' => 'Tom', 'gender' => 'male');
echo '<br>';
echo serialize($student_arr);
echo '<br>';
echo '<pre>';
print_r($tom);
echo '<br>';
echo serialize($tom);
