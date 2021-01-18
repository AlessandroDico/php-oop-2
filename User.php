<?php
// echo 'hello';

// creo una classe user con le info obbligatorie per un user
class User {
    public $name;
    public $lastname;
    protected $age;
    public $email;

    public function __construct($_name, $_lastname) {
        $this->name = $_name;
        $this->lastname = $_lastname;
    }

    public function setAge($_age) {
        $this->age = $_age;
    }

    public function getAge() {
        return $this->age;
    }
};

?>
