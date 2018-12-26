<?php
namespace ChapterOne;
class person{
    public $name;
    public $gender;
    public function say(){
        echo $this->name," is ",$this->gender;
    }
}

$student = new \ChapterOne\Person();
$student->name = 'Tom';
$student->gender = 'male';
$student->say();

$teacher = new person();
$teacher->name = 'Kate';
$teacher->gender = 'female';
$teacher->say();

echo '<br>';
print_r((array)$student);
echo '<br>';
var_dump($student);

echo '<br>';
$str = serialize($student);
echo $str;
file_put_contents('store.txt', $str);

echo '<br>';
$str = file_get_contents('store.txt');
$student = unserialize($str);
$student->say();