<?php
 class Movie {
    public $title;
    public $category;
    public $year;
    function __construct(string $title, array $category, string $year ){
        $this -> title = $title;
        $this -> category = $category;
        $this -> year = $year;
    }
 }
