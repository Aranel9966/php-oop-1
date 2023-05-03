<?php
 class Movie {
    public $title;
    public $category;
    public $year;
    public function __construct(string $title, array $category, int $year ){
        $this -> title = $title;
        $this -> category = $category;
        $this -> year = $year;
    }
 }
