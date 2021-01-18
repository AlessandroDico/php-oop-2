<?php

require_once 'User.php';
require_once 'PostTrait.php';

// creo una classe user "avanzato" con più specifiche
class UserAdvanced extends User {

    use Post;

    private $city;
    private $job;
    private $blogsFollowed;

    public function setCity($_city) {
        $this->city = $_city;
    }

    public function getCity() {
        return $this->city;
    }


    public function setJob($_job) {
        $this->job = $_job;
    }

    public function getJob() {
        return $this->job;
    }


    public function setBlogsFollowed($_blogsFollowed) {
        $this->blogsFollowed = $_blogsFollowed;
    }

    public function getBlogsFollowed() {
        return $this->blogsFollowed;
    }

// sovrascrivo la funzione della classe padre per dare più "punti blog" agli utenti advanced che ci forniscono più dati
    public function setPoint($_pointPerBlog) {
        $this->pointPerBlog = $_pointPerBlog * 4;
    }


};

?>
