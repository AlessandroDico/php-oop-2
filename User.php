<?php
// echo 'hello';
require_once 'TraitPost.php';

// creo una classe user con le info obbligatorie per un user
class User {

    use Post;

    protected $name;
    protected $lastname;
    protected $age;
    public $email;
    protected $pointPerBlog;

    public function __construct($_name, $_lastname) {

        if (!is_numeric($_name) && strlen($_name) > 2) {
            $this->name = $_name;
        } else {
            throw new Exception ('Elementi User non validi');
        }

        if (!is_numeric($_name) && strlen($_name) > 1) {
            $this->lastname = $_lastname;
        } else {
            throw new Exception ('Elementi User non validi');
        }

    }

    public function setAge($_age) {
        if (is_int($_age) && $_age > 0 && $_age < 120) {
            $this->age = $_age;
        } else {
            throw new Exception ("Età inserita non valida");
        }
    }

    public function getAge() {
        return $this->age;
    }

    public function getName() {
        return $this->name;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function setPoint($_pointPerBlog) {
        $this->pointPerBlog = $_pointPerBlog * 2;
    }

    public function getPoint() {
        return $this->pointPerBlog;
    }
};

?>
