<?php
// echo 'hello';

// creo una classe user con le info obbligatorie per un user
class User {
    protected $name;
    protected $lastname;
    protected $age;
    public $email;
    protected $pointPerBlog;

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

    public function getName() {
        return $this->name;
    }

    public function setPoint($_pointPerBlog) {
        $this->pointPerBlog = $_pointPerBlog * 2;
    }

    public function getPoint() {
        return $this->pointPerBlog;
    }
};

?>
