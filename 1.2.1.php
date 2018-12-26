<?php
class Account {
    private $user = 1;
    private $pwd = 2;
    public function __set($name, $value) {
        echo "Setting $name to $value";
        echo '<br>';
        $this->$name = $value;
    }

    public function __get($name)
    {
        if (!isset($this->$name)) {
            echo '未设置';
            echo '<br>';
            $this->$name = "正在为你设置默认值";
        }
        return $this->$name;
    }
}
$a = new Account();
echo $a->user;
echo '<br>';
$a->name = 5;
echo $a->name;
echo '<br>';
echo $a->big;

