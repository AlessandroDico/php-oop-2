<?php

trait Post {

    protected $views;
    protected $weeklyPosts;


    public function setViews ($_views) {
        $this->views = $_views;
    }

    public function getViews () {
        return $this->views;
    }

    public function setWeeklyPosts ($_weeklyPosts) {
        $this->weeklyPosts = $_weeklyPosts;
    }

    public function getWeeklyPosts () {
        return $this->weeklyPosts;
    }
}

?>
