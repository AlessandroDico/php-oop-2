<?php

require_once 'User.php';

// creo una classe user "avanzato" con più specifiche
class UserAdvanced extends User {
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


};

?>
