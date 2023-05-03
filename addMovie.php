<?php
session_start();
require_once "./Models/Movie.php";

var_dump($_SESSION['movies']);
if(isset($_POST['title']) && isset($_POST['category']) && $_POST['yare']) {
  
  $_SESSION['movies'][] = $newMovie = new Movie($_POST['title'], $_POST['category'], $_POST['yare']);
  header("Location:index.php");
}
